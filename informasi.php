<?php
require 'koneksi.php';

$sql = 'SELECT judul, gambar, deskripsi FROM artikel';
$result = mysqli_query($koneksi, $sql);

$sql2 = 'SELECT title, description FROM informasi_kontak';
$result2 = mysqli_query($koneksi, $sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citra Niaga Samarinda</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
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

    <!-- foto header -->
    <section class="beranda2">
    </section>

    <!-- tentang -->
    <section class="tentang-informasi">
        <div class="tentang-informasi-text">
            <h5>INFORMASI</h5>
            <h2>CITRA NIAGA SAMARINDA</h2>
            <p>
                Citra Niaga merupakan salah satu kawasan perdagangan di Kota Samarinda, Kalimantan Timur. Kawasan ini dikenal sebagai pusat perbelanjaan yang 
                menawarkan beragam produk, mulai dari barang-barang kebutuhan sehari-hari hingga kerajinan tangan khas Kalimantan. Selain sebagai pusat perdagangan, 
                Citra Niaga juga menjadi destinasi wisata yang menarik bagi yang ingin menikmati kuliner dan berjalan santai sambil berfoto mengabadikan momen di 
                Citra Niaga Samarinda. <br><br>

                Citra Niaga menyediakan berbagai fasilitas yang mendukung kenyamanan pengunjung. Area parkir yang luas, toilet umum, dan tempat istirahat tersedia untuk 
                memastikan pengunjung merasa nyaman selama berada di kawasan ini. Selain itu, terdapat berbagai restoran dan kafe yang menyajikan berbagai macam kuliner, 
                yang menambah daya tarik kawasan ini sebagai destinasi wisata. Dengan segala daya tariknya, Citra Niaga bukan hanya sekadar pusat perdagangan, tetapi 
                juga simbol keanekaragaman budaya dan kekayaan tradisi Kalimantan Timur yang patut untuk dijelajahi. <br>
            </p>
        </div>
        <div class="site-container">
            <div class="article-container">
                <?php
                if ($result2->num_rows > 0) {
                    while($row = $result2->fetch_assoc()) {
                        echo '<article class="article-card">';
                        echo '<div class="article-content">';
                        echo '<h3 class="card-title">' . $row["title"] . '</h3>';
                        echo '<p class="card-excerpt">' . $row["description"] . '</p>';
                        echo '</div>';
                        echo '</article>';
                    }
                } else {
                    echo "0 hasil";
                }
                ?>
            </div>
        </div>
        <div class="tentang-informasi-img">
            <img src="images/subheader_2.jpeg" alt="">
        </div>
    </section>

    <!-- wilayah -->
    <section class="tentang-informasi">
        <div class="tentang-informasi-text">
            <h2>APA SAJA YANG ADA DI CITRA NIAGA?</h2>
        </div>
        <div class="site-container">
            <div class="article-container">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<article class="article-card">';
                        echo '<figure class="article-img">';
                        echo '<img src="' . $row["gambar"] . '" alt="' . $row["judul"] . '">';
                        echo '</figure>';
                        echo '<div class="article-content">';
                        echo '<h3 class="card-title">' . $row["judul"] . '</h3>';
                        echo '<p class="card-excerpt">' . $row["deskripsi"] . '</p>';
                        echo '</div>';
                        echo '</article>';
                    }
                } else {
                    echo "Tidak ada artikel ditemukan.";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- lokasi -->
    <section class="tentang-informasi">
        <div class="tentang-informasi-text">
            <h2>LOKASI</h2>
            <p>
                Citra Niaga Samarinda terletak strategis di pusat kota Samarinda. Anda dapat menggunakan peta interaktif di bawah ini untuk navigasi:
            </p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1639.7038274439954!2d117.148733468749!3d-0.5024696563417819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f9df3bafceb%3A0x53ce39152b36c908!2sCitra%20niaga%20samarinda!5e0!3m2!1sid!2sid!4v1716735554592!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="copyright">
            <section></section>
            <p>&#169; Muthmainnah Aisyah. All rights reserved</p>
        </div>
    </footer>

    <!-- script -->
    <script src="js/scripts.js"></script>
</body>

</html>