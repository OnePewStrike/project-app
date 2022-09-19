<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- Header -->
  <section class="header">
      <a href="{{  url('home') }}">
        <h1 class="logo"> LIBRARY SYSTEM </h1>
      </a>
      <nav>
        <ul class ='nav-links'>
          <li><a href="{{ url('home')}}">Home</a></li>
          <li><a href="{{ url('maintenance') }}">Maintenance</a></li>
        </ul>
      </nav>
      <a href="#" class="user">username</a>
  </section>

  {{-- Book View --}}
  <section class="hero">
    
  </section>
</body>
</html>