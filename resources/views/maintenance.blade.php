<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Book Maintenance</title>
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

  {{-- Book Collection Section  --}}
  <section class="table-container">
    <div class="table-header">
      <h1>Book Maintenance</h1>
      <a href="{{ url('add-book') }}" class="btn btn-large btn-primary">Add New Book</a>
    </div>
    @if(Session::has('success'))
    <div class="main-success-txt">
      {{ Session::get('success') }}
    </div>
    @endif
    <table class="table-content-two">
      <thead><tr>
        <th>Number</th>
        <th>Book Title</th>
        <th>Publisher</th>
        <th>Author</th>
        <th>Year Published</th>
        <th>Volume</th>
        <th>Actions</th>
        </tr></thead>
      <tbody>
        @php
          $i = 1;   
        @endphp
        @foreach ($data as $book)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $book->BookTitle }}</td>
              <td>{{ $book->Publisher }}</td>
              <td>{{ $book->Author }}</td>
              <td>{{ $book->YearPublished }}</td>
              <td>{{ $book->Volume }}</td>
              <td>
                <a href="{{ url('edit-book/'.$book->id) }}" class="btn btn-primary">Edit</a> 
                <a href="{{ url('delete-book/'.$book->id) }}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </section>

  {{-- Footer Section  --}}
  <section class="footer-mtn">
    <div class="footer-details">
      <h5>@Library Management System | Godwin Duliente</h5>
      <h5>CS31 Architecture And Organization</h5>
    </div>
  </section>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>