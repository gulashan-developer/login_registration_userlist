<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel login registration userlist</title>
    <style>
       *{
   font-family: "Merriweather Sans", sans-serif;
}
body{
    background-repeat: no-repeat;
    background-image: url({{ asset('images/bg.jpg') }});
}
   #form{
      color: white;
      background-color: #009EDF;
      border-radius: 5px;
      
      width: 400px;
      padding: 40px;
      margin: auto;
      margin-top: 5%;   
      
      -webkit-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
   }
   input{
    width: 26rem;
    -webkit-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
   }
   table{
    color: white;
      background-color: gray;
   }
   tr:hover {background-color: rgb(87, 208, 53);}
   @media screen and (max-width: 768px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ URL('/') }}">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
    </nav>    

    <div class="container">
        @yield('content')
    </div>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>