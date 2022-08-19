<!doctype html>
<html lang="en">
  <head>
    <title>Presensi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <?php
    require 'functions.php';
    if(isset($_POST["tambahPengajar"])){
        if(tambahPengajar($_POST) > 0){
            echo " <script>
                        alert('Data Berhasil Ditambahkan!');
                        document.location.href = 'index.php';
                    </script>";
        } else {
            echo " <script>
                        alert('Data Gagal Ditambahkan!');
                        document.location.href = 'index.php';
                    </script>";
        }
    }
?>
  </head>
  <body>

  <div class="container-fluid py-3">
    <div class="container">
        <div class="text-center py-3">
            <h3>Tambah Data Pengajar</h3>
        </div>
        <div class="card col-lg-8 mx-auto">
            <div class="card-body">
            <form action="" method="post">
                <div class="row mb-3">
                    <label for="inputId" class="col-sm-2 col-form-label">Id Pengajar</label>
                    <div class="col-sm-10 ">
                        <input type="text" class="form-control" id="inputId" name="inputId">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPengajar" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPengajar" name="inputPengajar">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNo" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNo" name="inputNo">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-12 mt-5" name="tambahPengajar">Tambah Pengajar</button>
            </form>
            </div>
        </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>