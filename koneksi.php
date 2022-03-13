<?php 
$koneksi = mysqli_connect("localhost","root","","lsp");

function query($data){
    global $koneksi;

    $result= mysqli_query($koneksi,$data);

    $rows= [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }

    return $rows;
}

function tiket($data){
    global $koneksi;

    $nama = $data['nama'];
    $harga = $data['harga'];
    $nik = $data['nik'];
    $tlp = $data['tlp'];
    $jadwal = $data['jadwal'];
    $jumlahpenumpang = $data['penumpang'];
    $lansia = $data['lansia'];
    $bayar = $data['dibayar'];

    $query = mysqli_query($koneksi,"INSERT INTO `pemesan`(`id`, `nama`, `harga`, `nik`, `tlp`, `jadwal`, `seluruhpenumpang`, `penumpanglansia`, `bayar`) VALUES ('','$nama','$harga','$nik','$tlp','$jadwal','$jumlahpenumpang','$lansia','$bayar')");

    return mysqli_affected_rows($koneksi);
}

function login($data){
    global $koneksi;
    $username = $data['user'];
    $password = $data['pass'];

    $result = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
    $id = query("SELECT * FROM user WHERE username = '$username'")[0];


    if(mysqli_num_rows($result) === 1){

        // cek password
        $row = mysqli_fetch_assoc($result);
    
        
        if(password_verify($password, $row["password"])){
            // setcookie('id',$id['id'],time(),'/');
            setcookie('username', $id['id'], time() + (60 * 60 * 24 * 5), '/');
          $_SESSION['submit'] = true;
        }
      }

      return $_SESSION;
}

function register ($data){
    global $koneksi;

    $user = strtolower(stripslashes($data['user']));
    $password = mysqli_real_escape_string($koneksi,$data['pass']);
    $password1 = mysqli_real_escape_string($koneksi,$data['pass1']);
    $nama = $data['nama'];
    $nik = $data['nik'];

    $result = mysqli_query($koneksi,"SELECT * FROM user WHERE nama == '$user'");


    if ($password != $password1){
        echo "<script>
        alert ('konfirmasi password tidak sesuai !');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($koneksi , "INSERT INTO `user`(`id`, `username`, `password`, `nama`, `nik`) VALUES ('','$user','$password','$nama','$nik')");

    return mysqli_affected_rows($koneksi);
}

?>