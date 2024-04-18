document.addEventListener("DOMContentLoaded", function () {
  const likeIcons = document.querySelectorAll(".like");

  likeIcons.forEach((icon) => {
    icon.addEventListener("click", function () {
      // Cek apakah ikon memiliki kelas fill-slate-300
      if (icon.classList.contains("fill-slate-300")) {
        // Jika iya, ubah ke warna merah
        icon.setAttribute("fill", "#f00"); // Ubah warna stroke menjadi merah
        icon.classList.remove("fill-slate-300");
      } else {
        // Jika tidak, kembalikan ke warna semula
        icon.setAttribute("stroke", "#dedede"); // Kembalikan warna stroke ke warna asal
        icon.classList.add("fill-slate-300");
      }
    });
  });
});