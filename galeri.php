<?php
require 'koneksi.php';

$sql = 'SELECT image_path FROM galeri';
$result = mysqli_query($koneksi, $sql);

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

    <!-- galeri -->
    <section class="galeri">
        <div class="galeri-content">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="box">';
                    echo '<img src="' . $row["image_path"] . '" alt="Galeri">';
                    echo '</div>';
                }
            } else {
                echo "0 hasil";}
            ?>
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