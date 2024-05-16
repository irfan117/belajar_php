<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Berhasil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 0 auto;
            text-align: center;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reservasi Berhasil!</h2>
        <?php
        // Include file konfigurasi database
        include 'config.php';

        // Memeriksa jika data dikirimkan melalui metode POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Tangkap data dari formulir
            $name = $_POST["name"];
            $email = $_POST["email"];

            // Mengecek apakah nama dan email telah diisi
            if (!empty($name) && !empty($email)) {
                // Membuat query SQL untuk menyimpan data ke database
                $sql = "INSERT INTO reservations (guest_name, guest_email) VALUES ('$name', '$email')";

                // Menjalankan query SQL
                if ($conn->query($sql) === TRUE) {
                    echo "<p>Terima kasih, $name, atas reservasi Anda!</p>";
                    echo "<p>Kami akan mengirimkan konfirmasi ke email Anda: $email</p>";
                    echo "<button onclick=\"window.location.href = 'guest_list.php';\">Lihat Daftar Tamu</button>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "<p>Mohon lengkapi nama dan email untuk melakukan reservasi.</p>";
            }
        } else {
            echo "<p>Permintaan tidak valid. Silakan coba lagi.</p>";
        }

        // Menutup koneksi ke database
        $conn->close();
        ?>
    </div>
</body>
</html>
