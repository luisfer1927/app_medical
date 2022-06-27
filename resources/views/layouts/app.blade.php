
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - App Medical</title>

    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    
    

    </head>

  <body class="bg-success bg-opacity-50">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-around">
    <div>
      
       <a class="navbar-brand text-left" href="#">App Medical
        <img  class="mt-1 mb-1" src="https://svgsilh.com/svg/30591.svg" height="52" alt="">
       </a>
    </div>
   
    
    <div class="flex-grow-0 justify-content-end" id="navbarSupportedContent">
     @if(auth()->check())
        <ul class="navbar-nav gap-2">
            <li class="nav-item active">
                <p class="text-success">Welcome <b>{{ auth()->user()->name }}</b></p>
            </li>
            <li class="nav-item active">
                <a class="btn btn-warning" href="{{ route('login.destroy') }}">Log Out</a>
            </li> 
        </ul>
      @else
         <ul class="navbar-nav gap-2">
            <li class="nav-item active">
                <a class="btn btn-success" role="button" data-bs-toggle="submit"" href="{{ route('login.index') }}">Log In</a>
            </li>
            <li class="nav-item active">
                <a class="btn btn-warning" href="{{ route('registro.index') }}">Register</a>
            </li> 
        </ul>     
      @endif
    </div>
</nav>
    

   
  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 @yield('js')

  </body>

</html>



 