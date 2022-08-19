<?php
require 'functions.php';

if(isset($_POST["submit"])){
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
}?>