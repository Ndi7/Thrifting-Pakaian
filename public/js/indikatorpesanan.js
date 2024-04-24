document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll('.tab-link');
    const contents = document.querySelectorAll('.content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();

            // Menyembunyikan semua konten
            contents.forEach(c => c.classList.add('hidden'));
            // Menampilkan konten yang sesuai dengan tautan yang di-klik
            const targetId = this.getAttribute('href').substring(1);
            document.getElementById(targetId).classList.remove('hidden');
        });
    });
});