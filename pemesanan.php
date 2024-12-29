<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <style>
body {
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
    
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}
.container {
    max-width: 600px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.container h2 {
    text-align: center;
    color: #333;
}
.form-group {
    margin-bottom: 15px;
}
.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}
.form-group input, .form-group select, .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}
.form-group textarea {
    height: 100px;
}
.form-group button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
}
#total {
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    cursor: not-allowed;
}
.form-group button:hover {
    background-color: #0056b3;
}
form select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
}
form select:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
</style>
</head>
<body>
    <div class="container">
        <h2>Pemesanan</h2>
<div id="pemesanan" class="container">
    <div class="container">
        <h2>Form Pemesanan Tiket</h2>
        <form action="proses_pemesanan.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <label for="handphone">Handphone:</label>
                <input type="text" id="handphone" name="no_hp" placeholder="Masukkan handphone Anda" required>
            </div>
            <div class="form-group">
                <label for="tempat">Pilih Tempat:</label>
                <select id="tempat" name="tempat" required>
                    <option value="" disabled selected>-- Pilih Tempat --</option>
                    <option value="10000">Wisata (Rp 10.000)</option>
                    <option value="25000">Camping (Rp 25.000)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Kunjungan:</label>
                <input type="date" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Orang:</label>
                <input type="number" id="jumlah" name="jumlah_orang" min="1" placeholder="Masukkan jumlah orang" required>
            </div>
            <div class="form-group">
                <label for="kebutuhan">Kebutuhan:</label>
                <textarea id="kebutuhan" name="kebutuhan" placeholder="Misalnya: Membutuhkan peminjaman tenda"></textarea>
            </div>
            <div class="form-group">
                <label for="total">Total Harga (Rp):</label>
                <input type="number" id="total" name="total" placeholder="Total harga akan dihitung otomatis" readonly>
            </div>
            <script>
                // Fungsi untuk memperbarui harga berdasarkan tempat wisata
                function updateHarga() {
                    const tempatSelect = document.getElementById('tempat');
                    const harga = parseInt(tempatSelect.value) || 0; // Ambil harga dari pilihan dropdown
                    const jumlah = parseInt(document.getElementById('jumlah').value) || 0; // Ambil jumlah orang
                    
                    // Hitung total harga
                    const total = harga * jumlah;

                    // Tampilkan total harga
                    document.getElementById('total').value = total;
                }

                // Event listener untuk perubahan input
                document.getElementById('tempat').addEventListener('change', updateHarga);
                document.getElementById('jumlah').addEventListener('input', updateHarga);
            </script>
            <div class="form-group">
                <button type="submit">Kirim Pesanan</button>
            </div>
        </form>
    </div>
        </body>
</div>
</html>