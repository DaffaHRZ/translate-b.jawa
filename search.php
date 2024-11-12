<!doctype html>
<Html lang="en">
    <head>
        <title>Kamus Bahasa Jawa</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>

    <nav>
        <a href="index.php">Tampilkan Semua</a>
        <a href="translate.php">Terjemahkan</a>
        <a href="cari.php">Pencarian</a>
    </nav>
    <body>

        <h1>Kamus Bahasa Jawa</h1>
        <div class="search-container">
        <form action='search.php' method='post'>
            <h3>Cari Kata</h3>
            <input type='text' name='cari' placeholder="Masukkan kata..." required>
            <input type='submit' name='search' value='Cari'>
        </form>
    </div>    

        <br>

        <?php
            include './koneksi.php';

            $cari = $_POST['cari'];

            $sql = "SELECT * from data_kamus_sheet1
            WHERE bahasa_indonesia LIKE '%$cari%' or bahasa_jawa_ngoko LIKE '%$cari%' or bahasa_krama_inggil LIKE '%$cari%'";
            $result = $conn->query($sql);
            
                echo "<table>
                <tr >
                    <th  >Indonesia</th>
                    <th  >Ngoko</th>
                    <th  >Krama Inggil</th>
                </tr>";
                while($baris = mysqli_fetch_array($result)){
                    echo"
                <tr >
                    <td >$baris[1]</td>
                    <td >$baris[2]</td>
                    <td >$baris[3]</td>
                </tr>";}


            $conn->close();
        ?>

    </body>

</Html>