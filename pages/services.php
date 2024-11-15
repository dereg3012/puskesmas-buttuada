<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Layanan Kami</title>
</head>
<body>
    <header>
        <?php include '../components/header.php'; ?>
    </header>

    <main class="container mt-4">
        <?php include_once 'services.php'; ?>
        <h1>Layanan Kami</h1>
        <ul class="list-group">
            <li class="list-group-item">Layanan Kesehatan Umum</li>
            <li class="list-group-item">Layanan Kesehatan Ibu dan Anak</li>
            <li class="list-group-item">Layanan Vaksinasi</li>
            <li class="list-group-item">Layanan Gigi</li>
        </ul>
    </main>

    <footer>
        <?php include '../components/footer.php'; ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>