<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
  <link rel="stylesheet" href="style/style.css">
  <link href='https://fonts.googleapis.com/css?family=Fredoka' rel='stylesheet'> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>
  <h1>Tambah Data Siswa</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>NIS</td>
    <td><input type="text" name="nis"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
    </td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td><input type="text" name="telp"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <button type="submit" class="btn btn-primary" value="Daftar">Daftar</button>
  <a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
  </form>
</body>
</html>