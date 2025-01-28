<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <title>Document</title>
</head>
<body>
    <form method="Post" action="tsiswa.php">
        <div class="head">
            <h1>Tambah Data Siswa</h1>
            <p>Anda sedang menambah data siswa</p>    
        </div>
        <table>
                <tr>
                    <label> </label>
                    <input type="hidden" name="NIS">
                </tr>
                <tr>
                    <label>Nama</label>
                    <input type="text" name="Nama">
                </tr>
                <tr>
                    <label>ID Kelas </label>
                    <input type="number" name="Id_kelas" inputmode="numeric">
                </tr>
                <tr>
                    <label>Alamat </label>
                    <input type="text" name="Alamat">
                </tr>
                <tr>
                    <label>Tanggal Lahir</label>
                    <input type="date" name="TTL">
                </tr>
                <tr>
                    <label>Telepon</label>
                    <input type="number" name="Telp">
                </tr>
        </table>
        <div class="buton">
            <a href="siswa.php">Cancel</a>
            <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>