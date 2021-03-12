<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikat extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model");
    }
    
    public function peserta(){

        $data = $this->Admin_model->get_one("respon_toafl", ["id" => 1]);

        $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [214, 330], 'orientation' => 'L', 'margin_left' => '0', 'margin_right' => '0', 'margin_top' => '0', 'margin_bottom' => '0', 'fontDir' => array_merge($fontDirs, [__DIR__ . '/assets/font',]),
        'fontdata' => $fontData + [
            'arab' => [
                // 'R' => 'tradbdo.ttf',
                'R' => 'trado.ttf',
                'useOTL' => 0xFF,
                'useKashida' => 75,
            ],
            'arial' => [
                // 'R' => 'tradbdo.ttf',
                'R' => 'arial.ttf',
                'useOTL' => 0xFF,
                'useKashida' => 75,
            ]
        ], 
        ]);
        
        $mpdf->text_input_as_HTML = true; //(default = false)
        $print = $this->load->view('pages/sertifikat/sertifikat-toafl', $data, TRUE);
        $mpdf->WriteHTML($print);
        $mpdf->Output();

    }

}

/* End of file Sertifikat.php */
