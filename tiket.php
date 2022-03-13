<?php
session_start();
if (!isset($_SESSION['submit'])) {
    header("location: login.php");
  }
require 'koneksi.php';

$id = $_COOKIE['username'];

$result = query("SELECT * FROM user WHERE id = '$id'")[0];

$nama= $result['nama'];

$sql = query("SELECT * FROM `pemesan` WHERE nama = '$nama'");


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        .total{
            background: #EEF0F4;
            box-shadow: 19.52px 19.52px 73px #D4D6D9, -19.52px -19.52px 73px #FFFFFF;
        }
        .kanan p{
            font-family: verdana, sans-serif;
            font-size: 20px;
            text-align: center;
            letter-spacing: 1.2pt;
            word-spacing: -0.2pt;
            line-height: 3.5;
        }
        .kiri p{
            font-family: verdana, sans-serif;
            font-size: 20px;
            text-align: center;
            letter-spacing: 1.2pt;
            word-spacing: -0.2pt;
            line-height: 3.5;
        }
    </style>

    <title>latihan lsp</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- sidebar -->
        <ul class="navbar-nav collapse d-lg-block bg-gradient-primary sidebar sidebar-dark" id="navbarSupportedContent" style="position: relative;">

                <div class="list-group list-group-flush">
                    <!-- sidebar - brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-icon ">
                            <!-- <i class="fas fa-laugh-wink"></i> -->
                            <!-- <img src="img2/red-blak-mits.png" height="60px" alt=""> -->
                        </div>
                        <div class="sidebar-brand-text mx-3">tugas</div>
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

                    <li class="nav-item ">
                        <!-- <a class="nav-link" aria-current="page" href="#">Home</a> -->
                        <a class="nav-link" href="beli.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Beli Tiket</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <li class="nav-item active">
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
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                        aria-label="Search" aria-describedby="basic-addon2" name="search">
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
                                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-search fa-fw"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                        aria-labelledby="searchDropdown" id="dropdown">
                                        <form class="form-inline mr-auto w-100 navbar-search" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small"
                                                    placeholder="Search for..." aria-label="Search"
                                                    aria-describedby="basic-addon2" name="search">
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

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="eksport.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="blank"><i class="fas fa-download fa-sm text-white-50"></i>Download</a>
                </div>

        <h2>Detail Produk</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>Nama</th>
                                <th>Jadwal</th>
                                <th>Phone</th>
                                <th>Jumlah Seluruh Penumpang</th>
                                <th>Penumpang Lansia</th>
                                <th>Harga Tiket</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <?php 
                        $no = 1;
                        foreach ($sql as $row):
                        ?>
                        <tbody>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['jadwal'] ?></td>
                                <td>0<?= $row['tlp'] ?></td>
                                <td><?= $row['seluruhpenumpang'] ?></td>
                                <td><?= $row['penumpanglansia'] ?></td>
                                <td>Rp.<?= $row['harga'] ?>,00</td>
                                <td>Rp.<?= $row['bayar'] ?>,00</td>
                            </tr>
                        </tbody>
                        <?php 
                        $no++;
                        endforeach;
                        ?>
                    </table>
                </div>
            
            
        </div>
        <!-- /.container-fluid -->
        
    </div>
    <!-- End of Main Content -->
    <div class="total sticky-footer container-fluid">
        <?php 
        $totalharga = query("SELECT SUM(bayar) AS total_bayar FROM pemesan WHERE nama = '$nama'")[0];
        ?>
        <div class="row justify-content-center">
            <div class="kanan col-6">
                <p>Total Harga</p>
            </div>
            <div class="kiri col-6">
                <p>Rp.<?= $totalharga['total_bayar'] ?>,00</p>
            </div>
        </div>
    </div>

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

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>