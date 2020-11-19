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

<?php

include('db.php');

?>

<div class = "panel panel-default">
    
    <div class = "panel-heading">
        <h2>

        <a class = "btn btn-info pull-right" href="rekomendasi.php">Back</a>
        </h2>
    </div>

    <div class = "panel-body">
        <table class = "table table-striped">
        <th>Wisata</th>
        <th>Rating</th>
       
        <?php 
       $result = mysqli_query($con,"select * from nilai where user_id ='$_GET[id]'"); 
        while($row = mysqli_fetch_array($result)){?>
            <tr>
                <td><?php echo $row['wisata']; ?></td>
                <td><?php echo $row['rating']; ?></td>

            </tr>
        <?php } ?>
        </table>
    </div>
</div>

