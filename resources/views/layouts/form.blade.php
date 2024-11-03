

@extends('layouts.app')
@section('head-title', 'Laravel Pokemon Database')

@section('main-content')
<main>
    <div class="container">
        <form action="{{ (Route::currentRouteName() == 'pokemon.edit') ? route('pokemon.update', $p->id ) : route('pokemon.store') }}" method="POST" class="text-center card">
            @if (Route::currentRouteName() == 'pokemon.edit')
                @method('PUT')
            @endif
            @csrf
            <div class="row row-cols-2 g-2 text-white">
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="name"><h3 class="mb-2">Name: </h3></label>
                        @if (Route::currentRouteName() == 'pokemon.edit')
                            <input type="text" class="form-control p-05" id="name" name="name" placeholder="Enter pokemon name..." value="{{ old('name', $p->name) }}">
                        @elseif (Route::currentRouteName() == 'pokemon.create')
                            <input type="text" class="form-control p-05" id="name" name="name" placeholder="Enter pokemon name..." value="{{ old('name') }}">
                        @endif
                    </div>
                    @error("name")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="category"><h3 class="mb-2">Category: </h3></label>
                        @if (Route::currentRouteName() == 'pokemon.edit')
                            <input type="text" class="form-control p-05" id="category" name="category" placeholder="Enter pokemon category..." value="{{ old('category', $p->category) }}">
                        @elseif (Route::currentRouteName() == 'pokemon.create')
                            <input type="text" class="form-control p-05" id="category" name="category" placeholder="Enter pokemon category..." value="{{ old('category') }}">
                        @endif
                    </div>
                    @error("category")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="type"><h3 class="mb-2">Type: </h3></label>
                        @if (Route::currentRouteName() == 'pokemon.edit')
                            <input type="text" class="form-control p-05" id="type" name="type" placeholder="Enter pokemon type..." value="{{ old('type', $p->type) }}">
                        @elseif (Route::currentRouteName() == 'pokemon.create')
                            <input type="text" class="form-control p-05" id="type" name="type" placeholder="Enter pokemon type..." value="{{ old('type') }}">
                        @endif
                    </div>
                    @error("type")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="ability"><h3 class="mb-2">Ability: </h3></label>
                        @if (Route::currentRouteName() == 'pokemon.edit')
                            <input type="text" class="form-control p-05" id="ability" name="ability" placeholder="Enter pokemon ability..." value="{{ old('ability', $p->ability) }}">
                        @elseif (Route::currentRouteName() == 'pokemon.create')
                            <input type="text" class="form-control p-05" id="ability" name="ability" placeholder="Enter pokemon ability..." value="{{ old('ability') }}">
                        @endif
                    </div>
                    @error("ability")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="image"><h3 class="mb-2">Image Path: </h3></label>
                        @if (Route::currentRouteName() == 'pokemon.edit')
                            <input type="text" class="form-control p-05" id="image" name="image" placeholder="Enter pokemon image path..." value="{{ old('image', $p->image) }}">
                        @elseif (Route::currentRouteName() == 'pokemon.create')
                            <input type="text" class="form-control p-05" id="image" name="image" placeholder="Enter pokemon image path..." value="{{ old('image') }}">
                        @endif
                    </div>
                    @error("image")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="weight"><h3 class="mb-2">Weight: </h3></label>
                        @if (Route::currentRouteName() == 'pokemon.edit')
                            <input type="number" class="form-control p-05" id="weight" name="weight" min="0" max="1000" step="0.01" value="{{ old('weight', $p->weight) }}">
                        @elseif (Route::currentRouteName() == 'pokemon.create')
                            <input type="number" class="form-control p-05" id="weight" name="weight" min="0" max="1000" step="0.01" value="{{ old('weight') }}">
                        @endif
                    </div>
                    @error("weight")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="stage"><h3 class="mb-2">Stage of evolution: </h3></label>
                        @if (Route::currentRouteName() == 'pokemon.edit')
                            <input type="number" class="form-control p-05" id="stage" name="stage_of_evolution" min="1" max="3" value="{{ old('stage_of_evolution', $p->stage_of_evolution) }}">
                        @elseif (Route::currentRouteName() == 'pokemon.create')
                            <input type="number" class="form-control p-05" id="stage" name="stage_of_evolution" min="1" max="3" value="{{ old('stage_of_evolution') }}">
                        @endif
                    </div>
                    @error("stage_of_evolution")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="height"><h3 class="mb-2">Height: </h3></label>
                        @if (Route::currentRouteName() == 'pokemon.edit')
                            <input type="number" class="form-control p-05" id="height" name="height" min="0" max="1000" step="0.01" value="{{ old('height', $p->height) }}">
                        @elseif (Route::currentRouteName() == 'pokemon.create')
                            <input type="number" class="form-control p-05" id="height" name="height" min="0" max="1000" step="0.01" value="{{ old('height') }}">
                        @endif
                    </div>
                    @error("height")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="flex-center my-3">
                    <button type="submit" class="btn btn-red me-3">
                        @if (Route::currentRouteName() == 'pokemon.edit')
                        <span>Edit</span>
                        <i class="fas fa-pencil ms-05"></i>
                        @elseif (Route::currentRouteName() == 'pokemon.create')
                        <span>Create new pokemon</span>
                        <i class="fas fa-plus ms-05"></i>
                        @endif
                    </button>
                    <button type="reset" class="btn btn-secondary me-3">
                        Reset fields
                        <i class="fas fa-undo ms-05"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection

