<nav>
    <ul>
        @foreach ($links as $link )
            <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
        @endforeach
    </ul>
</nav>