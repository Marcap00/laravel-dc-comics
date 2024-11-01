@extends('layouts.app')
@section('head-title', 'Laravel Pokemon Database')

@section('cdn-additional')
{{-- Aggiungo Bootstrap --}}
@vite('resources/scss/partials/bootstrap.scss')
@endsection

@section('main-content')
<main>
    <div class="container">
        <a href="{{ route('pokemon.index') }}" class="btn btn-grey my-3">Go Back<i class="fas fa-circle-arrow"></i></a>
        <table class="table table-responsive table-dark table-striped table-hover table-borderless mb-0 align-middle">
            <thead class="text-red">
                <tr class="text-center text-red">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Ability</th>
                    <th>Stage of Evolution</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Image</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($pokemon as $p)
                <tr>
                    <td class="text-center text-red">{{ $p->id }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->category }}</td>
                    <td>{{ $p->type }}</td>
                    <td>{{ $p->ability }}</td>
                    <td class="text-center">{{ $p->stage_of_evolution }}</td>
                    <td class="text-center">{{ $p->height }}</td>
                    <td class="text-center">{{ $p->weight }}</td>
                    <td>{{ $p->getAbstractImagePath() }}</td>
                    <td>
                        <div class="flex-align-center">
                            <a class="btn btn-red me-1" href="{{ route('pokemon.show', $p->id) }}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-secondary me-1" href="{{ route('pokemon.edit', $p->id) }}"><i class="fas fa-pencil"></i></a>
                            <form class="del-form" action="{{ route('pokemon.destroy', $p->id) }}" method="POST" data-name="{{ $p->name }}" data-image="{{ $p->image }}">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-red" type="submit"><i class="fas fa-trash fa-lg"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-red">No more pokemon available...</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
@endsection

@section('additional-scripts')
@vite('resources/js/pokemon/del-confirmation.js')
@endsection
