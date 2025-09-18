<section id="{{ $id }}" class="carousel-section"  style="--image-count: {{ count($images) }};">
    @if ($title)
        <p class="carousel-title">{{ $title }}</p>
    @endif
    @if ($subtitle)
        <h2 class="carousel-subtitle">{{ $subtitle }}</h2>
    @endif

    <div class="carousel-container">
        <div class="carousel-track">
            @forelse ($images as $image)
                <div class="carousel-slide">
                    <img src="{{ $image }}" alt="Carousel image">
                </div>
            @empty
                {{-- If images array is empty --}}
                <p>No images</p>
            @endforelse
        </div>
    </div>
</section>

@once
    <div id="global-lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="global-lightbox-image">
    </div>
@endonce

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carouselElement = document.getElementById('{{ $id }}');
        if (!carouselElement) return; // Ha az elem nem található, ne csináljon semmit

        const track = carouselElement.querySelectorAll('.carousel-track');
        if (track) {
            track.forEach(t => {
                const slides = Array.from(t.children);
                slides.forEach(slide => {
                    const clone = slide.cloneNode(true);
                    t.appendChild(clone);
                });
            });

        }

        // --- Lightbox Logic ---
        const lightbox = document.getElementById('global-lightbox');
        const lightboxImage = document.getElementById('global-lightbox-image');
        const lightboxClose = lightbox.querySelector('.lightbox-close');
        let isLightboxInitialized = false; // event flag to ensure global event listeners are added only once

        const container = carouselElement.querySelector('.carousel-container');
        if (container) {
            container.addEventListener('click', function (event) {
                if (event.target.tagName === 'IMG') {
                    lightbox.classList.add('active');
                    lightboxImage.src = event.target.src;
                }
            });
        }

        if (!document.body.dataset.lightboxInitialized) {
            const closeLightbox = () => {
                lightbox.classList.remove('active');
            }

            lightboxClose.addEventListener('click', closeLightbox);

            lightbox.addEventListener('click', function (event) {
                if (event.target === lightbox) {
                    closeLightbox();
                }
            });

            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    closeLightbox();
                }
            });

            document.body.dataset.lightboxInitialized = true; // Mark that global event listeners are set up
        }
    });
</script>