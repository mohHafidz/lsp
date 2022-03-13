<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .title h1 {
            font-family: georgia, serif;
            font-size: 40px;
            letter-spacing: -1pt;
            word-spacing: -1.6pt;
            line-height: 1.2;
        }

        .subtitle h5 {
            font-family: georgia, serif;
            letter-spacing: 1pt;
            word-spacing: -1.6pt;
            line-height: 1.2;
            color: #eb6060;
        }

        .navbar {
            background: #000000;
            box-shadow: 9.91px 9.91px 26px #7F8D8F, -9.91px -9.91px 26px #ABBDBF;
            z-index: 9999;
            /* position: fixed; */
            height: 80px;
            opacity: 0.8;
        }

        .card {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.79);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(13px);
            -webkit-backdrop-filter: blur(13px);
            border: 1px solid rgba(255, 255, 255, 0.99);
        }

        .card-title {
            font-family: "times new roman", times, serif;
            font-size: 40px;
            letter-spacing: 0.6pt;
        }

        .ket {
            font-family: "Tahoma", "Geneva", sans-serif;
            font-size: 12px;
            letter-spacing: 0.6pt;
            word-spacing: -1.2pt;
        }

        .title-vasilitas {
            font-family: verdana, sans-serif;
            font-size: 25px;
            letter-spacing: 0.6pt;
            word-spacing: -0.6pt;
        }
    </style>

    <title>Hello, world!</title>
</head>

