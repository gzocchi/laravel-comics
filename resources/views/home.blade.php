@extends('layouts.main')

@section('main_content')

    <div class="jumbotron"></div>

    <div class="container">
        <h1>current series</h1>
        <div id="gallery">
            
            @foreach ($comics as $comic)
            <div class="gallery_card">
                <a href="{{ $comic['thumb'] }}" target="_blank">
                    @include('partials.card', $comic)
                    <p>{{ $comic['series'] }}</p>
                </a>
            </div>
            @endforeach

            <a href="#gallery" class="btn">Load More </a>

          </div>
      </div>
@endsection