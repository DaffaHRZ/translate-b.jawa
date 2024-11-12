<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terjemahkan</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        /* Basic styles for the navigation bar */
        
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Tampilkan Semua</a>
        <a href="translate.php">Terjemahkan</a>
        <a href="cari.php">Pencarian</a>
    <a href="input.php">Input Kata</a>
    </nav>

    <div class="search-container">
        <h1>Terjemahkan Kalimat</h1>
        <form method="POST" action="">
            <input type="text" name="inputText" placeholder="Masukkan kalimat di sini..." required value="<?php echo isset($_POST['inputText']) ? htmlspecialchars($_POST['inputText']) : ''; ?>">
            <input type="submit" value="Terjemahkan">
        </form>
    </div>

    <?php
    include './koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputText = $_POST['inputText'];

        // Split the input text into words
        $words = explode(" ", $inputText);

        $translationResultsNgoko = [];
        $translationResultsKrama = [];

        foreach ($words as $word) {
            // Prepare and execute the query for each word
            $stmt = $conn->prepare("SELECT `Bahasa_jawa_ngoko`, `Bahasa_krama_inggil` FROM `data_kamus_Sheet1` WHERE `Bahasa_indonesia` = ?");
            $stmt->bind_param("s", $word);
            $stmt->execute();
            $result = $stmt->get_result();

            // Store the results for each word
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $translationResultsNgoko[] = $row['Bahasa_jawa_ngoko'];
                    $translationResultsKrama[] = $row['Bahasa_krama_inggil'];
                }
            } else {
                // If no translation is found, keep the original word
                $translationResultsNgoko[] = $word; // Keep the original word if no translation
                $translationResultsKrama[] = $word; // Keep the original word if no translation
            }

            $stmt->close();
        }

        // Combine the translations into a single sentence
        $translatedSentenceNgoko = implode(" ", $translationResultsNgoko);
        $translatedSentenceKrama = implode(" ", $translationResultsKrama);

        // Display the results
        echo '<div class="translation-result">';
        echo '<h3>Hasil Terjemahan:</h3>';
        echo '<p>Bahasa Jawa Ngoko: ' . htmlspecialchars($translatedSentenceNgoko) . '</p>';
        echo '<p>Bahasa Krama Inggil: ' . htmlspecialchars($translatedSentenceKrama) . '</p>';
        echo '</div>';

        $conn->close();
    }
    ?>
</body>
</html>
