<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>

  <!-- Header Section -->
  <section class="header">
    <a href="{{  url('#') }}">
      <h1 class="logo"> LIBRARY SYSTEM </h1>
    </a>
  </section>

  {{-- Login Section  --}}
  <section class="hero">
    <div class="wrapper">
      <div class="form signup" style="margin-top: 20px">
        <header>Login</header>
        <form action="{{ route('login-user') }}" method="post">
          @if(Session::has('success'))
          <div class="success-txt">
            {{ Session::get('success') }}
          </div>
          @endif
          @if(Session::has('fail'))
          <div class="error-txt">
            {{ Session::get('fail') }}
          </div>
          @endif
          @csrf
          <div class="field input">
            <label for="username">Username</label>
            @error('username')
            <span class="text-danger"> 
              {{ $message }} 
            </span>
            @enderror
            <input type="text" class="form-control" placeholder="Enter your Username" name="username" value="{{ old('username') }}">
          </div>
          <div class="field input">
            <label for="password">Password</label>
            @error('password')
            <span class="text-danger"> 
              {{ $message }} 
            </span>
            @enderror
            <input type="password" class="form-control" placeholder="Enter your password" name="password" value="{{ old('password') }}">
          </div>
          <div class="link">Don't have an account? <a href="{{ url('registration') }}"> Register now </a></div>
          <div class="actions">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
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


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>