<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamus Bahasa Jawa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<nav>
    <a href="index.php">Tampilkan Semua</a>
    <a href="translate.php">Terjemahkan</a>
    <a href="cari.php">Pencarian</a>
    <a href="input.php">Input Kata</a>
</nav>
<body>
    <h1>Kamus Bahasa Jawa</h1>

    <div class="table-container">
        <table>
            <tr>
                <th>Bahasa Indonesia</th>
                <th>Ngoko</th>
                <th>Krama Inggil</th>
            </tr>
            <br>

        
            <?php
            include './koneksi.php';

            // Fetch all words for the dictionary
            $sql = "SELECT * FROM data_kamus_sheet1 ORDER BY `Bahasa_indonesia` ASC";
            $result = $conn->query($sql);

            while ($baris = mysqli_fetch_array($result)) {
                echo "
                <tr>
                    <td>{$baris[1]}</td>
                    <td>{$baris[2]}</td>
                    <td>{$baris[3]}</td>
                </tr>";
            }
            echo "</table>";

            $conn->close();
            ?>
        </div>
</body>
</html>