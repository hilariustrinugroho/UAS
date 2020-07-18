<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran baru |unpam</title>
</head>

<body>
   
    </header>
     <header>
        <h3>Data Pembayaran Zakat</h3>
        <h1>UNIVERSITAS PAMULANG</h1>
    </header>
    <nav>
       
        <ul>
         <li><a href="form-daftar.php">Tambah Baru</a></li>
        <li><a href="cetak.php?no=$calon">Cetak</a></li>
        </ul>   

    </nav>
     <br>

    <table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis zakat</th>
            <th>Nominal</th>
            <th>Nama lengkap</th>
            <th>No hp</th>
            <th>E-mail</th>
            <th>Nama Bank</th>
            <th>No rekening</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        echo "Data Pembayaran zakat " ;
            echo "<br>";
            echo "Per " . date("d-F-Y") . " " . date("H:i:s");
            echo "<br>";

        $sql = "SELECT * FROM zakat";
        $query = mysqli_query($db, $sql);

        while($calon = mysqli_fetch_array($query)){
            
            echo "<tr>";
            echo "<td>".$calon['no']."</td>";
            echo "<td>".$calon['jenis_zakat']."</td>";
            echo "<td>".$calon['nominal']."</td>";
            echo "<td>".$calon['nama_lengkap']."</td>";
            echo "<td>".$calon['no_hp']."</td>";
            echo "<td>".$calon['email']."</td>";
            echo "<td>".$calon['nama_bank']."</td>";
            echo "<td>".$calon['no_rekening']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?no=".$calon['no']."'>Edit</a> | '";
            echo "<a href='hapus.php?no=".$calon['no']."'>Hapus</a> |";
            echo "</td>";

            echo "</tr>";

        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>