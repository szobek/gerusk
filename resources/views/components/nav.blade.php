<nav class="main-navigation">
    <button id="hamburger-button" class="hamburger-menu" aria-label="Menü megnyitása" aria-expanded="false">
        <svg class="hamburger-icon" viewBox="0 0 100 80" width="30" height="30">
            <rect width="100" height="15" rx="8"></rect>
            <rect y="30" width="100" height="15" rx="8"></rect>
            <rect y="60" width="100" height="15" rx="8"></rect>
        </svg>
    </button>

    <ul id="nav-links" class="nav-links">
        @foreach ($links as $link)
            <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
        @endforeach
    </ul>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburgerButton = document.getElementById('hamburger-button');
        const navLinks = document.getElementById('nav-links');

        if (hamburgerButton && navLinks) {
            hamburgerButton.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                const isExpanded = navLinks.classList.contains('active');
                hamburgerButton.setAttribute('aria-expanded', isExpanded);
            });
        }
    });
</script>