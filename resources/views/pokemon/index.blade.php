@extends('layouts.app')
@section('head-title', 'Laravel Pokemon Database')

@section('cdn-additional')
{{-- Aggiungo Bootstrap --}}
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
@endsection

@section('main-content')
<main>
    <div class="container">
        <a class="btn btn-red my-3" href="{{ route('pokemon.create') }}">Aggiungi un nuovo pokemon</a>
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
                    <td>{{ $p->image }}</td>
                    <td>
                        <div class="flex-align-center">
                            <a class="btn btn-red me-1" href="{{ route('pokemon.show', $p->id) }}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-secondary me-1" href="{{ route('pokemon.edit', $p->id) }}"><i class="fas fa-pencil"></i></a>
                            <form action="{{ route('pokemon.destroy', $p->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
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

