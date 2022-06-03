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
                    <div class="row">
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFF; border-radius: 5px; height: 1000px; width: 800px;">
                            <p style="color: #00000; font-family: Roboto; margin-top: -700px; text-align: center; font-size: 20px; "> “Pelayanan informasi meteorologi yang handal dan terpercaya untuk mewujudkan masyarakat yang sejahtera dan mengurangi resiko bencana kerugian akibat bencana" </p>
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


                    </div>



                    <div class="row">
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E4EEF3; border-radius: 0px; height: 60px; width: 200px; margin-top: -980px; margin-left: 40px;"> <img src="./assets/images/goal.png" style="width: 50px; height: 50px; margin: 5px;">
                            <p style="color: #00000; font-family: Roboto; margin: 30px; text-align:center; font-size: 20px; margin: 15px; "> <b> Visi Misi </b></p>
                        </nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9BD4D8; border-radius: 0px; height: 35px; width: 650px; margin-top: -800px; margin-left: -170px;">
                            <p style="color: #00000; font-family: Roboto; margin: 30px; text-align:center; font-size: 20px; margin: 15px; "> <b> Visi </b></p>
                        </nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFF; border-radius: 5px; height: 1000px; width: 800px;">
                            <p style="color: #00000; font-family: Roboto; margin-top: -2400px; margin-left: 60px;text-align: justify; font-size: 20px; ">Terwujudkan Stasiun Meteorologi yang handal, tanggap dan terpercaya untuk keberhasilan pembangunan di berbagai sektor di Provinsi Banten dan berperan aktif di tingkat nasional untuk menuju masyarakat banten yang sejahtera</p>
                        </nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFF; border-radius: 5px; height: 1000px; width: 800px;">
                            <p style="color: #00000; font-family: Roboto; margin-top: -4260px; margin-left: 60px;text-align: justify; font-size: 20px; ">Terminologi di dalam visi tersebut dapat dijelaskan sebagai berikut :</p>
                        </nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFF; border-radius: 5px; height: 1000px; width: 800px; margin-top: -2850px; margin-left: 70px; text-align: justify; ">
                            <ul>
                                <li>
                                    <p><span style="font-family: 'andale mono', times; font-size: 14pt;">Handal dimaksudkan pelayanan stasiun dalam penyajian data, pelayanan jasa informasi meteorologi yang cepat, tepat, akurat luas jangkauannya serta mudah dipahami dan dipertanggungjawabkan.</span></p>
                                </li>
                                <li>
                                    <p><span style="font-family: 'andale mono', times; font-size: 14pt;">Tanggap dimaksudkan dapat menangkap dan merumuskan kebutuhan stakeholder akan data, informasi akan jasa meteorologi serta mampu memberikan pelayanan sesuai dengan kebutuhan pengguna.</span></p>
                                </li>
                                <li>
                                    <p><span style="font-family: 'andale mono', times; font-size: 14pt;">Terpercaya dimaksudkan Stasiun dalam memberikan pelayanan informasi dari jasa meteorologi dapat diandalkan dan menjadi rujukan terhadap masyarakat dalam mengambil tindakan sehingga masyarakat bereaksi lebih cepat, tepat dan aman</span></p>
                                </li>
                                <li>
                                    <p><span style="font-family: 'andale mono', times; font-size: 14pt;">Mendukung keberhasilan pembangunan di Propinsi Banten dimaksudkan bahwa data, informasi, dan jasa yang diberikan oleh Stasiun dapat dimanfaatkan oleh berbagai sektor pengguna jasa untuk meningkatkan hasil pembangunan di Propinsi Banten, keselamatan masyarakat dan mengurangi kerugian akibat bencana</span></p>
                                </li>
                                <li>
                                    <p><span style="font-family: 'andale mono', times; font-size: 14pt;">Berperan aktif di tingkat nasional dimaksudkan Stasiun sebagai wakil BMKG Pusat wajib membawa nama BMKG di kancah nasional dalam bidang meteorologi</span></p>
                                </li>
                            </ul>
                        </nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9BD4D8; border-radius: 0px; height: 35px; width: 650px; margin-top: -2100px; margin-left: 85px;">
                            <p style="color: #00000; font-family: Roboto; margin: 30px; text-align:center; font-size: 20px; margin: 15px; "> <b> Misi </b></p>
                        </nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFF; border-radius: 5px; height: 1000px; width: 800px; margin-top: -2375px; margin-left: 70px; text-align: justify; ">
                            <ul>
                                <li>
                                    <p><span style="font-family: 'andale mono', times; font-size: 14pt;">Handal dimaksudkan pelayanan stasiun Meningkatkan pemgamatan dan pengolahan data serta pelayanan informasi dan jasa meteorologi yang cepat, akurat, luas jangkauannya dan mudah dipahami;</span></p>
                                </li>
                                <li>
                                    <p><span style="font-family: 'andale mono', times; font-size: 14pt;">Meningkatkan kapasitas sumber daya manusia ( SDM ) sesuai kebutuhan operasional</span></p>
                                </li>
                                <li>
                                    <p><span style="font-family: 'andale mono', times; font-size: 14pt;">Meningkatkan kapasitas peralatan, jaringan komunikasi serta sarana prasarana meteorologi dalam rangka otomatisasi;</span></p>
                                </li>
                                <li>
                                    <p><span style="font-family: 'andale mono', times; font-size: 14pt;">Meningkatkan pemahaman informasi meteorologi untuk kepentingan pembangunan Propinsi Banten dan mengurangi resiko bencana guna terwujudnya masyarakat Banten yang sejahtera</span></p>
                                </li>
                                <li>
                                    <p><span style="font-family: 'andale mono', times; font-size: 14pt;">Meningkatkan koordinasi dan kerjasama serta berperan aktif di tingkat nasional.</span></p>
                                </li>
                            </ul>
                        </nav>


                    </div>



                </div>
                <br>
                <br>
                <div style="background: #526597;">
                    <div class="container">
                        <footer class="py-5" style="">
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