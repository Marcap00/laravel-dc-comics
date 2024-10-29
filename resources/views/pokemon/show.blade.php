@extends('layouts.app')
@section('head-title', 'Laravel Pokemon Database')

@section('main-content')
<main>
    <div class="container">
        <div class="row row-cols-4 row-cols-sm-1 row-cols-md-2 g-2">
            <div class="col my-2">
                <div class="card">
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
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
