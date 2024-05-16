<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
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
        .text-bawah {
            width: 500px;
            margin: auto;
            margin-bottom: 17px;
        }

        .btn-kunjung {
            background-color: #0077b6;
            color: white;
            font-weight: bold;
        }

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

        <div class="main">
            <main class="content">
                <!-- Main Content -->
                <br>
                <br>
                <br>
                <br>
                <center><img src="../asset/img/home.png" alt="" width="580px" style="border: 5 solid #0077b6;"> </center>
                <br>
                <h3 class="text-bawah">
                    <center><b> SISTEM INFORMASI GEOGRAFIS
                            SEBARAN TITIK RAWAN GEMPA BUMI
                            SUMATERA BARAT</b> </center>
                </h3>
                <h2>
                    <center><a href="../index.php"><button class="btn btn-kunjung" type="button" href="../index.php">KUNJUNGI WEBSITE</button></a></center>
                </h2>
                <!-- End of Main Content -->
            </main>


            <footer class="footer bg-white">
                <div class="container-fluid my-auto">
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