<?php
$host = 'localhost';
$db = 'huludayeuh';
$user = 'root';
$pass = '';

$db = mysqli_connect($host, $user, $pass, $db);


// if (!$conn){
//     die("koneksi gagal: " . mysqli_connect_error());
// }

// funcition kontak($nama, $email, $pesan){
//     global $sconn;
// if (!isset($nama) || !isset($email) || !isset($pesan)){
//     return false; // Data kosong
// }

// try{
//     $query = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
//     if (mysqli_query($conn, $query)){
//     } else{
//         throw new Exception(mysqli_error($conn));
//     }
//     } catch(Exception $ex){
//         echo "Gagal menambahkan pesan: " . $ex->getMessage();
//         return false;
//     }

// }
//     if(isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['pesan'])){

//         $nama = trim($_POST['nama']);
//         $emai = trim($_POST['email']);
//         $pesan = trim($_POST['pesan']);
//             // Tambah pesan jika validasi berhasil
//         if(tambahPesan($nama, $email, $pesan)){
//             header("location: koneksi.php");
//             exit();
//         } else{
//             echo"Gagal menambahkan pesan.";
//         }
//     } else{
//         echo"Gagal ambil nilai post method";
//     }
// ?>