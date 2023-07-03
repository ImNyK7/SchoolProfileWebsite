@include('partials.navbar')
    
    <div class="container">
        @yield('container')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <link rel="stylesheet" href="css/login.css">

  <title>Login</title>
</head>

<body>
  <div class="row justify-content-center">
    <div class="col-md-5">

      @if(session()->has('loginError'))
        <div class = "alert alert-danger alert-dismissable fade show" role="alert">
          {{ session('loginError') }}
          <button type = "button" clas="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <main class="form-signing">
        <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
        <form action="/login" method="post">
          @csrf
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
            <div class = "invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
      </main>
    </div>
  </div>
</body>



</html>