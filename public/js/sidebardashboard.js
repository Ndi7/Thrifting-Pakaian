

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



// PRODUK LIST
function toggleDropdown(id) {
  var dropdown = document.getElementById(id);
  var icon = document.getElementById(id.replace('dropdown', 'icon'));
  if (dropdown.classList.contains('hidden')) {
      dropdown.classList.remove('hidden');
      icon.classList.add('rotate-180');
  } else {
      dropdown.classList.add('hidden');
      icon.classList.remove('rotate-180');
  }
}