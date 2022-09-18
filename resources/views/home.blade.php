<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Header -->
    <section class="header">
        <a href="#">
          <h1 class="logo"> LIBRARY SYSTEM </h1>
        </a>
        <nav>
          <ul class ='nav-links'>
            <li><a href="{{ url('home')}}">Home</a></li>
            <li><a href="{{  url('maintenance') }}">Maintenance</a></li>
          </ul>
        </nav>
        <a href="#" class="user">username</a>
    </section>

    {{-- Project Submission: Web Development and Implementation using Laravel Framework --}}

    <!-- Content Page  -->
    <section class="container">
      <header> Welcome to Godwin's Library System </header>
      <p> yaaaaaaaaaaaaaaaaaaaaaaawwaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
      <div class="vertical-line"></div>
      <header class="sub-header">Book Collection</header>


      {{-- Books List Section  --}}
      <table class="table-content-one">
        <thead><tr>
          <th>Number</th>
          <th>Book Title</th>
          <th>Publisher</th>
          <th>Author</th>
          <th>Year Published</th>
          <th>Volume</th>
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
          @endforeach
        </tbody>
      </table>
      </section>

</body>
</html>