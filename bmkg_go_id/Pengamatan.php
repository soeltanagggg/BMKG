!doctype html>
<html lang="en">

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

    <title>Pengamatan</title>
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
    <!--NavBar-->
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
    <!--Conten1-->
    <!--NavBar-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9BD4D8; border-radius: 30px; margin-top: -20px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Beranda</a>
                    <a class="nav-link" href="profil.php" style="text-decoration: underline;">Profil</a>
                    <a class="nav-link" href="#">Cuaca</a>
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
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F3F3F3; border-radius: 5px; height: 950px; width: 700px;">
                <nav class="navbar navbar-expand-lg navbar-light">
                </nav>
                <div class="row">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal1" src="assets/images/bmkg/1.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal2" src="assets/images/bmkg/2.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal3" src="assets/images/bmkg/3.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal4" src="assets/images/bmkg/4.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal5" src="assets/images/bmkg/5.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal6" src="assets/images/bmkg/6.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal7" src="assets/images/bmkg/7.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal8" src="assets/images/bmkg/8.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal9" src="assets/images/bmkg/9.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal10" src="assets/images/bmkg/10.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal11" src="assets/images/bmkg/11.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                    <img type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal12" src="assets/images/bmkg/12.jpg" alt="" style="height: 200px; width: 200px; margin-top: 0px; margin-left: 25px; margin-bottom: 20px; border-radius: 40px">
                </div>
            </nav>
            <!--Modol Alat Observasi-->
            <!-- Modal 1 -->
            <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sangkar Meteo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sangkar meteo merupakan bangunan berbentuk rumah yang terbuat dari kayu yang berfungsi untuk menyimpan alat termohigrograf, termometer maksimum, termometer minimum, termometer bola kering dan termometer bola basah. Sangkar meteo berventilasi dobel jalusi, yang gunanya mengalirkan udara masuk dan keluar, Sangkar meteo juga dicat putih agar memantulkan cahaya yang merupakan konvensi dari WMO (World Meteorological Organisation). Pintu pada sangkar meteo posisinya harus dipasang utara-selatan.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Anemometer Cup Counter 2M</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Berfungsi untuk mengukur kecepatan angin rata-rata selama periode tertentu. Untuk mengetahui kecepatan rata-rata angin pada periode waktu tertentu dilakukan dengan mengurangi hasil pembacaan pada angka counter saat pengamatan dengan hasil pembacaan sebelumnya, kemudian dibagi dengan periode waktu pengamatan

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thermohygrograph</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Gabungan Thermograph dan Hygrograph dinamakan Thermohygrograph. Alat ini memiliki fungsi untuk mengukur suhu dan kelembaban udara secara otomatis. Dengan menggunakan pias kertas sebagai hasil yang dilihat, kemudian dibagian kertas tersebut terdapat pengukur suhu (bagian atas kertas) dan pengukurkelembaban (bagian bawah kertas). Dengan menggunakan sebuah sensor, makarafik perubahan suhu bisa diketahui, karena sensor tersebut sangat peka terhadaP suhu sekitar, dimana mengalami pemuaian bila suhu meningkat dan menyusut jika suhu rendah
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 4 -->
            <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ombrometer Observatory</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Penakar hujan Observatorium merupakan penakar hujan non-recording atau tidak dapat mencatat sendiri. Penakar hujan OBS berfungsi untuk mengukur jumlah curah hujan yang jatuh pada permukaan tanah dalam periode waktu 24 jam. Jumlah curah hujan yang terukur dinyatakan dalam satuan mm.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 5 -->
            <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thermometer Tanah</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Pengamatan suhu tanah dilakukan pada kedalaman 0 cm, 5 cm, 10 cm, 20 cm, 30 cm, 50 cm dan 100 cm. Dipasang membujur Utara-Selatan dengan jarak 0.5 sampai dengan 1 m antara dengan lainnya (kecuali ada standar khusus yang 0 sampai dengan 20 cm). Gunanya agar bayangan tidak saling mengenai satu dengan lainnya. Pengukuran dilakukan pada tanah tertutup rumput dan pada permukaan tanah terbuka.

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 6 -->
            <div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Helman</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Penakar hujan jenis Hellman merupakan suatu instrument/alat untuk mengukur curah hujan. Penakar hujan jenis hellman ini merupakan suatu alat penakar hujan berjenis recording atau dapat mencatat sendiri. Pengamatan dengan menggunakan alat ini dilakukan setiap hari pada jam-jam tertentu mekipun cuaca dalam keadaan baik/hari sedang cerah. Alat ini mencatat jumlah curah hujan yang terkumpul dalam bentuk garis vertikal yang tercatat pada kertas pias.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 7 -->
            <div class="modal fade" id="Modal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Anemometer 10M</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Anemograf merupakan salah satu jenis anemometer dengan tinggi 10 meter. Fungsi dari alat ini digunakan untuk mengukur arah dan kecepatan angin. Angin yang bertiup akan membuat anemometer berputar dan kecepatan angin akan ditunjukkan oleh spidometer yang tertera pada alat. Anemometer berupa baling-baling yang as nya dihubungkan dengan dinamo penghasil arus listrik. Apa bila angin bertiup baling-baling akan berputar dan memutar dinamo dan akan diperoleh arus listrik.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 8 -->
            <div class="modal fade" id="Modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">HV Sampler</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            High Volume Air Sampler (HV Sampler) Fungsi: untuk mengambil sampel SPM (Suspended Particle Matter). Cara Kerja: Udara yang mengandung partikel debu dihisap mengalir melalui kertas filter dengan menggunakan motor putaran kecepatan tinggi. Debu akan menempel pada kertas filter yang nantinya akan diukur konsentrasinya dengan cara kertas filter tersebut ditimbang sebelum dan sesudah sampling di 13 samping itu dicatat flowrate dan waktu lamanya sampling sehingga didapat konsentrasi debu tersebut.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 9 -->
            <div class="modal fade" id="Modal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ARWS</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Automatic Rain Sampler adalah peralatan yang digunakan untuk mengambil sampel air hujan. Fungsi: untuk mengambil sampel air hujan yang akan diukur konsentrasi kimia Air Hujan. Cara Kerja: Jika terjadi hujan maka sensor akan memberikan trigger kepada sistem kontrol untuk membuka tutup tempat penampungan air yang digerakkan oleh motor listrik, selama hujan penutup tersebut tetap terbuka kemudian setelah hujan berhenti maka penutup akan bergerak ke posisi semula Sehingga air hujan yang di tempat penampungan tak terkena kotoran lain karena tertutup rapat.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 10 -->
            <div class="modal fade" id="Modal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Theodolite</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adalah alat pengamatan dan pengukur kecepatan angin udara atas / Aerologi. Untuk melakukan pengamatan theodolite memerlukan peralatan lain yaitu: balon, gas H2 untuk mengisi balon,komputer pengolah data, dan plotting board. Cara kerjanya yaitu dengan cara melapaskan balon, kemudian kecepatan naiknya balon diukur dan dilepas, dan setiap menit naik 500 feet balon yang bergerak di catat maksimusnya dan elevasinya dan terus begitu.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 11 -->
            <div class="modal fade" id="Modal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pan Evaporimeter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Evaporimeter panci terbuka adalah sebuah alat yang dirangkal sedemikian rupa sehingga dapat mencatat jumlah penguapan yang tejadi selama 24 jam.

                            Evaporimeter termasuk jenis alat konvensional yaitu alat yang harus dibaca pada saat saat tertentu untuk memperoleh data. Pengamatan penguapan air menggunakan alat penguapan yang terdiri dari:

                            <ol>
                                <li>Bejana atau panci tempat air dengan diameter 127 Cm.</li>
                                <li>Thermometer apung untuk mengukur suhu air.</li>
                                <li>Hook Gauge stell well untuk mengukur tinggi air dalam panci.</li>
                                <li>Kayu penopang untuk penyangga panci sehingga tidak bersentuhan dengan tanah karena tanah menngandung panas yang akan menambah penguapan.</li>
                                <li>Cup counter anemometer untuk mengukur kecepatan angin rata-rata di permukaan air. Pengamatan dilaksanakan setiap jam 07.00 WIB. Selisih tinggi air sekarang dengan tinggi air kemarin merupakan jumlah air yang hilang karena menguap dengan kondisi: suhu air rata-rata seperti yang ditunjukan thermometer apung, kecepatan angin rata-rata di permukaan air seperti yang ditunjukan Cup Counter Anemometer.</li>
                            </ol>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 12 -->
            <div class="modal fade" id="Modal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">AWS</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            AWS (Automatic Weather Stations) merupakan suatu peralatan atau sistem terpadu yang di disain untuk pengumpulan data cuaca secara otomatis serta di proses agar pengamatan menjadi lebih mudah. AWS ini umumnya dilengkapi dengan sensor, RTU (Remote Terminal Unit), Komputer, unit LED Display dan bagian-bagian lainnya. Sensor-sensor yang digunakan meliputi sensor temperatur, arah dan kecepatan angin, kelembaban, presipitasi, tekanan udara, pyranometer, net radiometer. RTU (Remote Terminal Unit) terdiri atas data logger dan backup power, yang berfungsi sebagal terminal pengumpulan data cuaca dari sensor tersebut dan di transmisikan ke unit pengumpulan data pada komputer. Masing-masing parameter cuaca dapat ditampilkan melalui LED (Light Emiting Diode) Display, sehingga para pengguna dapat mengamati cuaca saat itu (present weather) dengan mudah.

                            Secara umum AWS dibagi menjadi beberapa bagian utama, secara umum yaitu :

                            <ol type="A">
                                <li>SENSOR</li>
                                <ul>
                                    <li>a) Air Temperature</li>
                                    <li>b) Precipitation</li>
                                </ul>
                                <br>
                                Secondary Sensors
                                <ul>
                                    <li>a) Wind Speed</li>
                                    <li>b) Global Solar Radiation</li>
                                    <li>c) Ground Surface (Skin) Temperature</li>
                                    <li>d) Solar panels & Wind power (optional)</li>
                                    <li>e) Extended Range Operating Envelopes</li>
                                </ul>
                                <br>
                                <li>DATA LOGGER</li>
                                <li>KOMPUTER (sistem perekam dan sistem monitor)</li>
                                <li>DISPLAY (optional)</li>
                                <li>Tiang untuk Dudukan Sensor dan Data Logger</li>
                                <li>Penangkal Petir</li>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <nav>
                <div class="coloumn" style="margin-top: -950px; margin-left: 800px">
                    <?php
                    $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                    echo "<b><h4 style=\"text-decoration=underline\">Informasi Gempa Bumi</h4></b>";
                    echo "<img height=500px; src=\"https://data.bmkg.go.id/DataMKG/TEWS/" . $data->gempa->Shakemap . "\" alt=\"Gempabumi Terbaru\">";
                    ?>
                </div>
            </nav>
            <!--Siaran Pers-->
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F3F3F3; border-radius: 5px; height: 750px; width: 500px; margin-left:800px ; margin-top:-370px;">
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
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 5px; height: 40px; width: 200px; margin-top: -1340px; margin-left: 40px;">
                <p style="color: #00000; font-family: Roboto; margin: 30px; text-align: center; font-size: 19px;">Alat Observasi</p>
            </nav>
        </div>

        <div class="row" style="margin-top: -350px;">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F3F3F3; border-radius: 5px; height: 400px; width: 700px;">
                <div class="col-sm-6 col-lg-3 col-xl-2" style="margin-left: 0px ; margin-top: -180px">
                    <a href="sejarah.php" style="color:#5A5C60;">
                        <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px; align-content: center; margin-left: 50px; margin-right: 50px; z-index: 2;"> <img src="./assets/images/bmkg/1587506_internet_line_satellite_icon.png" style="width: 55px; height: 55px; margin: 20px;"></nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 24px; height: 60px; width: 200px; margin-top: -10px; z-index: 3;">
                            <p style="color: #00000; font-family: Roboto; margin: 50px; text-align: center; font-size: 18px;">Citra Satelit Banten</p>
                        </nav>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3 col-xl-2" style="margin-left: 120px; margin-top: -180px; ">
                    <a href="tugas-pokok.php " style="color:#5A5C60;">
                        <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px; align-content: center; margin-left: 50px; margin-right: 50px;"> <img src="./assets/images/bmkg/pngtree-bad-weather-vector-icon-png-image_3725335-removebg-preview 1.png" style="width: 55px; height: 55px; margin: 20px;"> </nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 24px; height: 60px; width: 200px; margin-top: -10px;">
                            <p style="color: #00000; font-family: Roboto; margin: 42px; text-align: center; font-size: 18px;">Cuaca Perairan</p>
                        </nav>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 col-xl-2" style="margin-left: 120px; margin-top: -180px; ">
                    <a href="visi-misi.php" style="color:#5A5C60;">
                        <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px; align-content: center; margin-left: 50px; margin-right: 50px;"> <img src="./assets/images/bmkg/k-removebg-preview 1.png" style="width: 55px; height: 55px; margin: 20px;"> </nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 24px; height: 60px; width: 200px; margin-top: -10px;">
                            <p style="color: #00000; font-family: Roboto; margin: 58px; text-align: center; font-size: 18px;">Citra Jenis Awan</p>
                        </nav>
                    </a>
                </div>
                <!--Barus ke 2-->
                <div class="col-sm-6 col-lg-6 col-xl-2" style="margin-left: -470px; margin-right:130px; margin-top: 160px">
                    <a href="so.php" style="color:#5A5C60;">
                        <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px; align-content: center; margin-left: 50px; margin-right: 50px;"> <img src="./assets/images/bmkg/4026443_device_electronic_machine_satelite_technology_icon.png" style="width: 55px; height: 55px; margin: 20px;"> </nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 24px; height: 60px; width: 200px; margin-top: -10px;">
                            <p style="color: #00000; font-family: Roboto; margin: 45px; text-align: center; font-size: 18px;">Citra Penguapan Air
                        </nav>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-6 col-xl-2" style="margin-top: 160px">
                    <a href="so.php" style="color:#5A5C60;">
                        <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px; align-content: center; margin-left: 50px; margin-right: 50px;"> <img src="./assets/images/bmkg/5e709ea09cdc6 1.png" style="width: 55px; height: 55px; margin: 20px;"> </nav>
                        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 24px; height: 60px; width: 200px; margin-top: -10px;">
                            <p style="color: #00000; font-family: Roboto; margin: 40px; text-align: center; font-size: 18px;">Citra Penajaman Warna
                        </nav>
                    </a>
                </div>
            </nav>
        </div>

        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 5px; height: 40px; width: 200px; margin-top: -800px; margin-left: 40px;">
                    <p style="color: #00000; font-family: Roboto; margin: 50px; text-align: center; font-size: 19px;"><u>Citra Satelit</u></p>
                </nav>
            </nav>
        </div>

    </div>

    <!--Modol Citra Satelit-->
    <div class="modal fade" id="Modal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Theodolite</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Adalah alat pengamatan dan pengukur kecepatan angin udara atas / Aerologi. Untuk melakukan pengamatan theodolite memerlukan peralatan lain yaitu: balon, gas H2 untuk mengisi balon,komputer pengolah data, dan plotting board. Cara kerjanya yaitu dengan cara melapaskan balon, kemudian kecepatan naiknya balon diukur dan dilepas, dan setiap menit naik 500 feet balon yang bergerak di catat maksimusnya dan elevasinya dan terus begitu.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <!--foooter-->
    <div style="background: #526597;">
        <div class="container">
            <footer class="py-5">
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
    <!--Footer-->

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