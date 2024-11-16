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

<!-- Sertakan Bootstrap CSS dan JS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    /* Style untuk body untuk menghilangkan scroll horizontal */
    body {
        overflow-x: hidden; /* Menghilangkan scroll horizontal */
    }

    /* Style untuk header dan navbar */
    .header-content {
        background-color: #343a40; /* Warna latar belakang abu-abu gelap */
        color: white; /* Warna teks putih */
        padding: 15px 20px; /* Padding untuk header */
        display: flex; /* Menggunakan flexbox */
        justify-content: space-between; /* Mengatur ruang antara elemen */
        align-items: center; /* Vertikal center */
        transition: all 0.3s ease; /* Tambahkan transisi untuk efek animasi */
    }

    .header-left {
        display: flex; /* Menggunakan flexbox untuk header kiri */
        align-items: center; /* Vertikal center */
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

    .navbar-toggler {
        border: none; /* Menghilangkan border pada tombol burger */
    }

    .dropdown-menu {
        background-color: #343a40; /* Warna latar belakang dropdown sama dengan navbar */
        color: white; /* Warna teks dropdown */
    }

    .dropdown-item {
        color: white; /* Warna teks item dropdown */
    }

    .dropdown-item:hover {
        background-color: #495057; /* Warna latar belakang item dropdown saat hover */
        color: white; /* Warna teks item dropdown saat hover */
    }

    .search-bar {
        position: absolute; /* Mengatur posisi absolute */
        right: 20px; /* Jarak dari kanan */
        top: 70px; /* Jarak dari atas (sesuaikan dengan tinggi navbar) */
        background: #343a40; /* Warna latar belakang */
        padding: 20px; /* Padding untuk form */
        border-radius: 10px; /* Sudut melengkung */
        transition: left 0.3s ease; /* Transisi untuk efek muncul */
        z-index: 1000; /* Pastikan berada di atas elemen lain */
        display: none; /* Sembunyikan secara default */
    }

    .search-bar.active {
        display: flex; /* Tampilkan saat aktif */
        align-items: center; /* Vertikal center */
    }

    .search-input {
        border: 2px solid #ddd;
        border-radius: 20px;
        padding: 10px 20px;
        width: 200px; /* Lebar search bar */
        transition : border-color 0.3s ease;
        outline: none; /* Menghilangkan outline saat fokus */
    }

    .search-input:focus {
        border-color: #007bff; /* Ubah warna border saat fokus */
    }

    .search-button {
        background: #007bff; /* Warna latar belakang tombol */
        border: none;
        border-radius: 20px;
        color: white;
        padding: 10px 15px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .search-button:hover {
        background-color: #0056b3; /* Warna saat hover */
    }

    /* Aturan untuk menampilkan dropdown hanya di smartphone */
    @media (max-width: 300px) {
        .navbar-toggler {
            display: block; /* Tampilkan tombol burger */
        }
    }
</style>

<div class="header-content d-flex justify-content-between align-items-center">
    <div class="header-left d-flex align-items-center">
        <img src="/assets/images/logo.jpg" alt="Logo" class="logo">
        <span class="header-name">UPTD Puskesmas Buttuada</span>
    </div>
    <div class="header-right d-flex align-items-center">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #343a40;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/about.php">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/services.php">Pelayanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/screning.php">Skrining ILP</a></li>

                </ul>
            </div>
        </nav>
        <button id="searchToggle" class="btn btn-light">Cari</button>
        <div class="search-bar" id="searchBar">
            <input type="text" class="search-input" placeholder="Cari..." id="searchInput">
            <button class="search-button" id="searchButton">Go</button>
        </div>
    </div>
</div>

<script>
    
    // Menangani event ketika tombol pencarian diklik
    document.getElementById('searchToggle').addEventListener('click', function() {
        const searchBar = document.getElementById('searchBar');
        searchBar.classList.toggle('active'); // Tambahkan atau hapus kelas aktif
        if (searchBar.classList.contains('active')) {
            document.getElementById('searchInput').focus(); // Fokus pada input pencarian
        }
    });

    // Menangani event ketika pengguna menekan tombol "Enter" di search bar
    document.getElementById('searchInput').addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Mencegah form dari pengiriman
            const searchTerm = this.value; // Ambil nilai dari search bar
            alert('Anda mencari: ' + searchTerm); // Tampilkan alert dengan nilai pencarian
            // Di sini Anda dapat menambahkan logika pencarian yang lebih kompleks
        }
    });

    // Menangani event ketika tombol "Go" diklik
    document.getElementById('searchButton').addEventListener('click', function() {
        const searchTerm = document.getElementById('searchInput').value; // Ambil nilai dari search bar
        alert('Anda mencari: ' + searchTerm); // Tampilkan alert dengan nilai pencarian
        // Di sini Anda dapat menambahkan log ika pencarian yang lebih kompleks
    });

    // Menutup dropdown saat mengklik di luar
    window.addEventListener('click', function(event) {
        const dropdownMenu = document.getElementById('navbarNav');
        const toggler = document.getElementById('navbarToggle');
        if (!toggler.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show'); // Sembunyikan dropdown
        }
    });

    document.getElementById('navbarToggler').addEventListener('click', function() {
    this.classList.toggle('active'); // Menambahkan atau menghapus kelas 'active'
});
</script>