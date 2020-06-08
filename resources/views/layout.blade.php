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

    <nav>
        <ul>
            <div class="navbar">
                <li><a href="{{url('/')}}">Home</a></li>

                <div class="dropdown">
                    <button class="dropbtn">Current Listing
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="propertiesonrent.html">Properties on Rent</a>
                        <a href="propertiesonsale.html">Properties on Sale</a>

                    </div>
                </div>

                <li><a href="services.html"><span>Services</span></a></li>
                <li><a href="aboutus.html"><span>About Us</span></a></li>
                <li><a href="{{url('register')}}"><span>Register</span></a></li>
                <li><a href="{{url('login')}}"><span>Login</span></a></li>
                <li class="last"><a href="contact.html"><span>Contact Us</span></a></li>
        </ul>
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
