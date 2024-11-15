<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> <!-- Tambahkan CSS Swiper -->
    <title>UPTD Puskesmas Buttuada</title>
</head>
<body>
    <header>
        <?php include 'components/header.php'; ?>
    </header>

    <main class="container">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/images2.jpg" class="img-fluid" alt="Gambar 1">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/images3.jpg" class="img-fluid" alt="Gambar 2">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/images4.jpg" class="img-fluid" alt="Gambar 3">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/images5.jpg" class="img-fluid" alt="Gambar 3">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <h1 class="mt-5 text-center">Selamat Datang di UPTD Puskesmas Buttuada</h1>
        <p class="text-center">Kami menyediakan layanan kesehatan terbaik untuk masyarakat.</p>
        <a href="pages/services.php" class="btn btn-primary d-block mx-auto">Layanan yang tersedia</a>

        <!-- Gambar yang dapat diklik -->
        <div class="row mt-4 text-center">
            <div class="col-md-4">
                <a href="https://satusehat.kemkes.go.id/" target="_blank">
                    <img src="assets/images/satu-sehat.png" alt="Deskripsi Gambar" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://bpjs-kesehatan.go.id/#/" target="_blank">
                    <img src="assets/images/bpjs-kesehatan.png" alt="Deskripsi Gambar" class="img-fluid" style="margin-top: 60px;">
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://www.dinkes.mamujukab.go.id/" target="_blank">
                    <img src="assets/images/dinkes.png" alt="Deskripsi Gambar" class="img-fluid">
                </a>
            </div>
        </div>
    </main>

    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>