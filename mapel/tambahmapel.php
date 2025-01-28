<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <title>Document</title>
</head>
<body>
    <form method="Post" action="tmapel.php">
        <div class="head">
            <h1>Tambah Data Mapel</h1>
            <p>Anda sedang menambah data mapel</p>    
        </div>
        <table>
                <tr>
                    <input type="hidden" name="NIS">
                </tr>
                <tr>
                    <label>Mapel </label>
                    <input type="text" name="Nama">
                </tr>
                <tr>
                    <label>ID Guru </label>
                    <input type="text" name="Alamat">
                </tr>
                <tr>
                    <label>Jam Pelajaran</label>
                    <input type="number" name="TTL">
                </tr>
                <tr>
                    <label>ID Kelas</label>
                    <input type="number" name="Telp">
                </tr>
        </table>
        <div class="buton">
            <a href="mapel.php">Cancel</a>
            <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>