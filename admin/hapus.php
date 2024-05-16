<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require '../function.php';

$id = $_GET["id_gempa"];

if(hapus($id) > 0){
    echo "
    <script>
        alert('DATA BERHASIL DIHAPUS');
        document.location.href = 'tampildata.php'
    </script>
    ";
}else {
    echo "
    <script>
        alert('DATA GAGAL DIHAPUS');
        document.location.href = 'tampildata.php'
    </script>
    ";
}


?>