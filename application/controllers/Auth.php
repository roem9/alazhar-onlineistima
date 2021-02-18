<?php
    class Auth extends MY_CONTROLLER{
        public function __construct(){
            parent::__construct();
            $this->load->model('Admin_model');
            $this->load->helper(array('Form', 'Cookie', 'String'));
        }

        public function index(){
            // ambil cookie
            $cookie = get_cookie('mobile_admin');
            // cek session
            if ($this->session->userdata('id_admin')) {
                redirect("peserta/konfirm");
            } else if($cookie <> '') {
                // cek cookie
                $row = $this->Admin_model->get_one("admin", ["cookie" => $cookie]);

                if ($row) {
                    $this->_daftarkan_session($row);
                } else {
                    $data['header'] = 'Login';
                    $data['title'] = 'Login';
                    $this->load->view("pages/layout/header-login", $data);
                    $this->load->view("pages/auth/form-login");
                    $this->load->view("pages/layout/footer");
                }
            } else {
                $data['header'] = 'Login';
                $data['title'] = 'Login';
                $this->load->view("pages/layout/header-login", $data);
                $this->load->view("pages/auth/form-login");
                $this->load->view("pages/layout/footer");
            }
        }

        public function login(){
            $username = $this->input->post('username');
            $password = $this->input->post("password", TRUE);
            $remember = $this->input->post('remember');
            $row = $this->Admin_model->get_one("admin", ["username" => $username, "password" => md5($password)]);
            
            if ($row) {
                // login berhasil
                // 1. Buat Cookies jika remember di check
                if ($remember) {
                    $key = random_string('alnum', 64);
                    set_cookie('mobile_admin', $key, 3600*24*1); // set expired 1 hari kedepan
                    // simpan key di database
                    
                    $this->Admin_model->edit_data("admin", ["id_admin" => $row['id_admin']], ["cookie" => $key]);
                }
                $this->_daftarkan_session($row);
            } else {
                // login gagal
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-times-circle text-danger mr-1"></i>Maaf, kombinasi username dan password salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('auth');
            }
        }

        public function _daftarkan_session($row) {
            // 1. Daftarkan Session
            $sess = array(
                'logged' => TRUE,
                'id_admin' => $row['id_admin'],
            );
            $this->session->set_userdata($sess);
            // 2. Redirect ke home
            redirect("peserta/konfirm");
        }

        public function logout(){
            // delete cookie dan session
            delete_cookie('mobile_admin');
            $this->session->sess_destroy();
            redirect('auth');
        }
    }