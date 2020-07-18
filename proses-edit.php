<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $no=$_POST['no'];
    $jenis_zakat = $_POST['jenis_zakat'];
    $nominal=$_POST['nominal'];
    $nama_lengkap= $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $nama_bank = $_POST['nama_bank'];
    $no_rekening = $_POST['no_rekening'];

    // buat query update
    $sql = "UPDATE zakat SET no='$no', jenis_zakat='$jenis_zakat',nominal='$nominal',nama_lengkap='$nama_lengkap',no_hp='$no_hp',email='$email',nama_bank='$nama_bank',no_rekening='$no_rekening' WHERE no=$no";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-nama.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>