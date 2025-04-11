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
    <link rel="shortcut icon" type="image/jpg" href="images/original.jpg">
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
                            <li><?= Html::a('TK', ['site/tk'], ['class' => '']) ?></li>
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
                                <h1 class="wow fadeInDown">TAMAN SAHABAT QURAN</h1>
                                <p class="wow fadeInDown" data-wow-delay="0.3s">Pendidikan merupakan modal dasar untuk terciptanya manusia yang berkualitas. Oleh karenanya pendidikan merupakan investasi terpenting yang harus dilakukan setiap orang tua terhadap anaknya.
                                    Usia dini merupakan masa terbaik bagi pembentukan karakter seorang anak, sekaligus masa belajar yang potensial bagi mereka.
                                    Oleh karena itu KB/TK/QTA AL-IZZAH berkomitmen untuk menyelenggarakan pendidikan berkualitas guna membentuk generasi Pencinta Al-Quran berakhlakul karimah, kreatif, dan inovatif.
                                </p>
                                <div class="wow fadeInDown" data-wow-delay="0.3s">
                                    <?= Html::a('Pendaftaran Online TKIT Al-Izzah', ['form-tk/create'], ['class' => 'btn btn-default btn-home', 'role' => 'button', 'target' => '_blank']) ?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 wow zoomIn">
                            <div class="block">
                                <div class="counter text-center">
                                </div>
                            </div>
                        </div> -->
                    </div><!-- .row close -->
                </div><!-- .container close -->
            </section><!-- header close -->



        <!-- 
        About start
        ==================== -->
        <section id="abouttk" class="section">
            <div class="container">
                <div class="row">
                    <center><h3><b>VISI DAN MISI</b></h3></center>
                    <br>
                    <div class="col-md-6 col-sm-12 wow fadeInRight">
                        <div class="block">
                            <!-- <div class="card" style="width: 18rem;"> -->
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p>Mendidik generasi sholeh, cerdas, mandiri, berakhlak islami, dan berwawasan qurani</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="block">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p>Menanamkan nilai-nilai aqidah yang lurus, mengajarkan ibadah yang benar, membiasakan akhlaq islami, mendidik anak agar inovatif, kreatif, dan cinta kepada Al-Quran.</p></li>
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
                        <center><h3><b>OUTING LEARNING</b></h3></center>
                    </div>
                    <div class="col-sm-12 col-md-12 wow fadeInRight">
                        <div class="service">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a data-toggle="tab" href="#home">Renang</a></li>
                                <li><a data-toggle="tab" href="#menu1">Memanah</a></li>
                                <li><a data-toggle="tab" href="#menu2">Manasik Haji</a></li>
                                <li><a data-toggle="tab" href="#menu3">Fun Cooking</a></li>
                                <li><a data-toggle="tab" href="#menu4">Markets Day</a></li>
                            </ul>
                            <br>
                            <div class="tab-content">
                              <div id="home" class="tab-pane fade in active">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Renang</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Rasulullah bersabda ajarilah anakmu berenang dan memanah.... Kegiatan renang yg kami adakan bertujuan untuk melatih siswa agar punya ketahanan fisik yg kuat dan mempunyai skil berenang yang sangat bermanfaat bagi kesehatan dan kekuatan tubuh mereka. Selain itu, mereka pun merasakan bahagia saat berenang bersama.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/tk/1.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Memanah</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Memanah mengajarkan siswa dalam melatih kesabaran, focus pada tujuan serta kekuatan.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/tk/2.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Manasik Haji</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Manfaat Peragaan Manasik Haji bagi Anak Usia Dini. Tujuan kegiatan ini adalah untuk menanamkan sikap religius terhadap anak usia dini, sekaligus mengenalkan rukun Islam yang kelima, yakni menjalankan ibadah haji.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/tk/3.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Fun Cooking</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Fun Cooking anak yang fokus pada pendidikan untuk memberikan stumulasi tumbuh kembang anak sesuai usianya. Fun Cooking bermanfaat untuk  mengasah kemampuan mototik anak, terutama motorik halus. Motorik halus merupakan aktivitas yang dilakukan anak dengan menggunakan keterampilan-keterampilan tangan maupun kakinya.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/tk/4.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Markets Day</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Tujuan markets day adalah mengasah kemampuan logika siswa agar dapat berfikir lebih kreatif. serta mampu menerima informasi dengan baik. Dalam hal ini, semua yang dimainkan siswa berbentuk peran dan simbolik. Jadi tujuan siswa mengetahui atau “bermain peran penjual dan pembeli”.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/tk/5.png" class="img-responsive">
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
                <!-- <div class="block"> -->
                    <div class="col-md-6 col-sm-12 wow fadeInRight">
                        <div class="block">
                            <div class="card-header" style="background-color: #82c25a; padding: 5px;">
                                <b style="color: #fff">PERSYARATAN</b>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <b><ul>1. Melunasi Biaya Pendaftaran</ul></b>
                                    <b><ul>2. Lulus Seleksi</ul></b>
                                    <b><ul>3. Daftar Ulang dan Melunasi Biaya Pendidikan</ul></b>
                                    <b><ul>4. Melengkapi Berkas Pendaftaran : </b>
                                        <ul>a. Mengisi Formulir Pendaftaran</ul>
                                        <ul>b. Foto Copy Akte Kelahiran 1 Lembar</ul>
                                        <ul>c. Foto Copy Kartu Keluarga 1 Lembar</ul>
                                        <ul>d. Foto Copy KTP Orang Tua Masing-Masing 1 Lembar</ul>
                                        <ul>e. Pas Foto Berukuran 2x3 Sebanyak 4 Lembar</ul>
                                        <ul>f. Pas Foto Berukuran 3x4 Sebanyak 4 Lembar</ul>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="col-md-12 wow text-center">
                            <div id="accordion">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <button class="btn btn-warning" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Target Pendidikan <i class="fa fa-angle-down" aria-hidden="true"></i>
                                  </button>
                                  <br>
                                  <br>
                              </h5>
                          </div>
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <b><p>Dapat Membaca Al-Quran</p></b>
                                <b><p>Hafal Al-Quran 1 Juz</p></b>
                                <b><p>Hafal hadits-hadits pilihan</p></b>
                                <b><p>Hafal doa-doa harian</p></b>
                                <b><p>Mampu membaca</p></b>
                                <b><p>Menguasai matematika dasar</p></b>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </section><!-- #call-to-action close -->

        <section id="abouttk" class="section">
            <div class="container">
                <div class="row">
                    <center><h3><b>RINCIAN BIAYA DAN ALUR PENDAFTARAN</b></h3></center>
                    <br>
                    <div class="col-md-6 col-sm-12 wow fadeInRight">
                        <div class="block">
                            <div class="card-header">
                                <button class="btn btn-success">RINCIAN BIAYA TK A</button>
                            </div>
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Biaya</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Seragam</td>
                                <td><b>Rp.</b> 1.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>BPP</td>
                                <td><b>Rp.</b> 1.500.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>SPP+POMG JULI 2020</td>
                                <td><b>Rp.</b> 220.000</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Raport & Perlengkapan Belajar</td>
                                <td><b>Rp.</b> 450.000</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Uang Kegiatan 1 Tahun</td>
                                <td><b>Rp.</b> 1.600.000</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><b>TOTAL</b></td>
                                <td><b>Rp. 4.770.000</b></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Formulir</td>
                                <td><b>Rp.</b> 100.000</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Tes Kemampuan Dasar</td>
                                <td><b>Rp.</b> 150.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 wow fadeInRight">
            <div class="block">
                <div class="card-header">
                    <button class="btn btn-warning">ALUR PENDAFTARAN PPDB 2020-2021</button>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal/Waktu</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Pengambilan Formulir Gelombang 1</td>
                    <td>11 November 2019 – 31 Januari 2020</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Pengembalian Formulir</td>
                    <td>11 November 2019 – 31 Januari 2020</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Tes Bakat dan Kemampuan</td>
                    <td>Menunggu Info Selanjutnya</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Wawancara Orang Tua</td>
                    <td>8 Februari 2020</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Pengumuman Hasil Tes dan Daftar Ulang Melunasi Biaya PPDB dan Pengukuran Seragam</td>
                    <td>15 Februari 2020</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Pengambilan Seragam</td>
                    <td>Awal Juni 2020</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Mulai KBM</td>
                    <td>Awal Juli 2020</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<b><p>Catatan : </p></b>
