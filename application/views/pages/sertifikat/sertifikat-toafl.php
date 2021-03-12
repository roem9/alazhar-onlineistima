<?php
    function tgl_arab($tgl){
        $data = explode("-", $tgl);
        $hari = angka_arab($data[0]);
        $bulan = bulan_arab($data[1]);
        // $tahun = angka_arab($data[2]);

        return $hari . " مِنْ " . $bulan;
    }

    function tgl_indo($tgl){
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
    
    function angka_arab($data){
        $data = str_replace("0", "٠", $data);
        $data = str_replace("1", "١", $data);
        $data = str_replace("2", "٢", $data);
        $data = str_replace("3", "٣", $data);
        $data = str_replace("4", "٤", $data);
        $data = str_replace("5", "٥", $data);
        $data = str_replace("6", "٦", $data);
        $data = str_replace("7", "٧", $data);
        $data = str_replace("8", "٨", $data);
        $data = str_replace("9", "٩", $data);

        return $data;
    }

    function bulan_arab($data){
        if($data == "01") return "يناير";
        if($data == "02") return "فبراير";
        if($data == "03") return "مارس";
        if($data == "04") return "أبريل";
        if($data == "05") return "مايو";
        if($data == "06") return "يونيو";
        if($data == "07") return "يوليو";
        if($data == "08") return "أغسطس";
        if($data == "09") return "سبتمبر";
        if($data == "10") return "أكتوبر";
        if($data == "11") return "نوفمبر";
        if($data == "12") return "ديسمبر";
    }
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .form-nama{
			position: absolute;
			left: 525px;
			top: 362px;
            font-size: 15px;
		}
        .form-ttl{
			position: absolute;
			left: 525px;
			top: 403px;
            font-size: 15px;
		}
        .form-alamat{
			position: absolute;
			left: 525px;
			top: 448px;
            font-size: 15px;
		}

        .nama{
			position: absolute;
			left: 637px;
			top: 362px;
            font-size: 15px;
		}
        .ttl{
			position: absolute;
			left: 637px;
			top: 403px;
            font-size: 15px;
		}
        .alamat{
			position: absolute;
			left: 637px;
			top: 448px;
            font-size: 15px;
		}

        .p1{
            /* background-color: red; */
            width: 520px;
			position: absolute;
            right: 185px;
			top: 532px;
            font-size: 25px;
            font-family: 'arab';
            direction: 'rtl';
            word-spacing: 3px;
        }
        
        .p2{
            /* background-color: red; */
            width: 520px;
			position: absolute;
            right: 185px;
			top: 580px;
            font-size: 25px;
            font-family: 'arab';
            direction: 'rtl';
            word-spacing: 3px;
        }
        
        .p3{
            /* background-color: red; */
            width: 520px;
			position: absolute;
			right: 185px;
			top: 628px;
            font-size: 25px;
            font-family: 'arab';
            direction: 'rtl';
            word-spacing: 3px;
        }
        /* #gambar {
            width: 50%;
            height: 100%;
        } */

        .nilai{
			position: absolute;
			right: 370;
			top: 670px;
            font-family: arial;
            /* direction: 'rtl'; */
        }

        .nilai2{
			position: absolute;
			right: 300;
			top: 670px;
            font-family: arial;
            /* direction: 'rtl'; */
        }

        .nilai3{
			position: absolute;
			right: 260;
			top: 670px;
            font-family: arial;
            /* direction: 'rtl'; */
        }
        
        body {
            width: 100%;
            height: 100%;
        }

        .bg-sertifikat {
            
           background-image: url('<?= base_url()?>assets/img/sertifikat.jpg');
           
           /* Full height */
           height: 100%;

           /* Center and scale the image nicely */
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
        }
    </style>
</head>
    <body>
        
        <div class="bg-sertifikat">
        </div>

    </body>
</html>