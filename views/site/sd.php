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
                            <li><?= Html::a('SD', ['site/sd'], ['class' => '']) ?></li>
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
                                <h1 class="wow fadeInDown">Bermain dan Belajar SD AL-IZZAH</h1>
                                <p class="wow fadeInDown" data-wow-delay="0.3s">Sekolah Islam Terpadu Al-Izzah menjadi sekolah Islam yang berkomitmen untuk menyelenggarakan pendidikan berkualitas guna membentuk generasi Pencinta Al-Qur'an berakhlakul karimah, mandiri, kreatif, dan inovatif. Dengan konsep pendidikan Islam Terpadu Kini Al-Izzah menjadi salah satu sekolah islam favorit serta terpercaya di wilayah Tangerang selatan.</p>
                                <div class="wow fadeInDown" data-wow-delay="0.3s">
                                    <?= Html::a('Pendaftaran Online SDIT Al-Izzah', ['form-sd/create'], ['class' => 'btn btn-default btn-home', 'role' => 'button', 'target' => '_blank']) ?>
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
                    <center><h3><b>SISTEM PENDIDIKAN</b></h3></center>
                    <br>
                    <div class="col-md-6 col-sm-12 wow fadeInRight">
                        <!-- <div class="sub-heading">
                            SAKNSNJKASNJ
                        </div> -->

                        
                        <div class="block">
                            <!-- <div class="card" style="width: 18rem;"> -->
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p>Sistem Pendidikan yang mengimplementasikan kurikulum nasional dan muatan local yang dikemas dalam pembelajaran.</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="block">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p>Pendekatan Saintigik (Problem Based Learning and Cooperative Learning) Serta integrase nilai-nilai islami dalam pembelajaran baik di dalam maupun di luar kelas</p></li>
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
                        <center><h3><b>PROGRAM KESISWAAN</b></h3></center>
                    </div>
                    <div class="col-sm-12 col-md-12 wow fadeInRight">
                        <div class="service">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a data-toggle="tab" href="#homes">Kunjungan Edukatif</a></li>
                                <li><a data-toggle="tab" href="#menu1">Field Trip</a></li>
                                <li><a data-toggle="tab" href="#menu2">Sosial</a></li>
                                <li><a data-toggle="tab" href="#menu3">Pramuka</a></li>
                                <li><a data-toggle="tab" href="#menu4">Quran Camp</a></li>
                                <li><a data-toggle="tab" href="#menu5">Market Day</a></li>
                                <li><a data-toggle="tab" href="#menu6">Fun Cooking</a></li>
                            </ul>
                            <br>
                            <div class="tab-content">
                              <div id="homes" class="tab-pane fade in active">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Kunjungan Edukatif</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/program/1.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Field Trip</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Field Trip bertujuan agar siswa mendapatkan wawasan lebih mengenai suku, budaya, sosial dalam suatu daerah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/program/2.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Sosial</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Perilaku sosial pada anak usia dini diarahkan untuk pengembangan sosial yang baik, seperti kerjasama, tolong menolong, berbagi, simpati, empati dan saling membutuhkan satu sama lain. Untuk itu sasaran pengembangan perilaku sosial pada anak usia dini ialah untuk keterampilan berkomunikasi, keterampilan, memiliki rasa senang dan periang, memiliki etika tata krama yang baik.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/program/3.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Pramuka</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Pramuka adalah suatu kegiatan diluar ruangan yang mengasyikan. Didalam pramuka banyak sekali kegiatan yang mengasyikan dan mendidik seperti halnya jelajah, melewati gorong-gorong, lintasan tali, flying fox, KIM BAU, survival, sandi dan masih banyak lagi. Kegiatan ini adalah sebuah permainan dan pembelajaran yang bertujuan untuk bersenang-senang namun dengan kegiatan ini anak bisa mengenal apa itu tenda dan peralatan yang lainnya.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/program/4.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Quran Camp</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Quran Camp adalah kegiatan membentuk karakter agar dapat menikmati keindahan yang diciptakan Allah dengan diiringi menghapal Al-Quran sambil camping. Kegiatan ini bertujuan membentuk generasi yg sehat, kuat, dan disiplin dalam segala hal.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/program/5.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu5" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Market Day</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Tujuan markets day adalah mengasah kemampuan logika siswa agar dapat berfikir lebih kreatif. serta mampu menerima informasi dengan baik. Dalam hal ini, semua yang dimainkan siswa berbentuk peran dan simbolik. Jadi tujuan siswa mengetahui atau “bermain peran penjual dan pembeli”.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/program/6.png" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu6" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Fun Cooking</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Fun Cooking anak yang fokus pada pendidikan untuk memberikan stumulasi tumbuh kembang anak sesuai usianya. Fun Cooking bermanfaat untuk  mengasah kemampuan mototik anak, terutama motorik halus. Motorik halus merupakan aktivitas yang dilakukan anak dengan menggunakan keterampilan-keterampilan tangan maupun kakinya.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/program/7.png" class="img-responsive">
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
                <div class="col-md-12 wow text-center">
                    <!-- <div class="block"> -->
                        <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                            <img src="images/sd/2.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
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
                                <b><p>Hafal 5 Juz Al-Quran</p></b>
                                <b><p>Dapat berkomunikasi Bahasa Arab dan Inggris</p></b>
                                <b><p>Berprestasi dalam Ujian Nasional</p></b>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section><!-- #call-to-action close -->

        <section id="abouttk" class="section">
            <div class="container">
                <div class="row">
                    <!-- <center><h3><b>SISTEM PENDIDIKAN</b></h3></center> -->
                    <br>
                    <div class="col-md-6 col-sm-12 wow fadeInRight">
                        <div class="block">
                            <div class="card-header" style="background-color: #82c25a; padding: 5px;">
                                <b style="color: #fff">PERSYARATAN</b>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <b><ul>1. Mengisi Formulir Online</ul></b>
                                    <b><ul>2. Usia peserta didik baru minimal 6 tahun</ul></b>
                                    <b><ul>3. Menyertakan :</b>
                                        <ul>a. Fotocopy Akte Kelahiran (dibawa saat sudah mengisi formulir online dan dapat konfirmasi dari pihak Al-Izzah)</ul>
                                        <ul>b. Fotocopy kartu keluarga</ul>
                                        <ul>c. Pas Foto Ukuran : </ul>
                                        <ul>- 2*3 sebanyak 4 Lembar</ul>
                                        <ul>- 3*4 sebanyak 4 Lembar</ul>
                                    </ul>
                                    <b><ul>4. Melunasi Biaya Pendaftaran</ul></b>
                                    <b><ul>5. Lulus Seleksi</ul></b>
                                    <b><ul>6. Daftar Ulang dan Melunasi Biaya Pendidikan</ul></b>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="block">
                            <div class="card-header" style="background-color: #82c25a; padding: 5px;">
                                <b style="color: #fff">WAKTU BELAJAR</b>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <ul class="list-group list-group-flush">
                                    <!-- <li class="list-group-item"> -->
                                        <ul>Kelas 1-3</ul>
                                        <ul>Senin-jumat pukul 7.00-13.00</ul>
                                        <!-- </li> -->
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <ul class="list-group list-group-flush">
                                        <!-- <li class="list-group-item"> -->
                                            <ul>Kelas 3-6</ul>
                                            <ul>Senin-jumat pukul 7.00-14.30</ul>
                                            <!-- </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="abouttk" class="section">
                    <div class="container">
                        <div class="row">
                            <center><h3><b>RINCIAN BIAYA DAN ALUR PENDAFTARAN</b></h3></center>
                            <br>
                            <div class="col-md-6 col-sm-12 wow fadeInRight">
                                <div class="block">
                                    <div class="card-header">
                                        <button class="btn btn-success">RINCIAN BIAYA GELOMBANG 1</button>
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
                                        <td>BPP</td>
                                        <td><b>Rp.</b> 2.400.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Tes Bakat dan Kemampuan (Hasil dan Free Konsultasi)</td>
                                        <td><b>Rp.</b> 500.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>SPP</td>
                                        <td><b>Rp.</b> 350.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Seragam</td>
                                        <td><b>Rp.</b> 1.050.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Buku</td>
                                        <td><b>Rp.</b> 950.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Kegiatan 1 Tahun</td>
                                        <td><b>Rp.</b> 1.700.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>POMG/Bulan Juli 2020</td>
                                        <td><b>Rp.</b> 20.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td><b>TOTAL</b></td>
                                        <td><b>Rp. 6.970.000</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Formulir</td>
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


        <!-- 
        Contact start
        ==================== -->
        <section id="gallery" class="section" style="background-color: #6bb9f0">
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
                                <img src="images/sd/gallery/1.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInDown">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/sd/gallery/2.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInDown">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/sd/gallery/3.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 wow fadeInDown">
                        <div class="block text-left">
                            <div class="sub-heading">
                                <img src="images/sd/gallery/4.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="service" class="section">
            <div class="container">
                <div class="row">
                    <div class="heading wow fadeInUp">
                        <center><h3><b>OUTING LEARNING</b></h3></center>
                    </div>
                    <div class="col-sm-12 col-md-12 wow fadeInRight">
                        <div class="service">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a data-toggle="tab" href="#home">Memanah</a></li>
                                <li><a data-toggle="tab" href="#menu11">Tae Kwon Do</a></li>
                                <li><a data-toggle="tab" href="#menu12">Futsal</a></li>
                                <li><a data-toggle="tab" href="#menu13">Renang</a></li>
                            </ul>
                            <br>
                            <div class="tab-content">
                              <div id="home" class="tab-pane fade in active">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Memanah</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/1.jpg" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu11" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Tae Kwon Do</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/2.jpg" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu12" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Futsal</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/3.jpg" class="img-responsive">
                                </div>
                            </div>
                            <div id="menu13" class="tab-pane fade">
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <center><h3>Renang</h3></center>
                                    <br>
                                    <p style="text-align: justify;">Kunjungan Edukatif merupakan program favorite yang dimiliki program kesiswaan TK AL-Izzah. Setiap siswa wajib mengunjungi tempat yang menyenangkan agar siswa dapat mengenal hal-hal baru di luar sekolah.</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <img src="images/sd/4.png" class="img-responsive">
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
