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

        $(document).ready(function() {
            $('.menu li').draggable({
                revert: true // Kembali ke posisi semula jika tidak ada tempat yang dituju
            });
        
            $('.menu').droppable({
                drop: function(event, ui) {
                    $(this).append(ui.draggable); // Memindahkan item yang di-drag
                }
            });
        });
}

// Menangani navigasi kembali
window.addEventListener('popstate', function(event) {
    loadPage(location.pathname);
});