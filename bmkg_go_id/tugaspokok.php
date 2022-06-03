<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/custom-style.css">
    <link rel="icon" href="./assets/images/logo-bmkg.png" sizes="32x32" />
    <title>Beranda - BMKG Serang</title>
</head>
<style type="text/css">
    @font-face {
        font-family: 'signica-semibold';
        src: url('./assets/fonts/signika-negative-sc/SignikaNegativeSC-SemiBold.ttf');
    }

    h3 {
        font-family: 'signica-semibold';
    }
</style>

<body>
    <!--Header-->
    <div id="wrapper">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E4EEF3; width: 100%; height: 180px;">
                <img src="./assets/images/logo-bmkg.png" style="width: 90px; height: 100px; margin-left: 100px;"></img>
                <div class="col-lg-12 col-xl-6 col-md-6 col-sm-12 col-xs-12"><br>
                    <h3 class="opening-text title" style="margin-left: 50px;">STASIUN METEOROLOGI MARITIM</h3>
                    <h3 class="opening-text subtitle" style="margin-left: 50px">KELAS I SERANG</h3>
                    <p class="opening-text subtitle" style="margin-left: 50px; font-size: 20px;"> Cepat, Tepat, Akurat, Luas dan Mudah Dipahami</p>

                </div>
                <!-- <h6>Cepat, Tepat, Akurat, Luas dan Mudah Dipahami</h6> -->

                <!--<img src="./assets/gedung.png" align="right" style="width: 90px; height: 100px; margin-right: : 100px"></img>
         </nav> -->
        </div>

        <!--NavBar-->
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9BD4D8; border-radius: 20px; margin-top: -20px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php" style="text-decoration: underline;">Beranda</a>
                        <hr>
                        <a class="nav-link" href="profil.php">Profil</a>
                        <a class="nav-link" href="https://stamet.serang.bmkg.go.id/radcumar/">Cuaca</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pelayanan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="alur_pelayanan.php">Alur Pelayanan</a></li>
                                <li><a class="dropdown-item" href="produklayanan.php">Produk dan Layanan</a></li>
                                <li><a class="dropdown-item" href="permintaandata.php">Permintaan Data</a></li>
                                <li><a class="dropdown-item" href="saranpesan.php">Saran dan Pesan</a></li>
                                <li><a class="dropdown-item" href="quisioner.php">Quisioner</a></li>
                                <li><a class="dropdown-item" href="pengaduan.php">Pengaduan</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="#">Pengamatan</a>
                        <a class="nav-link" href="#">Prakiraan</a>
                    </div>
                </div>
            </nav>
        </div>
        <!--NavBar-->
        <!--Conten1-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #5A5C60; border-radius: 10px; margin-top: -5px;">
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <span id="tanggalwaktu"></span>
                                </div>
                            </div>
                        </nav>
                    </nav>
                </div>
            </div>
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F3F3F3; border-radius: 5px; height: 1000px; width: 750px;">
                    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C4C4C4; padding-top: auto; align-content: center; margin-left: 60px; margin-bottom: 700px; border-radius: 15px; height: 260px; width: 600px;"> <img src="./assets/images/gedung.png" style="width: 500px; height: 250px; margin: 70px;">
                    </nav>
                </nav>

                <nav class="navbar navbar-expand-lg">
                    <div class="coloumn" style="margin-top: -1500px; margin-left: 850px">
                        <?php
                        $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                        echo "<b><h4 style=\"text-decoration=underline\">Informasi Gempa Bumi</h4></b>";
                        echo "<img height=500px; src=\"https://data.bmkg.go.id/DataMKG/TEWS/" . $data->gempa->Shakemap . "\" alt=\"Gempabumi Terbaru\">";
                        ?>
                    </div>
                </nav>

                <!--Siaran Pers-->
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F3F3F3; border-radius: 5px; height: 750px; width: 500px; margin-left:800px ; margin-top:-450px;">
                    <nav class="navbar navbar-expand-lg navbar-light">
                    </nav>
                    <div class="row" style="margin-top: 20px; margin-left:35px">
                        <div class="card mb-3" style="max-width: 400px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 400px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 400px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 5px; height: 40px; width: 200px; margin-top: -770px; margin-left: 840px;">
                    <p style="color: #00000; font-family: Roboto; margin: 40px; text-align: center; font-size: 19px;">Siaran Pers</p>
                </nav>

            </div>

            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 5px; height: 60px; width: 200px; margin-top: -1070px; margin-left: 270px;">
                    <p style="color: #00000; font-family: Roboto; margin: 50px; text-align: center; font-size: 24px;">Sejarah</p>
                    <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px;  margin-top: -120px; margin-left: -130px;"> <img src="./assets/images/tugas-pokok.png" style="width: 55px; height: 55px; margin: 20px;"> </nav>
                </nav>
            </div>
            <div class="row" style="margin-top:-280px ;">
                <div class="col-6">
                    <nav class="navbar navbar-expand-lg">
                        <p style="text-align:justify; margin-left:55px; margin-top:-1150px; font-size:20px">Tugas Pokok Stasiun Meteorologi Klas I Serang sesuai dengan Peraturan Kepala BMKG Nomor 9 tahun 2014 tanggal 17 April 2014 pada bab II pasal 6 (1). (2) , dan (3) yaitu (1) Stasiun Meteorologi mempunyai tugas utama melaksanakan pengamatan, pengolahan data dan pelayanan jasa ; (2) Dalam menunjang pelaksanaan tugas utama , Stasiun Meteorologi melaksanakan pemeliharaan peralatan , kerjasama / koordinasi , administrasi dan tugas tambahan ; (3) Uraian tugas utama dan tugas tambahan Stasiun Meteorologi Klas I seperti tertuang pada peraturan tersebut.
                            <br>
                            Tugas dan Fungsi Stasiun Meteorologi Klas I Serang adalah:
                        </p>
                    </nav>
                </div>
            </div>
            <div class="row" style="margin-left:55px; margin-top:-450px">
                <div class="col-6">
                    <nav class="navbar navbar-expand-lg">
                        <ul style="font-size:20px ;">
                            <li>Pengamatan meteorologi synoptik permukaan dan udara atas</li>
                            <li>Pengumpulan , pengolahan dan penyimpanan data , analisis dan prakiraan dan pengaksesan data meteorologi dan klimatologi </li>
                            <li>Pelayanan jasa meteorologi, dan klimatologi </li>
                            <li>Pemeliharaan peralatan pengamatan</li>
                            <li>Koordinasi dan kerjasama baik intern dan ekstern</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <br>
        <br>
        <!--footer-->
        <div style="background: #526597;">
            <div class="container">
                <footer class="py-5" style="margin-top:500px;">
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <img src="./assets/images/logobmkg.jpg" style="border-radius: 20px; width:80px; height: 60px;">
                            <div class="col-lg-12 col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                <h6 style="color: #ffff; font-family: signica-semibold;">STASIUN METEOROLOGI MARITIM</h6>
                                <h6 style="color: #ffff; font-family: signica-semibold;">KELAS I SERANG</h6>
                                <h6 style="color: #ffff;">Cepat, Tepat, Akurat, Luas, dan Mudah Dipahami</h6>
                            </div>
                        </div>
                        <h5 style="color: #ffff; font-family: Roboto;"> <b><br> Alamat Kantor</b></h5>
                        <h6 style="color: #ffff; font-family: Roboto;">Jl. Raya Taktakan No. 27, Dragong, <br> Kec. Taktakan, Serang Banten<br>42162</h6>
                        <hr class="short white ms-0" />
                        <h5 style="color: #ffff; font-family: Roboto;"> <b> BMKG Pusat </b></h5>
                        <h6 style="color: #ffff;"> https://www.bmkg.go.id/</h6>
                        <hr class="short white ms-0" />
                    </div>


            </div>
            </footer>
        </div>
    </div>
    <div style="background: #6e737b;">
        <div class="text-center">
            <p style="color: #ffff;">© 2022 - Stasiun Meteorologi Maritim Kelas I Serang</p>
            <p style="color: #ffff;">Kelas I Serang</p>
        </div>
    </div>
    </div>

    <!--Conten3-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
        else(a = tw.getTime());
        tw.setTime(a);
        var tahun = tw.getFullYear();
        var hari = tw.getDay();
        var bulan = tw.getMonth();
        var tanggal = tw.getDate();
        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
        document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun + " Jam " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10) ? "0" : "") + tw.getMinutes() + (" W.I.B ");
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>