<?php
include 'koneksi.php';

if(isset($_POST['nama'])){
    
    //definisikan setiap variabel
    $nama = htmlentities($_POST['nama']);
	$hp = htmlentities($_POST['no_hp']);
	$tempat = htmlentities($_POST['tempat']);
    $tanggal = htmlentities($_POST['tanggal']);
    $jumlah = htmlentities($_POST['jumlah_orang']);
    $kebutuhan = htmlentities($_POST['kebutuhan']);
    $total = htmlentities($_POST['total']);
	
	$sql = "INSERT INTO pemesanan (`nama`, `no_hp`, `tempat_wisata`, `tanggal_kunjungan`, `jumlah_orang`, `kebutuhan`, `total`) value ('$nama','$hp','$tempat', '$tanggal', '$jumlah', '$kebutuhan', '$total')";
	$query = mysqli_query($db,$sql);
	if($query){ 
        echo 'berhasil';
	    $id_pemesanan = mysqli_insert_id($db);
        header('Location: invoice.php?id='.$id_pemesanan); 
	    // header('Location: ../index.php?aksi=detail&id_pemesanan='.$id_pemesanan);
	    //echo $id_pemesanan;
	}else{ echo 0; }
}else{
    //muncul pesan error
    echo 'Ngapain?';
}

?>
