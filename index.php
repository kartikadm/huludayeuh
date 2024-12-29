<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bumi Perkemahan Huludayeuh</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header-container">
        <div class="header-title">BUMI PERKEMAHAN HULUDAYEUH</div>
        <nav>
            <a href="#home">Home</a>
            <a href="#destinasi">Destinasi</a>
            <a href="#tiket_masuk">Tiket Masuk</a>
            <a href="pemesanan.php">Pemesanan</a>
            <a href="daftar_pemesanan.php">Daftar Pemesanan</a>
            <a href="#kontak">Kontak</a>
        </nav>
    </header>
    <section id="home" class="gallery">
        <img src="images/beranda1.png" alt="Pemandangan">
        <img src="images/beranda2.png" alt="Spot Foto">
        <img src="images/beranda3.png" alt="Hutan Pinus">
        <img src="images/beranda4.png" alt="Gerbang Masuk">
    </section>

    <header>
        Spot foto yang dapat dinikmati di BUPER HULUDAYEUH
    </header>
    <section class="gallery">
        <img src="images/beranda5.png" alt="Spot Foto 1">
        <img src="images/beranda6.png" alt="Spot Foto 2">
        <img src="images/beranda7.png" alt="Spot Foto 3">
        <img src="images/beranda8.png" alt="Spot Foto 4">
    </section>

    <section class="video-gallery">
        <img src="images/beranda9.png" alt="Video Thumbnail 1">
        <img src="images/beranda10.png" alt="Video Thumbnail 2">
        <img src="images/beranda11.png" alt="Video Thumbnail 3">
    </section>

    <!--- Destinasi --->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daya Tarik BUPER HULUDAYEUH</title>
    </head>
    <body>
        <header id="destinasi">
            Daya Tarik BUPER HULUDAYEUH
        </header>
        <section class="gallery">
            <img src="images/beranda12.png" alt="Daya Tarik 1">
            <img src="images/beranda13.png" alt="Daya Tarik 2">
            <img src="images/beranda14.png" alt="Daya Tarik 3">
            <img src="images/beranda15.png" alt="Daya Tarik 4">
            <img src="images/beranda16.png" alt="Daya Tarik 5">
            <img src="images/beranda17.png" alt="Daya Tarik 6">
            <img src="images/beranda18.png" alt="Daya Tarik 7">
            <img src="images/beranda19.png" alt="Daya Tarik 8">
            <img src="images/beranda20.png" alt="Daya Tarik 9">
            <img src="images/beranda21.png" alt="Daya Tarik 10">
            <img src="images/beranda22.png" alt="Daya Tarik 11">
            <img src="images/beranda23.png" alt="Daya Tarik 12">
            <img src="images/beranda24.png" alt="Daya Tarik 13">
            <img src="images/beranda25.png" alt="Daya Tarik 14">
            <img src="images/beranda26.png" alt="Daya Tarik 15">
            <img src="images/beranda27.png" alt="Daya Tarik 16">
        </section>

<!--- Tiket masuk --->   
    <div id="tiket_masuk" class="ticket-info">
        <h3>Tiket masuk ke BUPER HULUDAYEUH</h3>
        <p>Weekday: Rp. 10.000</p>
        <p>Weekend: Rp. 15.000</p>
        <p>Parkir Motor: Rp. 3.000</p>
        <p>Jika ingin camping tentunya ada biaya tambahan sebesar Rp. 25.000</p>
    </div>

<!--- Kontak --->
    <div id="kontak" class="contact-container">
        <h3>Kontak Kami</h3>
        <p>Hubungi kami untuk informasi lebih lanjut atau pertanyaan lainnya.</p>
        <form method="post" action="kontak.php">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="nama" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea id="message" name="pesan" placeholder="Tulis pesan Anda" required></textarea>
            </div>
            <button type="submit">Kirim pesan</button>
        </form>
    </div>
    <div class="footer">
        &copy; 2024 ExploreWisata. Semua Hak Dilindungi.
    </div>
</body>
</body>
</html>
