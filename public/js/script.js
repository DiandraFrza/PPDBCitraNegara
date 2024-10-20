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
        // Saat halaman digulir lebih dari 100px, ubah menjadi navbar-colored
        navbar.classList.add('navbar-colored');
        navbar.classList.remove('navbar-colored');
    } else {
        // Jika halaman kembali ke atas (kurang dari 100px), ubah kembali menjadi navbar-transparent
        navbar.classList.add('navbar-colored');
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
