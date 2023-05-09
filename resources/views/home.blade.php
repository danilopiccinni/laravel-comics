@extends('layouts/main-layout')

@section('content')
   <!-- contenitore generale  -->
   <div class="general-container">

    @include('partials/jumbotron')
           
        <div class="cont-comic-books">

            <button class="current-series-button">current series</button>

            @foreach ($comics as $comic)
            <div class="poster">
                <img src="{{$comic['thumb'] }}" alt="" class="image-comic-book">
                <span class="title-comic-book">{{ $comic['title'] }}</span>
            </div>
            @endforeach

        </div>

        <button class="load-more-button">load more</button>

    </div>

    <div class="buy">
        @include('partials/buy')
    </div>




@endsection

