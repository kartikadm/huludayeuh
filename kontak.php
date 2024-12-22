<?php
include 'koneksi.php';

if(isset($_POST['nama'])){
    
    //definisikan setiap variabel
    $nama = htmlentities($_POST['nama']);
	$email = htmlentities($_POST['email']);
	$pesan = htmlentities($_POST['pesan']);
	
	$sql = "INSERT INTO kontak (nama, email, pesan) value ('$nama','$email','$pesan')";
	$query = mysqli_query($db,$sql);
	if($query){ 
        echo 'berhasil'; 
	    // $id_pemesanan = mysqli_insert_id($db);
	    // header('Location: ../index.php?aksi=detail&id_pemesanan='.$id_pemesanan);
	    //echo $id_pemesanan;
	}else{ echo 0; }
}else{
    //muncul pesan error
    echo 'Ngapain?';
}
?>