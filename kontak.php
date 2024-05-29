<?php
require 'koneksi.php';

$sql = 'SELECT icon_class, title, description, link FROM kontak';
$result = mysqli_query($koneksi, $sql);

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

    <!-- kontak -->
    <section>
        <p></p>
    </section>
    <section class="tentang-informasi">
        <div class="tentang-informasi-text">
            <h5>KONTAK</h5>
            <h2>HUBUNGI</h2>
        </div>
        <div class="site-container">
            <div class="article-container">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<article class="article-card">';
                        echo '<div class="article-content">';
                        echo '<i class="' . $row["icon_class"] . ' contact__card-icon"></i>';
                        echo '<h3 class="card-title">' . $row["title"] . '</h3>';
                        echo '<p class="card-excerpt">' . $row["description"] . '</p>';
                        echo '<a href="' . $row["link"] . '" target="_blank" class="card-button">';
                        echo 'Kontak <i class="bx bx-right-arrow-alt card-button-icon"></i>';
                        echo '</a>';
                        echo '</div>';
                        echo '</article>';
                    }
                } else {
                    echo "0 hasil";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- form kontak -->
    <section class="contact section" id="contact">
        <div class="contact__container container grid">
            <div class="contact__content">
                <h2 class="contact__title">KERJA SAMA</h2>
                <form action="https://api.web3forms.com/submit" method="POST" class="contact__form">
                    <div class="contact__form">
                        <input type="hidden" name="access_key" value="cd92c971-3aad-49b4-b03d-de238c873a68">
                    </div>
                    <div class="contact__form-div">
                        <label for="name" class="contact__form-tag">Nama</label>
                        <input type="text" id="name" name="name" placeholder="Masukkan nama anda" class="contact__form-input" required>
                    </div>
                    <div class="contact__form-div">
                        <label for="email" class="contact__form-tag">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email anda" class="contact__form-input" required>
                    </div>
                    <div class="contact__form-div">
                        <label for="phone" class="contact__form-tag">Nomor Telepon</label>
                        <input type="text" id="phone" name="phone" placeholder="Masukkan nomor telepon" class="contact__form-input" pattern="[0-9]*" inputmode="numeric" required>
                    </div>
                    <div class="contact__form-div contact__form-area">
                        <label for="message" class="contact__form-tag">Pesan</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Tuliskan pesan anda" class="contact__form-input" required></textarea>
                    </div>
                    <button class="btn">Kirim</button>
                </form>
            </div>
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