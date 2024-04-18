document.addEventListener('DOMContentLoaded', function () {
    const navImages = document.querySelectorAll('.navImage');
  
    navImages.forEach(function (navImage) {
      navImage.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');
        const mainPic = document.getElementById(targetId);
  
        // Ubah atribut src dari gambar utama
        mainPic.querySelector('img').src = this.querySelector('img').src;
      });
    });
  });