<?php
include "../connect.php";
session_start();

if (!isset($_SESSION['username']) || $_SESSION['level'] != "admin") {
  header("Location: ../index.php");
  exit();
}

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database Mapel</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/siswa.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="../java/app.js" defer></script>
</head>
<body>
<nav id="sidebar">
    <ul>
      <li>
        <span class="logo">Database</span>
        <button onclick=toggleSidebar() id="toggle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
        </button>
      </li>
      <li>
        <a href="../siswa/siswa.php">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160v-320h160v320H160Zm240 0v-640h160v640H400Zm240 0v-440h160v440H640Z"/></svg>
          <span>Siswa</span>
        </a>
      </li>
      <li>
        <a href="../guru/guru.php">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160v-480h160v480H160Zm200 0v-280h160v280H360Zm280 0v-640h160v640H640Z"/></svg>
          <span>Guru</span>
        </a>
      </li>
      <li class="active">
        <a href="mapel.php">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M640-160v-280h160v280H640Zm-240 0v-640h160v640H400Zm-240 0v-440h160v440H160Z"/></svg>
          <span>Mapel</span>
        </a>
      </li>
      <li>
        <a href="../kelas/kelas.php">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-40q0-17 11.5-28.5T280-880q17 0 28.5 11.5T320-840v40h320v-40q0-17 11.5-28.5T680-880q17 0 28.5 11.5T720-840v40h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>
          <span>Kelas</span>
        </a>
      </li>
      <li>
        <a href="profile.html">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
          <span>Profile</span>
        </a>
      </li>
      <li>
        <a href="../login/logout.php">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </nav>
  <main>
  <?php 
  //membuat koneksi ke database
  include "../connect.php";
?>
<div class="top">
  <h1>Tabel Mapel</h1>
  <div class="kn">
        <a class="add" href="../mapel/tambahmapel.php">
            <i data-feather="user-plus"></i>
            <span>New Mapel</span>
        </a>
      </div>
</div>
<p class="garis"></p>
<table>
    <tr>
        <th>ID Mapel</th>
        <th>Nama Mapel</th>
        <th>ID Guru</th>
        <th>Jumlah Jam</th>
        <th>ID Kelas</th>
        <th>Action</th>
    </tr>
    
    <?php
  $data = mysqli_query($conn, "SELECT * FROM mapel");
  while($row = mysqli_fetch_array($data)){
      ?>
    <tr>
        <td><?php echo $row['Id_mapel']; ?></td>
        <td><?php echo $row['Nama_mapel']; ?></td>
        <td><?php echo $row['Id_guru']; ?></td>
        <td><?php echo $row['Jumlah_jam']; ?></td>
        <td><?php echo $row['Id_kelas']; ?></td>
        <td><a href="../mapel/edit-mapel.php?id=<?php echo $row['Id_mapel']; ?>">
        <i data-feather="edit-3"></i>
        </a>
        <a href="../mapel/hapus-mapel.php" onclick="confirmDelete (<?php echo $row['Id_mapel']; ?>, event)">
        <i class="delete"  data-feather="trash-2"></i>
        </a>     
      </td>
    </tr>
<?php
  }
?>
</table>
<script>
    function confirmDelete(nis) {
      event.preventDefault();
    Swal.fire({
      title: 'Apakah Anda yakin ingin menghapus data ini?',
      text: 'Data yang dihapus tidak dapat dikembalikan!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = 'hapus-mapel.php?id=' + nis; 
  }
});
    }
</script>  
<script>
      feather.replace()
    </script>  
  </main>
</body>
</html>