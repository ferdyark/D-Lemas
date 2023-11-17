<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/D_lemas/assets/css/dlemasstyle.css">
</head>
<body>
    <div class="container">
        <h2>Hasil Input Data Siswa</h2>

        <?php
    
        if (isset($nama) && isset($nis) && isset($kelas) && isset($tgl_lahir) && isset($tempat_lahir) && isset($alamat) && isset($jenis_kelamin) && isset($agama)) {
        ?>
            <p class="result-item">Nama Siswa: <?php echo $nama; ?></p>
            <p class="result-item">NIS: <?php echo $nis; ?></p>
            <p class="result-item">Kelas: <?php echo $kelas; ?></p>
            <p class="result-item">Tanggal Lahir: <?php echo $tgl_lahir; ?></p>
            <p class="result-item">Tempat Lahir: <?php echo $tempat_lahir; ?></p>
            <p class="result-item">Alamat: <?php echo $alamat; ?></p>
            <p class="result-item">Jenis Kelamin: <?php echo $jenis_kelamin; ?></p>
            <p class="result-item">Agama: <?php echo $agama; ?></p>
        <?php
        } else {
            echo "<p>Data harus dilengkapi</p>";
        }
        ?>

        <a class="back-link" href="<?php echo base_url('dlemas'); ?>">Kembali ke Form Input</a>
    </div>
</body>
</html>
