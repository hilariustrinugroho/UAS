<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran zakat | unpam</title>
</head>

<body>
    <header>
        <h3>Pembayaran zakat</h3>
        <h1>UNIVERSITAS PAMULANG</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-nama.php">Pendaftar</a></li>
        </ul>
    </nav>

    <?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>

    </p>


    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran zakat baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>


    </body>
</html>