<p>1. Pengambilan formulir setelah tanggal 31 Januari 2020, masuk pada gelombang ke 2</p>
<p>2. Gelombang ke 2 dimulai dari tanggal 1 februari 2020 s/d 31 Maret 2020</p>
</section>


<section id="abouttk" class="section">
    <div class="container">
        <div class="row">
            <center><h3><b>RINCIAN BIAYA WISUDA</b></h3></center>
            <br>
            <div class="col-md-6 col-sm-12 wow fadeInRight">
                <div class="block">
                    <div class="card-header">
                        <button class="btn btn-primary">RINCIAN BIAYA TK B</button>
                    </div>
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
                        <td>Seragam</td>
                        <td><b>Rp.</b> 1.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>BPP</td>
                        <td><b>Rp.</b> 1.500.000</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>SPP+POMG JULI 2020</td>
                        <td><b>Rp.</b> 220.000</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Raport & Perlengkapan Belajar</td>
                        <td><b>Rp.</b> 450.000</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Uang Kegiatan 1 Tahun</td>
                        <td><b>Rp.</b> 1.600.000</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Uang Wisuda dan Perpisahan</td>
                        <td><b>Rp.</b> Rp. 450.000</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td><b>TOTAL</b></td>
                        <td><b>Rp. 5.220.000</b></td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Formulir</td>
                        <td><b>Rp.</b> 100.000</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Tes Kemampuan Dasar</td>
                        <td><b>Rp.</b> 150.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-6 col-sm-12 wow fadeInRight">
    <div class="block">
        <div class="card-header">
            <button class="btn btn-danger">RINCIAN BIAYA WISUDA TK B</button>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Harga</th>
                <th scope="col">Biaya</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Sewa Baju Wisuda</td>
            <td><b>Rp.</b> 60.000</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Foto</td>
            <td><b>Rp.</b> 60.000</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Plakat dan CD</td>
            <td><b>Rp.</b> 100.000</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Sewa Kursi dan Tenda</td>
            <td><b>Rp.</b> 40.000</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Perlengkapan Sie Acara</td>
            <td><b>Rp.</b> 40.000</td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>Backdrop dan Hiasan</td>
            <td><b>Rp.</b> 40.000</td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td>Dokumentasi</td>
            <td><b>Rp.</b> 40.000</td>
        </tr>
        <tr>
            <th scope="row">8</th>
            <td>Komsumsi (Snack dan Lunch)</td>
            <td><b>Rp.</b> 70.000</td>
        </tr>
        <tr>
            <th scope="row">9</th>
            <td><b>TOTAL</b></td>
            <td><b>Rp. 450.000</b></td>
        </tr>
    </tbody>
</table>
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
                            <div class="heading wow fadeInRight">
                                <center><h3><b style="color: #fff">GALLERY</b></h3></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInUp">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/tk/gallery/1.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInUp">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/tk/gallery/2.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInUp">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/tk/gallery/3.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInUp">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/tk/gallery/4.png" class="img-responsive">
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
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p> -->
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63457.07902999484!2d106.68792983078394!3d-6.254845819097232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x2e69fa7898fd10dd%3A0x7a6057b36092451!2sAl%20Izzah%20ust%20Salbini%2C%20Jl.%20Pd.%20Blimbing%20No.34%2C%20West%20Jurang%20Manggu%2C%20Pondok%20Aren%2C%20South%20Tangerang%20City%2C%20Banten%2015223!3m2!1d-6.2549323!2d106.72294959999999!5e0!3m2!1sen!2sid!4v1578920383643!5m2!1sen!2sid" width="460" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
