<?php

require 'function.php';;

$id = $_GET['id_gempa'];

$gempa = query("SELECT * FROM gempa_daerah WHERE id_gempa = $id")[0];

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
        html,
        body,
        #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            z-index: 1;
        }

        .nav-menu a {
            color: #fff;
        }

        #header {
            background: #0077b6;
            position: sticky;
            top: 0;

        }

        .main-menu {
            padding-bottom: 20px;
            padding-top: 20px;
            background: #0077b6;
            padding-left: 15px;
            padding-right: 15px;
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

        h5{
            font-weight: bold;
        }

        tr{
            border: 3px solid #0077b6;
            
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
        <div class="container" style="padding-top: 10px;">
            <div class="row">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
                    <div class="panel panel-info panel-dashboard">
                        <div class="panel-heading centered">
                            <h2 class="panel-title"><strong>Informasi Gempa </strong></h4>
                        </div>
                        <div class="panel-body">
                            <table class="table" style="border: 2px solid #0077b6;">
                                <tr  style="background: #0077b6;">
                                    <td  class="text-center " colspan="2">
                                        <h5 class="text-white"><?= $gempa['administratif'] . " " . $gempa['nama_wilayah']; ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ibukota</td>
                                    <td>
                                        <h5>  <?= ":  " . $gempa['ibukota']; ?> </h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Luas Wilayah</td>
                                    <td>
                                        <h5> <?= ":  " . $gempa['luas_wilayah']; ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <h5>  <?= ":  " . $gempa['status_rawan']; ?></h5>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Latitude</td>
                                    <td>
                                        <h5> <?= ":  " . $gempa['latitude']; ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Longitude</td>
                                    <td>
                                        <h5> <?= ":  " . $gempa['longitude']; ?></h5>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" data-aos="zoom-in">
                    <div class="panel panel-info panel-dashboard">
                        <div class="panel-heading centered">
                            <h2 class="panel-title"><strong>Lokasi</strong></h4>
                        </div>
                        <div class="panel-body">
                            <div id="" style="width:100%;height:300px;">
                                <div id="map">
                                </div>
                                <script src="js/qgis2web_expressions.js"></script>
                                <script src="js/leaflet.js"></script>
                                <script src="js/L.Control.Locate.min.js"></script>
                                <script src="js/leaflet.rotatedMarker.js"></script>
                                <script src="js/leaflet.pattern.js"></script>
                                <script src="js/leaflet-hash.js"></script>
                                <script src="js/Autolinker.min.js"></script>
                                <script src="js/rbush.min.js"></script>
                                <script src="js/labelgun.min.js"></script>
                                <script src="js/labels.js"></script>
                                <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
                                <script src="js/leaflet-measure.js"></script>
                                <script src="js/leaflet-search.js"></script>
                                <script src="data/SUMATERABARAT_1.js"></script>
                                <script src="data/ProvinsiSumateraBaratKAB_KOTA_2.js"></script>
                                <script>
                                    var highlightLayer;

                                    function highlightFeature(e) {
                                        highlightLayer = e.target;

                                        if (e.target.feature.geometry.type === 'LineString') {
                                            highlightLayer.setStyle({
                                                color: '#ffff',
                                            });
                                        } else {
                                            highlightLayer.setStyle({
                                                fillColor: '#ffff',
                                                fillOpacity: 1
                                            });
                                        }
                                        highlightLayer.openPopup();
                                    }
                                    var map = L.map('map', {
                                        zoomControl: true,
                                        maxZoom: 28,
                                        minZoom: 1
                                    })
                                    var hash = new L.Hash(map);
                                    map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
                                    var autolinker = new Autolinker({
                                        truncate: {
                                            length: 30,
                                            location: 'smart'
                                        }
                                    });

                                    function removeEmptyRowsFromPopupContent(content, feature) {
                                        var tempDiv = document.createElement('div');
                                        tempDiv.innerHTML = content;
                                        var rows = tempDiv.querySelectorAll('tr');
                                        for (var i = 0; i < rows.length; i++) {
                                            var td = rows[i].querySelector('td.visible-with-data');
                                            var key = td ? td.id : '';
                                            if (td && td.classList.contains('visible-with-data') && feature.properties[key] == null) {
                                                rows[i].parentNode.removeChild(rows[i]);
                                            }
                                        }
                                        return tempDiv.innerHTML;
                                    }
                                    document.querySelector(".leaflet-popup-pane").addEventListener("load", function(event) {
                                        var tagName = event.target.tagName,
                                            popup = map._popup;
                                        // Also check if flag is already set.
                                        if (tagName === "IMG" && popup && !popup._updated) {
                                            popup._updated = true; // Set flag to prevent looping.
                                            popup.update();
                                        }
                                    }, true);
                                    L.control.locate({
                                        locateOptions: {
                                            maxZoom: 19
                                        }
                                    }).addTo(map);
                                    var measureControl = new L.Control.Measure({
                                        position: 'topleft',
                                        primaryLengthUnit: 'meters',
                                        secondaryLengthUnit: 'kilometers',
                                        primaryAreaUnit: 'sqmeters',
                                        secondaryAreaUnit: 'hectares'
                                    });
                                    measureControl.addTo(map);
                                    document.getElementsByClassName('leaflet-control-measure-toggle')[0]
                                        .innerHTML = '';
                                    document.getElementsByClassName('leaflet-control-measure-toggle')[0]
                                        .className += ' fas fa-ruler';
                                    var bounds_group = new L.featureGroup([]);

                                    function setBounds() {
                                        if (bounds_group.getLayers().length) {
                                            map.fitBounds(bounds_group.getBounds());
                                        }
                                    }
                                    map.createPane('pane_GoogleMaps_0');
                                    map.getPane('pane_GoogleMaps_0').style.zIndex = 400;
                                    var layer_GoogleMaps_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                                        pane: 'pane_GoogleMaps_0',
                                        opacity: 1.0,
                                        attribution: '',
                                        minZoom: 1,
                                        maxZoom: 28,
                                        minNativeZoom: 0,
                                        maxNativeZoom: 19
                                    });
                                    layer_GoogleMaps_0;
                                    map.addLayer(layer_GoogleMaps_0);

                                    function pop_SUMATERABARAT_1(feature, layer) {
                                        layer.on({
                                            mouseout: function(e) {
                                                for (i in e.target._eventParents) {
                                                    e.target._eventParents[i].resetStyle(e.target);
                                                }
                                                if (typeof layer.closePopup == 'function') {
                                                    layer.closePopup();
                                                } else {
                                                    layer.eachLayer(function(feature) {
                                                        feature.closePopup()
                                                    });
                                                }
                                            },
                                            mouseover: highlightFeature,
                                        });
                                        var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KELAS'] !== null ? autolinker.link(feature.properties['KELAS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature.properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
                                        layer.bindPopup(popupContent, {
                                            maxHeight: 400
                                        });
                                        var popup = layer.getPopup();
                                        var content = popup.getContent();
                                        var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
                                        popup.setContent(updatedContent);
                                    }

                                    function style_SUMATERABARAT_1_0(feature) {
                                        switch (String(feature.properties['KELAS'])) {
                                            case 'Kawasan Rawan Bencana Gempabumi Rendah':
                                                return {
                                                    pane: 'pane_SUMATERABARAT_1',
                                                        stroke: false,
                                                        fill: true,
                                                        fillOpacity: 1,
                                                        fillColor: 'rgba(12,183,26,1.0)',
                                                        interactive: false,
                                                }
                                                break;
                                            case 'Kawasan Rawan Bencana Gempabumi Menengah':
                                                return {
                                                    pane: 'pane_SUMATERABARAT_1',
                                                        stroke: false,
                                                        fill: true,
                                                        fillOpacity: 1,
                                                        fillColor: 'rgba(238,238,48,1.0)',
                                                        interactive: false,
                                                }
                                                break;
                                            case 'Kawasan Rawan Bencana Gempabumi Tinggi':
                                                return {
                                                    pane: 'pane_SUMATERABARAT_1',
                                                        stroke: false,
                                                        fill: true,
                                                        fillOpacity: 1,
                                                        fillColor: 'rgba(215,25,28,1.0)',
                                                        interactive: false,
                                                }
                                                break;
                                        }
                                    }
                                    map.createPane('pane_SUMATERABARAT_1');
                                    map.getPane('pane_SUMATERABARAT_1').style.zIndex = 401;
                                    map.getPane('pane_SUMATERABARAT_1').style['mix-blend-mode'] = 'normal';
                                    var layer_SUMATERABARAT_1 = new L.geoJson(json_SUMATERABARAT_1, {
                                        attribution: '',
                                        interactive: false,
                                        dataVar: 'json_SUMATERABARAT_1',
                                        layerName: 'layer_SUMATERABARAT_1',
                                        pane: 'pane_SUMATERABARAT_1',
                                        onEachFeature: pop_SUMATERABARAT_1,
                                        style: style_SUMATERABARAT_1_0,
                                    });
                                    bounds_group.addLayer(layer_SUMATERABARAT_1);
                                    map.addLayer(layer_SUMATERABARAT_1);

                                    function pop_ProvinsiSumateraBaratKAB_KOTA_2(feature, layer) {
                                        layer.on({
                                            mouseout: function(e) {
                                                for (i in e.target._eventParents) {
                                                    e.target._eventParents[i].resetStyle(e.target);
                                                }
                                                if (typeof layer.closePopup == 'function') {
                                                    layer.closePopup();
                                                } else {
                                                    layer.eachLayer(function(feature) {
                                                        feature.closePopup()
                                                    });
                                                }
                                            },
                                            mouseover: highlightFeature,
                                        });
                                        var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['provinsi'] !== null ? autolinker.link(feature.properties['provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['nama'] !== null ? autolinker.link(feature.properties['nama'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
                                        layer.bindPopup(popupContent, {
                                            maxHeight: 400
                                        });
                                        var popup = layer.getPopup();
                                        var content = popup.getContent();
                                        var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
                                        popup.setContent(updatedContent);
                                    }

                                    function style_ProvinsiSumateraBaratKAB_KOTA_2_0() {
                                        return {
                                            pane: 'pane_ProvinsiSumateraBaratKAB_KOTA_2',
                                            opacity: 1,
                                            color: 'rgba(35,35,35,1.0)',
                                            dashArray: '',
                                            lineCap: 'butt',
                                            lineJoin: 'miter',
                                            weight: 1.0,
                                            fillOpacity: 0,
                                            interactive: true,
                                        }
                                    }
                                    map.createPane('pane_ProvinsiSumateraBaratKAB_KOTA_2');
                                    map.getPane('pane_ProvinsiSumateraBaratKAB_KOTA_2').style.zIndex = 402;
                                    map.getPane('pane_ProvinsiSumateraBaratKAB_KOTA_2').style['mix-blend-mode'] = 'normal';
                                    var layer_ProvinsiSumateraBaratKAB_KOTA_2 = new L.geoJson(json_ProvinsiSumateraBaratKAB_KOTA_2, {
                                        attribution: '',
                                        interactive: true,
                                        dataVar: 'json_ProvinsiSumateraBaratKAB_KOTA_2',
                                        layerName: 'layer_ProvinsiSumateraBaratKAB_KOTA_2',
                                        pane: 'pane_ProvinsiSumateraBaratKAB_KOTA_2',
                                        onEachFeature: pop_ProvinsiSumateraBaratKAB_KOTA_2,
                                        style: style_ProvinsiSumateraBaratKAB_KOTA_2_0,
                                    });
                                    bounds_group.addLayer(layer_ProvinsiSumateraBaratKAB_KOTA_2);
                                    map.addLayer(layer_ProvinsiSumateraBaratKAB_KOTA_2);
                                    var osmGeocoder = new L.Control.Geocoder({
                                        collapsed: true,
                                        position: 'topleft',
                                        text: 'Search',
                                        title: 'Testing'
                                    }).addTo(map);
                                    document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
                                        .className += ' fa fa-search';
                                    document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
                                        .title += 'Search for a place';
                                    var baseMaps = {};
                                    L.control.layers(baseMaps, {
                                        '<img src="legend/ProvinsiSumateraBaratKAB_KOTA_2.png" /> Provinsi Sumatera Barat-KAB_KOTA': layer_ProvinsiSumateraBaratKAB_KOTA_2,
                                        'SUMATERA BARAT<br /><table><tr><td style="text-align: center;"><img src="legend/SUMATERABARAT_1_KawasanRawanBencanaGempabumiRendah0.png" /></td><td>Kawasan Rawan Bencana Gempabumi Rendah</td></tr><tr><td style="text-align: center;"><img src="legend/SUMATERABARAT_1_KawasanRawanBencanaGempabumiMenengah1.png" /></td><td>Kawasan Rawan Bencana Gempabumi Menengah</td></tr><tr><td style="text-align: center;"><img src="legend/SUMATERABARAT_1_KawasanRawanBencanaGempabumiTinggi2.png" /></td><td>Kawasan Rawan Bencana Gempabumi Tinggi</td></tr></table>': layer_SUMATERABARAT_1,
                                        "Google Maps": layer_GoogleMaps_0,
                                    }).addTo(map);
                                    setBounds();
                                    var i = 0;
                                    layer_ProvinsiSumateraBaratKAB_KOTA_2.eachLayer(function(layer) {
                                        var context = {
                                            feature: layer.feature,
                                            variables: {}
                                        };
                                        layer.bindTooltip((layer.feature.properties['nama'] !== null ? String('<div style="color: #323232; font-size: 10pt; font-weight: bold; font-family: \'Montserrat\', sans-serif;">' + layer.feature.properties['nama']) + '</div>' : ''), {
                                            permanent: true,
                                            offset: [-0, -16],
                                            className: 'css_ProvinsiSumateraBaratKAB_KOTA_2'
                                        });
                                        labels.push(layer);
                                        totalMarkers += 1;
                                        layer.added = true;
                                        addLabel(layer, i);
                                        i++;
                                    });
                                    map.addControl(new L.Control.Search({
                                        layer: layer_ProvinsiSumateraBaratKAB_KOTA_2,
                                        initial: false,
                                        hideMarkerOnCollapse: true,
                                        propertyName: 'nama'
                                    }));
                                    document.getElementsByClassName('search-button')[0].className +=
                                        ' fa fa-binoculars';
                                    resetLabels([layer_ProvinsiSumateraBaratKAB_KOTA_2]);
                                    map.on("zoomend", function() {
                                        resetLabels([layer_ProvinsiSumateraBaratKAB_KOTA_2]);
                                    });
                                    map.on("layeradd", function() {
                                        resetLabels([layer_ProvinsiSumateraBaratKAB_KOTA_2]);
                                    });
                                    map.on("layerremove", function() {
                                        resetLabels([layer_ProvinsiSumateraBaratKAB_KOTA_2]);
                                    });
                                </script>
                                <!-- end QGIS -->
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