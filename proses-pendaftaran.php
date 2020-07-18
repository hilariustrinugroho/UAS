<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $no=$_POST['no'];
    $jenis_zakat = $_POST['jenis_zakat'];
    $nominal=$_POST['nominal'];
    $nama_lengkap= $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $nama_bank = $_POST['nama_bank'];
    $no_rekening = $_POST['no_rekening'];

    // buat query
   $sql = "INSERT INTO zakat(no,jenis_zakat,nominal,nama_lengkap,no_hp,email,nama_bank,no_rekening) VALUE ('$no','$jenis_zakat','$nominal','$nama_lengkap','$no_hp','$email','$nama_bank','$no_rekening')";
    $query = mysqli_query($db, $sql);


    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>