<body>

    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">Bus Kami</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse float-left" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="login.php">Pesan Tiket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="tiket.php">Tiket Anda</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex" style="margin-right: 20px;">
                    <p class="text-light">Bogor - Padang</p>
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- jumbotron -->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-top: -100px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="img2/1920px-Masjid_Raya_Sumbar_3_MTQN_2020.jpg" class="d-block" style="height: 790px; width:100%;filter:blur(8px)" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="card mx-auto align-middle" style="width: 40rem;height:300px; margin-bottom:130px">
                            <div class="card-body align-middle">
                                <h5 class="card-title text-dark">Padang</h5>
                                <br>
                                <p class="card-text text-dark text-justify">Kota Padang adalah kota terbesar di pantai barat Pulau Sumatra dan ibu kota provinsi Sumatra Barat, Indonesia. Kota ini merupakan pintu gerbang barat Indonesia dari Samudra Hindia.Secara geografi, Padang dikelilingi perbukitan yang mencapai ketinggian 1.853 mdpl dengan luas wilayah 693,66 km², lebih dari separuhnya berupa hutan lindung. Berdasarkan data Badan Pusat Statistik (BPS) pada 2021, kota ini memiliki jumlah penduduk sebanyak 909.040 jiwa.Padang merupakan kota inti dari pengembangan wilayah metropolitan Palapa. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="img2/Foto Bus Sudiro Tungga Jaya Mowgli.jpg" class="d-block" style="height: 790px; width:100%;filter:blur(8px);" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="card mx-auto align-middle" style="width: 40rem;height:300px; margin-bottom:130px">
                            <div class="card-body align-middle">
                                <h5 class="card-title text-dark">Bus Kami</h5>
                                <br>
                                <p class="card-text text-dark text-justify">Bus Kami merupakan bisnis jasa transportasi di bawah naungan Mayasari Group. Perusahaan tersebut diinisiasi H. Engkud Mahpud pada tahun 1964. Trayek bus kami ini meliputi area Bogor-Padang dan sebaliknya. <br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- end jumbotron -->
    </header>
    <br><br> <br><br>
    <!-- main -->
    <div class="container">
        <div class="video align-middle mx-auto text-center">
            <iframe class="mx-auto align-middle text-center" width="560" height="315" src="https://www.youtube.com/embed/LagM4Ygb9WQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <br><br><br><br><br>
        <div class="mx-auto title">
            <h2 class="text-center">Anjuran Perjalanan Covid 19 untuk Bus Kami</h2>
        </div>
        <div class="mx-auto subtitle">
            <h5 class="text-center">Beberapa poin penting untuk diingat saat merencanakan perjalanan dengan Bus Kami</h5>
        </div>
        <br><br>
        <div class="info row">
            <div class="mx-auto">
                <div class="kiri" style="float: left;max-width: 500px;">
                    <div class="card mb-3 bg-transparent" style="max-width: 500px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center">
                                <img src="img2/cov_icon_01.png" height="80" class="align-middle mx-auto" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text ket">Periksa pembatasan atau larangan perjalanan yang berlaku di kota asal dan kota tujuan Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="card mb-3 bg-transparent" style="max-width: 500px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center">
                                <img src="img2/cov_icon_02.png" height="80" class="align-middle mx-auto" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text ket">Periksa pembatasan atau larangan perjalanan yang berlaku di kota asal dan kota tujuan Anda.Anjuran Perjalanan Covid 19 untuk Bus kami BusBawa barang-barang kebersihan pribadi Anda seperti hand sanitizer, tisu dan sabun.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="card mb-3 bg-transparent" style="max-width: 500px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center">
                                <img src="img2/cov_icon_03.png" height="80" class="align-middle mx-auto" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text ket">MGI mungkin tidak menyediakan bantal atau selimut, jadi pastikan Anda membawanya sendiri untuk perjalanan jauh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kanan" style="float:right; max-width: 500px;margin-left:20px">
                    <div class="card mb-3 bg-transparent" style="max-width: 500px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center">
                                <img src="img2/cov_icon_04.png" height="80" class="align-middle mx-auto text-center" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text ket">Pesan tiket bus online di muka untuk menghindari kontak fisik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>

                    <div class="card mb-3 bg-transparent" style="max-width: 500px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center">
                                <img src="img2/cov_icon_05.png" height="80" class="align-middle mx-auto" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text ket">Pakai masker setiap saat selama Anda berada di atas bus kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="card mb-3 bg-transparent" style="max-width: 500px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center">
                                <img src="img2/cov_icon_06.png" height="80" class="align-middle mx-auto" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text ket">Karena adanya pemeriksaan suhu badan dan langkah-langkah pencegahan lainnya, keberangkatan bus bisa jadi mengalami keterlambatan. Sediakan waktu lebih untuk perjalanan Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <br><br><br><br>
        <div class="mx-auto title">
            <h2 class="text-center">Vasilitas</h2>
            <br><br>
        </div>
        <div class="vasilitas">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="img2/free-wifi.png" style="height: 80px; width:80px" class="card-img-top mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center title-vasilitas">Free Wifi</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img2/microphone.png" style="height: 80px; width:80px" class="card-img-top mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center title-vasilitas">Karaoke</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img2/car-seat.png" style="height: 80px; width:80px" class="card-img-top mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center title-vasilitas">Leg Rest</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br>
        <div class="harga">
            <div class="mx-auto title">
                <h2 class="text-center">Harga</h2>
                <br><br>
            </div>
            <div class="table">
                <!-- <table class="table mx-auto" style="width: 750px;">
                    <thead>
                        <tr>
                            <th class="col-1">no</th>
                            <th class="col-4 text-center">Kelas</th>
                            <th class="col-7">Harga tiket/org(Untuk umur > 60 tahun diskon 20%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-center">Ekonomi</td>
                            <td>Rp.1.200.000,00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-center">Bisnis</td>
                            <td>Rp.1.500.000,00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-center">Eksekutif</td>
                            <td>Rp.2.300.000,00</td>
                        </tr>
                    </tbody>
                </table> -->
                <div class="row mx-auto align-middle">
                    <div class="card mx-auto" style="width: 14rem; background-color:#689bab; margin-right:20px">
                        <div class="card-body">
                            <h4 class="card-title text-center">Ekonomi</h4>
                            <hr class="sidebar-divider my-0">
                            <p class="card-text">Wifi &#10004</p>
                            <p class="card-text">Karaoke &#10008</p>
                            <p class="card-text">Leg Rest &#10008</p>
                            <p class="card-text">3 Visit Rest Area</p>
                            <p class="card-text">Diskon 20% untuk lansia</p>
                            <h4 class="text-center">Rp.1.200.000,00</h4>
                        </div>
                    </div>
                    <div class="card mx-auto" style="width: 14rem; background-color:#689bab; margin-right:20px">
                        <div class="card-body">
                            <h4 class="card-title text-center">Bisnis</h4>
                            <hr class="sidebar-divider my-0">
                            <p class="card-text">Wifi &#10004</p>
                            <p class="card-text">Karaoke &#10008</p>
                            <p class="card-text">Leg Rest &#10004</p>
                            <p class="card-text">5 Visit Rest Area</p>
                            <p class="card-text">Diskon 20% untuk lansia</p>
                            <h4 class="text-center">Rp.1.500.000,00</h4>
                        </div>
                    </div>
                    <div class="card mx-auto" style="width: 14rem; background-color:#689bab; margin-right:20px">
                        <div class="card-body">
                            <h4 class="card-title text-center">Eksekutif</h4>
                            <hr class="sidebar-divider my-0">
                            <p class="card-text">Wifi &#10004</p>
                            <p class="card-text">Karaoke &#10004</p>
                            <p class="card-text">Leg Rest &#10004</p>
                            <p class="card-text">7 Visit Rest Area</p>
                            <p class="card-text">Diskon 20% untuk lansia</p>
                            <h4 class="text-center">Rp.2.300.000,00</h4>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
            <div class="beli mx-auto text-center">
                <!-- <button class="btn btn-outline-primary"></button> -->
                <a href="login.php" class="btn btn-outline-primary mx-auto text-center">Beli Sekarang</a>
            </div>
        </div>
        <br><br><br><br><br><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255314.40356779937!2d100.2511830082752!3d-0.9345808070681981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b942e2b117bb%3A0xb8468cb5c3046ba5!2sPadang%2C%20Kota%20Padang%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1646191274103!5m2!1sid!2sid" class="mx-auto" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <br><br><br><br><br>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Muhammad hafidz 2022</span>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>