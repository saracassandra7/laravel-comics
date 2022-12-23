@extends('layouts.main')

@section('content')
  <main>
  <div class="container">
      <div class="btn">
        <h3>CURRENT SERIES</h3>
      </div>

      <div class="comics">

        @foreach($comics as $comic)
         <a href="{{ route('comic_detail', ['id' => $comic['id'] ]) }}" class="card">
          <div class="card-img">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
          </div>
          <span>{{$comic['title']}}</span>
        </a>

        @endforeach

        <div class="container-btn">
          <button>LOAD MORE</button>
        </div>
      </div>

  </div>
    
  </main>

@endsection