<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['no']) ){
    header('Location: list-nama.php');
}

//ambil id dari query string
$no = $_GET['no'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM zakat WHERE no=$no";
$query = mysqli_query($db, $sql);
$calon = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit | UNPAM</title>
</head>

<body>
    <header>
        <h3>Formulir Edit </h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <p>
            <label for="no">No: </label>
            <input type="text" name="no" placeholder="" value="<?php echo $calon['no'] ?>" />
        </p>

        <p>
            <label for="jenis_zakat">Jenis Zakat: </label>
            <?php $jenis_zakat = $calon['jenis_zakat']; ?>
            <select name="jenis_zakat">
                 <option <?php echo ($jenis_zakat == '=PILIHAN=') ? "selected": "" ?>>=PILIHAN=</option>
                 <option <?php echo ($jenis_zakat == 'Zakat Fitrah') ? "selected": "" ?>>Zakat fitrah</option>
                <option <?php echo ($jenis_zakat == 'Zakat Mal') ? "selected": "" ?>>Zakat mal</option>
                 <option <?php echo ($jenis_zakat == 'Zakat Penghasilan') ? "selected": "" ?>>Zakat penghasilan</option>

            </select>
        </p>
        <p>
            <label for="nominal">Nominal: </label>
            <input type="text" name="nominal" placeholder="" value="<?php echo $calon['nominal'] ?>" />
        </p>
        <p>
            <label for="nama_lengkap">Nama Lengkap: </label>
            <input type="text" name="nama_lengkap" placeholder="nama_lengkap" value="<?php echo $calon['nama_lengkap'] ?>" />
        </p>
        <p>
            <label for="no_hp">No Hp: </label>
            <input type="text" name="no_hp" placeholder="" value="<?php echo $calon['no_hp'] ?>" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="" value="<?php echo $calon['email'] ?>" />
        </p>
        <p>
            <label for="nama_bank">Nama Bank: </label>
            <input type="text" name="nama_bank" placeholder="" value="<?php echo $calon['nama_bank'] ?>" />
        </p>
        <p>
            <label for="no_rekening">No Rekening: </label>
            <input type="text" name="no_rekening" placeholder="" value="<?php echo $calon['no_rekening'] ?>" />
        </p>
        
        
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
