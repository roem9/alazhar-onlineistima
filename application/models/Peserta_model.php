<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model");
    }

    public function konfirm_peserta(){
        $no_peserta = $this->username($this->input->post("tgl_daftar", TRUE));
        $data = [
            'no_peserta' => $no_peserta,
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'nik' => $this->input->post('nik'),
            'nama_indo' => $this->input->post('nama_indo'),
            'nama_arab' => $this->input->post('nama_arab'),
            't4_lahir_indo' => $this->input->post('t4_lahir_indo'),
            't4_lahir_arab' => $this->input->post('t4_lahir_arab'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'desa_kel_indo' => $this->input->post('desa_kel_indo'),
            'desa_kel_arab' => $this->input->post('desa_kel_arab'),
            'kec_indo' => $this->input->post('kec_indo'),
            'kec_arab' => $this->input->post('kec_arab'),
            'kota_kab_indo' => $this->input->post('kota_kab_indo'),
            'kota_kab_arab' => $this->input->post('kota_kab_arab'),
            'no_wa' => $this->input->post('no_wa'),
            'pembayaran' => $this->Admin_model->rupiah_to_int($this->input->post('pembayaran')),
            'detail_pembayaran' => $this->input->post('detail_pembayaran'),
            'email' => $this->input->post('email'),
            'konfirm' => 1,
        ];

        $id_peserta = $this->input->post("id_peserta");
        $this->Admin_model->edit_data("peserta", ["id_peserta" => $id_peserta], $data);

        $data = [
            "id_peserta" => $id_peserta,
            "program" => $this->input->post("program"),
            "periode" => $this->input->post("periode")
        ];

        $this->Admin_model->add_data("kelas_peserta", $data);

        return $data = $this->Admin_model->get_one("peserta", ["id_peserta" => $id_peserta]);
    }

    public function delete_peserta(){
        $id_peserta = $this->input->post("id_peserta");
        $this->Admin_model->edit_data("peserta", ["id_peserta" => $id_peserta], ["konfirm" => 2]);
        $data = $this->Admin_model->get_one("peserta", ["id_peserta" => $id_peserta]);
        
        return $data;
    }

    public function delete_kelas(){
        $id = $this->input->post("id");
        $data = $this->Admin_model->get_one("kelas_peserta", ["id" => $id]);
        $this->Admin_model->delete_data("kelas_peserta", ["id" => $id]);
        return $data['id_peserta'];
    }

    public function get_peserta_konfirm(){
        $data = $this->Admin_model->get_all("peserta", ["konfirm" => 0]);
        return $data;
    }

    public function get_all_peserta(){
        $data = $this->Admin_model->get_all("peserta", ["konfirm" => 1]);
        return $data;
    }

    public function get_peserta_by_name(){
        $nama = $this->input->post("nama");
        if($nama == ""){
            // get_all_like($table, $col, $like, $where, $orderby = "", $urut)
            $peserta = $this->Admin_model->get_all_like("peserta", "nama_indo", $nama, ["konfirm" => 1], "nama_indo", "ASC");
        } else {
            // get_all_like($table, $col, $like, $where, $orderby = "", $urut)
            $peserta = $this->Admin_model->get_all_like("peserta", "nama_indo", $nama, ["konfirm" => 1], "tgl_daftar", "DESC");
        }
        
        $data = [];

        foreach ($peserta as $i => $peserta) {
            $data[$i] = $peserta;

            $wl = COUNT($this->Admin_model->get_all("kelas_peserta", ["id_kelas" => null, "id_peserta" => $peserta['id_peserta']]));
            $kelas = COUNT($this->Admin_model->get_all("kelas_peserta", ["id_kelas != " => null, "id_peserta" => $peserta['id_peserta']]));

            $data[$i]['wl'] = '<a href="#modalEdit" data-toggle="modal" class="btn btn-outline-secondary btn-sm mr-1 mt-1" data-id="'.$peserta['id_peserta'].'" id="btnKelas">WL '.$wl.'</a>';
            $data[$i]['kelas'] = '<a href="#modalEdit" data-toggle="modal" class="btn btn-outline-secondary btn-sm mr-1 mt-1" data-id="'.$peserta['id_peserta'].'" id="btnKelas">Kelas '.$kelas.'</a>';
            $data[$i]['no_hp'] = "<a target='_blank' href='http://api.whatsapp.com/send?phone=+62".substr($peserta['no_wa'], 1)."&text=".str_replace(" ", "%20", $peserta['nama_indo'])."' class='btn btn-sm btn-success mr-1 mt-1'><i class='fa fa-phone'></i></a>";
            

            $data[$i]['tgl_daftar'] = date('d-M-Y', strtotime($peserta['tgl_daftar']));
            if($peserta['kaos'] == 1) $data[$i]['kaos'] = '<a href="javascript:void(0)" data-id="'.$peserta["id_peserta"].'|'.$peserta["nama_indo"].'|0|kaos" class="btn btn-sm btn-success mr-1 list"><i class="fa fa-tshirt"></i></a>';
            else $data[$i]['kaos'] = '<a href="javascript:void(0)"  data-id="'.$peserta["id_peserta"].'|'.$peserta["nama_indo"].'|1|kaos" class="btn btn-sm btn-danger mr-1 list"><i class="fa fa-tshirt"></i></a>';
            
            if($peserta['pin'] == 1) $data[$i]['pin'] = '<a href="javascript:void(0)" data-id="'.$peserta["id_peserta"].'|'.$peserta["nama_indo"].'|0|pin" class="btn btn-sm btn-success mr-1 list"><i class="fa fa-universal-access"></i></a>';
            else $data[$i]['pin'] = '<a href="javascript:void(0)"  data-id="'.$peserta["id_peserta"].'|'.$peserta["nama_indo"].'|1|pin" class="btn btn-sm btn-danger mr-1 list"><i class="fa fa-universal-access"></i></a>';
            
            if($peserta['tas'] == 1) $data[$i]['tas'] = '<a href="javascript:void(0)" data-id="'.$peserta["id_peserta"].'|'.$peserta["nama_indo"].'|0|tas" class="btn btn-sm btn-success mr-1 list"><i class="fa fa-shopping-bag"></i></a>';
            else $data[$i]['tas'] = '<a href="javascript:void(0)"  data-id="'.$peserta["id_peserta"].'|'.$peserta["nama_indo"].'|1|tas" class="btn btn-sm btn-danger mr-1 list"><i class="fa fa-shopping-bag"></i></a>';
        }

        return $data;
    }

    public function get_detail_peserta(){
        $id_peserta = $this->input->post("id_peserta");
        $data = $this->Admin_model->get_one("peserta", ["id_peserta" => $id_peserta]);

        // kelas peserta 
            $kelas = $this->Admin_model->get_all("kelas_peserta", ["id_peserta" => $id_peserta, "id_kelas <>" => NULL], "id");
            foreach ($kelas as $i => $kelas) {
                $data['user'][$i] = $kelas;
                $data['user'][$i]['kelas'] = $this->Admin_model->get_one("kelas", ["id_kelas" => $kelas['id_kelas']]);
            }
        // kelas peserta 
        
        // waiting list peserta 
            $wl = $this->Admin_model->get_all("kelas_peserta", ["id_peserta" => $id_peserta, "id_kelas =" => NULL], "id");
            foreach ($wl as $i => $wl) {
                $data['wl'][$i] = $wl;
                $data['wl'][$i]['periode'] = date("d-M-Y", strtotime($wl['periode']));
            }
        // waiting list peserta 

        return $data;
    }

    public function add_peserta(){
        $no_peserta = $this->username($this->input->post("tgl_daftar", TRUE));
        $data = [
            'no_peserta' => $no_peserta,
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'nik' => $this->input->post('nik'),
            'nama_indo' => $this->input->post('nama_indo'),
            'nama_arab' => $this->input->post('nama_arab'),
            't4_lahir_indo' => $this->input->post('t4_lahir_indo'),
            't4_lahir_arab' => $this->input->post('t4_lahir_arab'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'desa_kel_indo' => $this->input->post('desa_kel_indo'),
            'desa_kel_arab' => $this->input->post('desa_kel_arab'),
            'kec_indo' => $this->input->post('kec_indo'),
            'kec_arab' => $this->input->post('kec_arab'),
            'kota_kab_indo' => $this->input->post('kota_kab_indo'),
            'kota_kab_arab' => $this->input->post('kota_kab_arab'),
            'no_wa' => $this->input->post('no_wa'),
            'pembayaran' => $this->Admin_model->rupiah_to_int($this->input->post('pembayaran')),
            'detail_pembayaran' => $this->input->post('detail_pembayaran'),
            'email' => $this->input->post('email'),
            'konfirm' => 1,
        ];

        $id_peserta = $this->Admin_model->add_data("peserta", $data);
        
        $data = [
            "id_peserta" => $id_peserta,
            "program" => $this->input->post("program"),
            "periode" => $this->input->post("periode")
        ];

        $this->Admin_model->add_data("kelas_peserta", $data);

        return $this->Admin_model->get_one("peserta", ["id_peserta" => $id_peserta]);
    }

    public function add_kelas(){
        $id_kelas = $this->input->post("id_kelas", TRUE);
        $periode = $this->input->post("periode", TRUE);
        
        if($id_kelas == "") {
            $id_kelas = NULL;
            $tahun = "";
        } else {
            $kelas = $this->Admin_model->get_one("kelas", ["id_kelas" => $id_kelas]);
            $tahun = date("Y", strtotime($kelas['tgl_selesai']));
        }

        $data = [
            "id_kelas" => $id_kelas,
            "id_peserta" => $this->input->post("id_peserta", TRUE),
            "program" => $this->input->post("program", TRUE),
            "tahun" => $tahun,
            "periode" => $periode,
        ];

        $cek = $this->Admin_model->get_one("kelas_peserta", $data);
        if($cek){
            return 0;
        } else {
            $this->Admin_model->add_data("kelas_peserta", $data);
            return 1;
        }
    }

    public function add_buku(){
        $id = $this->input->post("id");
        $this->Admin_model->edit_data("kelas_peserta", ["id" => $id], ["buku" => 1]);
        return 1;
    }

    public function add_catatan_buku(){
        $id = $this->input->post("id");
        $catatan = $this->input->post("catatan");
        $this->Admin_model->edit_data("kelas_peserta", ["id" => $id], ["catatan" => $catatan]);
        return 1;
    }

    // list kaos, pin dan tas
    public function add_list(){
        $id_peserta = $this->input->post("id_peserta");
        $list = $this->input->post("list");
        $this->Admin_model->edit_data("peserta", ["id_peserta" => $id_peserta], [$list => 1]);
        return 1;
    }

    public function edit_peserta(){
        $id_peserta = $this->input->post("id_peserta", TRUE);
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_indo' => $this->input->post('nama_indo'),
            'nama_arab' => $this->input->post('nama_arab'),
            't4_lahir_indo' => $this->input->post('t4_lahir_indo'),
            't4_lahir_arab' => $this->input->post('t4_lahir_arab'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'desa_kel_indo' => $this->input->post('desa_kel_indo'),
            'desa_kel_arab' => $this->input->post('desa_kel_arab'),
            'kec_indo' => $this->input->post('kec_indo'),
            'kec_arab' => $this->input->post('kec_arab'),
            'kota_kab_indo' => $this->input->post('kota_kab_indo'),
            'kota_kab_arab' => $this->input->post('kota_kab_arab'),
            'no_wa' => $this->input->post('no_wa'),
            'pembayaran' => $this->Admin_model->rupiah_to_int($this->input->post('pembayaran')),
            'detail_pembayaran' => $this->input->post('detail_pembayaran'),
            'email' => $this->input->post('email'),
        ];

        $this->Admin_model->edit_data("peserta", ["id_peserta" => $id_peserta], $data);
    }

    public function username($tgl){
        $username = $this->Admin_model->get_username_terakhir($tgl);
        if($username){
            $id = $username['id'] + 1;
        } else {
            $id = 1;
        }

        if($id >= 1 && $id < 10){
            $user = date('ym', strtotime($tgl))."000".$id;
        } else if($id >= 10 && $id < 100){
            $user = date('ym', strtotime($tgl))."00".$id;
        } else if($id >= 100 && $id < 1000){
            $user = date('ym', strtotime($tgl))."0".$id;
        } else {
            $user = date('ym', strtotime($tgl)).$id;
        }
        return $user;
    }
    

}

/* End of file Peserta_model.php */
