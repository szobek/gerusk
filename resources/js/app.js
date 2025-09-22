import Swiper from 'swiper';
import { Navigation, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';


let lightboxGalleryImages = [];
let lightboxCurrentIndex = 0;
const lightbox = document.getElementById('global-lightbox');
const lightboxImage = document.getElementById('global-lightbox-image');

function showLightboxImage(index) {
    if (!lightboxGalleryImages || lightboxGalleryImages.length === 0) return;
    if (index >= lightboxGalleryImages.length) index = 0;
    if (index < 0) index = lightboxGalleryImages.length - 1;
    lightboxImage.src = lightboxGalleryImages[index].url;
    lightboxCurrentIndex = index;
}

function initializeCarousel(carouselElement) {
    let galleryImages = [];
    try {
        galleryImages = JSON.parse(carouselElement.dataset.images);
    } catch (e) {
        console.error("Érvénytelen JSON formátum a data-images attribútumban:", carouselElement.dataset.images);
        return; 
    }

    if (!galleryImages || galleryImages.length === 0) {
        if(carouselElement.closest('.carousel-section')) {
           carouselElement.closest('.carousel-section').style.display = 'none';
        }
        return;
    }

    const swiper = new Swiper(carouselElement, {
        modules: [Navigation, Autoplay],
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        speed: 800, 
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 20 },
            768: { slidesPerView: 3, spaceBetween: 30 },
            1200: { slidesPerView: 4, spaceBetween: 40 },
        },

        navigation: {
            nextEl: carouselElement.parentElement.querySelector('.swiper-button-next'),
            prevEl: carouselElement.parentElement.querySelector('.swiper-button-prev'),
        },
    });

    carouselElement.addEventListener('click', function(event) {
        if (event.target.tagName === 'IMG' && event.target.dataset.index) {
            lightboxGalleryImages = galleryImages; 
            const index = parseInt(event.target.dataset.index, 10);
            showLightboxImage(index);
            lightbox.classList.add('active');
        }
    });
}


document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.image-swiper').forEach(initializeCarousel);
    if (lightbox && !document.body.dataset.lightboxInitialized) {
        const closeLightbox = () => lightbox.classList.remove('active');
        
        lightbox.querySelector('.lightbox-close').addEventListener('click', closeLightbox);
        lightbox.querySelector('.lightbox-prev').addEventListener('click', () => showLightboxImage(lightboxCurrentIndex - 1));
        lightbox.querySelector('.lightbox-next').addEventListener('click', () => showLightboxImage(lightboxCurrentIndex + 1));
        
        document.addEventListener('keydown', (e) => {
            if (lightbox.classList.contains('active')) {
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') lightbox.querySelector('.lightbox-prev').click();
                if (e.key === 'ArrowRight') lightbox.querySelector('.lightbox-next').click();
            }
        });

        document.body.dataset.lightboxInitialized = true;
    }
});