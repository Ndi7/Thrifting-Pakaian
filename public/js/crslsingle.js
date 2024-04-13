const carouselAutoNav = {
    activeSlide: 0,
    slides: Array.from({ length: 2 }, (_, index) => index), // Adjust the length according to the number of slides
    changeSlide(index) {
        this.activeSlide = index;
    },
};