<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<?php
require_once('bdd.php');


$sql = "SELECT id, title, keterangan, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TRIP</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- header section -->
<section>
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">TRIP</a>
      <nav class="navigation" role="navigation">
      <ul class="primary-nav">
          <li><a href="index.php">Beranda</a></li>
              <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wisata <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a style="color:grey" href="wisataalam.php">Wisata Alam</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatasejarah.php">Wisata Sejarah</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatapendidikan.php">Wisata Pendidikan</a>
                       </li>
                    </ul>
              </li> -->
          <li><a href="wisataalam.php">Informasi Wisata</a></li>
          <li><a href="">Wisata Terdekat</a></li>
          <li><a href="">Rekomendasi</a></li>
          <li><a href="testimonial.php">Feedback</a></li>
          <?php 
                        if(!isset($_SESSION['is_login'])){
                    ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php }else{?>
                    <li>
                    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser'];?>)</a>
                    </li><?php }?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header> 
</section>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
    <br>
      <h6>INFORMASI WISATA</h6>
    </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
      <div class="row">
            <div class="col-md-6">
                <section id="testimonials" class="section testimonials no-padding">
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                          <img src="images/foto/alam/a1.jpg" style="height: 80%">
                      </li>
                      <li>
                          <img src="images/foto/alam/a2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/a1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/a2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Taman Taman Wisata Selecta</h2>
                <p>Taman Wisata Selecta terletak di Jl. Raya Selecta, Ds.Tulungrejo, Kec. Bumiaji, Kota Batu, Jawa Timur. Untuk sampai lokasi memakan jarak tempuh sekitar 6,4 kilometer atau memakan waktu tempuh sekitar 16 menit dari pusat kota Batu.Tiket masuk Rp30.000/orang.</p>
                <br>
            </div>
      </div>
 
  </div>
</section>
<section id="services" class="services service-section">
  <div class="container">
      <div class="row">
            <div class="col-md-6">
                         <section id="testimonials" class="section testimonials no-padding">
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                          <img src="images/foto/alam/b1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/b2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/b1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/b2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2> Jatim Park 1, 2 & 3</h2>
                <p>Jatim Park 1 terletak di Jl. Kartika, Ds. Sisir, Batu, Kota Batu, Jawa Timur. Buat kamu yang mau ke Jatim Park 2 lokasinya ada di Jl. Oro-Oro Ombo, Temas, Batu, Kota Batu, Jawa Timur. Sedangkan buat kamu yang ingin ke Jatim Park 3 lokasinya ada Jl. Ir. Soekarno No.144, Ds. Beji, Kec. Junrejo, Kota Batu, Jawa Timur. </p>
                <p>Tiket Masuk: Jatim Park 1 Rp70.000/orang untuk hari biasa dan Rp100.000/orang untuk akhir pekan, Jatim Park 2 Rp84.000/orang untuk hari biasa dan Rp120.000/orang untuk akhir pekan, Jatim Park 3 Rp100.000/orang</p>
            </div>
        </div>
    </div>

  </div>
</section>
<section id="services" class="services service-section">
  <div class="container">
      <div class="row">
            <div class="col-md-6">
                         <section id="testimonials" class="section testimonials no-padding">
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                          <img src="images/foto/alam/c1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/c2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/c1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/c2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Coban Talun</h2>
                <p>Coban Talun terletak tak jauh dari kawasan Jatim Park dan Museum Angkut, tepatnya di Dsn. Wonorejo, Ds. Tulungrejo, Bumiaji, Kota Batu, Jawa Timur. Untuk sampai lokasi memakan jarak tempuh sekitar 10 kilometer atau memakan waktu tempuh sekitar 22 menit dari pusat kota Batu. Tiket masuk Rp15.000/orang..</p>
            </div>
        </div>
    </div>

  </div>
</section>
<section id="services" class="services service-section">
  <div class="container">
      <div class="row">
            <div class="col-md-6">
                         <section id="testimonials" class="section testimonials no-padding">
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                          <img src="images/foto/alam/d1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/d2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/d1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/d2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2> Batu Night Spectacular</h2>
                <p>Batu Night Spectacular terletak di Jln. Hayam Wuruk, Oro-Oro Ombo, Batu, Kota Batu, Jawa Timur. Untuk sampai lokasi memakan jarak tempuh sekitar 4 kilometer atau memakan waktu tempuh sekitar 10 menit dari pusat kota Batu. Tiket masuk Rp30.000/orang untuk hari biasa dan Rp99.000/orang untuk akhir pekan.</p>
            </div>
        </div>
    </div>
  
  </div>
</section>
<!-- services section --> 
<!-- work section -->
<!-- overlay --> 
<!-- work section --> 
<!-- our team section -->
<!-- our team section --> 
<!-- Testimonials section -->
<!-- Testimonials section --> 
<!-- contact section -->
<!-- contact section --> 

<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container" align="center">
      <div class="row">
        <a style="padding:20px"; href="#"><i class="fa fa-facebook"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-twitter"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-linkedin"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-google-plus"></i></a>
        <br>
        <br>
      </div>
    </div>
  </div>
</footer>
  <!-- footer top --> 
  
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>