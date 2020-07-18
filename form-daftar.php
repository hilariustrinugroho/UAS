<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran  Baru | Unpam</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Peserta Zakat Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
            <p>
            <label for="no">No:<br> </label>
            <input type="text" name="no" placeholder="" />
        </p>
            <p>
            <label for="jenis_zakat">jenis_zakat: </label>
            <select name="jenis_zakat">
                <option>=PILIHAN=</option>
                <option>Zakat Fitrah</option>
                <option>Zakat Mal</option>
                <option>Zakat Penghasilan</option>
            </select>
        </p>

        <p>
            <label for="nominal">nominal:<br> </label>
            <input type="text" name="nominal" placeholder="" />
        </p>
        <p>
            <label for="nama_lengkap">nama lengkap:<br> </label>
            <input type="text" name="nama_lengkap" placeholder="Nama lengkap" />
        </p>
        <p>
            <label for="no_hp">no_hp:<br></label>
            <input type="text" name="no_hp" placeholder="" />
        </p>
        <p>
            <label for="email">email:<br> </label>
            <input type="text" name="email" placeholder="" />
        </p>
        <p>
            <label for="nama_bank">nama_bank:<br> </label>
            <input type="text" name="nama_bank" placeholder="" />
        </p>
        <p>
            <label for="no_rekening">no_rek:<br> </label>
            <input type="text" name="no_rekening" placeholder="" />
        </p>
                
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>