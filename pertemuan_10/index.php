<?php
    require 'functions.php';
    $resultPeserta = query("SELECT * FROM peserta_digitalent");
    $resultPengajar = query("SELECT * FROM pengajar");
    $resultPresensi = query("SELECT * FROM presensi");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>DigitalentKominfo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid py-3 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-light">Tugas CRUD</h3>
                </div>
                <div class="col text-end">
                    <a href="presensi.php" class="btn btn-danger">Presensi</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3">
        <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Data Peserta</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Data Pengajar</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Data Presensi</button>
            </li>
        </ul>
            <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="container-fluid mt-5">
                    <div class="container">
                        <div class="row bg-dark py-3">
                            <div class="col-6">
                                <h2 class="text-light">Database <b>Peserta</b></h2>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i class="fa-solid fa-circle-plus"></i> <span>Tambah Peserta</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th><input class="form-check-input" type="checkbox" value=""></th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Usia</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($resultPeserta as $row):?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td scope="row"><input class="form-check-input" type="checkbox" value=""></td>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["namaPeserta"]; ?></td>
                                        <td><?php echo $row["usiaPeserta"]; ?></td>
                                        <td><?php echo $row["alamatPeserta"]; ?></td>
                                        <td>
                                            <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-delete-left" data-toggle="tooltip" title="Edit" onclick="return confirm('Delete entry?')"></i></a>
                                            <a href="ubah.php?id=<?= $row['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Hapus"></i></a>
                                            <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Hapus"></i></button> -->
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="container-fluid mt-5">
                    <div class="container">
                        <div class="row bg-dark py-3">
                            <div class="col-6">
                                <h2 class="text-light">Database <b> Pengajar</b></h2>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <a href="tambahPengajar.php" type="button" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> <span>Tambah Pengajar</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th><input class="form-check-input" type="checkbox" value=""></th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $y = 1; ?>
                                    <?php foreach($resultPengajar as $baris):?>
                                    <tr>
                                        <td><?= $y ?></td>
                                        <td scope="baris"><input class="form-check-input" type="checkbox" value=""></td>
                                        <td><?php echo $baris["idPengajar"]; ?></td>
                                        <td><?php echo $baris["namaPengajar"]; ?></td>
                                        <td><?php echo $baris["telepon"]; ?></td>
                                        <td>
                                            <a href="hapusPengajar.php?id=<?= $baris['idPengajar']; ?>" class="btn btn-danger"><i class="fa-solid fa-delete-left" data-toggle="tooltip" title="Edit" onclick="return confirm('Delete entry?')"></i></a>
                                            <a href="ubahPengajar.php?id=<?= $baris['idPengajar']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Hapus"></i></a>
                                            <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Hapus"></i></button> -->
                                        </td>
                                    </tr>
                                    <?php $y++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <div class="container-fluid mt-5">
                    <div class="container">
                        <div class="row bg-dark py-3">
                            <div class="col-6">
                                <h2 class="text-light">Database <b> Presensi</b></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Peserta</th>
                                        <th>Tanggal</th>
                                        <th>Pertemuan</th>
                                        <th>Kelas</th>
                                        <th>Id Pengajar</th>
                                        <th>Materi</th>
                                        <th>Bukti Hadir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $y = 1; ?>
                                    <?php foreach($resultPresensi as $baris):?>
                                    <tr>
                                        <td><?= $y ?></td>
                                        <td><?php echo $baris["id"]; ?></td>
                                        <td><?php echo $baris["tglHadir"]; ?></td>
                                        <td><?php echo $baris["pertemuanKe"]; ?></td>
                                        <td><?php echo $baris["namaKelas"]; ?></td>
                                        <td><?php echo $baris["idPengajar"]; ?></td>
                                        <td><?php echo $baris["materi"]; ?></td>
                                        <td><?php echo $baris["buktiHadir"]; ?></td>
                                        <!-- <td>
                                            <a href="hapusPengajar.php?id=<?= $baris['idPengajar']; ?>" class="btn btn-danger"><i class="fa-solid fa-delete-left" data-toggle="tooltip" title="Edit" onclick="return confirm('Delete entry?')"></i></a>
                                            <a href="ubahPengajar.php?id=<?= $baris['idPengajar']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Hapus"></i></a>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Hapus"></i></button>
                                        </td> -->
                                    </tr>
                                    <?php $y++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


    <!-- <div class="container-fluid mt-5">
        <div class="container">
            <div class="row bg-dark py-3">
                <div class="col-6">
                    <h2 class="text-light">Database <b>Peserta</b></h2>
                </div>
                <div class="col-6">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i class="fa-solid fa-circle-plus"></i> <span>Tambah Peserta</span></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th><input class="form-check-input" type="checkbox" value=""></th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Usia</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($result as $row):?>
                        <tr>
                            <td><?= $i ?></td>
                            <td scope="row"><input class="form-check-input" type="checkbox" value=""></td>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["namaPeserta"]; ?></td>
                            <td><?php echo $row["usiaPeserta"]; ?></td>
                            <td><?php echo $row["alamatPeserta"]; ?></td>
                            <td>
                                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-delete-left" data-toggle="tooltip" title="Edit" onclick="return confirm('Delete entry?')"></i></a>
                                <a href="ubah.php?id=<?= $row['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Hapus"></i></a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container-fluid mt-5">
        <div class="container">
            <div class="row bg-dark py-3">
                <div class="col-6">
                    <h2 class="text-light">Database <b> Pengajar</b></h2>
                </div>
                <div class="col-6">
                    <div class="text-end">
                        <a href="tambahPengajar.php" type="button" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> <span>Tambah Pengajar</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th><input class="form-check-input" type="checkbox" value=""></th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Usia</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $y = 1; ?>
                        <?php foreach($result as $baris):?>
                        <tr>
                            <td><?= $y ?></td>
                            <td scope="baris"><input class="form-check-input" type="checkbox" value=""></td>
                            <td><?php echo $baris["id"]; ?></td>
                            <td><?php echo $baris["namaPeserta"]; ?></td>
                            <td><?php echo $baris["usiaPeserta"]; ?></td>
                            <td><?php echo $baris["alamatPeserta"]; ?></td>
                            <td>
                                <a href="hapus.php?id=<?= $baris['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-delete-left" data-toggle="tooltip" title="Edit" onclick="return confirm('Delete entry?')"></i></a>
                                <a href="ubah.php?id=<?= $baris['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Hapus"></i></a>
                            </td>
                        </tr>
                        <?php $y++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Modal Tambah -->
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="addEmployeeModalLabel">Tambah Data Mahasiswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-2" action="" method="post">
                    <div class="col-md-4">
                        <label for="inputID" class="form-label">ID</label>
                        <input type="text" class="form-control" id="inputID" name="inputID" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputNama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="inputNama" name="inputNama" required>
                    </div>
                    <div class="col-md-2">
                        <label for="inputUsia" class="form-label">Usia</label>
                        <input type="number" class="form-control" id="inputUsia" name="inputUsia" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAlamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="inputAlamat" name="inputAlamat" placeholder="Jl Kranji, Kec. Purwokerto Timur">
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary col-12" name="tambah">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <!-- <div class="modal fade" id="deleteEmployeeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteEmployeeModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Modal Edit -->
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editEmployeeModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="row g-2" action="" method="post">
                    <div class="col-md-4">
                        <label for="ubahID" class="form-label">ID</label>
                        <input type="text" class="form-control" id="ubahID" name="ubahID" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="ubahNama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="ubahNama" name="ubahNama" value="" required>
                    </div>
                    <div class="col-md-2">
                        <label for="ubahUsia" class="form-label">Usia</label>
                        <input type="number" class="form-control" id="ubahUsia" name="ubahUsia" vlaue required>
                    </div>
                    <div class="col-12">
                        <label for="ubahAlamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="ubahAlamat" name="ubahAlamat" value="">
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary col-12" name="submit">Tambah Data</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Hapus Baris -->
    <div class="modal fade" id="delEmployeeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="delEmployeeModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Data yang dihapus tidak bisa dikembalikan</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <a href="#" class="btn btn-danger">Hapus</a>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/34159d944b.js" crossorigin="anonymous"></script>
  </body>
</html>