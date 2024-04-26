//CAROUSEL SLIDE//
const gallerycrslContainer = document.querySelector('.gallerycrsl-container');
const gallerycrslControlContainer = document.querySelector('.gallerycrsl-controls');
const gallerycrslItems = document.querySelectorAll('.gallerycrsl-item');

class Carousel {

    constructor(container, items){
        this.carouselContainer = container;
        this.carouselArray = [...items];
        this.autoSlideInterval = null;
        this.slideIntervalDuration = 3000;
    }

    updateGallery(){
        this.carouselArray.forEach(el => {
            el.classList.remove('gallerycrsl-item-1', 'gallerycrsl-item-2', 'gallerycrsl-item-3', 'gallerycrsl-item-4', 'gallerycrsl-item-5');
        });

        this.carouselArray.slice(0, 5).forEach((el, i) => {
            el.classList.add(`gallerycrsl-item-${i+1}`);
        });
    }

    setCurrentState(direction){
        if (direction === 'previous'){
            this.carouselArray.push(this.carouselArray.shift());
        } else {
            this.carouselArray.unshift(this.carouselArray.pop());
        }
        this.updateGallery();
    }

    startAutoSlide() {
        this.autoSlideInterval = setInterval(() => {
            this.setCurrentState('next');
        }, this.slideIntervalDuration);
    }

    stopAutoSlide() {
        clearInterval(this.autoSlideInterval);
    }

    setAutoSlide() {
        this.startAutoSlide();
        this.carouselContainer.addEventListener('mouseenter', () => {
            this.stopAutoSlide();
        });
        this.carouselContainer.addEventListener('mouseleave', () => {
            this.startAutoSlide();
        });
    }
}

//AKSI KETIKA CLASS DI KLIK, AKAN MENUJU PAGE DETAIL PRODUK//
const exampleCarousel = new Carousel(gallerycrslContainer, gallerycrslItems);

exampleCarousel.setAutoSlide();


document.addEventListener('DOMContentLoaded', function() {
    // Mengambil semua elemen dengan class "card"
    var cards = document.querySelectorAll('.card');
  
    // Loop melalui setiap card dan tambahkan event listener untuk klik
    cards.forEach(function(card) {
      card.addEventListener('click', function() {
        // Mengarahkan halaman ke "singleproduk" saat card diklik
        window.location.href = 'singleproduk';
      });
    });
  });
