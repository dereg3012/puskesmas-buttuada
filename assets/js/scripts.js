// Fungsi untuk memuat halaman secara dinamis
function loadPage(url) {
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(html => {
            document.querySelector('main').innerHTML = html; // Ganti konten main
            window.history.pushState({ path: url }, '', url); // Perbarui URL di address bar
        })
        .catch(error => {
            console.error('Error loading page:', error);
        });
}


// Menangani navigasi kembali
window.addEventListener('popstate', function(event) {
    loadPage(location.pathname);
});

document.getElementById('navbarToggler').addEventListener('click', function() {
    this.classList.toggle('active'); // Menambahkan atau menghapus kelas 'active'
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