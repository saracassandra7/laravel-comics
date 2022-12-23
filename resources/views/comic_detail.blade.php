@extends('layouts.main')

@section('content')
<main>
  <div class="container">
    <div class="comic">
      <div class="comic-img">
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
      </div>

      <div class="comic-info">
        <h1>{{$comic['title']}}</h1>
        <p>Series: {{$comic['series']}}</p>
        <span>Price: {{$comic['price']}}</span>
        <p class="description">{{$comic['description']}}</p>
        
        <div class="credits">
         <p>Art by: {{implode(',', $comic['artists'])}} </p>
         <p>Written by: {{implode(',', $comic['writers'])}} </p>
        </div>
      </div>

    </div>
    <div class="container-btn">
      <a href="{{route('comics')}}"><button><< BACK</button></a>
    </div>
  </div>




</main>


@endsection