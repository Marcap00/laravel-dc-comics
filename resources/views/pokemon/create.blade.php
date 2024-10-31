

@extends('layouts.app')
@section('head-title', 'Laravel Pokemon Database')

@section('main-content')
<main>
    <div class="container">
        <form action="{{route('pokemon.store')}}" method="POST" class="text-center card">
            @csrf
            <div class="row row-cols-2 g-2 text-white">
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="name"><h3 class="mb-2">Name: </h3></label>
                        <input type="text" class="form-control p-05" id="name" name="name" placeholder="Enter pokemon name..." value="{{ old('name') }}">
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
                        <input type="text" class="form-control p-05" id="category" name="category" placeholder="Enter pokemon category..." value="{{ old('category') }}"">
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
                        <input type="text" class="form-control p-05" id="type" name="type" placeholder="Enter pokemon type..." value="{{ old('type') }}"">
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
                        <input type="text" class="form-control p-05" id="ability" name="ability" placeholder="Enter pokemon ability..." value="{{ old('ability') }}"">
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
                        <input type="text" class="form-control p-05" id="image" name="image" placeholder="Enter pokemon image path..." value="{{ old('image') }}"">
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
                        <input type="number" class="form-control p-05" id="weight" name="weight" min="0" max="1000" step="0.01" value="{{ old('weight') }}"">
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
                        <input type="number" class="form-control p-05" id="stage" name="stage_of_evolution" min="1" max="3" value="{{ old('stage_of_evolution') }}"">
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
                        <input type="number" class="form-control p-05" id="height" name="height" min="0" max="1000" step="0.01" value="{{ old('height') }}"">
                    </div>
                    @error("height")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="flex-center my-3">
                    <button type="submit" class="btn btn-red me-3">
                        Create new pokemon
                    </button>
                    <button type="reset" class="btn btn-secondary me-3">
                        Reset fields
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection

