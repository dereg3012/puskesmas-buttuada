<style>
    .header {
        display: flex; /* Menggunakan flexbox untuk header */
        align-items: center; /* Vertikal center */
        background-color:#3a3939; /* Warna latar belakang header */
        padding: 10px 0px; /* Padding lebih kecil untuk header */
        position: relative; /* Untuk posisi menu */
        justify-content: space-between;
        position: right; /* Memisahkan header kiri dan kanan */
    }

    .header-left {
        display: flex; /* Menggunakan flexbox untuk header kiri */
        align-items: center; /* Vertikal center */
    }

    .logo {
        height: 65px; /* Ukuran logo lebih kecil */
        width: 90px;
        margin-right: 10px; /* Jarak antara logo dan nama */
    }

    .header-name {
        font-size: 24px; /* Ukuran font untuk nama */
        color: white; /* Warna teks untuk nama */
        font-weight: bold; /* Menebalkan font */
        padding: 5px 10px; /* Padding lebih kecil untuk nama header */
    }

    .menu {
        list-style: none; /* Menghilangkan bullet points */
        display: flex; /* Menggunakan flexbox untuk menu */
        margin-left: auto; 
        margin-right: 100px;/* Menyelaraskan menu ke kanan */
        padding: 0; /* Menghilangkan padding default */
    }

    .menu li {
        margin: 0 10px;
        transition: transform 0.3s ease; /* Jarak antar item menu */
}

    .menu a {
        text-decoration: none; /* Menghilangkan garis bawah pada link */
        color: white; /* Warna teks menu */
        font-size: 18px; /* Ukuran font untuk menu */
        transition: color 0.3s ease; /* Transisi warna saat hover */
        display: flex; /* Menggunakan flexbox untuk menu link */
        align-items: center; /* Vertikal center */
        justify-content: center; /* Horizontal center */
        height: 100%; /* Tinggi penuh untuk menu item */
        padding: 10px; /* Padding untuk menu item */
        text-align: center; /* Center text */
    }

    .menu a:hover {
        color: #ffcc00; /* Warna saat hover */
    }

    /* Hamburger Icon */
    .menu-btn {
        display: none; /* Sembunyikan checkbox */
    }

    .menu-icon {
        display: none; /* Sembunyikan ikon menu */
        cursor: pointer; /* Pointer saat hover */
        flex-direction: column; /* Susun vertikal */
        justify-content: space-around; /* Ruang antar garis */
        height: 30px; /* Tinggi ikon */
        margin-left: auto; /* Dorong ke kanan */
        color: white; /* Dorong ke kanan */
    }

    .menu-icon span {
        width: 30px; /* Lebar garis */
        height: 3px; /* Tinggi garis */
        background-color: white; /* Warna garis menjadi putih */
        transition: all 0.3s ease; /* Transisi saat toggle */
    }

    /* Responsif */
    @media (max-width: 768px) {
        .menu {
            display: none; /* Sembunyikan menu pada ukuran kecil */
            flex-direction: column; /* Susun menu secara vertikal */
            position: absolute; /* Posisi absolut untuk menu */
            top: 80px; /* Jarak dari atas */
            right: 0; /* Tempatkan di kanan */
            width: 100%; /* Lebar penuh */
            z-index: 1; /* Pastikan menu di atas elemen lainnya */
        }

        .menu-btn:checked + .menu-icon + .menu {
            display: flex; /* Tampilkan menu saat checkbox dicek */
        }

        .menu-icon span:nth-child(1) {
            transform: rotate(45deg); /* Rotasi garis pertama */
            transform-origin: 5px; /* Titik rotasi */
        }

        .menu-icon span:nth-child(2) {
            opacity: 0; /* Sembunyikan garis kedua */
        }

        .menu-icon span:nth-child(3) {
            transform: rotate(-45deg); /* Rotasi garis ketiga */
            transform-origin: 5px; /* Titik rotasi */
        }

        .menu-btn {
            display: block; /* Tampilkan checkbox */
        }

        .menu-icon {
            display: flex; /* Tampilkan ikon menu */
        }
    }
</style>

<header class="header">
    <div class="header-left">
        <img src="/assets/images/logo.jpg" alt="Logo" class="logo">
        <span class="header-name">UPTD Puskesmas Buttuada</span>
    </div>
    <div style="padding: 5px;">
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn">
        <div class="navicon"></div>
        <div class="navicon"></div>
        <div class="navicon"></div>
    </label>
    <ul class="menu">
        <li><a href="../index.php">Home</a></li>
        <li><a href="/pages/about.php">Profil</a></li>
        <li><a href="/pages/services.php">Pelayanan</a></li>
        <li><a href="/pages/screning.php">Skrining ILP</a></li>
    </ul>
</div>
</header>