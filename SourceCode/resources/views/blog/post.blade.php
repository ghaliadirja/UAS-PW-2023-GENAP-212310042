@extends('templates.layouts')

@section('content')
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-8 offset-md-2"> -->
        <h1 class="text-center">{{ $post->title }}</h1>
        <p class="text-muted text-center">{{ date('F j, Y', strtotime($post->created_at)) }}</p>

        <img src="{{ Voyager::image($post->image) }}" class="img-fluid mb-3" alt="Article Image">

        <div>{!! $post->body !!}</div>
      </div>
    </div>
  </div>
@endsection
