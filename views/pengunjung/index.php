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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- shotcut icon -->
    <link rel="shortcut icon" type="image/jpg" href="images/original.jpg">

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
</head>

<body id="body">

    <div id="preloader">
        <div class="book">
          <div class="book__page"></div>
          <div class="book__page"></div>
          <div class="book__page"></div>
      </div>
  </div>

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
                            <li class="current"><a href="#body">Beranda</a></li>
                            <li><a href="#about">Tentang Kami</a></li>
                            <!-- <li><?= Html::a('Keunggulan', ['site/keunggulan'], ['class' => '', 'target' => '_blank']) ?></li> -->
                            <li><?= Html::a('TK', ['site/tk'], ['class' => '', 'target' => '_blank']) ?></li>
                            <li><?= Html::a('SD', ['site/sd'], ['class' => '', 'target' => '_blank']) ?></li>
                            <li><?= Html::a('SMP', ['site/smp'], ['class' => '', 'target' => '_blank']) ?></li>
                            <!-- <li><?= Html::a('Komunitas', ['site/komunitas'], ['class' => '', 'target' => '_blank']) ?></li> -->
                            <li><a href="#service">Pendaftaran</a></li>
                            <li><a href="#contact">Kontak</a></li>
                        </ul>
                    </nav><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </div>

            <section id="hero-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="block">
                                <h1 class="wow fadeInDown">Selamat Datang di Website Al-Izzah</h1>
                                <p class="wow fadeInDown" data-wow-delay="0.3s">Sekolah Islam Terpadu Al-Izzah menjadi sekolah Islam yang berkomitmen untuk menyelenggarakan pendidikan berkualitas guna membentuk generasi Pencinta Al-Qur'an berakhlakul karimah, mandiri, kreatif, dan inovatif. Dengan konsep pendidikan Islam Terpadu Kini Al-Izzah menjadi salah satu sekolah islam favorit serta terpercaya di wilayah Tangerang selatan.</p>
                                <div class="wow fadeInDown" data-wow-delay="0.3s">
                                    <a class="btn btn-default btn-home" href="#service" role="button">Info Pendaftaran</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn">
                            <div class="block">
                                <div class="counter text-center">
                                    <ul id="countdown_dashboard">
                                        <img src="images/brosur2.png" class="img-responsive">
                                        <!-- <li>
                                            <div class="dash days_dash">
                                                <div class="digit">0</div>
                                                <div class="digit">0</div>
                                                <div class="digit">0</div>
                                                <span class="dash_title">Days</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dash hours_dash">
                                                <div class="digit">0</div>
                                                <div class="digit">0</div>
                                                <span class="dash_title">Hours</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dash minutes_dash">
                                                <div class="digit">0</div>
                                                <div class="digit">0</div>
                                                <span class="dash_title">Minutes</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dash seconds_dash">
                                                <div class="digit">0</div>
                                                <div class="digit">0</div>
                                                <span class="dash_title">Seconds</span>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row close -->
                </div><!-- .container close -->
            </section><!-- header close -->



        <!-- 
        About start
        ==================== -->
        <section id="about" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 wow fadeInLeft">
                        <div class="sub-heading">
                            <h3>Tentang Al-Izzah</h3>
                        </div>
                        <div class="block" style="text-align: justify">
                            <p>Yayasan Al-Izzah adalah lembaga yang bergerak di bidang pendidikan, sosial dan dakwah. Yayasan Al-Izzah didirikan pada bulan desember 2015. Lembaga pendidikan formal yang kami kelola saat ini dimulai dari TKIT, SDIT, dan SMPIT. Visi kami adalah menjadi lembaga pendidikan yang berbasis al-quran, unggul dalam prestasi dan berakhlak islami. Misi kami adalah menanamkan rasa cinta kepada al-quran dan menumbuhkan semangat untuk menghafalnya.
                                <p>Target hafalan taman kanak-kanak ditargetkan 2 juz Al-Quran, untuk siswa/siswi sd ditargetkan 5 juz, dan untuk tingkat SMP ditargetkan minimal 5 juz. Lembaga ini mendorong siswa untuk menghafal al-quran, juga siswa mampu berkomunikasi dengan bahasa arab dan inggris, serta berprestasi dalam ujian nasional. Lembaga ini masih sederhana namun cita-cita kami sangat tinggi untuk membentuk generasi yang cinta kepada al-quran.</p>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="about-slider">
                                <div class="init-slider">
                                    <div class="about-item">
                                        <img src="images/about/one.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="about-item">
                                        <img src="images/about/two.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="about-item">
                                        <img src="images/about/three.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
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
                        <h2>Pendaftaran Online</h2>
                        
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInLeft">
                        <div class="service">
                            <div class="icon-box">
                                <span class="icon">
                                    <i class="ion-map"></i>
                                    <!-- <img src="images/tk.png"> -->
                                </span>
                            </div>
                            <div class="caption">
                                <h3>TKIT Al-Izzah</h3>
                                <?= Html::a('Pendaftaran Online TKIT Al-Izzah', ['form-tk/create'], ['class' => 'btn btn-success', 'target' => '_blank']) ?>
                                <!-- <button class="btn btn-success"></button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="service">
                            <div class="icon-box">
                                <span class="icon">
                                    <i class="ion-navigate"></i>   
                                </span>
                            </div>
                            <div class="caption">
                                <h3>SDIT Al-Izzah</h3>
                                <?= Html::a('Pendaftaran Online SDIT Al-Izzah', ['form-sd/create'], ['class' => 'btn btn-success', 'target' => '_blank']) ?>
                                <!-- <button class="btn btn-success">Pendaftaran Online SDIT Al-Izzah</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="service">
                            <div class="icon-box">
                                <span class="icon">
                                    <i class="ion-ios-infinite-outline"></i>   
                                </span>
                            </div>
                            <div class="caption">
                                <h3>SMPIT Al-Izzah</h3>
                                <?= Html::a('Pendaftaran Online SMPIT Al-Izzah', ['form-smp/create'], ['class' => 'btn btn-success', 'target' => '_blank']) ?>
                                <!-- <button class="btn btn-success">Pendaftaran Online SMPIT Al-Izzah</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="service">
                            <div class="icon-box">
                                <span class="icon">
                                    <i class="ion-ios-cloud-outline"></i>   
                                </span>
                            </div>
                            <div class="caption">
                                <h3>Cloud Option</h3>
                                <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div><!-- .container close -->
        </section><!-- #service close -->

        <section id="call-to-action" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow text-center">
                        <div class="block">
                            <!-- <h2>Al-Izzah News</h2> -->
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p> -->
                            <!-- <div class="form-group"> -->
                                <!-- <input type="text" class="form-control" placeholder="Enter Your Email Address">
                                    <button class="btn btn-default btn-submit" type="submit">Get Notified</button> -->
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                       <iframe width="430" height="250" src="https://www.youtube.com/embed/KyYpr3gUSFY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                   </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <iframe width="430" height="250" src="https://www.youtube.com/embed/Jdaf8Optl6I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- #call-to-action close -->

        <!-- 
        Contact start
        ==================== -->
        <section id="contact" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="block">
                            <div class="heading wow fadeInUp">
                                <h2>Informasi Kontak</h2>
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
