<div class="carousel-section">
    @if ($title)
        <p class="carousel-title">{{ $title }}</p>
    @endif
    @if ($subtitle)
        <h2 class="carousel-subtitle">{{ $subtitle }}</h2>
    @endif
    
    <div class="swiper-container-wrapper">
        <div 
            class="swiper image-swiper" 
            id="{{ $id }}"
            data-images='@json($images)'
        >
            <div class="swiper-wrapper">
                @forelse ($images as $index => $image)
                    <div class="swiper-slide">
                        <img src="{{ $image['url'] }}" alt="{{ $image['alt'] ?? 'Carousel kép' }}" data-index="{{ $index }}">
                    </div>
                @empty
                    <div class="swiper-slide">
                        <p>Nincsenek képek a galériában.</p>
                    </div>
                @endforelse
            </div>
        </div>
        
       
    </div>
</div>

{{-- A lightbox HTML kódja. A @once biztosítja, hogy csak egyszer kerüljön az oldalra. --}}
@once
<div id="global-lightbox" class="lightbox">
    <button class="lightbox-nav lightbox-prev" aria-label="Előző kép">&lt;</button>
    <img class="lightbox-content" id="global-lightbox-image" alt="Nagyított kép">
    <button class="lightbox-nav lightbox-next" aria-label="Következő kép">&gt;</button>
    <span class="lightbox-close">&times;</span>
</div>
@endonce