@extends('layouts.app')
@section('head-title', 'Laravel Pokemon Database')

@section('main-content')
<main>
    <div class="container">
        <a class="btn btn-red my-2" href="{{ route('pokemon.create') }}">Aggiungi un nuovo pokemon</a>
        <table class="table text-white text-center">
            <thead class="text-danger">
                <tr>
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
            <tbody>
                @forelse ($pokemon as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->category }}</td>
                    <td>{{ $p->type }}</td>
                    <td>{{ $p->ability }}</td>
                    <td>{{ $p->stage_of_evolution }}</td>
                    <td>{{ $p->height }}</td>
                    <td>{{ $p->weight }}</td>
                    <td>{{ $p->image }}</td>
                    <td class="flex-align-center">
                        <a class="btn btn-red me-1" href="{{ route('pokemon.show', $p->id) }}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-secondary me-1" href="{{-- {{ route('pokemon.edit', $p->id) }} --}}"><i class="fas fa-pencil"></i></a>
                        <button class="btn btn-red me-1 py-1 px-2" type="submit"><i class="fas fa-trash fa-lg"></i></button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-danger">No more pokemon available...</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
@endsection

