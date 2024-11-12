<!doctype html>
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

<!-- Form for adding new words -->

<div class="search-container">
    <form action='' method='post'>
        <h3>Tambah Kata Baru</h3>
        <br>
        <label for="indonesia">Kata dalam Bahasa Indonesia</label><br>
        <input type="text" id="indonesia" name="indonesia" required><br><br>
        
        <label for="ngoko">Kata dalam Bahasa Ngoko</label><br>
        <input type="text" id="ngoko" name="ngoko" required><br><br>
        
        <label for="krama">Kata dalam Bahasa Krama Inggil</label><br>
        <input type="text" id="krama" name="krama" required><br><br>

        <input type="submit" name="submit" value="Tambah">
    </form>

    <?php
include './koneksi.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $Bahasa_indonesia = $conn->real_escape_string($_POST['indonesia']);
    $Bahasa_jawa_ngoko = $conn->real_escape_string($_POST['ngoko']);
    $Bahasa_krama_inggil = $conn->real_escape_string($_POST['krama']);

    // Check if the word already exists in the database
    $check_sql = "SELECT * FROM data_kamus_sheet1 
                  WHERE bahasa_indonesia = '$Bahasa_indonesia' 
                  OR bahasa_jawa_ngoko = '$Bahasa_jawa_ngoko' 
                  OR bahasa_krama_inggil = '$Bahasa_krama_inggil'";
    
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        echo '<div style="color: red; font-weight: bold; margin-top: 20px;">';
        echo "<p>Kata sudah ada di dalam database!</p>";
        echo '</div>';    } else {
        // Insert new word into the database
        $sql_insert = "INSERT INTO data_kamus_sheet1 (bahasa_indonesia, bahasa_jawa_ngoko, bahasa_krama_inggil) VALUES ('$Bahasa_indonesia', '$Bahasa_jawa_ngoko', '$Bahasa_krama_inggil')";
        
        if ($conn->query($sql_insert) === TRUE) {
            echo "<p>Kata baru berhasil ditambahkan!</p>";
        } else {
            echo "<p>Error: " . $sql_insert . "<br>" . $conn->error . "</p>";
        }
    }
}
$conn->close();
?>
</body>
</html>