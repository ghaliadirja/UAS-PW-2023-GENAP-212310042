@extends('templates.layouts')
@section('content')
<!-- /* styles.css */

/* Gaya tombol pencarian */ -->
<style>
/* styles.css */

/* Gaya container */
/* styles.css */

/* Gaya search box */
.search-box {
  display: flex;
  flex-direction: row;
  align-items: right;
  justify-content: flex-end;
  margin-top: 20px;
}

.search-box input[type="text"] {
  padding: 6px 10px;
  margin-right: 10px;
  border-radius:10px;
}

.search-box button {
  padding: 6px 10px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

.search-box button:hover {
  background-color: #31308B;
}

.container {
  margin: 20px;
}

@media screen and (max-width: 767px) {
  /* Tata letak untuk perangkat mobile */
  .container {
    margin: 10px;
    margin-left: 10px;
    margin-right: 10px;
  }
}

@media screen and (min-width: 768px) and (max-width: 991px) {
  /* Tata letak untuk perangkat tablet */
  .container {
    margin: 15px;
    margin-left: 20px;
    margin-right: 20px;
  }
}

@media screen and (min-width: 992px) {
  /* Tata letak untuk perangkat desktop */
  .container {
    margin: 20px;
    margin-left: 20px;
    margin-right: 20px;
  }
}

/* Gaya untuk teks yang dicari */
.highlight {
  background-color: #FFFF00;
}

/* Gaya untuk kartu yang dicari */
.highlight-card {
  border: 2px solid #FFFF00;
}

</style>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 col-xxl-12">
      <h1 class="text-center text-md-left" style="font-size: 48px; color: #31308B;">Articles</h1>
      <p class="text-center text-md-left" style="font-size: 16px; color: gray;">Our stories, latest updates, and any information. Find anything you want to know.</p>
      <div class="search-box">
        <input type="text" placeholder="Find an article..." id="searchInput">
        <button type="submit" onclick="searchByIndex()">Search</button>
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center">
@php
  $sortedPosts = [];
@endphp
@foreach ($posts as $index => $post)
  @php
    $title = strtolower($post->title);
    $searchInput = isset($searchIndex) ? strtolower($searchIndex) : '';
  @endphp
  @if (strpos($title, $searchInput) !== false)
    @php
      $sortedPosts[] = $post;
    @endphp
  @endif
@endforeach
@foreach ($sortedPosts as $index => $post)
  <div class="col-md-3 mb-3">
    <div class="card @if (isset($searchIndex) && $searchIndex === $post->title) highlight-card @endif">
      <img src="{{ Voyager::image($post->image) }}" class="card-img-top" alt="Image">
      <div class="card-body">
        <h6 class="card-title @if (isset($searchIndex) && $searchIndex === $post->title) highlight @endif">{{ $post->title }}</h6>
        <p class="card-text" style="font-size: 14px">{{ $post->excerpt }}</p>
        <p class="card-meta" style="font-size: 12px; color: gray">Posted on {{ date_format($post->created_at, 'd F Y') }} by Admin</p>
      </div>
      <div class="card-footer bg-light text-muted">
        <a href="{{ url('/post/' . $post->id) }}" class="card-link" style="font-size: 12px;">See More</a>
      </div>
    </div>
  </div>

  @if (($index + 1) % 3 === 0)
    </div><div class="row justify-content-center">
  @endif
@endforeach

<script>
  function searchByIndex() {
    // Get the search input value
    var searchInput = document.getElementById('searchInput').value.toLowerCase();

    // Scroll to the matched card
    var cardTitles = document.querySelectorAll('.card-title');
    for (var i = 0; i < cardTitles.length; i++) {
      var title = cardTitles[i].innerText.toLowerCase();
      
      // Check if the title matches the search input
      if (title.includes(searchInput)) {
        var card = cardTitles[i].closest('.card');
        card.scrollIntoView({ behavior: 'smooth' });
        // card.classList.add('highlight-card');
        cardTitles[i].classList.add('highlight');
      }
    }
  }
</script>

@endsection
