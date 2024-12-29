<!DOCTYPE html>
<html lang="id">
<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesanan Tiket</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 3px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Pemesanan Tiket</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Handphone</th>
                    <th>Tempat</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Jumlah Orang</th>
                    <th>Kebutuhan</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host = 'localhost';
                $db = 'huludayeuh';
                $user = 'root';
                $pass = '';
                
                $db = mysqli_connect($host, $user, $pass, $db);
                
                // Koneksi ke database
                $conn = new mysqli("localhost", "root", "", "huludayeuh");

                // Periksa koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Ambil data dari tabel pemesanan
                $sql = "SELECT * FROM pemesanan where is_deleted=0";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['no_hp']) . "</td>";
                        echo "<td>" . ($row['tempat_wisata'] == 10000 ? "Wisata" : "Camping") . "</td>";
                        echo "<td>" . htmlspecialchars($row['tanggal_kunjungan']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['jumlah_orang']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['kebutuhan']) . "</td>";
                        echo "<td>Rp " . number_format($row['total'], 0, ',', '.') . "</td>";
                        echo "<td><a href='hapus.php?id=" . urlencode($row['id']) . "' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">Hapus</a></td>";
                        echo "</tr>";
                    }
                }
                 else {
                    echo "<tr><td colspan='8'>Tidak ada data pemesanan.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
