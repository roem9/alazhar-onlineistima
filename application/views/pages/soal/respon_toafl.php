<?php
    function istima_tarakib($nilai){
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
                $data = 43;
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
    
    function qiroah($nilai){
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
                $data = 38;
                break;
            case 14:
                $data = 39;
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 style="border-collapse: collapse">
        <thead>
            <tr>
                <th style="padding: 10px">No</th>
                <th style="padding: 10px">Nama Lengkap</th>
                <th style="padding: 10px">TTL</th>
                <th style="padding: 10px">Alamat</th>
                <th style="padding: 10px">No Whatsapp</th>
                <th style="padding: 10px">Email</th>
                <th style="padding: 10px">Nilai Istima</th>
                <th style="padding: 10px">Nilai Tarakib</th>
                <th style="padding: 10px">Nilai Qiroah</th>
                <th style="padding: 10px">SKOR TOAFL</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($respon as $i => $respon) :?>
                <?php $skor = ((istima_tarakib($respon['nilai_istima']) + istima_tarakib($respon['nilai_tarakib']) + qiroah($respon['nilai_qiroah'])) * 10) / 5;?>
                <tr>
                    <td style="padding: 10px"><?= $i+1?></td>
                    <td style="padding: 10px"><?= $respon['nama']?></td>
                    <td style="padding: 10px"><?= $respon['t4_lahir'] . ", " . date("d-m-Y", strtotime($respon['tgl_lahir']))?></td>
                    <td style="padding: 10px"><?= $respon['alamat']?></td>
                    <td style="padding: 10px"><?= $respon['no_wa']?></td>
                    <td style="padding: 10px"><?= $respon['email']?></td>
                    <td style="padding: 10px"><center><?= istima_tarakib($respon['nilai_istima'])?>(<?= $respon['nilai_istima']?>/40 )</center></td>
                    <td style="padding: 10px"><center><?= istima_tarakib($respon['nilai_tarakib'])?>(<?= $respon['nilai_tarakib']?>/40)</center></td>
                    <td style="padding: 10px"><center><?= qiroah($respon['nilai_qiroah'])?>(<?= $respon['nilai_qiroah']?>/50)</center></td>
                    <td style="padding: 10px"><center><?= $skor?></center></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>