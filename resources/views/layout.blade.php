<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Project</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<body>
    <header>
        <div id="logo">
            <img src="images/logo.png" alt="Logo" />
        </div>
        <br>
        <div class="txt">Four Square Sales & Property Management </div>
        <div class="discription"> </div>

    </header>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}" />

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="{{url('properties')}}">Properties <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="aboutus.html">About Us <span class="sr-only">(current)</span></a>
      </li>
	  
	  <li class="nav-item active">
        <a class="nav-link" href="{{url('register')}}">Register <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="{{url('login')}}">Login <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="contact.html">Contact Us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <br>

    @if(session()->has('flash_success'))
    {{session()->get('flash_success')}}
    @endif
    @yield('main_content')
    <footer>
        <p class="pagelinks" font-color: #FFFFFF>Copyright 2020 @FS Sales & Property Management </p>
        <a href="tandc.html">Terms and Conditions </a>
        <a href="insta.com"><img src="images/aa.png" alt="Insta"></a>
        <a href="facebook.com"><img src="images/bb.png" alt="Facebook"></a>


    </footer>

</body>

</html>
