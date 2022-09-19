<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Book</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <!-- Header -->
  <section class="header">
    <a href="#">
      <h1 class="logo"> LIBRARY SYSTEM </h1>
    </a>
    <nav>
      <ul class='nav-links'>
        <li><a href="index.html">Homepage</a></li>
        <li><a href="#">Maintenance</a></li>
      </ul>
    </nav>
    <a href="logout" class="logout"> logout </a>
  </section>

  {{-- Add Book Form  --}}
  <section class="hero-small">
    <div class="wrapper">
      <div class="form signup">
        <header>Add Book</header>
        @if(Session::has('success'))
        <div class="success-txt" role="alert">
          {{ Session::get('success') }}
        </div>
        @endif
        <form action="{{ url('save-book') }}" method="post">
          @csrf
          <div class="field input">
            <label class="form-label">BookTitle</label>
            <input type="text" class='form-control' name='booktitle' placeholder="Enter Book Title" value="{{ old('booktitle') }}">
            @error('booktitle')
            <div class="text-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Publisher</label>
            <input type="text" class='form-control' name='publisher' placeholder="Enter Publisher" value="{{ old('publisher') }}">
            @error('publisher')
            <div class="text-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Author</label>
            <input type="text" class='form-control' name='author' placeholder="Enter Author" value="{{ old('author') }}">
            @error('author')
            <div class="text-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Year Published</label>
            <input type="text" class='form-control' name='yearpublished' placeholder="Enter Year Published" value="{{ old('yearpublished') }}">
            @error('yearpublished')
            <div class="text-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Volume</label>
            <input type="text" class='form-control' name='volume' placeholder="Enter Volume" value="{{ old('volume') }}">
            @error('volume')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <br>
          <div class="actions">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ url('maintenance') }}" class="btn btn-secondary">Back</a>
          </div>

        </form>
      </div>
    </div>
  </section>
</body>
</html>