
<?php
//koneksi ke database
$db = mysqli_connect("localhost", "root", "", "sumbar_gempa");


function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $db;

    //ambil data dari tiap elemen
    $id_gempa =  $data["id_gempa"];
    $nama_wilayah = htmlspecialchars($data["nama_wilayah"]);
    $administratif = htmlspecialchars($data["administratif"]);
    $ibukota = htmlspecialchars($data["ibukota"]);
    $luas_wilayah = htmlspecialchars($data["luas_wilayah"]);
    $latitude = htmlspecialchars($data["latitude"]);
    $longitude = htmlspecialchars($data["longitude"]);
    $status_rawan = htmlspecialchars($data["status_rawan"]);

    //query insert data
    $query = "INSERT INTO gempa_daerah VALUES ('$id_gempa','$nama_wilayah','$administratif','$ibukota','$luas_wilayah','$latitude','$longitude','$status_rawan') ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function hapus($id_gempa)
{
    global $db;
    mysqli_query($db, "DELETE FROM gempa_daerah WHERE id_gempa = $id_gempa");
    return mysqli_affected_rows($db);
}


function ubah($data)
{
    global $db;
    //ambil data dari tiap elemen
    $id_gempa =  $data["id_gempa"];
    $nama_wilayah = htmlspecialchars($data["nama_wilayah"]);
    $administratif = htmlspecialchars($data["administratif"]);
    $ibukota = htmlspecialchars($data["ibukota"]);
    $luas_wilayah = htmlspecialchars($data["luas_wilayah"]);
    $latitude = htmlspecialchars($data["latitude"]);
    $longitude = htmlspecialchars($data["longitude"]);
    $status_rawan = htmlspecialchars($data["status_rawan"]);


    //query insert data

    $query = "UPDATE gempa_daerah SET
            nama_wilayah = '$nama_wilayah',
            administratif = '$administratif',
            ibukota = '$ibukota',
            luas_wilayah = '$luas_wilayah',
            latitude = '$latitude',
            longitude = '$longitude',
            status_rawan = '$status_rawan'
        WHERE id_gempa = '$id_gempa'";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


//login
function register($data)
{
    global $db;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    //cek username sudah ada tau tidak
    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar !!');
            </script>";
        return false;
    }



    //cek konnfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak cocok');
            </script>";
        return false;
    }

    //enkripsi pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user ke database
    mysqli_query($db, "INSERT INTO user VALUES ('','$username','$password')");

    return mysqli_affected_rows($db);
}
