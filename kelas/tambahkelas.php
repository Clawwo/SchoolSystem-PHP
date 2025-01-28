<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <title>Document</title>
</head>
<body>
    <form method="Post" action="tkelas.php">
        <div class="head">
            <h1>Tambah Data Kelas</h1>
            <p>Anda sedang menambah data kelas</p>
        </div>
        <table>
                <tr>
                    <input type="hidden" name="NIS">
                </tr>
                <tr>
                    <label>NAMA KELAS </label>
                    <input type="text" name="Nama">
                </tr>
        </table>
            <div class="buton">
                <a href="kelas.php">Cancel</a>
            <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>