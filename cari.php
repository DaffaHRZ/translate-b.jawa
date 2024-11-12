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
    
    <div class="search-container">
    <form action='search.php' method='post'>
        <h3>Cari Kata</h3>
        <input type='text' name='cari' placeholder="Masukkan kata..." required>
        <input type='submit' name='search' value='Cari'>
    </form>
    
  

    <?php
        include './koneksi.php';
    ?>
</body>
</html>