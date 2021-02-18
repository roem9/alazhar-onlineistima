<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model");
        $this->load->model("Peserta_model");
        if(!$this->session->userdata('id_admin')) {
            redirect("auth");
        }
    }
    
    public function index()
    {
        $data['title'] = "List Peserta";
        $data['program'] = $this->Admin_model->get_all("program", "", "program");
        $data['kelas'] = $this->Admin_model->get_all("kelas", ["status" => "aktif"], "nama_kelas");

        $this->load->view("pages/layout/header-user", $data);
        $this->load->view("pages/peserta/list-peserta", $data);
        $this->load->view("pages/layout/footer-user");
    }

    public function konfirm(){
        $data['title'] = "Konfirmasi Peserta";
        $data['program'] = $this->Admin_model->get_all("program", "", "program");
        $data['kelas'] = $this->Admin_model->get_all("kelas", ["status" => "aktif"], "nama_kelas");

        $this->load->view("pages/layout/header-user", $data);
        $this->load->view("pages/peserta/konfirm-peserta", $data);
        $this->load->view("pages/layout/footer-user");
    }


    // get 
        public function get_peserta(){
            $id_peserta = $this->input->post("id_peserta");
            $data = $this->Admin_model->get_one("peserta", ["id_peserta" => $id_peserta]);

            echo json_encode($data);
        }

        public function get_peserta_konfirm(){
            $data = $this->Peserta_model->get_peserta_konfirm();
            echo json_encode($data);
        }

        // get all peserta yang sudah dikonfirmasi
        public function get_all_peserta(){
            $data = $this->Peserta_model->get_all_peserta();
            echo json_encode($data);
        }

        public function get_peserta_by_name(){
            $data = $this->Peserta_model->get_peserta_by_name();
            echo json_encode($data);
        }
        
        public function get_detail_peserta(){
            $data = $this->Peserta_model->get_detail_peserta();
            echo json_encode($data);
        }
    // get 

    // edit 
        public function edit_peserta(){
            $data = $this->Peserta_model->edit_peserta();
            echo json_encode("1");
        }
    // edit 

    // add 
        public function konfirm_peserta(){
            $data = $this->Peserta_model->konfirm_peserta();
            echo json_encode($data);
        }

        public function add_peserta(){
            $data = $this->Peserta_model->add_peserta();
            echo json_encode($data);
        }

        public function add_kelas(){
            $data = $this->Peserta_model->add_kelas();
            echo json_encode($data);
        }
        
        public function add_buku(){
            $data = $this->Peserta_model->add_buku();
            echo json_encode($data);
        }

        public function add_catatan_buku(){
            $data = $this->Peserta_model->add_catatan_buku();
            echo json_encode($data);
        }

        public function add_list(){
            $data = $this->Peserta_model->add_list();
            echo json_encode($data);
        }
        
    // add 

    // delete 
        public function delete_peserta(){
            $data = $this->Peserta_model->delete_peserta();
            echo json_encode($data);
        }

        public function delete_kelas(){
            $data = $this->Peserta_model->delete_kelas();
            echo json_encode($data);
        }
    // delete 


}

/* End of file Peserta.php */
