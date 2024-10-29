@extends('layouts.app')
@section('head-title', 'Laravel Pokemon Database')

@section('main-content')
<main>
    <div class="container">
        <div class="row row-cols-4 row-cols-sm-1 row-cols-md-2 g-2">
            {{-- @forelse ($ as $) --}}
            <div class="col my-2">
                <div class="card">
                    {{-- <a href="{{route('show', $index)}}"> --}}
                        <div class="card-body">
                            <h2 class="card-title mb-2">
                                <i class="fas fa-user me-1"></i>
                                Lorem
                            </h2>

                            <p class="card-text">
                                Lorem<span>Lorem</span>
                            </p>
                            <p class="card-text">
                                Lorem<span>Lorem</span>
                            </p>
                            <p class="card-text">
                                Lorem<span>Lorem</span>
                            </p>
                        </div>
                    {{-- </a> --}}
                </div>
            </div>
            {{-- @empty
                <p class="text-danger">No more pokemon available...</p>
            @endforelse --}}
        </div>
    </div>
</main>
@endsection

