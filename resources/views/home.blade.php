@extends('layouts.main')

@section('page-title', 'Laravel Model Controller')


@section('main-content')
<h1 class="mb-3 mt-3">
    Laravel Model Controller
</h1>
<div class="row">
    @foreach ($movies as $movie)
        <div class="col-3 mb-3">
            <div class="card height" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie['title'] }}</h5>
                  <p class="card-text text-warning fw-bold">Titolo originale: <strong>{{ $movie['original_title'] }}</strong></p>
                  <p class="card-text">Nazionalità: <strong>{{ $movie['nationality'] }}</strong></p>
                  <p class="card-text">Data di pubblicazione: <strong>{{ $movie['date'] }}</strong></p>
                  <p class="card-text">Media Voto: <strong>{{ $movie['vote'] }}</strong></p>
                  <a href="{{ route('documentazione') }}" class="btn btn-warning text-black">Go Description</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection