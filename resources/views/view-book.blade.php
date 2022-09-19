<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Book Details</title> 
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <!-- Header -->
  <section class="header">
      <a href="{{  url('home') }}">
        <h1 class="logo"> LIBRARY SYSTEM </h1>
      </a>
      <nav>
        <ul class ='nav-links'>
          <li><a href="{{ url('home')}}">Homepage</a></li>
          <li><a href="{{ url('maintenance') }}">Maintenance</a></li>
        </ul>
      </nav>
      <a href="login" class="logout"> logout </a>
  </section>

  
  {{-- Book View --}}
  <section class="hero-small">
    <div class="wrapper">
      <div class="form signup">
        <header>Book Details</header>
        <div class="output-details">
          <label class="form-label">Book Title: </label>
          <p class="output">{{ $data->BookTitle }}</p>
        </div>
        <div class="output-details">
          <label class="form-label">Publisher: </label>
          <p class="output"> {{ $data->Publisher }} </p>
        </div>
        <div class="output-details">
          <label class="form-label">Author: </label>
          <p class="output"> {{ $data->Author }}</p>
        </div>
        <div class="output-details">
          <label class="form-label">Year Published: </label>
          <p class="output"> {{ $data->YearPublished }} </p>
        </div>
        <div class="output-details">
          <label class="form-label">Volume: </label>
          <p class="output"> {{ $data->Volume }} </p>
        </div>
        <div class="back-action">
          <a href="{{ url('home') }}" class="btn btn-secondary back-action">Back</a>
        </div>
    </div>
  </section>
</body>
</html>