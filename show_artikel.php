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
<link rel="shortcut icon" href="images/jogjakublack.png">
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
</section>
<!-- header section --> 
<!-- services section --> 
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
     <?php 
                        if(!isset($_SESSION['admin'])){
                    ?>
                    <h6>Informasi Wisata</h6>
                    <p>Kalau kamu sudah rindu dengan suasana sejuk di Kota Batu, berkut wisata yang bisa kamu kunjungi</p>
                    <br>
                    </li>
                    <?php }else{?>
                    <h6>ARTIKEL</h6>
                    <br>
                    </li>
      <?php }?>
    </div>
  </div>
</section>

<section id="services" class="services service-section">
  <div class="container">
      <div class="container">

        <!-- Marketing Icons Section -->
        </br>
        <div class="row">
            <div class="col-lg-12">
            </div>
<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "koneksi.php";
    $query    =mysqli_query($connect, "SELECT * FROM artikel WHERE id='$id'");
    $result    =mysqli_fetch_array($query);
?>
<div class="col-md-6">
  <div class="container-fluid">
   <div class="row no-gutter">
   <div class="flexslider">
       <tr>
         <h4><?php echo "<td align='center'><img src='images/foto/".$result['foto']."' width='315' height='171' ></td>";?></h4>
        </tr>
 <tr>
          <p> <td> <?php echo $result['judul']?></td> </p>
        </tr>
        <a <?php echo "href=".$result['url'].""; ?> class="btn btn-default" >Lokasi</a>
        <tr>
           <p><td> <?php echo $result['keterangan']?></td></p>
        </tr>
        
    </table>