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
    
    public function d33c1f19890520fa0423b6c939551ee()
    {
        $data['title'] = "TES TOAFL";

        $data['soal'] = $this->Soal_model->get_soal_istima();
        $data['audio'] = $this->Soal_model->get_audio_istima();
        $data['tarakib'] = $this->Soal_model->get_soal_tarakib();
        $data['qiroah'] = $this->Soal_model->get_soal_qiroah();
        $data['teks'] = $this->Soal_model->get_teks_qiroah();

        $this->load->view("pages/layout/header-user", $data);
        $this->load->view("pages/soal/soal-toafl", $data);
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

    public function respon_toafl(){
        $data['title'] = "Jawaban Peserta";

        $respon = $this->Admin_model->get_all("respon_toafl");
        $data['respon'] = [];
        foreach ($respon as $i => $respon) {
            $data['respon'][$i] = $respon;
            $jawaban = explode("###", $respon['text']);
            $data['respon'][$i]['text'] = $jawaban;
        }

        $this->load->view("pages/soal/respon_toafl", $data);
    }

    public function email_check(){
        $email = $this->input->post("email");
        $data = $this->Admin_model->get_one("respon_toafl", ["email" => $email]);
        if($data) {
            echo json_encode($data['email']);
        } else {
            echo json_encode("");
        }
    }

    public function add_jawaban(){
        // var_dump($_POST);
        // exit();
        $soal = $this->Soal_model->get_soal_istima();
        $jawaban = $this->input->post("soal_istima");
        // var_dump($jawaban);
        $text = "";
        $nilai_istima = 0;

        foreach ($soal as $i => $soal) {
            if($soal['jawaban'] == $jawaban[$i]){
                $nilai_istima += 1;
                $status = "benar";
            } else {
                $status = "salah";
            }

            $text .= $jawaban[$i]."/".$status."###";
        }

        
        $soal = $this->Soal_model->get_soal_tarakib();
        $jawaban = $this->input->post("soal_tarakib");

        $nilai_tarakib = 0;

        foreach ($soal as $i => $soal) {
            if($soal['jawaban'] == $jawaban[$i]){
                $nilai_tarakib += 1;
                $status = "benar";
            } else {
                $status = "salah";
            }

            $text .= $jawaban[$i]."/".$status."###";
        }

        
        $soal = $this->Soal_model->get_soal_qiroah();
        $jawaban = $this->input->post("soal_qiroah");

        $nilai_qiroah = 0;

        foreach ($soal as $i => $soal) {
            if($soal['jawaban'] == $jawaban[$i]){
                $nilai_qiroah += 1;
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
            "t4_lahir" => $this->input->post("t4_lahir"),
            "tgl_lahir" => $this->input->post("tgl_lahir"),
            "alamat" => $this->input->post("alamat"),
            "nilai_istima" => $nilai_istima,
            "nilai_tarakib" => $nilai_tarakib,
            "nilai_qiroah" => $nilai_qiroah,
            "text" => $text,
        ];

        $this->Admin_model->add_data("respon_toafl", $data);
        $this->session->set_flashdata('pesan', 'Anda telah menyelesaikan tes TOAFL. Nilai / Score TOAFL akan diumumkan oleh Admin Al-Azhar. Mohon ditunggu');
        redirect(base_url("soal/d33c1f19890520fa0423b6c939551ee"));
    }
}

/* End of file Peserta.php */
