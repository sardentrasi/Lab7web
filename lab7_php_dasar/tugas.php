<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 7</title>
</head>
<body>
    <h2>Masukan Data</h2>
    <form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <br>
    <br>
    <label>Tanggal Lahir: </label>
    <input type="date" name="tanggal_lahir">
    <br>
    <br>
    <label>Perkerjaan: </label>
    <select id="pekerjaan" name="pekerjaan">
        <option value="Kosong" selected> </option>
        <option value="Staff">Staff</option>
        <option value="Supervisor">Supervisor</option>
        <option value="Manager">Manager</option>
        <option value="Direktur">Direktur</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Tampilkan Data">
    </form>
    <br><br>
    <?php 
        echo 'Selamat Datang ' . $_POST['nama'];
    ?>
    <br>
    <?php
        $tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
        $thn = "0";
        $bln = "0";
        $tgl = "0";
    }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;
    echo "Umur anda adalah : ";
    echo $thn." tahun ".$bln." bulan ".$tgl." hari";
    ?>
    <br>
    <?php 
        echo 'Pekerjaan Anda Seorang ' . $_POST['pekerjaan'] . ' Di Perusahaan ini'
    ?>
    <br>
    <?php 
        $jenis_pekerjaan = $_POST['pekerjaan'];
        if ($jenis_pekerjaan == "Staff") {
            echo " Gaji Anda Rp. 5.000.000";
        }
        elseif ($jenis_pekerjaan == "Supervisor") {
            echo " Gaji Anda Rp. 10.000.000";
        }
        elseif ($jenis_pekerjaan == "Manager") {
            echo " Gaji Anda Rp. 15.000.000";
        }
        elseif ($jenis_pekerjaan == "Direktur") {
            echo " Gaji Anda Rp. 20.000.000";
        }
        else {
            echo "Belum Memilih Pekerjaan";
        }

    ?>
</body>
</html>