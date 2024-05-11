<?php

require '../function.php';

//ambil data  di url
$id = $_GET["id_gempa"];

$gempa = query("SELECT * FROM gempa_daerah WHERE id_gempa = $id")[0];


//cek apakah tombol sudaah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('DATA BERHASIL DIUBAH');
                document.location.href = 'tampildata.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('DATA GAGAL DIUBAH');
                document.location.href = 'tampildata.php';
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIG SUMATERA BARAT - LOGIN ADMIN</title>
    <link rel="icon" href="../asset/img/sumbar.png">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sidebar.css">

    <style>
        label {
            color: #0077b6;
            font-weight: bold;
        }

        .form-control {
            border: 2px solid #0077b6;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="../asset/img/logosidebar.png" alt="" width="33px">
                </button>
                <div class="sidebar-logo">
                    <a href="#">SIG SUMBAR</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="index.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="tampildata.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Data Titik Gempa</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Auth</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="login.php" class="sidebar-link" target="_blank">Login</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="register.php" class="sidebar-link">Register</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="logout.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"></h1>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3" style="background-color: #0077b6;">
                    <h6 class="m-0 font-weight-bold text-white" >Tambah Data Sebaran Titik Rawan Gempa Bumi</h6>
                </div>
                <div class="card-body">
                    <!-- Main content -->
                    <form class="form-horizontal style-form" style="margin-top: 10px;" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-2">
                            <label class="col-sm-2 col-sm-2 control-label" for="id_gempa">ID Titik Rawan Gempa</label>
                            <div class="col-sm-6">
                                <input name="id_gempa" id="id_gempa" type="text" class="form-control" readonly value="<?= $gempa['id_gempa']  ?>" style="background-color: #f3f3f3;" />
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="col-sm-2 col-sm-2 control-label" for="nama_wilayah">Nama Wilayah</label>
                            <div class="col-sm-6">
                                <input name="nama_wilayah" id="nama_wilayah" type="text" class="form-control" required  value="<?= $gempa['nama_wilayah']  ?>"/>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="col-sm-2 col-sm-4 control-label" for="administratif">Status Administratif</label>
                            <div class="col-sm-6">
                                <input name="administratif" id="administratif" class="form-control" type="text" required value="<?= $gempa['administratif']  ?>" />
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="col-sm-2 col-sm-4 control-label" for="ibukota">Ibukota</label>
                            <div class="col-sm-6">
                                <input name="ibukota" id="ibukota" class="form-control" type="text" required value="<?= $gempa['ibukota']  ?>"/>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="col-sm-2 col-sm-4 control-label" for="=luas_wilayah">Luas Wilayah</label>
                            <div class="col-sm-6">
                                <input name="luas_wilayah" id="=luas_wilayah" class="form-control" type="text" required value="<?= $gempa['luas_wilayah']  ?>" />
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="col-sm-2 col-sm-4 control-label" for="latitude">Latitude</label>
                            <div class="col-sm-6">
                                <input name="latitude" id="latitude" class="form-control" type="text" required value="<?= $gempa['latitude']  ?>" />
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="col-sm-2 col-sm-4 control-label" for="longitude">Longitude</label>
                            <div class="col-sm-6">
                                <input name="longitude" id="longitude" class="form-control" type="text" required value="<?= $gempa['longitude']  ?>" />
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="col-sm-2 col-sm-4 control-label" for="status_rawan">Status Rawan</label>
                            <div class="col-sm-6">
                                <input name="status_rawan" id="status_rawan" class="form-control" type="text" required  value="<?= $gempa['status_rawan']  ?>"/>
                            </div>
                        </div>


                        <div class="form-group" style="margin-bottom: 20px;">
                            <label class="col-sm-2 col-sm-4 control-label"></label>
                            <div class="col-sm-8">
                                <button type="submit" name="submit" class="btn btn-sm text-white" style="background-color: #0077b6;"> Simpan </button>
                            </div>
                        </div>
                        <div style="margin-top: 20px;"></div>
                    </form>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright text-center my-auto">
                        Copyright &copy; 2024 || Sistem Informasi Geografis ITERA Kelompok 04 SIG
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.container-fluid -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
</body>

</html>