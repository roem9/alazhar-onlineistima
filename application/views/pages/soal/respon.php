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
                <th style="padding: 10px">No Whatsapp</th>
                <th style="padding: 10px">Email</th>
                <th style="padding: 10px">Nilai</th>
                <?php for ($i=1; $i < 41; $i++) :?>
                    <th style="padding: 10px">No <?= $i;?></th>
                <?php endfor;?>
                <th style="padding: 10px">Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($respon as $i => $respon) :?>
                <tr>
                    <td style="padding: 10px"><?= $i+1?></td>
                    <td style="padding: 10px"><?= $respon['nama']?></td>
                    <td style="padding: 10px"><?= $respon['no_wa']?></td>
                    <td style="padding: 10px"><?= $respon['email']?></td>
                    <td style="padding: 10px"><?= $respon['nilai']?>/40</td>
                    <?php foreach ($respon['text'] as $key => $text) :
                        if($key < 40) :
                    ?>
                        <td style="padding: 10px"><?= $text?></td>
                    <?php 
                        endif;
                        endforeach;?>
                    <td style="padding: 10px"><?= date('d-m-Y H:i:s', strtotime($respon['tgl_input']))?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>