<?php 

require 'function.php'; ;
$gempa = query("SELECT * FROM gempa_daerah");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIG GEMPA SUMBAR</title>
    <link rel="icon" href="asset/img/sumbar.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/home2.css">


    <!-- QGIS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/L.Control.Locate.min.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/leaflet-search.css">
    <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">
    <link rel="stylesheet" href="css/leaflet-measure.css">



    <!-- maps Tambahan awal -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
		integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" /> -->
    <!-- maps tambahan akhir -->

    <style>
        .nav-menu a {
            color: #fff;
        }

        #header.header-scrolled {
            background-color: #0077b6;
        }

        .nav-menu a:hover,
        .nav-menu .active>a,
        .nav-menu li:hover>a {
            color: #000;
        }

        @media (max-width: 992px) {
            #header {
                background: #0077b6;
            }
        }
    </style>


</head>

<body>
    <header id="header" style="z-index: 3;">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.php"><img src="asset/img/sumbar.png" width="100px" height="50px" alt="" /></a>
                </div>
                <nav id="navbarToggleExternalContent">
                    <ul class="nav-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="titik_rawan.php">Titik Rawan Gempa</a></li>
                        <li><a href="mitigasi.php">Mitigasi</a></li>
                        <li><a href="sdgs.php">SDG's</a></li>
                        <li><a href="admin/login.php">Login Admin</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- start banner Area -->
    <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        TITIK RAWAN
                    </h1>
                    <p class="text-white link-nav">Halaman ini memuat informasi Titik Rawan Gempa Bumi di Provinsi Sumatera Barat</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start about-info Area -->
    <section class="about-info-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-30 into-right" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-md-12">
                        <div class="panel panel-info panel-dashboard">
                            <div class="panel-heading centered">
                            </div>
                            <h4>Data Sebaran Titik Rawan Gempa Provinsi Sumatera Barat</h4><br>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped table-admin ">
                                    <thead  style="background: #0077b6; color: #fff">
                                        <tr class="text-center">
                                            <th width="5%">No.</th>
                                            <th width="35%">Nama</th>
                                            <th width="25%">Status Administratif</th>
                                            <th width="30%">Ibukota</th>
                                            <th width="25%">Luas Wilayah(Km2)</th>
                                            <th width="25%">Status</th>
                                            <!-- <th width="25%">Details</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($gempa as $row) : ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $row['nama_wilayah'] ?></td>
                                                <td><?= $row['administratif'] ?></td>
                                                <td><?= $row['ibukota'] ?></td>
                                                <td><?= $row['luas_wilayah'] ?></td>
                                                <td><?= $row['status_rawan'] ?></td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-info Area -->
    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                        Copyright &copy; 2024 || Sistem Informasi Geografis ITERA KEL.04
                    </p>
                </div>
            </div>
    </footer>
    <!-- End footer Area -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="asset/js/main.js"></script>
    <script src="asset/js/jquery-2.2.4.min.js"></script>
    <script src="asset/js/superfish.min.js"></script>
    <script src="asset/js/jquery.magnific-popup.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/main.js"></script>


    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
</body>

</html>