<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tentang Kami</title>
</head>
<body>
    <header>
        <?php 
        // Menggunakan require untuk mengimpor header
        require_once '../components/header.php'; 
        ?>
    </header>

    <main class="container mt-4">
        <?php 
        // Menggunakan require_once untuk mengimpor konten 'about'
        require_once 'about.php'; 
        ?>
        <h1>Tentang Puskesmas Buttuada</h1>
        <p>Kami berkomitmen untuk memberikan pelayanan kesehatan yang berkualitas kepada masyarakat.</p>
        <p>Dengan berbagai layanan yang kami tawarkan, kami berusaha untuk memenuhi kebutuhan kesehatan masyarakat dengan sebaik-baiknya.</p>
    </main>

    <footer>
        <?php 
        // Menggunakan require untuk mengimpor footer
        require_once '../components/footer.php'; 
        ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>