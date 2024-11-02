<header class="flex-between-center">
    <div class="header-left flex-align-center">
        <img class="me-2" src="{{ asset('logomark.svg') }}" alt="">
        <h1>Laravel <span>Pokemon</span> Database</h1>
    </div>
    <div class="header-right">
        <ul class="flex-align-center text-white my-3">
            @foreach (config('links_pages') as $route=>$text)
            <li>
                <a class="{{ (Route::currentRouteName() == $route) ? 'active' : ''}} me-2" href="{{ route($route) }}">
                    <h3>{{$text}}</h3>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</header>
