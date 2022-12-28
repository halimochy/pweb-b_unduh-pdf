<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa | SMK Garuda Medan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet'>
</head>

<body>
<main class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card border-0 shadow" id="frm-card">
            <div class="card-body p-5">
                <h1 class="mb-4 px-md-5 mx-auto" id="form-daftar-title"> Tambah <span> Data Siswa</span></h1>
    <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
    <table cellpadding="8">
    
    <div class="mb-3 row">
        <label for="nis" >NIS</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="nis" name="nis" placeholder="masukkan nomor induk sekolah">
            </div>
    </div>
    <div class="mb-3 row">
        <label for="nama">Nama</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama lengkap">
            </div>
    </div>

    <div class="mb-3 row">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <p>
            <div class="col-md-10 d-flex align-items-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="kelamin1" value="Laki-laki">
                    <label class="form-check-label" for="kelamin1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="kelamin2" value="Perempuan">
                    <label class="form-check-label" for="kelamin2">Perempuan</label>
                </div>
            </div>
        </p>
    </div>
    <div class="mb-3 row">
        <label for="telp">Telepon</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="telp" name="telp" placeholder="masukkan nomor telepon">
            </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat">Alamat</label>
            <div class="col-md-10">
                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
            </div>
    </div>
    <div class="mb-3 row">
        <label for="foto">Foto</label>
            <div class="col-md-10">
                <input type="file" class="form-control" id="foto" name="foto" placeholder="upload foto">
            </div>
    </div>
  </table>
  
  <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" id="daftar-btn-2"></input>
  <a href="index.php"><input type="button" value="Batal" class="btn btn-danger"></a>
  </form>
</body>
</html>