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
    
    public function hqd33c1f19890520fa0423b6c939551ee()
    {
        $data['title'] = "TES TOAFL";

        $data['soal'] = $this->Soal_model->get_soal_istima();
        // $data['audio'] = $this->Soal_model->get_audio_istima();
        $data['tarakib'] = $this->Soal_model->get_soal_tarakib();
        $data['qiroah'] = $this->Soal_model->get_soal_qiroah();
        // $data['teks'] = $this->Soal_model->get_teks_qiroah();

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
            "alamat_pengiriman" => $this->input->post("alamat_pengiriman"),
            "nilai_istima" => $nilai_istima,
            "nilai_tarakib" => $nilai_tarakib,
            "nilai_qiroah" => $nilai_qiroah,
            "text" => $text,
        ];

        $id = $this->Admin_model->add_data("respon_toafl", $data);
        
        $data = $this->Admin_model->get_one("respon_toafl", ["id" => $id]);

        $skor = round((($this->istima($data['nilai_istima']) + $this->tarakib($data['nilai_tarakib']) + $this->qiroah($data['nilai_qiroah'])) * 10) / 3);
        
        $array_from_to = array (
            ' ' => '%20',
            '"' => '%22',
            '/' => '%2F',
            ',' => '%2C',
        );
        
        $text = str_replace(array_keys($array_from_to), $array_from_to, $text);
        
        $nama = str_replace(array_keys($array_from_to), $array_from_to, $data['nama']);
        $t4_lahir = str_replace(array_keys($array_from_to), $array_from_to, $data['t4_lahir']);
        $tgl_lahir = str_replace(array_keys($array_from_to), $array_from_to, $this->tgl_indo(date("d-m-Y", strtotime($data['tgl_lahir']))));
        $alamat = str_replace(array_keys($array_from_to), $array_from_to, $data['alamat_pengiriman']);
        $ttl = str_replace(array_keys($array_from_to), $array_from_to, $t4_lahir.", ".$tgl_lahir);

        $data['score'] = $skor;
        $data['keterangan'] = str_replace(array_keys($array_from_to), $array_from_to, $this->keterangan($skor));
        $data['pesan1'] = "Permisi%20Admin%2C%20Saya%20ingin%20memesan%20e-sertifikat%20toafl%20berikut%20ini%20data%20saya%20%3A%20%0ANama%20%3A%20{$nama}%0ATTL%20%3A%20{$ttl}%0AAlamat%20%3A%20{$alamat}%0AScore%20%3A%20{$skor}%0AKeterangan%20%3A%20{$data['keterangan']}";
        $data['pesan2'] = "Permisi%20Admin%2C%20Saya%20ingin%20memesan%20e-sertifkat%20plus%20cetak%20sertifikat%20toafl%20berikut%20ini%20data%20saya%20%3A%20%0ANama%20%3A%20{$nama}%0ATTL%20%3A%20{$ttl}%0AAlamat%20%3A%20{$alamat}%0AScore%20%3A%20{$skor}%0AKeterangan%20%3A%20{$data['keterangan']}";

        $this->session->set_flashdata('pesan', $data);
        redirect(base_url("soal/hqd33c1f19890520fa0423b6c939551ee"), $data);
    }

    public function keterangan($nilai) {
        // if($nilai >= 401 && $nilai <= 450) $nilai = "مقبول";
        if($nilai <= 450) $nilai = "مقبول";
        else if($nilai >= 451 && $nilai <= 500) $nilai = "جيد";
        else if($nilai >= 501 && $nilai <= 600) $nilai = "جيد جدا";
        else if($nilai >= 601 && $nilai <= 680) $nilai = "ممتاز";

        return $nilai;
    }

    public function istima($nilai){
        switch ($nilai) {
            case 0:
                $data = 24;
                break;
            case 1:
                $data = 25;
                break;
            case 2:
                $data = 26;
                break;
            case 3:
                $data = 27;
                break;
            case 4:
                $data = 28;
                break;
            case 5:
                $data = 29;
                break;
            case 6:
                $data = 30;
                break;
            case 7:
                $data = 31;
                break;
            case 8:
                $data = 32;
                break;
            case 9:
                $data = 32;
                break;
            case 10:
                $data = 33;
                break;
            case 11:
                $data = 35;
                break;
            case 12:
                $data = 37;
                break;
            case 13:
                $data = 37;
                break;
            case 14:
                $data = 38;
                break;
            case 15:
                $data = 41;
                break;
            case 16:
                $data = 41;
                break;
            case 17:
                $data = 42;
                break;
            case 18:
                $data = 43;
                break;
            case 19:
                $data = 44;
                break;
            case 20:
                $data = 45;
                break;
            case 21:
                $data = 45;
                break;
            case 22:
                $data = 46;
                break;
            case 23:
                $data = 47;
                break;
            case 24:
                $data = 47;
                break;
            case 25:
                $data = 48;
                break;
            case 26:
                $data = 48;
                break;
            case 27:
                $data = 49;
                break;
            case 28:
                $data = 49;
                break;
            case 29:
                $data = 50;
                break;
            case 30:
                $data = 51;
                break;
            case 31:
                $data = 51;
                break;
            case 32:
                $data = 52;
                break;
            case 33:
                $data = 52;
                break;
            case 34:
                $data = 53;
                break;
            case 35:
                $data = 54;
                break;
            case 36:
                $data = 54;
                break;
            case 37:
                $data = 55;
                break;
            case 38:
                $data = 56;
                break;
            case 39:
                $data = 57;
                break;
            case 40:
                $data = 57;
                break;
            case 41:
                $data = 58;
                break;
            case 42:
                $data = 59;
                break;
            case 43:
                $data = 60;
                break;
            case 44:
                $data = 61;
                break;
            case 45:
                $data = 62;
                break;
            case 46:
                $data = 63;
                break;
            case 47:
                $data = 65;
                break;
            case 48:
                $data = 66;
                break;
            case 49:
                $data = 67;
                break;
            case 50:
                $data = 68;
                break;
        }
        return $data;
    }
    
    public function tarakib($nilai){
        switch ($nilai) {
            case 0:
                $data = 20;
                break;
            case 1:
                $data = 20;
                break;
            case 2:
                $data = 21;
                break;
            case 3:
                $data = 22;
                break;
            case 4:
                $data = 23;
                break;
            case 5:
                $data = 25;
                break;
            case 6:
                $data = 26;
                break;
            case 7:
                $data = 27;
                break;
            case 8:
                $data = 29;
                break;
            case 9:
                $data = 31;
                break;
            case 10:
                $data = 33;
                break;
            case 11:
                $data = 35;
                break;
            case 12:
                $data = 36;
                break;
            case 13:
                $data = 37;
                break;
            case 14:
                $data = 38;
                break;
            case 15:
                $data = 40;
                break;
            case 16:
                $data = 40;
                break;
            case 17:
                $data = 41;
                break;
            case 18:
                $data = 42;
                break;
            case 19:
                $data = 43;
                break;
            case 20:
                $data = 44;
                break;
            case 21:
                $data = 45;
                break;
            case 22:
                $data = 46;
                break;
            case 23:
                $data = 47;
                break;
            case 24:
                $data = 48;
                break;
            case 25:
                $data = 49;
                break;
            case 26:
                $data = 50;
                break;
            case 27:
                $data = 51;
                break;
            case 28:
                $data = 52;
                break;
            case 29:
                $data = 53;
                break;
            case 30:
                $data = 54;
                break;
            case 31:
                $data = 55;
                break;
            case 32:
                $data = 56;
                break;
            case 33:
                $data = 57;
                break;
            case 34:
                $data = 58;
                break;
            case 35:
                $data = 60;
                break;
            case 36:
                $data = 61;
                break;
            case 37:
                $data = 63;
                break;
            case 38:
                $data = 65;
                break;
            case 39:
                $data = 67;
                break;
            case 40:
                $data = 68;
                break;
        }
        return $data;
    }

    public function qiroah($nilai){
        switch ($nilai) {
            case 0:
                $data = 20;
                break;
            case 1:
                $data = 21;
                break;
            case 2:
                $data = 22;
                break;
            case 3:
                $data = 23;
                break;
            case 4:
                $data = 23;
                break;
            case 5:
                $data = 24;
                break;
            case 6:
                $data = 25;
                break;
            case 7:
                $data = 26;
                break;
            case 8:
                $data = 28;
                break;
            case 9:
                $data = 28;
                break;
            case 10:
                $data = 29;
                break;
            case 11:
                $data = 30;
                break;
            case 12:
                $data = 31;
                break;
            case 13:
                $data = 32;
                break;
            case 14:
                $data = 34;
                break;
            case 15:
                $data = 35;
                break;
            case 16:
                $data = 36;
                break;
            case 17:
                $data = 37;
                break;
            case 18:
                $data = 38;
                break;
            case 19:
                $data = 39;
                break;
            case 20:
                $data = 40;
                break;
            case 21:
                $data = 41;
                break;
            case 22:
                $data = 42;
                break;
            case 23:
                $data = 43;
                break;
            case 24:
                $data = 43;
                break;
            case 25:
                $data = 44;
                break;
            case 26:
                $data = 45;
                break;
            case 27:
                $data = 46;
                break;
            case 28:
                $data = 46;
                break;
            case 29:
                $data = 47;
                break;
            case 30:
                $data = 48;
                break;
            case 31:
                $data = 48;
                break;
            case 32:
                $data = 49;
                break;
            case 33:
                $data = 50;
                break;
            case 34:
                $data = 51;
                break;
            case 35:
                $data = 52;
                break;
            case 36:
                $data = 52;
                break;
            case 37:
                $data = 53;
                break;
            case 38:
                $data = 54;
                break;
            case 39:
                $data = 54;
                break;
            case 40:
                $data = 55;
                break;
            case 41:
                $data = 56;
                break;
            case 42:
                $data = 57;
                break;
            case 43:
                $data = 58;
                break;
            case 44:
                $data = 59;
                break;
            case 45:
                $data = 60;
                break;
            case 46:
                $data = 61;
                break;
            case 47:
                $data = 63;
                break;
            case 48:
                $data = 65;
                break;
            case 49:
                $data = 66;
                break;
            case 50:
                $data = 67;
                break;
        }
        return $data;
    }

    public function tgl_indo($tgl){
        $data = explode("-", $tgl);
        $hari = $data[0];
        $bulan = $data[1];
        $tahun = $data[2];

        if($bulan == "01") $bulan = "Januari";
        if($bulan == "02") $bulan = "Februari";
        if($bulan == "03") $bulan = "Maret";
        if($bulan == "04") $bulan = "April";
        if($bulan == "05") $bulan = "Mei";
        if($bulan == "06") $bulan = "Juni";
        if($bulan == "07") $bulan = "Juli";
        if($bulan == "08") $bulan = "Agustus";
        if($bulan == "09") $bulan = "September";
        if($bulan == "10") $bulan = "Oktober";
        if($bulan == "11") $bulan = "November";
        if($bulan == "12") $bulan = "Desember";

        return $hari . " " . $bulan . " " . $tahun;
    }
}

/* End of file Peserta.php */
