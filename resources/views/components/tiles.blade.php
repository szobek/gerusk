<div class="flex-container justify-center gap-0">
    <h1>{{$title}}</h1>
    <div class="break"></div>
    
    @forelse ($images as $index => $image)
        <div class="section tile">
            <img src="{{ Vite::asset($image['url']) }}" alt="{{ $image['alt'] ?? 'cserép' }}">
        </div>
    @empty
        <div class="swiper-slide">
            <p>Nincsenek képek a galériában.</p>
        </div>
    @endforelse
</div>