<!doctype html>
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

  <title>Profil</title>
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
  <div id="wrapper">
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E4EEF3; width: 100%; height: 180px;">
        <img src="./assets/images/logo-bmkg.png" style="width: 90px; height: 100px; margin-left: 100px;"></img>
        <div class="col-lg-12 col-xl-6 col-md-6 col-sm-12 col-xs-12"><br>
          <h3 class="opening-text title" style="margin-left: 50px;">STASIUN METEOROLOGI MARITIM</h3>
          <h3 class="opening-text subtitle" style="margin-left: 50px">KELAS I SERANG</h3>
          <p class="opening-text subtitle" style="margin-left: 50px; font-size: 20px;"> Cepat, Tepat, Akurat, Luas dan Mudah Dipahami</p>
          <img src="gedung.png" align="right">

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
            <a class="nav-link" href="https://stamet.serang.bmkg.go.id/radcumar/">Cuaca</a>
            <a class="nav-link" href="#">Pelayanan</a>
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
      <br>
      <div class="row">
        <div class="col-sm-6 col-lg-3 col-xl-2">
          <a href="sejarah.php">
            <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px; align-content: center; margin-left: 50px; margin-right: 50px; z-index: 2;"> <img src="./assets/images/history.png" style="width: 55px; height: 55px; margin: 20px;"></nav>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 24px; height: 60px; width: 200px; margin-top: -10px; z-index: 3;">
              <p style="color:black; font-family: Roboto; margin: 70px; text-align: center; font-size: 22px;">Sejarah</p>
            </nav>
          </a>
        </div>

        <div class="col-sm-6 col-lg-3 col-xl-2">
          <a href="tugaspokok.php">
            <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px; align-content: center; margin-left: 50px; margin-right: 50px;"> <img src="assets/images/to-do-list.png" style="width: 55px; height: 55px; margin: 20px;"> </nav>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 24px; height: 60px; width: 200px; margin-top: -10px;">
              <p style="color: black; font-family: Roboto; margin: auto; text-align: center; font-size: 22px;">Tugas Pokok</p>
            </nav>
          </a>
        </div>

        <div class="col-sm-6 col-lg-3 col-xl-2">
          <a href="visimisi.php">
            <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px; align-content: center; margin-left: 50px; margin-right: 50px;"> <img src="assets/images/target.png" style="width: 55px; height: 55px; margin: 20px;"> </nav>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 24px; height: 60px; width: 200px; margin-top: -10px;">
              <p style="color: black; font-family: Roboto; margin:auto; text-align: center; font-size: 22px;">Visi Misi</p>
            </nav>
          </a>
        </div>
      </div>
      <br>
      <br>

      <div class="row" style="margin-left: 100px;">
        <div class="col-sm-6 col-lg-6 col-xl-2">
          <a href="so.php">
            <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px; align-content: center; margin-left: 50px; margin-right: 50px;"> <img src="assets/images/management.png" style="width: 55px; height: 55px; margin: 18px;"> </nav>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 24px; height: 60px; width: 200px; margin-top: -10px;">
              <p style="color: black; font-family: Roboto; margin: auto; text-align: center; font-size: 20px;">Struktur Organisasi
            </nav>
          </a>
        </div>

        <div class="col-sm-6 col-lg-6 col-xl-2" style="margin-left:20px ;">
          <a href="so.php">
            <nav class="menu" style="background-color: #9BD4D8; border-radius: 1200px; height: 90px; width: 90px; align-content: center; margin-left: 50px; margin-right: 50px;"> <img src="./assets/images/tugas-pokok.png" style="width: 55px; height: 55px; margin: 18px;"> </nav>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 24px; height: 60px; width: 200px; margin-top: -10px;">
              <p style="color: black; font-family: Roboto; margin:auto; text-align: center; font-size: 22px;">Buletin
            </nav>
          </a>
        </div>
      </div>

      <div class="row justify-content-end" style="text-align:center ;">
        <div class="col-6" style="margin-top:-360px ;">
          <?php
          $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
          echo "<b><h4 style=\"text-decoration=underline\">Informasi Gempa Bumi</h4></b>";
          echo "<img height=400px width=350px; src=\"https://data.bmkg.go.id/DataMKG/TEWS/" . $data->gempa->Shakemap . "\" alt=\"Gempabumi Terbaru\">";
          ?>
        </div>
      </div>
    </div>
    <!--conten2-->
    <br>
    <br>

    <div class="content">
      <nav class="space" style="background-color: #C8DEFE; width: 100%; height: 300px;">
        <div class="container">
          <div class="row g-4">
            <div class="col-8">
              <h5 style="color: #000000; font-family: Roboto; text-align:center; margin-bottom:30px; font-size:25px; font-weight:bold">Hubungi Kami</h5>
            </div>
            <div class="row">
              <div class="col-6">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9BD4D8; border-radius: 12px; height: 70px; width: 70px; z-index: 2; margin-left: -30px; margin-bottom: -70px;"><img src="assets/images/instagram.png" style="width: 45px; height: 45px; margin: auto;">
                </nav>
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 7px; height: 90px; width: 300px; margin-top: -80px;">
                  <div class="row">
                    <div class="col-6">
                      <h5 class="opening-text subtitle" style="margin-left:100px;font-weight:bold; font-size:23px">Instagram </h5>
                      <div class="col-6">
                        <p style="margin-left:8px; font-size:20px; text-align:center;"><a href="https://www.instagram.com/bmkgkotaserang/">@bmkgserang</a></p>
                      </div>
                </nav>
              </div>
              <br>
              <br>
              <br>
              <div class="col-6">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9BD4D8; border-radius: 12px; height: 50px; width: 50px; z-index: 2; margin-left: -30px; margin-bottom: -60px;"><img src="assets/images/telephone.png" style="width: 30px; height: 30px; margin: 10px;">
                </nav>
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 7px; height: 70px; width: 300px; margin-top: -10px;">
                  <<div class="row">
                    <div class="col-6">
                      <h5 class="opening-text subtitle" style="margin-left: 25px">Telepon</h5>
                      <div class="col-6">
                        <h7 style="margin-left: 23px" font-size: 15px;>(0254)222177 </h7>
                      </div>
                </nav>
              </div>
            </div>

            <div class="col-6">
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9BD4D8; border-radius: 12px; height: 50px; width: 50px; z-index: 2; margin-left: -30px; margin-bottom: -60px;"> <img src="assets/images/gmail.png" style="width: 30px; height: 30px; margin: 10px;">
              </nav>
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 7px; height: 70px; width: 300px; margin-top: -10px;">
                <div class="row">
                  <div class="col-6">
                    <h5 class="opening-text subtitle" style="margin-left: 25px">E-Mail </h5>
                    <div class="col-6">
                      <h7 style="margin-left: 23px" font-size: 15px;>stamet_serang@yahoo.co.id</h7>
                    </div>
              </nav>
            </div>
            <br>
            <br>
            <br>
            <div class="col-6">
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9BD4D8; border-radius: 12px; height: 50px; width: 50px; z-index: 2; margin-left: -30px; margin-bottom: -60px;"> <img src="assets/images/map.png" style="width: 30px; height: 30px; margin: 10px;">
              </nav>
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56BBD1; border-radius: 7px; height: 70px; width: 300px; margin-top: -10px;">
                <div class="row">
                  <div class="col-6">
                    <h5 class="opening-text subtitle" style="margin-left: 25px">E-Mail </h5>
                    <div class="col-6">
                      <h7 style="margin-left: 23px" font-size: 15px;>stamet_serang@yahoo.co.id</h7>
                    </div>
              </nav>
            </div>
          </div>
        </div>
    </div>
    </nav>

    <div class="row">
      <div class="col-sm-6 col-lg-3 col-xl-3"><img src="berits.png" class="img-fluid" alt=""></div>
      <div class="col-sm-6 col-lg-3 col-xl-3"><img src="berits.png" class="img-fluid" alt=""></div>
      <div class="col-sm-6 col-lg-3 col-xl-3"><img src="berits.png" class="img-fluid" alt=""></div>
    </div>
  </div>
  </div>
  </div>
  </nav>

  <!--Conten3-->
  <div class="container">
    <div class="row">
    </div>
    <div class="row">
      <h4>Berita Terkini</h4>
      <div class="col-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="assets/images/gempa_news.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">M 5.4 Tectonic Earthquake Shakes Lebak, No Potential for Tsunamis</h5>
                <p class="card-text">Tuesday, July 7, 2020 at 11.44.14 WIB the Lebak region was rocked by a tectonic earthquake.</p>
                <a href="https://www.bmkg.go.id/press-release/?p=gempabumi-tektonik-m-54-mengguncang-lebak-tidak-berpotensi-tsunami&tag=press-release&lang=EN" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <h4>Siaran Pers </h4>
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="assets/images/gempa_news.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">M 5.4 Tectonic Earthquake Shakes Lebak, No Potential for Tsunamis</h5>
                <p class="card-text">Tuesday, July 7, 2020 at 11.44.14 WIB the Lebak region was rocked by a tectonic earthquake.</p>
                <a href="https://www.bmkg.go.id/press-release/?p=gempabumi-tektonik-m-54-mengguncang-lebak-tidak-berpotensi-tsunami&tag=press-release&lang=EN" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/images/gempa_news.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">M 5.4 Tectonic Earthquake Shakes Lebak, No Potential for Tsunamis</h5>
                  <p class="card-text">Tuesday, July 7, 2020 at 11.44.14 WIB the Lebak region was rocked by a tectonic earthquake.</p>
                  <a href="https://www.bmkg.go.id/press-release/?p=gempabumi-tektonik-m-54-mengguncang-lebak-tidak-berpotensi-tsunami&tag=press-release&lang=EN" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/images/gempa_news.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">M 5.4 Tectonic Earthquake Shakes Lebak, No Potential for Tsunamis</h5>
                  <p class="card-text">Tuesday, July 7, 2020 at 11.44.14 WIB the Lebak region was rocked by a tectonic earthquake.</p>
                  <a href="https://www.bmkg.go.id/press-release/?p=gempabumi-tektonik-m-54-mengguncang-lebak-tidak-berpotensi-tsunami&tag=press-release&lang=EN" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  <nav class="space" style="background-color: #C8DEFE; width: 100%; height: 300px;">


    <!-- Carousel wrapper -->
    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
      <!-- Controls -->
      <div class="d-flex justify-content-center mb-4">
        <button class="carousel-control-prev position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Inner -->
      <div class="carousel-inner py-4">
        <!-- Single item -->
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <img src="assets/images/bmkg.foto.png" class="card-img-top">
                </div>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <div class="card">
                  <img src="assets/images/bmkg.foto.png" class="card-img-top" alt="Sunset Over the Sea" />

                </div>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <div class="card">
                  <img src="assets/images/bmkg.foto.png" class="card-img-top" alt="Sunset over the Sea" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12">
                <div class="card">
                  <img src="assets/images/bmkg.foto.png" class="card-img-top" alt="Fissure in Sandstone" />
                </div>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <div class="card">
                  <img src="assets/images/bmkg.foto.png" class="card-img-top" alt="Storm Clouds" />
                </div>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <div class="card">
                  <img src="assets/images/bmkg.foto.png" class="card-img-top" alt="Hot Air Balloons" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <div class="card">
                  <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/187.webp" class="card-img-top" alt="Peaks Against the Starry Sky" />

                </div>
              </div>

              <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                <div class="card">
                  <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/188.webp" class="card-img-top" alt="Bridge Over Water" />
                </div>
              </div>

              <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                <div class="card">
                  <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp" class="card-img-top" alt="Purbeck Heritage Coast" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->

  </nav>
  <br>
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
  </div> <!-- tutup wrapper -->




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