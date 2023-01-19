@extends('layouts.admin')

@section('title', 'Tecnologie')
@section('content')
    <h2 class="text-center mt-1">Tecnologie</h2>
    <div class="container">
        <div class="row row-cols-2">
            <div class="col">
                <ul>
                    @forelse ($technologies as $technology)
                        <li>{{ $technology->technology_name }}</li>
                    @empty
                        <p>Niente da fare</p>
                    @endforelse
                </ul>
            </div>

        </div>
    </div>
@endsection
