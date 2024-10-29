@extends('layouts.app')
@section('head-title', 'Laravel Pokemon Database')

@section('main-content')
<main id="main">
    <div class="h-100 flex-center">
        <a href="{{route('pokemon.index')}}"><h1>Go to the project <i class="fas fa-chevron-right"></i></h1></a>
    </div>
</main>
@endsection

