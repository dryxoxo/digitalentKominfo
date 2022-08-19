<?php
    $conn = mysqli_connect("localhost", "root", "", "peserta");

    if(isset($_POST["tambah"])){
        if(tambah($_POST) > 0){
            echo " <script>
                        alert('Data Berhasil Ditambahkan!');
                        document.location.href = 'index.php';
                    </script>";
        } else {
            echo " <script>
                        alert('Data Berhasil Ditambahkan!');
                        document.location.href = 'index.php';
                    </script>";
        }
    }

    
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $row = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        $inputId = htmlspecialchars($data['inputID']);
        $inputNama = htmlspecialchars($data['inputNama']);
        $inputUsia = htmlspecialchars($data['inputUsia']);
        $inputAlamat = htmlspecialchars($data['inputAlamat']);
        $sql = "INSERT INTO peserta_digitalent VALUES ('$inputId', '$inputNama', '$inputUsia', '$inputAlamat')";
        mysqli_query($conn, $sql);
        return mysqli_affected_rows($conn);
    }

    function tambahPengajar($data){
        global $conn;
        $inputId = htmlspecialchars($data['inputId']);
        $inputNama = htmlspecialchars($data['inputPengajar']);
        $inputNo = htmlspecialchars($data['inputNo']);
        $sql = "INSERT INTO pengajar VALUES ('$inputId', '$inputNama', '$inputNo')";
        mysqli_query($conn, $sql);
        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM peserta_digitalent WHERE id = $id");
        return mysqli_affected_rows($conn);

    }

    function hapusPengajar($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM pengajar WHERE idPengajar = $id");
        return mysqli_affected_rows($conn);

    }

    function ubah($data){
        global $conn;
        $inputId = $data['ubahID'];
        $inputNama = htmlspecialchars($data['ubahNama']);
        $inputUsia = htmlspecialchars($data['ubahUsia']);
        $inputAlamat = htmlspecialchars($data['ubahAlamat']);
        $sql = "UPDATE peserta_digitalent SET
                    id = '$inputId',
                    namaPeserta = '$inputNama',
                    usiaPeserta = '$inputUsia',
                    alamatPeserta = '$inputAlamat'
                    WHERE id = $inputId";
        var_dump($inputId);
        mysqli_query($conn, $sql);
        return mysqli_affected_rows($conn);
    }

    function ubahPengajar($data){
        global $conn;
        $inputId = htmlspecialchars($data['inputId']);
        $inputNama = htmlspecialchars($data['inputPengajar']);
        $inputNo = htmlspecialchars($data['inputNo']);
        $sql = "UPDATE pengajar SET
                    idPengajar = '$inputId',
                    namaPengajar = '$inputNama',
                    telepon = '$inputNo'
                    WHERE idPengajar = $inputId";
        var_dump($inputNama, $inputId, $inputNo);
        mysqli_query($conn, $sql);
        return mysqli_affected_rows($conn);
    }

    function presensi($data){
        global $conn;
        $inputId = htmlspecialchars($data['inputId']);
        $inputDate = htmlspecialchars($data['inputDate']);
        $inputPertemuan = htmlspecialchars($data['inputPertemuan']);
        $inputKelas = htmlspecialchars($data['inputKelas']);
        $inputIdPengajar = htmlspecialchars($data['inputIdPengajar']);
        $inputMateri = htmlspecialchars($data['inputMateri']);
        $inputBukti = htmlspecialchars($data['inputBukti']);
        $sql = "INSERT INTO presensi VALUES ('$inputId', '$inputDate', '$inputPertemuan', '$inputKelas','$inputIdPengajar', '$inputMateri', '$inputBukti')";
        mysqli_query($conn, $sql);
        return mysqli_affected_rows($conn);
    }
?>