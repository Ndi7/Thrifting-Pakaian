//Bagian Keranjang//
// Mengambil elemen checkbox "Pilih Semua"
const checkAll = document.getElementById('checkAll');
// Mengambil semua elemen checkbox produk
const productCheckboxes = document.querySelectorAll('.productCheckbox');

// Tambahkan event listener ketika checkbox "Pilih Semua" diubah
checkAll.addEventListener('change', function () {
  // Periksa apakah checkbox "Pilih Semua" dicentang atau tidak
  const isChecked = this.checked;
  // Periksa semua checkbox produk dan setel status checked-nya
  productCheckboxes.forEach(checkbox => {
    checkbox.checked = isChecked;
  });
});

// Tambahkan event listener untuk setiap checkbox produk
productCheckboxes.forEach(checkbox => {
  checkbox.addEventListener('change', function () {
    // Periksa apakah semua checkbox produk dicentang
    const allChecked = [...productCheckboxes].every(cb => cb.checked);
    // Jika semua checkbox produk dicentang, centang juga checkbox "Pilih Semua"
    checkAll.checked = allChecked;
  });
});