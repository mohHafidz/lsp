<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

require 'koneksi.php';

$result= query("SELECT * FROM pemesan");
$html = '
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>download</title>
  </head>
  <body>
      <h1 class="text-center">Kwitansi pembelian</h1>
      <br>

      <table class="table container border-dark table-hover" border="1">
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
';
$no = 1;
foreach ($result as $row){
  $html .= '
  <tbody>
    <tr>
        <td>'.$no .'</td>
        <td>'. $row['nama'] .'</td>
        <td>'. $row['jadwal'] .'</td>
        <td>'. $row['tlp'] .'</td>
        <td>'. $row['seluruhpenumpang'] .'</td>
        <td>'. $row['penumpanglansia '] .'</td>
        <td>'. $row['harga'] .'</td>
        <td>'. $row['bayar'] .'</td>
    </tr>
    </tbody>
  '; 
  $no++;
}

$html .= '
        <tfoot>
        <br>
          <tr>
            <td colspan="6" class="text-center">total Semua barang</td>
            <?php ';

  $totalharga = query("SELECT SUM(bayar) AS total_bayar FROM pemesan;")[0];

$html .='
            <td>'. $totalharga['total_bayar'] .'</td>
          </tr>
        </tfoot>
      </table>';



$html .= '
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
';
$mpdf->WriteHTML($html);
$mpdf->Output();


?>
