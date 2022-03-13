<?php
session_start();
if (!isset($_SESSION['submit'])) {
    header("location: login.php");
}
require 'koneksi.php';

$sql = query("SELECT * FROM tb_lsp");

$id = $_COOKIE['username'];

$result = query("SELECT * FROM user WHERE id = $id")[0];


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $query = query("SELECT * FROM tb_lsp WHERE id = $id")[0];
}

if (isset($_POST['beli'])) {
    if (tiket($_POST)) {
        echo "
            <script>
                alert('tiket berhasil di pesan');
                document.location.href= index.php;
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>latihan lsp</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- sidebar -->
        <ul class="navbar-nav collapse d-lg-block bg-gradient-primary sidebar sidebar-dark" id="navbarSupportedContent">

            <div class="list-group list-group-flush">
                <!-- sidebar - brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon ">
                        <!-- <i class="fas fa-laugh-wink"></i> -->
                        <!-- <img src="img2/red-blak-mits.png" height="60px" alt=""> -->
                    </div>
                    <div class="sidebar-brand-text mx-3">LSP</div>
                </a>

                <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <!-- <a class="nav-link" aria-current="page" href="#">Home</a> -->
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Home</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <li class="nav-item active">
                    <!-- <a class="nav-link" aria-current="page" href="#">Home</a> -->
                    <a class="nav-link" href="beli.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Beli Tiket</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Link</a> -->
                    <a class="nav-link" href="tiket.php">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Tiket Anda</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline position-relative">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </div>
        </ul>
        <!-- end sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-light topbar mb-4 static-top shadow">

                    <button class="btn d-md-none rounded-circle mr-3" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="cari">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <ul class="list-group list-group-horizontal">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none" style="list-style-type: none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown" id="dropdown">
                                <form class="form-inline mr-auto w-100 navbar-search" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" name="cari">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">pembelian</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <table>
                        <div>
                            <tr>
                                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cek</button>
                                        <select class="form-control" id="inputGroupSelect03" aria-label="Example select with button addon" name="id">
                                            <?php foreach ($sql as $row) : ?>
                                                <!-- untuk selected di selected -->
                                                <?php
                                                $ket = "";
                                                if (isset($_POST['id'])) {
                                                    $id = trim($_POST['id']);
                                                    if ($id == $row['id']) {
                                                        $ket = "selected";
                                                    }
                                                }
                                                ?>
                                                <option <?= $ket ?> value="<?= $row['id'] ?>"><?= $row['kelas'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </form>
                            </tr>
                        </div>
                        <form action="" method="post">
                            <tr>
                                <div class="form-outline">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $result['nama'] ?>" />
                                </div>
                            </tr>
                            <tr>
                                <div class="form-outline">
                                    <label class="form-label">harga</label>
                                    <input type="number" class="form-control" value="<?= $query['harga'] ?>" name="harga" id="harga" onkeyup="bayar()" />
                                </div>
                            </tr>
                            <tr>
                                <div class="form-outline">
                                    <label class="form-label">NIK</label>
                                    <input type="number" class="form-control" name="nik" id="nik" value="<?= $result['nik'] ?>" />
                                </div>
                            </tr>
                            <tr>
                                <div class="form-outline">
                                    <label class="form-label">Phone</label>
                                    <input type="tel" class="form-control" name="tlp" id="tlp" />
                                </div>
                            </tr>
                            <tr>
                                <div class="form-outline">
                                    <label class="form-label">Jadwal</label>
                                    <input type="date" class="form-control" name="jadwal" id="jadwal" />
                                </div>
                            </tr>
                            <tr>
                                <div class="form-outline">
                                    <label class="form-label">Jumlah Seluruh Penumpang</label>
                                    <input type="number" class="form-control" name="penumpang" id="penumpang" max="5" onkeyup="bayar()" placeholder="maximal = 5">
                                </div>
                            </tr>
                            <tr>
                                <div class="form-outline">
                                    <label class="form-label">Jumlah Penumpang Lansia</label>
                                    <input type="number" class="form-control" name="lansia" id="lansia" max="5" onkeyup="bayar()" placeholder="maximal = 5">
                                </div>
                            </tr>
                            <tr>
                                <div class="form-outline">
                                    <label class="form-label">Bayar</label>
                                    <input type="number" class="form-control" name="dibayar" id="dibayar" />
                                </div>
                            </tr>
                            <br>
                            <tr>
                                <td>
                                    <button type="submit" name="beli" id="beli" class="btn btn-primary">Beli</button>
                                </td>
                            </tr>
                        </form>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Muhammad hafidz 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        function bayar() {
            var jumlahpenumpang = document.querySelector('#penumpang').value;
            var harga = document.querySelector('#harga').value;
            var lansia = document.querySelector('#lansia').value;

            if ((jumlahpenumpang > 5)) {
                alert('jumlah penumpang tidak boleh lebih dari 5');
                document.getElementById('penumpang').value = 0;
            } else if (lansia > jumlahpenumpang) {
                alert('jumlah lansia melebihi jumlah seluruh penumpang');
                document.getElementById('lansia').value = 0;
            } else if (lansia > 5) {
                alert('jumlah lansia tidak boleh lebih dari 5');
                document.getElementById('lansia').value = 0;
            } else {
                if (lansia > 0) {
                    var penumpang = jumlahpenumpang - lansia;
                    var hargapenumpang = penumpang * harga;
                    var hargalansia = (harga * 0.8) * lansia;
                    var totalharga = hargapenumpang + hargalansia;
                    document.getElementById('dibayar').value = totalharga;
                } else {
                    var totalharga = jumlahpenumpang * harga;
                    document.getElementById('dibayar').value = totalharga
                }
            }

        }
    </script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>