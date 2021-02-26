        <div class="container">
            <div class="head-brand bg-light p-2 mb-3"><center><h3>KURSUS ARAB <br>AL-AZHAR</h3><br><i>Jagonya ngomong arab, mahir kitab kuning dan Score TOAFL tinggi</i></center></div>
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success"><i class="fa fa-check-circle text-success mr-1"></i><?=$this->session->flashdata('pesan')?></div>
                    </div>
                </div>
            <?php else : ?>
                <div class="row">
                    <div class="col-12 mb-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <select id="fontSize" class="form-control form-control-md">
                                    <option value="16px">Pilih Ukuran Tulisan</option>
                                    <option value="20px">20</option>
                                    <option value="25px">25</option>
                                    <option value="30px">30</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                <form action="<?= base_url()?>soal/add_jawaban" method="post" id="formSoal" onsubmit="setFormSubmitting()">
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
                                    <div class="form-group">
                                        <label for="t4_lahir">Tempat Lahir</label>
                                        <input type="text" name="t4_lahir" id="t4_lahir" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tgl Lahir</label>
                                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-md" required>
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
                                    <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib">SOAL TARAKIB<i class="fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                            <?php 
                                foreach ($soal as $i => $soal) :?>
                                <div class="col-12 col-md-12 mb-3 soal" id="soal">
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
                                                                    <div class="text-right">
                                                                        <label for="soal<?= $i.$k?>" class="mr-2" id="container-content"><?= $data?></label>
                                                                    </div>
                                                                    <input type="radio" class="soal_istima" id="soal_istima<?= $i.$k?>" name="soal_istima[<?= $i?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
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
                            <div class="col-12 mb-3">
                                <div class="d-flex justify-content-between">
                                    <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a>
                                    <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib">SOAL TARAKIB<i class="fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="soalToaflTarakib">
                            <div class="col-12 mb-3">
                                <div class="d-flex justify-content-end">
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima"><i class="fa fa-arrow-left mr-2"></i>SOAL ISTIMA</a> -->
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                    <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalQiroah">SOAL QIROAH<i class="fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                            <?php foreach ($tarakib as $i => $soal) :?>
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
                                                                    <div class="text-right">
                                                                        <label for="soal<?= $i.$k?>" class="mr-2" id="container-content"><?= $data?></label>
                                                                    </div>
                                                                    <input type="radio" class="soal_tarakib" id="soal_tarakib<?= $i.$k?>" name="soal_tarakib[<?= $i?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
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
                            <div class="col-12 mb-3">
                                <div class="d-flex justify-content-end">
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima"><i class="fa fa-arrow-left mr-2"></i>SOAL ISTIMA</a> -->
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                    <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalQiroah">SOAL QIROAH<i class="fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="soalToaflQiroah">
                            <div class="col-12 mb-3">
                                <div class="d-flex justify-content-end">
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib"><i class="fa fa-arrow-left mr-2"></i>SOAL TARAKIB</a> -->
                                    <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
                                </div>                                        
                            </div>
                            <?php foreach ($qiroah as $i => $soal) :?>
                                <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                    <?php
                                        if($soal['no'] == 1) : ?>
                                        <ul class="list-group">
                                            <?php if($teks[0]['judul'] != "") :?>
                                                <li class="list-group-item d-flex justify-content-end">
                                                    <b><?= $teks[0]['judul']?></b>
                                                </li>
                                            <?php endif;?>
                                            <?php if($teks[0]['teks'] != "") :?>
                                                <li class="list-group-item"><div class="text-right"><?= $teks[0]['teks']?></div></li>
                                            <?php endif;?>
                                        </ul>
                                    <?php elseif($soal['no'] == 6) : ?>
                                        <ul class="list-group">
                                            <?php if($teks[1]['judul'] != "") :?>
                                                <li class="list-group-item d-flex justify-content-end">
                                                    <b><?= $teks[1]['judul']?></b>
                                                </li>
                                            <?php endif;?>
                                            <?php if($teks[1]['teks'] != "") :?>
                                                <li class="list-group-item"><div class="text-right"><?= $teks[1]['teks']?></div></li>
                                            <?php endif;?>
                                        </ul>
                                    <?php elseif($soal['no'] == 11) : ?>
                                        <ul class="list-group">
                                            <?php if($teks[2]['judul'] != "") :?>
                                                <li class="list-group-item d-flex justify-content-end">
                                                    <b><?= $teks[2]['judul']?></b>
                                                </li>
                                            <?php endif;?>
                                            <?php if($teks[2]['teks'] != "") :?>
                                                <li class="list-group-item"><div class="text-right"><?= $teks[2]['teks']?></div></li>
                                            <?php endif;?>
                                        </ul>
                                    <?php elseif($soal['no'] == 16) : ?>
                                        <ul class="list-group">
                                            <?php if($teks[3]['judul'] != "") :?>
                                                <li class="list-group-item d-flex justify-content-end">
                                                    <b><?= $teks[3]['judul']?></b>
                                                </li>
                                            <?php endif;?>
                                            <?php if($teks[3]['teks'] != "") :?>
                                                <li class="list-group-item"><div class="text-right"><?= $teks[3]['teks']?></div></li>
                                            <?php endif;?>
                                        </ul>
                                    <?php elseif($soal['no'] == 21) : ?>
                                        <ul class="list-group">
                                            <?php if($teks[4]['judul'] != "") :?>
                                                <li class="list-group-item d-flex justify-content-end">
                                                    <b><?= $teks[4]['judul']?></b>
                                                </li>
                                            <?php endif;?>
                                            <?php if($teks[4]['teks'] != "") :?>
                                                <li class="list-group-item"><div class="text-right"><?= $teks[4]['teks']?></div></li>
                                            <?php endif;?>
                                        </ul>
                                    <?php elseif($soal['no'] == 31) : ?>
                                        <ul class="list-group">
                                            <?php if($teks[5]['judul'] != "") :?>
                                                <li class="list-group-item d-flex justify-content-end">
                                                    <b><?= $teks[5]['judul']?></b>
                                                </li>
                                            <?php endif;?>
                                            <?php if($teks[5]['teks'] != "") :?>
                                                <li class="list-group-item"><div class="text-right"><?= $teks[5]['teks']?></div></li>
                                            <?php endif;?>
                                        </ul>
                                    <?php elseif($soal['no'] == 41) : ?>
                                        <ul class="list-group">
                                            <?php if($teks[6]['judul'] != "") :?>
                                                <li class="list-group-item d-flex justify-content-end">
                                                    <b><?= $teks[6]['judul']?></b>
                                                </li>
                                            <?php endif;?>
                                            <?php if($teks[6]['teks'] != "") :?>
                                                <li class="list-group-item"><div class="text-right"><?= $teks[6]['teks']?></div></li>
                                            <?php endif;?>
                                        </ul>
                                    <?php elseif($soal['no'] == 46) : ?>
                                        <ul class="list-group">
                                            <?php if($teks[7]['judul'] != "") :?>
                                                <li class="list-group-item d-flex justify-content-end">
                                                    <b><?= $teks[7]['judul']?></b>
                                                </li>
                                            <?php endif;?>
                                            <?php if($teks[7]['teks'] != "") :?>
                                                <li class="list-group-item"><div class="text-right"><?= $teks[7]['teks']?></div></li>
                                            <?php endif;?>
                                        </ul>
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
                                                                    <div class="text-right">
                                                                        <label for="soal<?= $i.$k?>" class="mr-2" id="container-content"><?= $data?></label>
                                                                    </div>
                                                                    <input type="radio" class="soal_qiroah" id="soal_qiroah<?= $i.$k?>" name="soal_qiroah[<?= $i?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
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
                            <div class="col-12 mb-3">
                                <div class="d-flex justify-content-end">
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib"><i class="fa fa-arrow-left mr-2"></i>SOAL TARAKIB</a> -->
                                    <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
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

    $("#fontSize").change(function(){
        let size = $(this).val();
        $(".soal").css("font-size",size);
    })
    
    let formSubmitting = false;
    let setFormSubmitting = function() { formSubmitting = true; };

    $(".btnSoalIstima").click(function(){
        let email = $("#email").val();
        let nama = $("#nama").val();
        let no_wa = $("#no_wa").val();
        let t4_lahir = $("#t4_lahir").val();
        let tgl_lahir = $("#tgl_lahir").val();

        if(email == "" || nama == "" || no_wa == "" || t4_lahir == "" || tgl_lahir == ""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Lengkapi data terlebih dahulu',
            })
        } else {
            $.ajax({
                url: "<?= base_url()?>soal/email_check",
                data: {email:email},
                dataType: "JSON",
                method: "POST",
                success: function(result){
                    if(result) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Maaf email Anda telah digunakan',
                        })
                    } else {
                        $(".soalToaflIstima").show();
                        $(".soalToaflTarakib").hide();
                        $(".soalToaflQiroah").hide();
                        $(".titleBar").html("TES TOAFL (ISTIMA)")
                        $("#dataDiri").hide();
                        $("#formSoal").scrollTop(0);
                    }
                }
            })
        }
    })

    $(".btnSoalTarakib").click(function(){
        if($('input:radio.soal_istima:checked').length != 40){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Istima',
            })

            $(".soalToaflIstima").show();
            $(".soalToaflTarakib").hide();
            $(".soalToaflQiroah").hide();
            $(".titleBar").html("TES TOAFL (ISTIMA)")
            return false;
        } else {
            $(".soalToaflIstima").hide();
            $(".soalToaflTarakib").show();
            $(".soalToaflQiroah").hide();
            
            $(".titleBar").html("TES TOAFL (TARAKIB)")
            $("#formSoal").scrollTop(0);
        }
    })

    $(".btnSoalQiroah").click(function(){
        if($('input:radio.soal_tarakib:checked').length != 40){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Tarakib',
            })

            $(".soalToaflIstima").hide();
            $(".soalToaflTarakib").show();
            $(".soalToaflQiroah").hide();
            $(".titleBar").html("TES TOAFL (TARAKIB)")
            return false;
        } else {
            $(".soalToaflIstima").hide();
            $(".soalToaflTarakib").hide();
            $(".soalToaflQiroah").show();
            
            $(".titleBar").html("TES TOAFL (QIROAH)")
            $("#formSoal").scrollTop(0);
        }
    })

    $(".btnDataDiri").click(function(){
        $(".soalToaflIstima").hide();
        $(".soalToaflTarakib").hide();
        $(".soalToaflQiroah").hide();
        $("#dataDiri").show();

        $("#formSoal").scrollTop(0);
    })

    $(".submitForm").click(function(){
        if($('input:radio.soal_istima:checked').length != 40){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Istima',
            })

            $(".soalToaflIstima").show();
            $(".soalToaflTarakib").hide();
            $(".soalToaflQiroah").hide();
            $(".titleBar").html("TES TOAFL (ISTIMA)")
            return false;
        }

        if($('input:radio.soal_tarakib:checked').length != 40){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Tarakib',
            })

            $(".soalToaflIstima").hide();
            $(".soalToaflTarakib").show();
            $(".soalToaflQiroah").hide();
            $(".titleBar").html("TES TOAFL (TARAKIB)")
            return false;
        }

        if($('input:radio.soal_qiroah:checked').length != 50){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Qiroah',
            })

            $(".soalToaflIstima").hide();
            $(".soalToaflTarakib").hide();
            $(".soalToaflQiroah").show();
            $(".titleBar").html("TES TOAFL (QIROAH)")
            return false;
        }

        $("#formSoal").submit();    
    })


    window.onload = function() {
        window.addEventListener("beforeunload", function (e) {
            if (formSubmitting) {
                return undefined;
            }

            var confirmationMessage = 'It looks like you have been editing something. '
                                    + 'If you leave before saving, your changes will be lost.';

            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
            return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
        });
    };

    $("#formSoal").submit(function(){
        var c = confirm("Yakin telah menyelesaikan pekerjaan Anda?")

        return c
    })
</script>