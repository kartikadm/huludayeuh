<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
        <title>Buper Huludayeuh</title>
        <link rel="stylesheet" href="styles.css">
    </head>

<body>
    
    <?php
    $host = 'localhost';
    $db = 'huludayeuh';
    $user = 'root';
    $pass = '';
    
    $conn = mysqli_connect($host, $user, $pass, $db);

    $id_pemesanan = htmlentities($_GET['id']);

    $sql = "SELECT * FROM pemesanan where id = '$id_pemesanan'";

    $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query)==0)
    {
        echo 'tidak ada'; exit;
    }else{
        $detail = mysqli_fetch_row($query);
    ?>
    <!--- Form Pemesanan --->
    <div id="pemesanan" class="container" style="height: 100%;">
        <h2>Invoice Pemesanan #<?= $detail[0]?></h2>
    <form id="formPemesanan">
        <label for="nama">Nama: <p><?= $detail[1]?></p></label>
        <label for="no_hp">Nomor HP: <p><?= $detail[2]?></p></label>
        <label for="pilih_tempat">Pilih_tempat: <p><?= $detail[3]?></p></label>
        <label for="tanggal_kunjungan">Tanggal_Kunjungan: <p><?= $detail[3]?></p></label>
        <label for="jumlah">Jumlah_Orang: <p><?= $detail[5]?></p></label>
        <label for="kebutuhan">Kebutuhan: <p>Rp. <?= number_format($detail[7], 0 , ',', '.')?></p></label>
        <label for="total">Total_Harga: <p><?= $detail[8]?></p></label>
        <button type="submit" onclick="window.print()">Cetak Invoice</button>
    </form>
    </div><?php } ?>


</body>
</html>
?>