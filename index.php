<html>
<head>
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
  <link rel="stylesheet" href="style/style.css">
  <link href='https://fonts.googleapis.com/css?family=Fredoka' rel='stylesheet'> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="form_simpan.php" class='btn btn-success'>+ Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Foto</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM idsiswa");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['nis']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."' class='btn btn-info'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."' class='btn btn-danger'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>