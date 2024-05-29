<?php
require 'koneksi.php';

$sql = "SELECT id, image_path FROM galeri WHERE id BETWEEN 1 AND 3";
$result = mysqli_query($koneksi, $sql);

$sql2 = "SELECT id, image_path, title FROM kategori";
$result2 = mysqli_query($koneksi, $sql2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citra Niaga Samarinda</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css"  href="css/styles.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
</head>
<body>
    <!-- header -->
    <header>
        <a href="#" class="logo">Citra <span>Niaga</span></a>
        <ul class="navbar">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="informasi.php">Informasi</a></li>
            <li><a href="sejarah.php">Sejarah</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
        <div class="h-right">
            <a href="https://www.instagram.com/citraniagasamarinda?igsh=NW1nc3VtNngzamoz"><i class="ri-instagram-fill"></i></a>
            <a href="https://www.facebook.com/CitraNiagaSamarinda/?locale=id_ID"><i class="ri-facebook-fill"></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- beranda -->
    <section class="beranda">
        <div class="beranda-text">
            <h1>Citra Niaga <br> Samarinda</h1>
            <p>
                Citra Niaga merupakan salah satu kawasan perdagangan di Kota Samarinda, 
                Kalimantan Timur. Citra Niaga menjadi tempat wisata keluarga yang nyaman
                untuk bersantai atau berbelanja dari makanan hingga souvenir.
            </p>
            <a href="#kategori" class="btn">Tentang</a>
        </div>
    </section>

    <!-- kategori -->
    <section class="kategori" id="kategori">
        <section class="kategori-title">
            <h2>CITRA NIAGA</h2>
        </section>
        <div class="kategori-content">
            <?php
            if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {
                    echo '<div class="row">';
                    echo '<div class="row-img">';
                    echo '<img src="' . $row["image_path"] . '" alt="' . $row["title"] . '">';
                    echo '</div>';
                    echo '<h4>' . $row["title"] . '</h4>';
                    echo '</div>';
                }
            } else {
                echo "0 hasil";
            }
            ?>
        </div>
    </section>

    <!-- tentang -->
    <section class="tentang">
        <div class="tentang-img">
            <img src="images/beranda_1.jpg" alt="">
        </div>
        <div class="tentang-text">
            <h5>INFORMASI</h5>
            <h2>CITRA NIAGA SAMARINDA</h2>
            <p>
                Citra Niaga merupakan salah satu kawasan perdagangan di Kota Samarinda, 
                Kalimantan Timur. Untuk informasi selengkapnya terkait Citra Niaga, dapat
                mengakses halaman informasi dengan mengklik tombol dibawah.
            </p>
            <a href="informasi.php" class="btn">Lihat Informasi</a>
        </div>
    </section>

    <!-- galeri -->
    <section class="galeri">
        <div class="center-text">
            <h2>GALERI FOTO</h2>
        </div>
        <div class="galeri-content">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="box">';
                    echo '<img src="' . $row["image_path"] . '" alt="Galeri">';
                    echo '</div>';
                }
            } else {
                echo "0 hasil";
            }
            ?>
        </div>
        <div class="center-btn">
            <a href="galeri.php" class="btn">Lihat Galeri</a>
        </div>
    </section>

    <!-- kontak -->
    <section class="kontak">
        <div class="kontak-text">
            <h5>KONTAK</h5>
            <h2>BEKERJA SAMA</h2>
            <p>
                Untuk bekerja sama atau ingin mengadakan event dan workshop langsung saja hubungi kontak yang tertera 
                atau langsung mengajukan melalui form dengan mengakses halaman kontak yang dapat diklik pada tombol dibawah.
            </p>
            <a href="kontak.php" class="btn">Lihat Kontak</a>
        </div>
        <div class="kontak-img">
            <img src="images/beranda_2.jpg" alt="">
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="copyright">
            <p>&#169; Muthmainnah Aisyah. All rights reserved</p>
        </div>
    </footer>

    <!-- script -->
    <script src="js/scripts.js"></script>
</body>
</html>