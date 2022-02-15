<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Amazing E-Book</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-dark ">
        <div class="container">
            <ul class="nav navbar-nav mx-auto">
              <li class="nav-item"><a class="nav-link" href="#"><h2 style="color: white">Amazing E-Book</h2></a></li>
            </ul>
            <ul class="nav navbar-nav">
              <li class="nav-item">
                @if(!Auth::check())
                  <a href="/signup" class="btn btn-warning pl-5">Sign Up</a>
                  <a href="/login" class="btn btn-warning ms-3" >Log In</a>
                @else
                <a href="/logout" class="btn btn-warning ms-3" >Log Out</a>
                @endif
              </li>
              
            </ul>
        </div>
        @auth
          @if(Auth::User()->role_id == "1")
            <div class="container-fluid justify-content-center bg-warning p-1">
              <a class="nav-link active" aria-current="page" href="/home" style="colour">Home</a>
              <a class="nav-link active" aria-current="page" href="/" style="colour">Cart</a>
              <a class="nav-link active" aria-current="page" href="/profile" style="colour">Profile</a>
            </div>
          @elseif(Auth::User()->role_id == "2")
          <div class="container-fluid justify-content-center bg-warning p-1">
            <a class="nav-link active" aria-current="page" href="/home" style="colour">Home</a>
            <a class="nav-link active" aria-current="page" href="/" style="colour">Cart</a>
            <a class="nav-link active" aria-current="page" href="/profile" style="colour">Profile</a>
            <a class="nav-link active" aria-current="page" href="/" style="colour">Account Maintenance</a>
          </div>
          @endif
        @endauth
      </nav>

    @yield('content')
    

    <footer class="page-footer bg-dark text-white fixed-bottom mt-3">
        <div class="footer-copyright text-center py-2">© Amazing E-Book 2022
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>