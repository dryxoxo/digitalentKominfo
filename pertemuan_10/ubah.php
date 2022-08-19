<?php
require 'functions.php';
$id = $_GET["id"];
$mhs = query("SELECT * FROM peserta_digitalent WHERE id = $id")[0];

if( isset($_POST['ubah'])){
    if(ubah($_POST)>0){
        echo " <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'index.php';
                </script>";
    } else {
        echo " <script>
                    alert('Data Gagal Diubah!".var_dump($conn)."');
                    document.location.href = 'index.php';
                </script>";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>DigitalentKominfo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <div class="container-fluid mt-5">
    <div class="container col-8">
        <h3 class="text-center">Ubah Data</h3>
    <form class="row g-2" action="" method="post">
        <input type="hidden" class="form-control" id="ubahID" name="ubahID" value="<?= $mhs['id']; ?>">
        <div class="col-md-9">
            <label for="ubahNama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="ubahNama" name="ubahNama" value="<?= $mhs['namaPeserta']; ?>" required>
        </div>
        <div class="col-md-3">
            <label for="ubahUsia" class="form-label">Usia</label>
            <input type="number" class="form-control" id="ubahUsia" name="ubahUsia" value="<?= $mhs['usiaPeserta']; ?>" required>
        </div>
        <div class="col-12">
            <label for="ubahAlamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="ubahAlamat" name="ubahAlamat" value="<?= $mhs['alamatPeserta']; ?>">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary col-12" name="ubah">Ubah Data</button>
        </div>
    </form>
    </div>
  </div>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/34159d944b.js" crossorigin="anonymous"></script>
  </body>