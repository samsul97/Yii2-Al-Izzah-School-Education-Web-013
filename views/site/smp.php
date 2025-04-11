<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEKOLAH QURAN AL-IZZAH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/jpg" href="images/original.jpg">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <!-- Lato -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- shotcut icon -->
    
</head>

<body id="body">

    <!-- <div id="preloader">
        <div class="book">
          <div class="book__page"></div>
          <div class="book__page"></div>
          <div class="book__page"></div>
      </div>
  </div> -->

        <!-- 
        Header start
        ==================== -->
        <div class="navbar-default navbar-fixed-top animated" id="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <a class="navbar-brand" href="#">
                            <img class="logo-1" src="images/original-1.png" alt="LOGO">
                            <img class="logo-2" src="images/original-2.png" alt="LOGO">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <nav class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav navbar-right" id="top-nav">
                            <li class=""><a href="index.php">Beranda</a></li>
                            <li><?= Html::a('SMP', ['site/smp'], ['class' => '']) ?></li>
                            <!-- <li><a href="tk.php">TK</a></li>
                            <li><a href="sd.php">SD</a></li>
                            <li><a href="smp.php">SMP</a></li> -->
                        </ul>
                    </nav><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </div>

            <section id="hero-areatk">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h1 class="wow fadeInDown">BERPRESTASI DAN BERAKHLAQ ISLAMI</h1>
                                <p class="wow fadeInDown" data-wow-delay="0.3s">Pendidikan merupakan modal dasar untuk terciptanya manusia yang berkualitas. Oleh karenanya pendidikan merupakan investasi terpenting yang harus dilakukan setiap orang tua terhadap anaknya.
                                    Usia dini merupakan masa terbaik bagi pembentukan karakter seorang anak, sekaligus masa belajar yang potensial bagi mereka.
                                Oleh karena itu SMP AL-IZZAH berkomitmen untuk menyelenggarakan pendidikan berkualitas guna membentuk generasi Pencinta Al-Quran berakhlakul karimah, kreatif, dan inovatif.</p>
                                <div class="wow fadeInDown" data-wow-delay="0.3s">
                                    <?= Html::a('Pendaftaran Online SMPIT Al-Izzah', ['form-smp/create'], ['class' => 'btn btn-default btn-home', 'role' => 'button', 'target' => '_blank']) ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row close -->
                </div><!-- .container close -->
            </section><!-- header close -->



        <!-- 
        About start
        ==================== -->
        <section id="abouttk" class="section">
            <div class="container">
                <div class="row">
                    <center><h3><b>METODE PEMBELAJARAN</b></h3></center>
                    <br>
                    <div class="col-md-3 col-sm-12 wow fadeInRight">
                        <div class="block">
                            <!-- <div class="card" style="width: 18rem;"> -->
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p><b>Sistem Klasikal : </b><ul> Diselenggarakan pukul 07.00-14.30 WIB selama 5 hari setiap pekan</ul></p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="block">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p><b>Belajar di kelas : </b></p>
                                    <ul>•   Murojaah = mengulang hafalan agar terbiasa</ul>
                                    <ul>•   Mutabaah Yaumiyah = Pembiasaan ibadah pagi setiap hari</ul>
                                    <ul>•   Pembinaan untuk memperbaiki bacaan Al-Quran dan menambah hafalan baru</ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="block">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p><b>Pembinaan Tahsin dan Tahfidz</b></p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="block">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p><b>Penguasaan Bahasa : </b><ul>Mendalami serta praktik Bahasa Indonesia, Arab, dan Inggris (Khusus Bahasa Inggris pendalaman di kegiatan English selama 1 Bulan.</ul></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->

        <!-- 
        Service start
        ==================== -->
        <section id="service" class="section">
            <div class="container">
                <div class="row">
                    <div class="heading wow fadeInUp">
                        <center><h3><b>EKSTRAKURIKULER</b></h3></center>
                    </div>
                    <div class="col-sm-12 col-md-12 wow fadeInRight">
                        <div class="service">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a data-toggle="tab" href="#home">PRAMUKA</a></li>
                                <li><a data-toggle="tab" href="#menu1">FUTSAL</a></li>
                                <li><a data-toggle="tab" href="#menu2">TAPAK SUCI</a></li>
                                <li><a data-toggle="tab" href="#menu3">QIROAT</a></li>
                                <li><a data-toggle="tab" href="#menu4">TARI SAMAN</a></li>
                                <li><a data-toggle="tab" href="#menu5">MUHADHOROH</a></li>
                            </ul>
                            <br>
                            <div class="tab-content">
                              <div id="home" class="tab-pane fade in active">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>PRAMUKA</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/smp/gallery/1.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>FUTSAL</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/smp/gallery/2.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>TAPAK SUCI</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/smp/gallery/3.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>QIROAT</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/smp/gallery/4.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>TARI SAMAN</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/smp/gallery/5.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu5" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>MUHADHOROH</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/smp/gallery/6.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="caption">

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container close -->
    </section><!-- #service close -->

    <section id="abouttk" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 wow fadeInRight">
                    <div class="block">
                        <div class="card-header" style="background-color: #82c25a; padding: 5px;">
                            <b style="color: #fff">PERSYARATAN</b>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <b><ul>1. Surat Keterangan Lulus SD/MI</ul></b>
                                <b><ul>2. Mengisi Formulir Pendaftaran</ul></b>
                                <b><ul>3. Pas Foto 3x4 berwarna 4 Lembar :</b>
                                    <b><ul>4. Surat Keterangan/Kartu Nisn</ul></b>
                                    <b><ul>5. Fotocopy Akte Kelahiran</ul></b>
                                    <b><ul>6. Fotocopy Akte Keluarga</ul></b>
                                    <b><ul>6. Untuk pindahan (Menyertakan Surat Keterangan Pindah)</ul></b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="service" class="section">
            <div class="container">
                <div class="row">
                    <div class="heading wow fadeInUp">
                        <center><h3><b>`</b></h3></center>
                    </div>
                    <div class="col-sm-12 col-md-12 wow fadeInRight">
                        <div class="service">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a data-toggle="tab" href="#homes">GEDUNG MILIK SENDIRI</a></li>
                                <li><a data-toggle="tab" href="#menu11">RUANG KELAS AC</a></li>
                                <li><a data-toggle="tab" href="#menu22">LABORATORIUM IPA</a></li>
                                <li><a data-toggle="tab" href="#menu33">MUSHOLLA</a></li>
                                <li><a data-toggle="tab" href="#menu44">SARANA OLAHRAGA</a></li>
                            </ul>
                            <br>
                            <div class="tab-content">
                              <div id="homes" class="tab-pane fade in active">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>GEDUNG MILIK SENDIRI</h3></center>
                                    <br>
                                    <p>Yayasan Al-Izzah mempunyai 3 Gedung menyatu dalam satu kawasan diantaranya gedung guru, gedung siswa, dan gedung yayasan.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/fasilitas/1.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu11" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>RUANG KELAS AC RESPRESENTATIF</h3></center>
                                    <br>
                                    <p>Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/fasilitas/2.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu22" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>LABORATORIUM IPA</h3></center>
                                    <br>
                                    <p>Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/fasilitas/3.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu33" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>MUSHOLLA</h3></center>
                                    <br>
                                    <p>Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/fasilitas/4.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu44" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>SARANA OLAHRAGA</h3></center>
                                    <br>
                                    <p>Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/fasilitas/5.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container close -->
    </section><!-- #service close -->


    <section id="abouttk" class="section">
        <div class="container">
            <div class="row">
                <center><h3><b>RINCIAN BIAYA</b></h3></center>
                <br>
                <div class="col-md-12 col-sm-12 wow fadeInRight">
                    <div class="block">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Administrasi</th>
                                <th scope="col">Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Kegiatan 1</td>
                            <td><b>Rp.</b> 1.995.000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Pengembangan Pembangunan</td>
                            <td><b>Rp.</b> 1.750.000</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Seragam</td>
                            <td><b>Rp.</b> 995.000</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>SPP+POMG</td>
                            <td><b>Rp.</b> 350.000</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Buku</td>
                            <td><b>Rp.</b> 750.000</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Formulir</td>
                            <td><b>Rp.</b> 150.000</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Tes Kemampuan Dasar dan Psikologi</td>
                            <td><b>Rp.</b> 150.000</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td><b>TOTAL</b></td>
                            <td><b>Rp.</b> 5.630.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</section>


        <!-- 
        Contact start
        ==================== -->
        <section id="contact" class="section" style="background-color: #6bb9f0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="block">
                            <div class="heading wow fadeInLeft">
                                <center><h3><b style="color: #fff">GALLERY</b></h3></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInDown">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/smp/1.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInDown">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/smp/2.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInDown">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/smp/3.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInDown">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/smp/4.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        Contact start
        ==================== -->
        <section id="contact" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="block">
                            <div class="heading wow fadeInUp">
                                <center><h3><b>INFORMASI KONTAK</b></h3></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <h4>Informasi dan Pendaftaran</h4>
                                <p>Jl. Pondok Belimbing No.88 Kel.Jurang Mangu Barat, Kecamatan Pondok Aren, Kota Tangerang Selatan, Banten 15223.  </p>
                            </div>
                            <address class="address">
                                <hr>
                                <p>TKIT &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;081380441518<br>SDIT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;081380441518<br>SMPIT &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; 082260333730</p>
                                <hr>
                                <p><strong>Email :</strong>&nbsp;smpitalizza.pb@gmail.com<br>
                                    <strong>Pusat :</strong>&nbsp;+21 3948 2726</p>
                                    <hr>
                                    <div class="sub-heading">
                                        <a href="https://api.whatsapp.com/send?phone=6281380441518&text=Assalamualaikum,%20saya%20butuh%20info%20tentang%20Al-Izzah." target="_blank"><img src="images/wa-tk.png" style="width: 90px; height: 80px;"></a>
                                        <a href="https://api.whatsapp.com/send?phone=6281380441518&text=Assalamualaikum,%20saya%20butuh%20info%20tentang%20Al-Izzah." target="_blank"><img src="images/wa-sd.png" style="width: 90px; height: 80px;"></a>
                                        <a href="https://api.whatsapp.com/send?phone=6282260333730&text=Assalamualaikum,%20saya%20butuh%20info%20tentang%20Al-Izzah." target="_blank"><img src="images/wa-smp.png" style="width: 90px; height: 80px;"></a>
                                        <a href="http://facebook.com/" target="_blank"><img src="images/facebook.png" style="width: 80px; height: 70px;"></a>
                                        <a href="http://instagram.com/alizzahpondokaren" target="_blank"><img src="images/instagram.png" style="width: 80px; height: 70px;"></a>
                                    </div>
                                </address>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
                            <<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63457.07902999484!2d106.68792983078394!3d-6.254845819097232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x2e69fa7898fd10dd%3A0x7a6057b36092451!2sAl%20Izzah%20ust%20Salbini%2C%20Jl.%20Pd.%20Blimbing%20No.34%2C%20West%20Jurang%20Manggu%2C%20Pondok%20Aren%2C%20South%20Tangerang%20City%2C%20Banten%2015223!3m2!1d-6.2549323!2d106.72294959999999!5e0!3m2!1sen!2sid!4v1578920383643!5m2!1sen!2sid" width="460" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <section clas="wow fadeInUp">
                <div class="map-wrapper">
                </div>
            </section>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <p>Copyright &copy; <a href="http://www.sekolahquranalizzah.sch.id">Sekolah Islam Terpadu Al-Izzah</a>| All right reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


            <!-- Js -->
            <script src="js/vendor/modernizr-2.6.2.min.js"></script>
            <script src="js/vendor/jquery-1.10.2.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
            <script src="js/jquery.lwtCountdown-1.0.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/jquery.form.js"></script>
            <script src="js/jquery.nav.js"></script>
            <script src="js/jquery.sticky.js"></script>
            <script src="js/plugins.js"></script>
            <script src="js/wow.min.js"></script>
            <script src="js/main.js"></script>

        </body>
        </html>
