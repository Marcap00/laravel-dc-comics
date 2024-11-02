@extends('layouts.app')
@section('head-title', 'Laravel Pokemon Database')

@section('cdn-additional')
{{-- Bootstrap --}}
@vite('resources/scss/partials/bootstrap.scss')
@endsection

@section('main-content')
<main>
    <div class="container">

        @if (Route::currentRouteName() == 'pokemon.index')
        <a class="btn btn-red my-3 me-2" href="{{ route('pokemon.create') }}">
            Add new Pokemon <i class="fas fa-plus"></i>
        </a>
        <a href="{{ route('pokemon.bin') }}" class="btn btn-grey my-3">
            Go to the bin <i class="fas fa-trash"></i>
        </a>
        @elseif (Route::currentRouteName() == 'pokemon.bin')
        <a href="{{ route('pokemon.index') }}" class="btn btn-grey my-3">
            Go Back<i class="fas fa-arrow-left ms-2"></i>
        </a>
        @endif

        <table class="table table-responsive table-dark table-striped table-hover table-borderless mb-0 align-middle">
            <thead class="text-red">
                <tr class="text-center text-red">
                    @foreach (config('table_heads') as $table_head)
                    <th>{{ $table_head }}</th>
                    @endforeach
                    <th></th>
                </tr>
            </thead>
            <tbody>
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
                            @if (Route::currentRouteName() == 'pokemon.index')
                            <a class="btn btn-red me-2" href="{{ route('pokemon.show', $p->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a class="btn btn-secondary me-2" href="{{ route('pokemon.edit', $p->id) }}">
                                <i class="fas fa-pencil"></i>
                            </a>

                            <button class="btn btn-red" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="fas fa-trash fa-lg"></i>
                            </button>

                            @elseif (Route::currentRouteName() == 'pokemon.bin')
                            <form class="patch-form" action="{{ route('pokemon.restore', $p->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-warning me-2" type="submit"><i class="fas fa-rotate"></i></button>
                            </form>

                            <button class="btn btn-red" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="fas fa-trash fa-lg"></i>
                            </button>

                            @endif
                        </div>
                        <!-- Modal -->
                        <div class="modal fade del-modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" data-bs-theme="dark" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ (Route::currentRouteName() == 'pokemon.bin') ? 'Permanent deleting' : 'Deleting'}} {{ $p->name }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img id="modal-image" src="{{ $p->image }}" alt="{{$p->name }}">
                                        <p>Are you sure you want to {{ (Route::currentRouteName() == 'pokemon.bin') ? 'permanent' : ''}} delete <span class="fw-bold">{{ $p->name }}</span>?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        @if (Route::currentRouteName() == 'pokemon.index')
                                        <form class="del-form" action="{{ route('pokemon.destroy', $p->id) }}" method="POST" data-name="{{ $p->name }}" data-image="{{ $p->image }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-red" type="submit">Cancel <i class="fas fa-trash fa-lg"></i></button>
                                        </form>
                                        @elseif (Route::currentRouteName() == 'pokemon.bin')
                                        <form class="perma-del-form" action="{{ route('pokemon.permanent-destroy', $p->id) }}" method="POST" data-name="{{ $p->name }}" data-image="{{ $p->image }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-red" type="submit">Delete <i class="fas fa-trash fa-lg"></i></button>
                                        </form>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="10" class="text-red">No more pokemon available...</td>
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

