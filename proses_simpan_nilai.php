<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id_artikel = $_POST['id_artikel'];
$rating = $_POST['rating'];

  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload
  // Proses simpan ke Database
  $query = "INSERT INTO `user_rating`(`id_artikel`,`rating`) VALUES ('".$id_artikel."','".$rating."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: add_nilai.php"); // Redirect ke halaman testimonial.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='add_nilai.php'>Kembali Ke Form Pengisian</a>";
  }