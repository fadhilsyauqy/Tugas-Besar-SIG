<?php

$koneksi = mysqli_connect("localhost", "root", "", "sumbar_gempa");
if (mysqli_connect_errno()) {
    echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
}
//mysqli_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>