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
                        <a class="nav-link" href="#">Pelayanan</a>
                        <a class="nav-link" href="Pengamatan.php">Pengamatan</a>
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
                    <div class="row">
                        <div class="coloumn">
                            <div class="box1-1" style="width: 730px; height:430px; background: #C8DEFE;">
                                <iframe src="https://stamet.serang.bmkg.go.id/radcumar/" style="height:400px; width:700px; margin-top: 10px; margin-bottom: 10px;  margin-left: 10px; margin-right: 10px;"></iframe>
                            </div>
                        </div>

                        <div class="coloumn" style="margin-top:-430px; margin-left:850px">
                            <?php
                            $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                            echo "<b><h4 style=\"text-decoration=underline\">Informasi Gempa Bumi</h4></b>";
                            echo "<img height=500px; src=\"https://data.bmkg.go.id/DataMKG/TEWS/" . $data->gempa->Shakemap . "\" alt=\"Gempabumi Terbaru\">";
                            ?>
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-6">
                            <div id="ml_47a59158">
                                <div style="padding:0;margin:0;" id="ml_47a59158_i" v='1.1' a='{"t":"a","lang":"id","ids":["6191"],"a_bg":"#FFFFFF","a_br_c":"#1E88E5","a_n_b":"#1E88E5","a_icon":"#FFFFFF00","a_con":"#1E88E5","a_inter":"#FFFFFF00","a_n_c":"#FFFFFF","a_icon_color":"#000000","a_con_c":"#FFFFFF","a_int_h_color":"#000000","a_int_temp_color":"#000000"}'>
                                </div>

                                <div id="ml_47a59158_c" style="padding:0;margin:0;padding:7px 5px;"><img src="https://cuacalab.id/assets/img/logo_z_b.svg" style=";vertical-align:baseline;padding:0;margin:0;width:15px;opacity:0.7;margin-right:5px;position:relative;top:1px;display:inline-block;"><a href="https://cuacalab.id/cuaca_serang/hari_ini/" style="color:grey;font-size:12px;text-decoration:none;" target="_blank" id="ml_47a59158_u">Cuaca Hari ini</a>
                                </div>
                            </div>
                            <script async src="https://app.cuacalab.id/js/?id=ml_47a59158"></script>

                        </div>
                    </div>
                                -->
                    <div>
                        <img src="./assets/images/Untitled design (5).png" class="img-fluid" alt="..." style="height:250px ; width:750px; margin-top:80px">
                    </div>
                    <!--
                    <div class="col-5 text-center">
                        <img src="./assets/images/Info Gempa.png" style="width: 400px; height: 400px; margin-top: 50px;" class="img-fluid" alt="...">
                        <br>
                        <div>
                            <img src="Untitled (16 × 6 cm).png" class="img-fluid" alt="...">
                        </div>
                    </div>
                                -->
                    <div>
                        <div class="box1-1" style="width: 600px; height:400px; background: #C8DEFE;">
                            <iframe src="https://www.youtube.com/watch?v=M6jiSdgofAU" style="height:500px; width:800px; margin-top: 10px; margin-bottom: 10px;  margin-left: 10px; margin-right: 10px;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!--Conten1-->
            <!--Conten2-->
            <div style="background: #c8defe;">
                <div class="container">
                    <div class="row" id="Judul">
                        <section>
                            <h4>Berita Terkini</h4>
                        </section>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <img src="berits.png" class="img-fluid" alt="..." style="text-align: center;">
                        </div>
                        <div class="col-4">
                            <img src="berits.png" class="img-fluid" alt="..." style="text-align: center;">
                        </div>
                        <div class="col-4">
                            <img src="berits.png" class="img-fluid" alt="..." style="text-align: center;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div style="text-align: right;">
                                <a>Berita Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="text-align: right;">
                                <a>Berita Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="text-align: right;">
                                <a>Berita Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-6">
                            <div style="text-align: left;">
                                <a>Kualitas Udara</a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div style="text-align: center;">
                                <a>Informasi Iklim</a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div style="text-align: center;">
                                <a>Hari Tanpa Hujan</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="Untitled design (6).png" class="img-fluid" alt="..." style="text-align: center;">
                        </div>
                        <div class="col-3">
                            <img src="berits.png" class="img-fluid" alt="..." style="text-align: center;">
                        </div>
                        <div class="col-3">
                            <img src="berits.png" class="img-fluid" alt="..." style="text-align: center;">
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-3">
                            <div style="text-align: center;">
                                <a>Citra Satelit</a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div style="text-align: center;">
                                <a>Prakiraan Tinggi Gelombang</a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div style="text-align: center;">
                                <a>Prakiraan Angin</a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div style="text-align: center;">
                                <a>Potensi Kebakaran Hutan</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <img src="berits.png" class="img-fluid" alt="..." style="text-align: center;">
                        </div>
                        <div class="col-3">
                            <img src="berits.png" class="img-fluid" alt="..." style="text-align: center;">
                        </div>
                        <div class="col-3">
                            <img src="berits.png" class="img-fluid" alt="..." style="text-align: center;">
                        </div>
                        <div class="col-3">
                            <img src="berits.png" class="img-fluid" alt="..." style="text-align: center;">
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
            <br>
            <!--Coonten3-->
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div style="text-align: left;">
                            <h4>Berita</h4>
                        </div>
                    </div>
                    <div class="col-4">
                        <div style="text-align: left;">
                            <h4>Artikel</h4>
                        </div>
                    </div>
                    <div class="col-4">
                        <div style="text-align: left;">
                            <h4>Pengumuman</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-sm-4">
                                    <img src="Untitled design (7).png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Berita</h5>
                                        <p class="card-text">Bagian ini menjadi deskripsi berita bagian terpenting dari berita
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 jam yang lalu.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-sm-4">
                                    <img src="Untitled design (7).png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Artikel</h5>
                                        <p class="card-text">Bagian ini menjadi deskripsi berita bagian terpenting dari berita
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 jam yang lalu.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-sm-4">
                                    <img src="Untitled design (7).png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Pengumuman</h5>
                                        <p class="card-text">Bagian ini menjadi deskripsi berita bagian terpenting dari berita
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 jam yang lalu.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-sm-4">
                                    <img src="Untitled design (7).png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Berita</h5>
                                        <p class="card-text">Bagian ini menjadi deskripsi berita bagian terpenting dari berita
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 jam yang lalu.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-sm-4">
                                    <img src="Untitled design (7).png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Artikel</h5>
                                        <p class="card-text">Bagian ini menjadi deskripsi berita bagian terpenting dari berita
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 jam yang lalu.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-sm-4">
                                    <img src="Untitled design (7).png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Pengumuman</h5>
                                        <p class="card-text">Bagian ini menjadi deskripsi berita bagian terpenting dari berita
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 jam yang lalu.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-sm-4">
                                    <img src="Untitled design (7).png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Berita</h5>
                                        <p class="card-text">Bagian ini menjadi deskripsi berita bagian terpenting dari berita
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 jam yang lalu.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-sm-4">
                                    <img src="Untitled design (7).png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Artikel</h5>
                                        <p class="card-text">Bagian ini menjadi deskripsi berita bagian terpenting dari berita
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 jam yang lalu.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-sm-4">
                                    <img src="Untitled design (7).png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Pengumuman</h5>
                                        <p class="card-text">Bagian ini menjadi deskripsi berita bagian terpenting dari berita
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 jam yang lalu.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background: #526597;">
                <div class="container">
                    <footer class="py-5">
                        <div class="row">
                            <div class="col-5">
                                <h5>Section</h5>
                                <ul class="nav flex-column">
                            </div>
                            <div class="col-2">
                                <h5>Informasi Lain</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2" style="color: #ffff;">Cuaca Peraira</a></li>
                                    <li class="nav-item mb-2" style="color: #ffff;">Informasi Cuaca</a></li>
                                    <li class="nav-item mb-2" style="color: #ffff;">Galeri</a></li>
                                    <li class="nav-item mb-2" style="color: #ffff;">Radar Cuaca</a></li>
                                </ul>
                                <ul class="nav flex-column">
                                    <br>
                                    <h6 style="color: #FFFf;">Informasi Lain</h6>

                                </ul>
                            </div>

                            <div class="col-5">
                                <h5 style="text-align: center; color: #ffff;">Location On Map</h5>
                                <ul class="nav flex-column" style>
                                    <dev class="text-center">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32672.22923384945!2d106.10273071681381!3d-6.116834515959505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418b1f2b9337a3%3A0x441a1700634c29ec!2sBMKG%20Stasiun%20Meteorologi%20Klas%201%20Serang!5e0!3m2!1sid!2sid!4v1649823555270!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </dev>
                                </ul>
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

        <!--Conten2-->
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