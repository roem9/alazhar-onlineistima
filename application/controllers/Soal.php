<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model");
        $this->load->model("Soal_model");
        // if(!$this->session->userdata('id_admin')) {
        //     redirect("auth");
        // }
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
    }
    
    public function istima()
    {
        $data['title'] = "SOAL ISTIMA TOAFL";

        $data['soal'] = $this->Soal_model->get_soal_istima();
        $data['audio'] = $this->Soal_model->get_audio_istima();

        $this->load->view("pages/layout/header-user", $data);
        $this->load->view("pages/soal/soal-istima", $data);
        $this->load->view("pages/layout/footer-user");
    }

    public function respon(){
        $data['title'] = "Jawaban Peserta";

        $respon = $this->Admin_model->get_all("respon");
        $data['respon'] = [];
        foreach ($respon as $i => $respon) {
            $data['respon'][$i] = $respon;
            $jawaban = explode("###", $respon['text']);
            $data['respon'][$i]['text'] = $jawaban;
        }

        $this->load->view("pages/soal/respon", $data);
    }

    public function add_jawaban(){
        // var_dump($_POST);
        // exit();
        $soal = $this->Soal_model->get_soal_istima();
        $jawaban = $this->input->post("soal");
        // var_dump($jawaban);
        $text = "";
        $nilai = 0;

        foreach ($soal as $i => $soal) {
            if($soal['jawaban'] == $jawaban[$i]){
                $nilai += 1;
                $status = "benar";
            } else {
                $status = "salah";
            }

            $text .= $jawaban[$i]."/".$status."###";
        }

        $data = [
            "email" => $this->input->post("email"),
            "nama" => $this->input->post("nama"),
            "no_wa" => $this->input->post("no_wa"),
            "nilai" => $nilai,
            "text" => $text,
        ];

        $this->Admin_model->add_data("respon", $data);
        $this->session->set_flashdata('pesan', 'Anda telah menyelesaikan tes TOAFL Istima');
        redirect(base_url("soal/istima"));
    }
}

/* End of file Peserta.php */
