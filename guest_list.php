<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu Reservasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Tamu Reservasi</h2>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Tamu</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include file konfigurasi database
                include 'config.php';

                // Query SQL untuk mengambil semua data dari tabel reservations, diurutkan berdasarkan ID descending
                $sql = "SELECT * FROM reservations ORDER BY id DESC";

                // Jalankan query SQL
                $result = $conn->query($sql);

                // Periksa jika query berhasil dijalankan
                if ($result->num_rows > 0) {
                    $count = 1;
                    // Loop melalui setiap baris data
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $row["guest_name"] . "</td>";
                        echo "<td>" . $row["guest_email"] . "</td>";
                        echo "</tr>";
                        $count++;
                    }
                } else {
                    // Tampilkan pesan jika tidak ada data reservasi yang ditemukan
                    echo "<tr><td colspan='3'>Tidak ada tamu yang melakukan reservasi.</td></tr>";
                }

                // Menutup koneksi ke database
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
