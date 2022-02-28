<ul class="navbar">
    @foreach ($navigation as $menu => $url)
        <li>
            <a href="{{ $url }}">{{ $menu }}</a>
        </li>
    @endforeach
</ul>
