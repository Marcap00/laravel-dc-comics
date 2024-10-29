<header class="flex-between-center">
    <div class="header-left flex-align-center">
        <img class="me-2" src="{{ asset('logomark.svg') }}" alt="">
        <h1>Laravel <span>Pokemon</span> Database</h1>
    </div>
    <div class="header right">
        <ul class="flex-align-center text-white my-3">
            @foreach ($links_pages as $route=>$text)
            <li>
                <a href="{{ route($route) }}">
                    <h3 class="me-2">{{$text}}</h3>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</header>
