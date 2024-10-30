window.onscroll = function() {
    var heroText = document.querySelector('.hero-text');
    var logos = document.querySelector('.logos-container');
    var logoCn = document.querySelector('.logocn');
    
    if (window.scrollY > 100) {
        heroText.style.display = 'none';
        logos.style.display = 'none';
        logoCn.style.display = 'none';
    } else {
        heroText.style.display = 'block';
        logos.style.display = 'flex';
        logoCn.style.display = 'block';
    }
};

window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar-container');
    if (window.scrollY > 100) { 
        navbar.classList.add('navbar-transparent'); // navbar transparant pas di scroll
        navbar.classList.add('text-dark'); // navbar transparant pas di scroll
        navbar.classList.remove('navbar-colored');
    } else {
        navbar.classList.add('navbar-colored'); // navbar warna pas diem atau balik ke atas
        navbar.classList.remove('navbar-transparent');
    }
});

let currentSlide = 0;

function moveSlider(step) {
    const sliderContainer = document.getElementById('sliderContainer');
    const slides = document.querySelectorAll('.jurusan-item');
    const totalSlides = slides.length;

    currentSlide += step;

    if (currentSlide >= totalSlides) {
        currentSlide = 0; // Kembali ke slide pertama
    } else if (currentSlide < 0) {
        currentSlide = totalSlides - 1; // Kembali ke slide terakhir
    }

    const slideWidth = slides[0].clientWidth;
    sliderContainer.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
}

function showCertificate(src) {
    const overlay = document.getElementById('overlay-sertifikat');
    const fullImg = document.getElementById('full-img');
    overlay.style.display = 'flex';
    fullImg.src = src;
}

function closeOverlay() {
    document.getElementById('overlay-sertifikat').style.display = 'none';
}