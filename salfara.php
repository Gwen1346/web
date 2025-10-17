<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
</head>
<body>
    <h2>Form Biodata</h2>
    <form action="proses.php" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Tempat Lahir:</label><br>
        <input type="text" name="tempat_lahir" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" rows="4" cols="30" required></textarea><br><br>

        <label>Hobi:</label><br>
        <input type="text" name="hobi"><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
