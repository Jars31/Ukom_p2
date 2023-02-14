<?php
include "includes/koneksi.php";
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WELCOME - HOTEL JARS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->

    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="montana-master/css/bootstrap.min.css">
    <link rel="stylesheet" href="montana-master/css/owl.carousel.min.css">
    <link rel="stylesheet" href="montana-master/css/magnific-popup.css">
    <link rel="stylesheet" href="montana-master/css/font-awesome.min.css">
    <link rel="stylesheet" href="montana-master/css/themify-icons.css">
    <link rel="stylesheet" href="montana-master/css/nice-select.css">
    <link rel="stylesheet" href="montana-master/css/flaticon.css">
    <link rel="stylesheet" href="montana-master/css/gijgo.css">
    <link rel="stylesheet" href="montana-master/css/animate.css">
    <link rel="stylesheet" href="montana-master/css/slicknav.css">
    <link rel="stylesheet" href="montana-master/css/style.css">
    <link rel="stylesheet" href="montana-master/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a class="active" href="kamar.php">Kamar</a></li>
                                        <li><a href="fasilitas.php">Fasilitas</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Reservasi Kamar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1">
        <h3>Daftar Kamar</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- offers_area_start -->
    <div class="offers_area padding_top">
        <div class="container">
            <div class="row">
                <?php
                $sql = "SELECT * FROM tb_fasilitas_kamar ORDER BY id DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    //membaca data pada baris tabel
                    while ($row = $result->fetch_assoc()) {
                        $idk = $row["id_kamar"];
                        $gambar = $row["gambar"];
                        $fas = $row["fasilitas"];

                        $sql2    = "SELECT nama_kamar FROM tb_kamar WHERE id_kamar= '$idk'";
                        $result2 = $conn->query($sql2);
                        $row2    = $result2->fetch_assoc();
                ?>
                        <div class="col-xl-4 col-md-4">
                            <div class="single_offers">
                                <div class="about_thumb">
                                    <img src="<?php echo $gambar; ?>" alt="">
                                </div>
                                <h3><?php echo $row2["nama_kamar"]; ?></h3>
                                <ul>
                                    <li><?php echo $fas; ?></li>
                                </ul>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

    <!-- features_room_startt -->
    <!-- forQuery_end-->

    <!-- instragram_area_start -->

    <!-- instragram_area_end -->

    <!-- footer -->
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright By Rekayasa Perangkat Lunak &copy;
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Form Reservasi</h3>
                <form id="form_pesan">
                    <div class="row">
                        <div class="col-xl-6">
                            <input type="date" id="masuk" placeholder="Tanggal Check IN" name="masuk" style="-webkit-tap-highlight-color: transparent;
                                          background-color: #fff;
                                          border: solid 1px #E2E2E2;
                                          box-sizing: border-box;
                                          clear: both;
                                          cursor: pointer;
                                          display: block;
                                          float: left;
                                          font-family: 'Raleway',sans-serif;
                                          border-radius: 0;
                                          margin-bottom: 30px;
                                          height: 50px !important;
                                          font-size: 16px;
                                          font-weight: 400;
                                          color: #919191;
                                          width: 100% !important;
                                          line-height: 50px;
                                          outline: none;
                                          padding-left: 18px;
                                          padding-right: 30px;
                                          position: relative;
                                          text-align: left !important">
                        </div>
                        <div class="col-xl-6">
                            <input type="date" id="keluar" placeholder="Tanggal Check Out" name="keluar" style="-webkit-tap-highlight-color: transparent;
                                          background-color: #fff;
                                          border: solid 1px #E2E2E2;
                                          box-sizing: border-box;
                                          clear: both;
                                          cursor: pointer;
                                          display: block;
                                          float: left;
                                          font-family: 'Raleway',sans-serif;
                                          border-radius: 0;
                                          margin-bottom: 30px;
                                          height: 50px !important;
                                          font-size: 16px;
                                          font-weight: 400;
                                          color: #919191;
                                          width: 100% !important;
                                          line-height: 50px;
                                          outline: none;
                                          padding-left: 18px;
                                          padding-right: 30px;
                                          position: relative;
                                          text-align: left !important">
                        </div>
                        <div class="col-xl-12">
                            <select class="form-select wide" id="idkamar" class="" name="idkamar" style="-webkit-tap-highlight-color: transparent;
                                                background-color: #fff;
                                                border: solid 1px #E2E2E2;
                                                box-sizing: border-box;
                                                clear: both;
                                                cursor: pointer;
                                                display: block;
                                                float: left;
                                                font-family: 'Raleway',sans-serif;
                                                font-weight: normal;
                                                width: 100% !important;
                                                line-height: 50px;
                                                outline: none;
                                                padding-left: 18px;
                                                padding-right: 30px;
                                                position: relative;
                                                text-align: left !important;
                                                -webkit-transition: all 0.2s ease-in-out;
                                                transition: all 0.2s ease-in-out;
                                                -webkit-user-select: none;
                                                -moz-user-select: none;
                                                -ms-user-select: none;
                                                user-select: none;
                                                white-space: nowrap;
                                                width: auto;
                                                border-radius: 0;
                                                margin-bottom: 30px;
                                                height: 50px !important;
                                                font-size: 16px;
                                                font-weight: 400;
                                                color: #919191;">
                                <?php
                                $sql = "SELECT * FROM tb_kamar";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    //membaca data pada baris tabel
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <option value="<?php echo $row["id_kamar"]; ?>"> <?php echo $row["nama_kamar"]; ?> </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-xl-12">
                            <input type="number" name="jkamar" id="jkamar" placeholder="Jumlah Kamar" style="
                                            -webkit-tap-highlight-color: transparent;
                                            background-color: #fff;
                                            border: solid 1px #E2E2E2;
                                            box-sizing: border-box;
                                            clear: both;
                                            cursor: pointer;
                                            display: block;
                                            float: left;
                                            font-family: 'Raleway',sans-serif;
                                            border-radius: 0;
                                            margin-bottom: 30px;
                                            height: 50px !important;
                                            font-size: 16px;
                                            font-weight: 400;
                                            color: #919191;
                                            width: 100% !important;
                                            line-height: 50px;
                                            outline: none;
                                            padding-left: 18px;
                                            padding-right: 30px;
                                            position: relative;
                                            text-align: left !important;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jumlah Kamar'" required class="single-input">
                        </div>
                        <div class="col-xl-12">
                            <input type="text" name="nama" id="nama" placeholder="Nama Pemesan" style="
                                            -webkit-tap-highlight-color: transparent;
                                            background-color: #fff;
                                            border: solid 1px #E2E2E2;
                                            box-sizing: border-box;
                                            clear: both;
                                            cursor: pointer;
                                            display: block;
                                            float: left;
                                            font-family: 'Raleway',sans-serif;
                                            border-radius: 0;
                                            margin-bottom: 30px;
                                            height: 50px !important;
                                            font-size: 16px;
                                            font-weight: 400;
                                            color: #919191;
                                            width: 100% !important;
                                            line-height: 50px;
                                            outline: none;
                                            padding-left: 18px;
                                            padding-right: 30px;
                                            position: relative;
                                            text-align: left !important;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Pemesan'" required class="single-input">
                        </div>
                        <div class="col-xl-12">
                            <input type="email" name="email" id="email" placeholder="Email" style="
                                            -webkit-tap-highlight-color: transparent;
                                            background-color: #fff;
                                            border: solid 1px #E2E2E2;
                                            box-sizing: border-box;
                                            clear: both;
                                            cursor: pointer;
                                            display: block;
                                            float: left;
                                            font-family: 'Raleway',sans-serif;
                                            border-radius: 0;
                                            margin-bottom: 30px;
                                            height: 50px !important;
                                            font-size: 16px;
                                            font-weight: 400;
                                            color: #919191;
                                            width: 100% !important;
                                            line-height: 50px;
                                            outline: none;
                                            padding-left: 18px;
                                            padding-right: 30px;
                                            position: relative;
                                            text-align: left !important;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input">
                        </div>
                        <div class="col-xl-12">
                            <input type="text" name="hp" id="hp" placeholder="No Telepon" style="
                                            -webkit-tap-highlight-color: transparent;
                                            background-color: #fff;
                                            border: solid 1px #E2E2E2;
                                            box-sizing: border-box;
                                            clear: both;
                                            cursor: pointer;
                                            display: block;
                                            float: left;
                                            font-family: 'Raleway',sans-serif;
                                            border-radius: 0;
                                            margin-bottom: 30px;
                                            height: 50px !important;
                                            font-size: 16px;
                                            font-weight: 400;
                                            color: #919191;
                                            width: 100% !important;
                                            line-height: 50px;
                                            outline: none;
                                            padding-left: 18px;
                                            padding-right: 30px;
                                            position: relative;
                                            text-align: left !important;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Telepon'" required class="single-input">
                        </div>
                        <div class="col-xl-12">
                            <input type="text" name="tamu" id="tamu" placeholder="Nama Tamu" style="
                                            -webkit-tap-highlight-color: transparent;
                                            background-color: #fff;
                                            border: solid 1px #E2E2E2;
                                            box-sizing: border-box;
                                            clear: both;
                                            cursor: pointer;
                                            display: block;
                                            float: left;
                                            font-family: 'Raleway',sans-serif;
                                            border-radius: 0;
                                            margin-bottom: 30px;
                                            height: 50px !important;
                                            font-size: 16px;
                                            font-weight: 400;
                                            color: #919191;
                                            width: 100% !important;
                                            line-height: 50px;
                                            outline: none;
                                            padding-left: 18px;
                                            padding-right: 30px;
                                            position: relative;
                                            text-align: left !important;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Tamu'" required class="single-input">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" id="konfirmasi" class="boxed-btn3">Konfirmasi Pesanan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->


    <!-- JS here -->
    <script src="montana-master/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="montana-master/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="montana-master/js/popper.min.js"></script>
    <script src="montana-master/js/bootstrap.min.js"></script>
    <script src="montana-master/js/owl.carousel.min.js"></script>
    <script src="montana-master/js/isotope.pkgd.min.js"></script>
    <script src="montana-master/js/ajax-form.js"></script>
    <script src="montana-master/js/waypoints.min.js"></script>
    <script src="montana-master/js/jquery.counterup.min.js"></script>
    <script src="montana-master/js/imagesloaded.pkgd.min.js"></script>
    <script src="montana-master/js/scrollIt.js"></script>
    <script src="montana-master/js/jquery.scrollUp.min.js"></script>
    <script src="montana-master/js/wow.min.js"></script>
    <script src="montana-master/js/nice-select.min.js"></script>
    <script src="montana-master/js/jquery.slicknav.min.js"></script>
    <script src="montana-master/js/jquery.magnific-popup.min.js"></script>
    <script src="montana-master/js/plugins.js"></script>
    <script src="montana-master/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="montana-master/js/contact.js"></script>
    <script src="montana-master/js/jquery.ajaxchimp.min.js"></script>
    <script src="montana-master/js/jquery.form.js"></script>
    <script src="montana-master/js/jquery.validate.min.js"></script>
    <script src="montana-master/js/mail-script.js"></script>

    <script src="montana-master/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    </script>



</body>

</html>