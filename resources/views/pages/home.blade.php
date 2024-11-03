@extends('layouts.app')
@section('head-title', 'Laravel Pokemon Database')

@section('main-content')
<main>
    <div class="container">
        <div class="filter">
            <ul class="flex-align-center gap-1">
                <li>
                    <a href="{{ route('home') }}">All</a>
                </li>
                <li>
                    <a href="{{ route('filter', '1') }}">1° Stage</a>
                </li>
                <li>
                    <a href="{{ route('filter', '2') }}">2° Stage</a>
                </li>
                <li>
                    <a href="{{ route('filter', '3') }}">3° Stage</a>
                </li>
            </ul>
        </div>
        <div class="row row-cols-4 row-cols-sm-1 row-cols-md-2 g-2">
            @forelse ($pokemon as $p)
            <div class="col my-2">
                <div class="card hover">
                    <a href="{{route('pokemon.show', $p->id)}}">
                        <div class="card-img">
                            <img src="{{ $p->image }}" alt="{{ $p->name }}">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title mb-2">
                                {{ $p->name }}
                            </h2>
                            <p class="card-text">
                                Category: <span>{{ $p->category }}</span>
                            </p>
                            <p class="card-text">
                                Type: <span>{{ $p->type }}</span>
                            </p>
                            <p class="card-text">
                                Ability: <span>{{ $p->ability }}</span>
                            </p>
                            <p class="card-text">
                                Stage: <span>{{ $p->stage_of_evolution }}° Evolution</span>
                            </p>
                            <p class="card-text">
                                Height: <span>{{ $p->height }}</span>
                            </p>
                            <p class="card-text">
                                Weight: <span>{{ $p->weight }}</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            @empty
                <p class="text-red">No more pokemon available...</p>
            @endforelse
        </div>
    </div>
</main>
@endsection

