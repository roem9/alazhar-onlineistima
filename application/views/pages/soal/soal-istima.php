        <div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success"><i class="fa fa-check-circle text-success mr-1"></i><?=$this->session->flashdata('pesan')?></div>
                    </div>
                </div>
            <?php else : ?>
                <form action="<?= base_url()?>soal/add_jawaban" method="post">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="email">Alamat Email</label>
                                        <input type="email" name="email" id="email" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" name="nama" id="nama" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_wa">No Whatsapp</label>
                                        <input type="text" name="no_wa" id="no_wa" class="form-control form-control-md" required>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <?php foreach ($soal as $i => $soal) :?>
                            <div class="col-12 col-md-12 mb-3" id="soal">
                                <?php
                                    if($soal['no'] == 1) : ?>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-end">
                                            <b><?= $audio[0]['judul']?></b>
                                        </li>
                                    </ul>
                                    <center><?= $audio[0]['audio']?></center>
                                <?php elseif($soal['no'] == 5) : ?>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-end">
                                            <b><?= $audio[1]['judul']?></b>
                                        </li>
                                    </ul>
                                    <center><?= $audio[1]['audio']?></center>
                                <?php elseif($soal['no'] == 10) : ?>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-end">
                                            <b><?= $audio[2]['judul']?></b>
                                        </li>
                                    </ul>
                                    <center><?= $audio[2]['audio']?></center>
                                <?php elseif($soal['no'] == 15) : ?>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-end">
                                            <b><?= $audio[3]['judul']?></b>
                                        </li>
                                    </ul>
                                    <center><?= $audio[3]['audio']?></center>
                                <?php elseif($soal['no'] == 22) : ?>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-end">
                                            <b><?= $audio[4]['judul']?></b>
                                        </li>
                                    </ul>
                                    <center><?= $audio[4]['audio']?></center>
                                <?php elseif($soal['no'] == 28) : ?>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-end">
                                            <b><?= $audio[5]['judul']?></b>
                                        </li>
                                    </ul>
                                    <center><?= $audio[5]['audio']?></center>
                                <?php elseif($soal['no'] == 34) : ?>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-end">
                                            <b><?= $audio[6]['judul']?></b>
                                        </li>
                                    </ul>
                                    <center><?= $audio[6]['audio']?></center>
                                <?php elseif($soal['no'] == 38) : ?>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-end">
                                            <b><?= $audio[7]['judul']?></b>
                                        </li>
                                    </ul>
                                    <center><?= $audio[7]['audio']?></center>
                                <?php endif;?>
                            </div>
                            <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                <ul class="list-group">
                                    <li class="list-group-item" id="soal-bg">
                                        <div class="form-group">
                                            <div class="d-flex justify-content-end mb-3 mt-3">
                                                <label for="" id="container-content"><b><?= angka_arab($soal['no'])?>.<?= $soal['soal']?></b></label>
                                            </div>
                                            <div id="select">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <?php foreach ($soal['pilihan'] as $k => $data) :?>
                                                            <div class="col-12 d-flex justify-content-end mb-3">
                                                                <label for="<?= $soal['no'].$k?>" class="mr-2" id="container-content"><center><?= $data?></center></label>
                                                                <input type="radio" class="cek" id="<?= $soal['no'].$k?>" name="soal[<?= $i?>]" class="btn-primary" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
                                                            </div>
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Simpan" class="btn btn-sm btn-primary">
                        </div>                                        
                    </div>
                </form>
            <?php endif;?>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    
</script>