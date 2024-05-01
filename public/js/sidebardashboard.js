document.addEventListener('DOMContentLoaded', function() {
    const sidebarLinks = document.querySelectorAll('.sidebar-link');
    const contentDivs = document.querySelectorAll('.content');
  
    sidebarLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = link.getAttribute('href').substring(1); // Ambil ID target tanpa tanda '#'
  
        // Sembunyikan semua konten div
        contentDivs.forEach(div => {
          div.classList.add('hidden');
        });
  
        // Tampilkan konten div yang sesuai berdasarkan link yang diklik
        const targetDiv = document.getElementById(targetId + '-content');
        if (targetDiv) {
          targetDiv.classList.remove('hidden');
        }
      });
    });
  });

//KATEGORI LINK//
document.addEventListener('DOMContentLoaded', function() {
  const kategoriLinks = document.querySelectorAll('.kategori-link');
  const kategoriDivs = document.querySelectorAll('.kategori');

  kategoriLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = link.getAttribute('href').substring(1); // Ambil ID target tanpa tanda '#'

      // Sembunyikan semua kategori div
      kategoriDivs.forEach(div => {
        div.classList.add('hidden');
      });

      // Tampilkan kategori div yang sesuai berdasarkan link yang diklik
      const targetDiv = document.getElementById(targetId);
      if (targetDiv) {
        targetDiv.classList.remove('hidden');
      }
    });
  });
});


// UPLOAD GAMBAR
document.getElementById('fileToUpload').addEventListener('change', function() {
  var file = this.files[0];
  if (file) {
    var reader = new FileReader();
    reader.onload = function(e) {
      var preview = document.getElementById('preview');
      preview.innerHTML = '<img src="' + e.target.result + '" alt="Preview Gambar">';
    };
    reader.readAsDataURL(file);
  }
});