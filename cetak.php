<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP </title>
</head>
<body>
 
        <center>
 
                        <h2>DATA LAPORAN ZAKAT</h2>
                        <h4>UNIVERSITAS PAMULANG</h4>
 
       </center>
 
    <?php 

    ?>
 
    <table border="1" style="width: 100%">
      <tr>
            <th>No</th>
            <th>Jenis zakat</th>
            <th>Nominal</th>
            <th>Nama lengkap</th>
            <th>No hp</th>
            <th>E-mail</th>
            <th>Nama Bank</th>
            <th>No rekening</th>
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

            

            echo "</tr>";

        }
        ?>

        <?php 
        
        ?>
    </table>
 
    <script>
        window.print();
    </script>
 
</body>
</html>