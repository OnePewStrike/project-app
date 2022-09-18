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
  <!-- Header -->
  <section class="header">
      <a href="#">
        <h1 class="logo"> LIBRARY SYSTEM </h1>
      </a>
  </section>

  <div class="hero">
    <div class="wrapper">
      <div class="form signup" style="margin-top: 20px">
        <header>Login</header>
        <hr>
        <form action="{{ route('login-user') }}" method="post">
          @if(Session::has('success'))
          <div class="success-txt">
            {{ Session::get('success') }}
          </div>
          @endif
          @if(Session::has('fail'))
          <div class="success-txt">
            {{ Session::get('fail') }}
          </div>
          @endif
          @csrf
          <div class="field input">
            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="Enter your Username" name="username" value="{{ old('username') }}">
            @error('username')
            <span class="text-danger"> 
              {{ $message }} 
            </span>
            @enderror
          </div>
          <div class="field input">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password" value="{{ old('password') }}">
            @error('password')
            <span class="text-danger"> 
              {{ $message }} 
            </span>
            @enderror
          </div>
          <div class="link">Don't have an account? <a href="{{ url('registration') }}"> Register now </a></div>
          <div class="actions">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>