<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require '../function.php';

$id = $_GET['id_gempa'];

$gempa = query("SELECT * FROM gempa_daerah WHERE id_gempa = $id")[0];

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
        .footer {
            padding: 15px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
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
                            <a href="register.php" class="sidebar-link" tar>Register</a>
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
        <div class="main">

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="card shadow mb-3">

                        <div class="card-header">
                            <h3 class="fw-bold fs-4 my-3">Detail <?php echo $gempa['administratif'] . '  ' . $gempa['nama_wilayah']; ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Ibukota</td>
                                            <td><?= $gempa['ibukota']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Luas Wilayah</td>
                                            <td><?= $gempa['luas_wilayah']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><?= $gempa['status_rawan']; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Latitude</td>
                                            <td><?= $gempa['latitude']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Longitude</td>
                                            <td><?= $gempa['longitude']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright text-center my-auto">
                        Copyright &copy; 2024 || Sistem Informasi Geografis ITERA Kelompok 04 SIG
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
</body>

</html>