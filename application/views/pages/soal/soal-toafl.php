        <div class="container">
            <div class="head-brand bg-light p-2 mb-3"><center><h3>KURSUS ARAB <br>AL-AZHAR</h3><br><i>Jagonya ngomong arab, mahir kitab kuning dan Score TOAFL tinggi</i></center></div>
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <?php $data = $this->session->flashdata('pesan');?>
                <div class="row">
                    <div class="col-12 mb-3 bg-light">
                        <p><center>Selamat anda telah berhasil menyelesaikan tes TOAFL Periode 20 Maret 2021</center></p>
                        <p><center>Berikut hasil Tes TOAFL Al Azhar Pare :</center></p>
                        <p><center>Nama : <?= $data['nama']?></center></p>
                        <p><center>TTL : <?= $data['t4_lahir'].", ".date("d-M-Y", strtotime($data['tgl_lahir']))?></center></p>
                        <p><center>Alamat : <?= $data['alamat']?></center></p>
                        <p><center>SCORE : </center></p>
                        <h3><center>(<?= $data['score']?>)</center></h3>
                        <h3><center>(<?= $data['keterangan']?>)</center></h3>

                        <center><img src="<?= base_url()?>assets/img/kenapaharus.png" class="img-fluid mb-3" alt="Responsive image"></center>

                        <ol type="number">
                            <li>Sebagai Alat ukur kemampuan berbahasa Arab</li>
                            <li>Bisa digunakan sebagai syarat lanjut kuliah DN / LN, melamar kerja, kenaikan Jabatan Dll.</li>
                            <li>Digunakan sebagai syarat kelulusan kampus, syarat sidang skripsi/thesis, dan syarat wisuda.</li>
                        </ol>
                        
                        <center><img src="<?= base_url()?>assets/img/sertifikatkamidapat.png" class="img-fluid mb-3" alt="Responsive image"></center>
                        
                        <ol type="number">
                            <li>Persyaratan kelulusan S1, S2, & S3 Dalam Negeri</li>
                            <li>Persyaratan beasiswa Dalam Negeri</li>
                            <li>Persyaratan Sidang Skripsi/Thesis.</li>
                            <li>Syarat Wisuda</li>
                            <li>Syarat test CPNS</li>
                            <li>Melamar BUMN</li>
                        </ol>
                        
                        <center><img src="<?= base_url()?>assets/img/disclimer.png" class="img-fluid mb-3" alt="Responsive image"></center>

                        <ul type="radio">
                            <li>Lembaga KURSUS BAHASA ARAB AL-AZHAR adalah lembaga kursus bahasa Arab yang terdaftar sejak tahun 2016 dengan no SK DIKNAS NOMOR 421.9/565/418.20/2020.</li>
                            <li>TOAFL adalah test standarisasi kemampuan berbahasa arab yang kami design untuk mengukur kemampuan siswa dalam Bahasa arab . </li>
                            <li>TOAFL IBT test diselenggarakan oleh AL AZHAR ini dapat digunakan sebagai tolak ukur kemampuan bahasa Arab peserta tes.</li>
                            <li>Kami tidak menerima jual beli sertifikat.</li>
                            <li>Nilai pada sertifikat harus lah sesuai dengan nilai dari hasil test yang diujikan kepada peserta.</li>
                            <li>Penggunaan sertifikat TOAFL sebagai syarat sidang skripsi, thesis, dan wisuda dikembalikan kepada kebijakan kampus masing-masing.</li>
                            <li>Sertifikat berlaku dua tahun dari tanggal penerbitanya.</li>
                        </ul>

                        <p>Adapun untuk pemesanan E-Sertifikat TOAFL RESMI KURSUS BAHASA ARAB AL-AZHAR dengan SK DIKNAS Nomor 421.9/565/418.20/2020 (Biaya Penerbitan Sertifikat 75.000) Langsung Klik salah satu tombol dibawah ini <br> 
                        <a href="https://wa.me/6285327880888?text=Permisi%20Admin%20Kak%20Mona%2C%20<?= $data['pesan1']?>" target="_blank" class="btn btn-block btn-success">Hubungi kak Mona</a></p>
                        <a href="https://wa.me/628113695333?text=Permisi%20Admin%20Kak%20Abbas%2C%20<?= $data['pesan1']?>" target="_blank" class="btn btn-block btn-success">Hubungi kak Abbas</a></p>
                        <p>Adapun yang ingin mendapatkan E-Sertifikat plus Sertifikat TOAFL RESMI KURSUS BAHASA ARAB AL-AZHAR dengan SK DIKNAS Nomor 421.9/565/418.20/2020 (Dikenai biaya 95.000/ belum termasuk ongkir, untuk biaya ongkir akan diinfokan oleh admin) Langsung Klik salah satu tombol dibawah ini : <br> 
                        <a href="https://wa.me/6282335124149?text=Permisi%20Admin%20Kak%20Triani%2C%20<?= $data['pesan2']?>" target="_blank" class="btn btn-block btn-success">Hubungi Kak Triani</a></p>
                        <a href="https://wa.me/6285156604104?text=Permisi%20Admin%20Kak%20Kresna%2C%20<?= $data['pesan2']?>" target="_blank" class="btn btn-block btn-success">Hubungi Kak Kresna</a></p>
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
                                <li class="list-group-item list-group-item-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i> <b>Tulislah Biodata Anda dengan Benar, Supaya tidak ada kesalahan PENULISAN di Sertifikat</b></li>
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
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control form-control-sm"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_pengiriman">Alamat Pengiriman</label>
                                        <textarea name="alamat_pengiriman" id="alamat_pengiriman" class="form-control form-control-sm"></textarea>
                                        <small id="emailHelp" class="form-text text-danger">Form Alamat pengiriman diisi jika memesan sertifikat</small>
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
                                    <?php if($soal['no'] == 1) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item" id="soal-bg">
                                                <p><center>إختبار  اللغة العربية لغير الناطقين بها</center></p>
                                                <p><center>القسم الأول : فهم المسموع</center></p>
                                                <p><center>في هذا القسم 50 سؤالا تتكون من ثلاثة أنواع : التعبيرات، و الحوارات، و الفقرات:</center></p>
                                                <p><center>للإجابة عن الأسئلة من رقم واحد إلى رقم خمسة وعشرين، استمع إلى التعبيرات ثم اختر أنسب جواب بعد كل تعبير :</center></p>
                                            </li>
                                        </ul>
                                        <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak1.mp3" type="audio/mp3"></audio></center>
                                    <?php elseif($soal['no'] == 26) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item" id="soal-bg">
                                                <p><center>للإجابة عن الأسئلة من رقم ستة وعشرين إلى رقم أربعين، استمع إلى الحوارات ثم اختر أنسب جواب بعد كل تعبير :</center></p>
                                            </li>
                                        </ul>
                                        <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak2.mp3" type="audio/mp3"></audio></center>
                                    <?php elseif($soal['no'] == 34) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item" id="soal-bg">
                                                <p><center>للإجابة عن الأسئلة من رقم أربعة وثلاثين  إلى سبعة وثلاثين، استمع إلى الحوار الآتي  ثم اختر أنسب جواب من الإختيار المتعدد المتاح  بعده:</center></p>
                                            </li>
                                        </ul>
                                        <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak3.mp3" type="audio/mp3"></audio></center>
                                    <?php elseif($soal['no'] == 38) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item" id="soal-bg">
                                                <p><center>للإجابة عن الأسئلة من رقم ثمانية وثلاثين  إلى اثنين وأربعين، استمع إلى الحوار الآتي  ثم اختر أنسب جواب من الإختيار المتعدد المتاح  بعده:</center></p>
                                            </li>
                                        </ul>
                                        <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak4.mp3" type="audio/mp3"></audio></center>
                                    <?php elseif($soal['no'] == 43) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item" id="soal-bg">
                                                <p><center> للإجابة عن الأسئلة من رقم ثلاثة وأربعين إلى خمسة وأربعين، استمع إلى الحوار الآتي  ثم اختر أنسب جواب من الإختيار المتعدد المتاح  بعده:</center></p>
                                            </li>
                                        </ul>
                                        <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak5.mp3" type="audio/mp3"></audio></center>
                                    <?php elseif($soal['no'] == 46) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item" id="soal-bg">
                                                <p><center>للإجابة عن الأسئلة من رقم ستة وثلاثين  إلى خمسين، استمع إلى الحوار الآتي  ثم اختر أنسب جواب من الإختيار المتعدد المتاح  بعده:</center></p>
                                            </li>
                                        </ul>
                                        <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak6.mp3" type="audio/mp3"></audio></center>
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
                                                                        <label for="soal_istima<?= $i.$k?>" class="mr-2" id="container-content"><?= $data?></label>
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
                                    <?php if($soal['no'] == 1) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item" id="soal-bg">
                                                <p><center>القسم الثاني : فهم التراكيب والتعبيرات</center></p>
                                            </li>
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
                                                                        <label for="soal_tarakib<?= $i.$k?>" class="mr-2" id="container-content"><?= $data?></label>
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
                                    <?php if($soal['no'] == 1) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p><center>القسم الثالث: فهم المقروء</center></p>
                                                <p>قال الرسول صلّى الله عليه وسلم : بينما رجل يمشي بطريق، اشتدّ عليه العطش، فوجد بئرا، فنزل فيها، فشرب منها ثمّ خرج، فإذا هو بكلب يلهث (يأكل الثرى من العطش) فقال : لقد بلغ هذا الكلب من العطش مثل الذي بلغ بي. فنزل البئر فملأ خفّه ماء، ثمّ أمسكه بفيه، ثمّ رقى، فسقى الكلب، فشكر الله له، فغفر له.</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 4) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>العمل نعمة من نعم الله، ولا يعرف هذه النعمة، إلا من فقدها بسبب مرض، أو غيره. ومع ذلك فبعض النّاس لا يحبون العمل، ويعتمدون على غيرهم، أو يتسوّلون في الطريق. قال الرسول صلى الله عليه وسلم : ما أكل أحد طعاما قطّ خيرا من أن يأكل من عمل يده، وقال : لأن يأخذ أحدكم حبله، ثمّ يغدو إلى الجبل، فيحتطب، فيبيع، فيأكل، ويتصدّق خير له من أن يسأل النّاس.</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 6) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>أصبحت مشكلة زيادة السكان من أهم المشكلات التى تعانى منها معظم دول العالم، وقد اتجهت معظم هذه الدول إلى تحديد النسل، فالصين-ألف مليون نسمة – قد حددت النسل طفلا للأسرة الواحدة وما زاد عن ذلك فهناك عقاب صارم للأبوين، ولكن الشعب الصينى مطيع للأوامر ولم تشذ عن هذا القانون إلا حالا تحددها الأطباء، وقد جعلت هذه المشكلة مشكلات اقتصادية واجتماعية كثيرة.</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 10) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>هناك خرافات تحدث دائما بين الآباء والأبناء. فالآباء ينظرون إلى الأبناء على أنهم كبار، وينسون فارقة السن بينهم، ويريدون من الأبناء أن يكونوا صورة ثانية منهم. والأبناء ينظرون إلى الأباء على أنهم من عصر قديم، وأنهم يفكرون تفكيرا متأخرا، ولايمكن أن يتفقوا معهم فى الرأى. وهذه هي أهم أسباب الخلاف. ولكن إذا نظر الأباء إلى أبنائهم نظرة أخرى ليفهموهم بطريقة أفضل، وإذا تذكروا كيف أنهم كانوا فى نفس هذا الموقف من آبائهم، لأدركوا أنهم يجب أن يغيروا معاملتهم لأبنائهم، ويكونوا أكثر صبرا وفهما. أما الأبناء فيجب أن يدركوا أن طاعة الوالدين من طاعة الله، أنهم فى كثير من الأحيان لايعرفون ماينفعهم وما يضرهم، وإذا أطاعوا أبويهم كان ذلك خيرا لهم وأفضل.</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 14) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>تأثّر العالم كثيرا – وخاصّة أوروبا – بحضارة المسلمين. وكان المسلمون في العصر العباسي، قد نشروا العلم والثقافة في مناطق واسعة، فقد وصلوا إلى الصين في الشّرق، وإلى بلاد السّودان في إفريقيا في الجانوب.</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 16) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p><cente<u>كانت</u> هناك ندوة مفيدة في كلية الآداب <u>أمس</u>. تكلّم فيها مدرّسون من الجامعة، وضيوف من خارج الجامعة. تكلّم الجميع عن فائدة الكتاقال المدرسون من الجامعة : إن الكتاب العاديّ سينتهي قريبا، ويترك مكانه الكتاب الإلكتروني. رفض بعض الضّيوف هذا الكلام وقالوا : إنّ الكتاب العاديّ سيبقي مهيمنا في هذا المجال وقتا طويلا، وستظل كل الدول الفقيرة تستعمل الكتاب العادي، وستستعمل الدول الغنية الكتاب الإلكتروني.</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 21) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>فكّر صديقي <u>أن يترك</u> العمل في الحكومة، وأن يعمل <u>تاجرا،</u> وفعلا فتح محلا صغيرا، لبيع الملابس، وبدأ يعامل النّاس معاملة طيبة، يبيع لهم الملابس رخيصة، فاشتهر كثيرا بين النّاس. وبعد سنة ترك صديقي المحلّ الصّغير، وفتح محلا كبيرا في وسط المدينة، وبعد ثلاث سنوات أنشأ شركة كبيرة لصناعة الملابس. أصبح صديقي <u>من أغنياء المدينة،</u> وقد أحبّه النّاس كثيرا، فهو رجل كريم يساعد النّاس في بناء المساجد والمدارس والمستشفيات.</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 26) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>حسن طالب إندونسي يدرس في الجامعة الإسلامية بالمدينة المنورة سافر حسن إلى المدينة المنورة قبل ثلاث سنوات لتعليم اللغة العربية ويدرس الإسلام. يتحدث حسن العربية الآن جيدا، وقد بدأ حفظ القرآن في بلده، والآن يحفظه كله. أصبح حسن الآن يفهم أحاديث الرسول صلى الله عليه وسلم، ويقرأ الكتب العربية والمجلات الأسبوعية والصحف اليومية. بعد هذه السنوات الثلاث يستطيع حسن أن يكتب باللغة العربية. فقد كتب إلى أصدقائه وقال لهم: "إن اللغة العربية لغة سهلة، وهي لغة العبادة لأكثر من مليار من المسلمين ولغة القرآن والإسلام.</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 30) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>‏ القرآن كلام الله المعجز المنزل على محمد صلى الله عليه وسلم المكتوب في المصاحف المنقول بالتواتر المتعبد بتلاوته. ويفرق بين القرآن والحديث النبوي بأن القرآن لفظه ومعناه من عند الله، أما الحديث النبوي فمعناه من عند الله ولفظه من النبي صلى الله عليه وسلم على القول الصحيح. ويفرق بين القرآن والحديث القدسي بأنهما وإن كان كل منهما لفظه ومعناه من عند الله على الصحيح إلا ان الحديث القدسي لم يقصد بلفظه الإعجاز.</p>
                                                <p>نزل القرآن من اللوح المحفوظ الى بيت العزة في السماء الدنيا جملة واحدة، ومن السماء الدنيا الى النبي صلى الله عليه وسلم مفرقا حسب الوقائع والحوادث ومقتضايات الأحوال. ويسمى العلماء القطعة التي نزلت دفعة واحدة نجما. وللتنجيم حكم كثيرة، منها لتثبيت فؤاد النبي صلى الله عليه وسلم، ودليلها قوله تعالى : "وقال الذين كفروا لولا نزل عليه القرآن جملة واحدة كذلك لنثبت به فؤادك."</p>
                                                <p>وسور القرآن الكريم مائة وأربع عشرة سورة بإجماع من يعتد بإجماعه. وقد قسمها العلماء الى أربعة أقسام، وهي : الطول، والمئين، والمثاني، والمفصل.</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 35) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>إن أخلاقيات الأفراد تؤثر على نظرتهم إلى العمل الذي هو أساس أي عملية إنتاجية، فقد وجدنا أن ‏عنصر العمل ضروري لأي نشاط اقتصادي، وبدون العنصر لا يمكن قيام أو استمرار العملية الإنتاجية. وقد ‏وجدنا أن الأفراد في المجتمعات المتقدمة اقتصاديا ينظرون إلى العمل باحترام شديد وبنوع من القداسة، فهم ‏بذلك يتقنون الأعمال التي يقومون بها ولا يتهاونون في أدائها على أحسن وجه عالمين أن ذلك سيكون في ‏مصلحتهم ومصلحة المجتمع كلهم. وقد أكد الإسلام على هذه العلاقة بين العمل ومستوى الإنتاج في الحديث ‏الشريف : "إن الله يحب إذا عمل أحدكم أن يتقنه."‏</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 39) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>رغم أن الإسلام يكفل حرية للأفراد في البيع والشراء والتنافس، فإنه ينكر أشدّ الإنكار أن تدفع ‏أنانيتهم وطمعهم الشخصي إلى التضخم المالي على حساب غيرهم والإثراء ولو من أقوات الشعب ‏وضرورياته. ومن أجل ذلك نهى رسول الله صلى الله عليه وسلم عن الاحتكار بعبارة شديدة، فقال : "من احتكر الطعام ‏أربعين ليلة فقد برئ الله منه". وقال : "الجالب مرزوق والمحتكر ملعون".‏</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 42) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>یا محمد ابعث  لی هذه الرسالة بالبرید الإلکترونی إلی الحج یوسف فی کوالا لمبور، واکتب له أن یحضر إلینا هنا فی الریاض، بعد رمضان مباشر، حتی ندخل الشبکة الدولیة إلی مکتبنا فی البیان کما فعلنا فی مکتبنا فی کوریا. </p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 44) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>التعاون فی المجتمع من مقومات بقا‌‌ئه، به یحیا الفرد وبه تحیا الجماعة. {ولو دققنا النظر فی کل شیئ <u>نستخدمه</u> لوجدنا أنه لم (یصل) إلینا إلا یعد أن تضافرت الأیدی (الکثیرة) فی إنتاجه}. ویمکن أن نتصور قدر التعاون فی المجتمع، ولو تصورنا أن کل فرد بدأ یعمل وحده٫ ودون أن یمدیده إلی شیئ من عمل غیره لاشك أن الهلاك سوف یصیب (البشریة). ولهذا یبدو المجتمع کأنه جدار متین. وما الأفراد فیه ألا حجارة صماء٫  وقد حث الله تعالی علی التعاون بقوله: ؛وتعاونوا علی البر والتقوی ولا تعاونوا علی الإثم والعدوان.</p>
                                            </li>
                                        </ul>
                                    <?php elseif($soal['no'] == 46) :?>
                                        <ul class="list-group">
                                            <li class="list-group-item text-right" id="soal-bg">
                                                <p>تخرج زوجتي كل يوم في الصّباح، ولا ترجع إلا في السّاعة الخامسة مساءً، هذه مشكلتي معها. نحن نتناول الوجبات خارج البيت: لأنّ زوجتي لا تجد وقتاً لإعداد الطّعام، وأنا أغسل ملابسي وملابس أبنائنا وحدي، وأنظّف البيت أحياناً بعد التدريس ظهرا. لا أجد وقتا للحديث معها في أمور البيت والأسرة: لأنها عندما ترجع تكون متعبةً  .أمّا في عطلة الأسبوع، فهي تحبّ أن تزور الأهل والصّديقات، أو تذهب إلى السّوق، أو تحضّر دروس الأسبوع القادم أو تعالج المرضى في البيت.</p>
                                            </li>
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
                                                                        <label for="soal_qiroah<?= $i.$k?>" class="mr-2" id="container-content"><?= $data?></label>
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
        let alamat = $("#alamat").val();

        if(email == "" || nama == "" || no_wa == "" || t4_lahir == "" || tgl_lahir == "" || alamat == ""){
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
        if($('input:radio.soal_istima:checked').length != 50){
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
        if($('input:radio.soal_istima:checked').length != 50){
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