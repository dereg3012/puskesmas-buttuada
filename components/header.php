<?php
// Mulai sesi
session_start();

// Variabel untuk menyimpan status pemanggilan halaman
if (!isset($_SESSION['loaded_pages'])) {
    $_SESSION['loaded_pages'] = [];
}

// Fungsi untuk memuat halaman
function loadPage($page) {
    if (!in_array($page, $_SESSION['loaded_pages'])) {
        $_SESSION['loaded_pages'][] = $page; // Tandai halaman sebagai sudah dimuat
        include $page; // Muat halaman
    } else {
        return; // Jika sudah dimuat, tidak perlu memuat lagi
    }
}
?>

<style>
    /* Style untuk header dan navbar */
    .header-content {
        background-color: #343a40; /* Warna latar belakang abu-abu gelap */
        color: white; /* Warna teks putih */
        padding: 15px 20px; /* Padding untuk header */
        transition: all 0.3s ease; /* Tambahkan transisi untuk efek animasi */
    }
    .logo {
        height: 50px; /* Ukuran logo */
        margin-right: 10px; /* Jarak antara logo dan nama */
    }
    .header-name {
        font-size: 24px; /* Ukuran font untuk nama */
        font-weight: bold; /* Ketebalan font */
    }
    .nav {
        background-color: #343a40; /* Warna latar belakang navbar yang sama dengan header */
        padding: 10px 0; /* Padding untuk navbar */
        border-radius: 5px; /* Sudut melengkung untuk navbar */
    }
    .nav-link {
        color: white !important; /* Warna teks tautan putih */
        transition: color 0.3s ease; /* Tambahkan transisi untuk warna teks */
    }
    .nav-link:hover {
        text-decoration: underline; /* Efek hover */
        color: #ddd; /* Warna saat hover */
    }
</style>

<div class="header-content d-flex justify-content-between align-items-center">
    <div class="header-left d-flex align-items-center">
        <img src="assets/images/images1.jpg" alt="Logo" class="logo">
        <span class="header-name">UPTD Puskesmas Buttuada</span>
    </div>
    <div class="header-right d-flex align-items-center">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/about.php">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/services.php">Pelayanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/screning.php">Skrining ILP</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>