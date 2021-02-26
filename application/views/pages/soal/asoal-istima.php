        <div class="container">
            <div class="head-brand bg-light p-2 mb-3"><center><h3>KURSUS ARAB <br>AL-AZHAR</h3><br><i>Jagonya ngomong arab, mahir kitab kuning dan Score TOAFL tinggi</i></center></div>
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success"><i class="fa fa-check-circle text-success mr-1"></i><?=$this->session->flashdata('pesan')?></div>
                    </div>
                </div>
            <?php else : ?>
                <form action="<?= base_url()?>soal/add_jawaban" method="post" id="formSoal">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3 soal" id="dataDiri">
                            <ul class="list-group mb-3">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="email">Alamat Email</label>
                                        <input type="text" name="email" id="email" class="form-control form-control-md" required>
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
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima">SOAL ISTIMA<i class="fa fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                        <div class="soalToaflIstima">
                            <div class="col-12 mb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a>
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib">SOAL TARAKIB<i class="fa fa-arrow-right ml-2"></i></a> -->
                                    <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
                                </div>
                            </div>
                            <?php 
                                $i = 0;
                                foreach ($soal as $soal) :?>
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
                                                    <div class="text-right">
                                                        <label for="" id="container-content"><b><?= angka_arab($soal['no'])?>.<?= $soal['soal']?></b></label>
                                                    </div>
                                                </div>
                                                <div id="select">
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <?php foreach ($soal['pilihan'] as $k => $data) :?>
                                                                <div class="col-12 d-flex justify-content-end mb-3">
                                                                    <label for="<?= $soal['no'].$k?>" class="mr-2" id="container-content"><center><?= $data?></center></label>
                                                                    <input type="radio" class="soal_istima" id="<?= $soal['no'].$k?>" name="soal_istima[<?= $i?>]" value="<?= $data?>">
                                                                </div>
                                                            <?php endforeach;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            <?php 
                                $i++;
                                endforeach;?>
                            <div class="col-12 mb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a>
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib">SOAL TARAKIB<i class="fa fa-arrow-right ml-2"></i></a> -->
                                    <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
                                    <!-- <input type="submit" value="Simpan"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php endif;?>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    $(".soalToaflIstima").hide();
    $(".soalToaflTarakib").hide();
    $(".soalToaflQiroah").hide();

    $(".btnSoalIstima").click(function(){
        let email = $("#email").val();
        let nama = $("#nama").val();
        let no_wa = $("#no_wa").val();

        if(email == "" || nama == "" || no_wa == ""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Lengkapi data terlebih dahulu',
            })
        } else {
            $(".soalToaflIstima").show();
            $(".soalToaflTarakib").hide();
            $(".soalToaflQiroah").hide();
            $(".titleBar").html("TES TOAFL (ISTIMA)")
            $("#dataDiri").hide();
            $("#formSoal").scrollTop(0);
        }
    })

    $(".btnSoalTarakib").click(function(){
        $(".soalToaflIstima").hide();
        $(".soalToaflTarakib").show();
        $(".soalToaflQiroah").hide();
        
        $(".titleBar").html("TES TOAFL (TARAKIB)")
        $("#formSoal").scrollTop(0);
    })

    $(".btnSoalQiroah").click(function(){
        $(".soalToaflIstima").hide();
        $(".soalToaflTarakib").hide();
        $(".soalToaflQiroah").show();
        
        $(".titleBar").html("TES TOAFL (QIROAH)")
        $("#formSoal").scrollTop(0);
    })

    $(".btnDataDiri").click(function(){
        $(".soalToaflIstima").hide();
        $(".soalToaflTarakib").hide();
        $(".soalToaflQiroah").hide();
        $("#dataDiri").show();

        $("#formSoal").scrollTop(0);
    })

    $(".submitForm").click(function(){
        alert($('input:radio.soal_istima:checked').length);
        if($('input:radio.soal_istima:checked').length != 40){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Istima',
            })
        } else {
            $("#formSoal").submit();
        }
    })

    $("#formSoal").submit(function(){
        submit_clicked = true;

        if(confirm("Yakin telah menyelesaikan pekerjaan Anda?")){

        } else {
            submit_clicked = false
        }
    })

    var submit_clicked = false;

    // $('input[type="submit"]').click(function(){
    //     submit_clicked = true;
    // });


    window.onbeforeunload = function closeEditorWarning () {

    /** Check to see if the settings warning is displayed */
    if(($('#unsaved-settings').css('display') !== 'none') && submit_clicked === false) {
        bol_option_changed = true;
    }

    /** Display a warning if the user is trying to leave the page with unsaved settings */
    if(bol_option_changed === true){
        return '';
    }
    };
</script>