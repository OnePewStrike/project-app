<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Header Section -->
    <section class="header">
      <a href="{{  url('dashboard') }}">
        <h1 class="logo"> LIBRARY SYSTEM </h1>
      </a>
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
    
    <!-- Dashboard Section  -->
    <section class="container">
      <header> Librarian Dashboard </header>
      <div class="row">
        <div class="content-col image-trans">
          <img src="/images/book-icon.png" alt="#">
          <h4># of books</h4>
        </div>
        <div class="content-col image-trans">
          <img src="/images/user-icon.png" alt="#">
          <h4># of authors</h4>
        </div>
        <div class="content-col image-trans">
          <img src="/images/librarian-icon.png" alt="#">
          <h4># of librarians</h4>
        </div>
      </div>


      {{-- Books Collection Section  --}}
      <table class="table-content-one">
        <thead><tr>
          <th>Number</th>
          <th>Book Title</th>
          <th>Publisher</th>
          <th>Author</th>
          <th>Year Published</th>
          <th>Volume</th>
          <th class="action">Action</th>
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
                  <a href="{{ url('view-book/'.$book->id) }}" class="btn btn-primary">View</a> 
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
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