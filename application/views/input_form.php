<!DOCTYPE html>
<html>
<head>
    <title>Input Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/D_lemas/assets/css/dlemasstyle.css">
</head>
<body>
    <h2>Input Data Siswa</h2>
    <form method="post" action="<?php echo base_url('dlemas/process_input'); ?>">
        <label for="nama">Nama Siswa:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="nis">NIS:</label>
        <input type="text" name="nis" id="nis" required><br><br>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas" required><br><br>

        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" required><br><br>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" required><br><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin"> Perempuan<br><br>

        <label for="agama">Agama:</label>
        <select name="agama" id="agama" required>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katolik">Katolik</option>
            <option value="budha">Budha</option>
            <option value="hindu">Hindu</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
