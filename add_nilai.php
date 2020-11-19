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
         <li><a href="artikel.php">Informasi Wisata</a></li>
<!--           <li><a href="">Wisata Terdekat</a></li> -->
          <li><a href="rekomendasi.php">Rekomendasi</a></li>
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

<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
       <?php 
                        if(!isset($_SESSION['admin'])){
                    ?>
                    <h6>REKOMENDASI</h6>
                     <p>Berikut hasil daftar rekomendasi tempat wisata d Kota Batu yang bisa anda kunjungi </p>
                    <br>
                    </li>
                    <?php }else{?>
                    <h6>REKOMENDASI</h6>
                    <br>
                    </li>
      <?php }?>
    </div>
  </div>
</section>

    <div class = "panel-body">
        <table class = "table table-striped">
        <th>Nama</th>
        <th>Nilai</th>
<!--         <th>Wisata</th> -->
        <th>Rekomendasi</th>
        
        <?php 
  // Load file koneksi.php


    if(isset($_GET['id'])){
        $_SESSION['id'] = $_GET['id'];
    }
  include "db.php";

    $flag= 0;

    if(isset($_POST['submit'])){
       $result =  mysqli_query($con,"insert into nilai(user_id,wisata,rating)values('$_SESSION[id]','$_POST[wisata]','$_POST[rating]')");
        if($result){
            $flag = 1;
            
        }
        
    }
?>

<div class = "panel panel-default">
    <div class = "panel-heading">
    <h2>

    <a class = "btn btn-info pull-right" href="rekomendasi.php">Back</a>
    </h2>
    </div>

    <?php if($flag){ ?>
        <div class = "alert alert-success">Rating Successfully Added in Database</div>
        <?php $flag = 0 ?>
    <?php } ?>


    <div class = "panel-body">
    
    <form action = "add_nilai.php" method = "post">

        <div class = "form-group">
          <label for = "username">Wisata</label>
        <select name="wisata">
        <option value="TAMAN SELECTA">SELECTA</option>
        <option value="JATIM PARK 1">JATIM PARK 1</option>
        <option value="JATIM PARK 2">JATIM PARK 2</option> 
        <option value="JATIM PARK 3">JATIM PARK 3</option>
        <option value="COBAN TALUN">COBAN TALUN</option>
        <option value="BATU NIGHT SPECTACULAR">BATU NIGHT SPECTACULAR</option>
        </select></div>

        <div class = "form-group">
        <label for = "username">Rating</label>
        <input type = "number" min = "1" max = "5" name = "rating" id = "rating" class = "form-control" required>    
        </div>

        <div class = "form-group">
        <input type = "submit" name = "submit" value = "submit" class = "btn btn-primary" required>
        </div>
    </div>
</div>
</div>

<!-- intro section --> 
<!-- services section --> 
<!-- work section -->
<!-- work section --> 
<!-- our team section -->

<!-- Show Testimonial -->

<!-- <section id="teams" class="section teams">
  <div class="container">
    <div class="row">
      
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM testi"; // Query untuk menampilkan semua data testi
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>

    <div class="col-md-3 col-sm-6">
        <div class="person">
          <div class="person-content">

            <h4><?php echo "".$data['nama_user']."";?></h4>
            <p><?php echo "".$data['saran']."";?></p>
          </div>
        </div>
      </div>
 
  <?php
  }
  ?>

    </div>
  </div>
</section> -->

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
  
</footer>
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