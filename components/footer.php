<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .footer-content {
            background-color: #343a40; /* Warna latar belakang abu-abu gelap */
            color: white; /* Warna teks putih */
            display: flex; /* Menggunakan flexbox untuk tata letak */
            justify-content: space-between; /* Mengatur jarak antara elemen kiri dan kanan */
            align-items: center; /* Memusatkan elemen secara vertikal */
            padding: 15px 30px; /* Padding untuk footer */
        }
        .footer-left {
            display: flex; /* Menggunakan flexbox untuk elemen kiri */
            flex-direction: column; /* Mengatur elemen menjadi kolom */
        }
        .footer-left a {
            color: white; /* Warna teks putih */
            text-decoration: none; /* Menghilangkan garis bawah */
            margin: 5px 0; /* Jarak antar elemen */
            font-size: 0.8em; /* Ukuran font lebih kecil */
        }
        .footer-right {
            text-align: right; /* Teks di sebelah kanan */
        }
        .footer-right p {
            margin: 0; /* Menghilangkan margin default */
            font-size: 0.8em; /* Ukuran font lebih kecil */
        }
        .created-by {
            font-size: 0.65em; /* Ukuran font lebih kecil untuk "Created by" */
            opacity: 0.7; /* Transparansi */
        }
    </style>
</head>
<body>

<div class="footer-content">
    <div class="footer-left">
        <a href="https://www.google.com/maps/place/Jalan+Contoh+No.1,+Kota+Contoh" target="_blank">
            <i class="fas fa-map-marker-alt"></i> Jalan Contoh No.1, Kota Contoh
        </a>
        <a href="tel:+62123456789">
            <i class="fas fa-phone"></i> +62 123 456 789
        </a>
    </div>
    <div class="footer-right">
        <p>&copy; 2023 UPTD Puskesmas Buttuada. All rights reserved.</p>
        <p class="created-by">Created by Destri Rego</p>
    </div>
</div>

</body>
</html>