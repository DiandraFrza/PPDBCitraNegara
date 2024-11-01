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
        // pas di scroll jadi transparant text hitam bold
        navbar.classList.add('navbar-transparent');
        navbar.classList.remove('navbar-colored');
    } else {
        // pas ke posisi semula jadi warna hijau text putih
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

function showCertificate(src) {
    const overlay = document.getElementById("overlay-sertifikat");
    const fullImg = document.getElementById("full-img");
    overlay.style.display = "flex"; // Gunakan "flex" agar tampilan overlay menjadi tengah
    fullImg.src = src;
}

function closeOverlay() {
    const overlay = document.getElementById("overlay-sertifikat");
    overlay.style.display = "none";
}


document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".card-prestasi");

    cards.forEach(card => {
        card.addEventListener("click", function() {
            // Jika sudah aktif, hilangkan class gallery-active
            if (card.classList.contains("gallery-active")) {
                card.classList.remove("gallery-active");
            } else {
                // Hapus class gallery-active dari elemen lain
                cards.forEach(c => c.classList.remove("gallery-active"));
                // Tambahkan class gallery-active ke elemen yang diklik
                card.classList.add("gallery-active");
            }
        });
    });
});


(function ($) {
    'use strict';

    /*[ File Input Config ]
        ===========================================================*/
    
    try {
    
        var file_input_container = $('.js-input-file');
    
        if (file_input_container[0]) {
    
            file_input_container.each(function () {
    
                var that = $(this);
    
                var fileInput = that.find(".input-file");
                var info = that.find(".input-file__info");
    
                fileInput.on("change", function () {
    
                    var fileName;
                    fileName = $(this).val();
    
                    if (fileName.substring(3,11) == 'fakepath') {
                        fileName = fileName.substring(12);
                    }
    
                    if(fileName == "") {
                        info.text("No file chosen");
                    } else {
                        info.text(fileName);
                    }
    
                })
    
            });
    
        }
    
    
    
    }
    catch (e) {
        console.log(e);
    }

})(jQuery);