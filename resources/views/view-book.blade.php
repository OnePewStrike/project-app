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
    <!-- Header Section -->
    <section class="header">
      <a href="{{  url('dashboard') }}">
        <h1 class="logo"> LIBRARY SYSTEM </h1>
      </a>
      <a href="#" class="user"> username </a>
    </section>

    {{-- Sub Header Section  --}}
    <section class="sub-header">
      <div class="left-content">
        <ul class ='nav-links'>
          <li><a href="{{ url('dashboard')}}">Dashboard</a></li>
          <li><a href="{{ url('add-book')}}">Add Books</a></li>
          <li><a href="{{  url('maintenance') }}">Maintenance</a></li>
        </ul>
      </div>
      <div class="right-content">
        <a href="login" class="logout">Logout </a>
        <img src="/images/logout-icon.png" alt="#">
      </div>
    </section>
  
  {{-- Book View --}}
  <section class="hero">
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
          <a href="{{ url('dashboard') }}" class="btn btn-secondary back-action">Back</a>
        </div>
    </div>
  </section>

  {{-- Footer Section  --}}
  <section class="footer">
    <div class="footer-details">
      <h5>@Library Management System | Godwin Duliente</h5>
      <h5>CS31 Architecture And Organization</h5>
    </div>
  </section>
</body>
</html>