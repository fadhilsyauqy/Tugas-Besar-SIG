

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
        #map {
            width: 100%;
            height: 660px;
            padding: 0px;
            margin: 0;
            border: 8px solid #0077b6;
            border-radius: 8px;
            z-index: 0;
        }

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
                        <li><a href="admin/login.php" target="_blank">Login Admin</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- start banner Area -->
    <section class="mitigasi-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Mitigasi<br> Rawan Gempa
                    </h1>
                    <p class="text-white link-nav">Halaman ini memuat informasi Mitigasi Untuk Daerah Rawan Gempa</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start about-info Area -->
    <section class="about-info-area section-gap">
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-striped table-admin">
                    <thead style="background-color: #0077b6;">
                        <tr>
                            <th class="text-center text-white">Simbol</th>
                            <th class="text-center text-white">Keterangan</th>
                            <th class="text-center text-white">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="col mitigasi-gambar1"></div>
                            </td>
                            <td>
                                KAWASAN RAWAN BENCANA GEMPA BUMI TINGGI
                                HIGH EARTHQUAKE HAZARD ZONE
                            </td>
                            <td>
                                Kawasan yang berpotensi terlanda goncangan gempa bumi dengan intensitas lebih dari VIII MMI (Modified Mercalli Intensity). Kawasan ini berpotensi terjadi retakan tanah, pelulukan, longsoran pada tebing terjal dan pergeseran tanah. Percepatan gempa bumi lebih besar daripada 0.34 g. Berdasarkan batuan, daerah ini tersusun oleh aluvium, endapan gunung api dan batuan yang telah terlapukkan secara kuat.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col mitigasi-gambar2"></div>
                            </td>
                            <td>
                                KAWASAN RAWAN BENCANA GEMPA BUMI MENENGAH
                                MODERATE EARTHQUAKE HAZARD ZONE
                            </td>
                            <td>
                                Kawasan yang berpotensi terlanda goncangan gempa bumi dengan intensitas antara V-VIII MMI (Modified Mercalli Intensity). Pada kawasan ini masih berpotensi terjadi retakan tanah, longsoran pada tebing terjal dalam skala terbatas. Percepatan gempa bumi antara 0,1 g - 0,34 g. Berdasarkan batuan, daerah ini disusun oleh batuan sedimen berumur Tersier yang telah lapuuk, batuan sedimen berumur Kuarter, endapan permukaan, dan endapan gunung api.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col mitigasi-gambar3"></div>
                            <td>
                                KAWASAN RAWAN BENCANA GEMPA BUMI RENDAH
                                LOW EARTHQUAKE HAZARD ZONE
                            </td>
                            <td>
                                Kawasan yang berpotensi terlanda goncangan gempa bumi dengan intensitas antara IV-V MMI (Modified Mercalli Intensity). Pada kawasan ini masih berpotensi terjadi kerusakan bangunan namun kecil kemungkinan terjadi kerusakan geologis. Percepatan gempa bumi antara 0,01 g - 0,1 g. Berdasarkan batuan, daerah ini disusun oleh batuan berumur Tersier atau yang lebih yua dan batuan beku.
                            </td>
                        </tr>
                    </tbody>
                </table >
                <table class="table table-bordered table-striped table-admin mt-3">
                    <thead style="background-color: #0077b6;">
                        <tr>
                            <th class="text-center text-white">Status</th>
                            <th class="text-center text-white">Mitigasi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                SEBELUM GEMPA
                            </td>
                            <td>
                                <ol>
                                    <li>1.	Mendirikan bangunan sesuai aturan baku (tahan gempa)</li>
                                    <li>2.	Kenali lokasi bangunan tempat tinggal</li>
                                    <li>3.	Tempatkan perabotan pada tempat yang proporsional</li>
                                    <li>4.	Siapkan peralatan seperti senter, P3K, makanan instan, dll</li>
                                    <li>5.	Periksa penggunaan listrik dan gas</li>
                                    <li>6.	Catat nomor telepon penting</li>
                                    <li>7.	Kenali jalur evakuasi</li>
                                    <li>8.	Ikuti kegiatan simulasi mitigasi bencana gempa</li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                KETIKA GEMPA
                            </td>
                            <td>
                                <ol>
                                    <li>1.	Tetap tenang</li>
                                    <li>2.	Hindari sesuatu yang kemungkinan akan roboh (jika bisa ke tanah lapang)</li>
                                    <li>3.	Perhatikan tempat anda berdiri, kemungkinan ada retakan tanah</li>
                                    <li>4.	Turun dari kendaraan dan jauhi pantai</li>

                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                SETELAH GEMPA
                            </td>
                            <td>
                                <ol>
                                    <li>1. Cepat keluar dari bangunan (gunakan tangga biasa)</li>
                                    <li>2. Periksa sekitar anda (jika ada yang terluka berikan pertolongan pertama)</li>
                                    <li>3. Hindari bangunan yang berpotensi roboh</li>
                                </ol>
                            </td>
                        </tr>
                </table>
            </div>
            <button class="btn" style="background-color: #0077b6; margin-left: -16px" >
                <a href="https://www.pta-padang.go.id/pages/mitigasi-bencana" target="_blank" style="color: #fff; " > Sumber Data</a>
            </button>
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