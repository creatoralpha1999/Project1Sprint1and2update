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

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('property')}}">Properties <span class="sr-only">(current)</span></a>
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
                @auth
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('loggedin')}}">Profile <span class="sr-only">(current)</span></a>
                </li>
                @endauth
                <li class="nav-item active">
                    <a class="nav-link" href="">Valuation <span class="sr-only">(current)</span></a>
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
        <p class=" pagelinks" font-color: #FFFFFF>Copyright 2020 @FS Sales & Property Management </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Terms And Condition
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Terms and Conditions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Welcome to FS sales and property company terms and conditions, which apply for the use of the FS
                        sales and property
                        Website. By accessing this Website, you agree to be bound by them.
                        Conditions” means these terms and conditions: “Personal Information” means any personal details
                        provided by you via the
                        Website; “User(s)” means (a) user(s) of the Website either collectively or individually, as the
                        context requires;
                        “We/us/our” means FS sales and property company.
                        We will provide access to the Website in accordance with these Conditions.
                         agree not to use the Website (or any part of) for any illegal purpose and agree to use it in
                        accordance with all
                        relevant laws;
                         agree not to upload or transmit through the Website any computer viruses, macro viruses, worms
                        or anything else
                        designed to interfere with, interrupt or disrupt the normal operating procedures of a computer;
                         will not upload or transmit through the Website any material which is defamatory, offensive,
                        or of an obscene or
                        menacing character, or that may cause annoyance, inconvenience or needless anxiety;
                         will not use the Website in a way that may cause the Website to be interrupted, damaged,
                        rendered less efficient or
                        such that the effectiveness or functionality of the Website is in any way impaired;
                         will not use the Website in any manner which violates or infringes the rights of any person,
                        firm or company
                        (including, but not limited to, rights of intellectual property, rights of confidentiality or
                        rights of privacy);
                         Agree that in the event that you have any right, claim or action against any Users arising out
                        of that User’s use of
                        the Website, then you will pursue such right, claim or action independently of and without
                        recourse to us

                         You agree to be fully responsible for (and fully indemnify us against) all claims, liability,
                        damages, losses, costs
                        and expenses, including legal fees, suffered by us and arising out of any breach of the
                        Conditions by you or any other
                        liabilities arising out of your use of the Website, or the use by any other person accessing the
                        Website using your PC
                        or internet access account.

                        Our Rights
                        We reserve the right to:
                         modify or withdraw, temporarily or permanently, the Website (or any part of) with or without
                        notice to you and you
                        confirm that we shall not be liable to you or any third party for any modification to or
                        withdrawal of the Website;
                        and/or
                         Change these Conditions from time to time, and your continued use of the Website (or any part
                        of) following such
                        change shall be deemed to be your acceptance of such change. It is your responsibility to check
                        regularly to determine
                        whether the Conditions have been changed. If you do not agree to any change to the Conditions
                        then you must immediately
                        stop using the Website.


                        Third Party Links
                        In an attempt to provide increased value to our Users, we may provide links to other websites or
                        resources. You
                        acknowledge and agree that we are not responsible for the availability of such external sites or
                        resources, and do not
                        endorse and are not responsible or liable, directly or indirectly, for the privacy practices or
                        the content (including
                        misrepresentative or defamatory content) of such websites, including (without limitation) any
                        advertising, products or
                        other materials or services on or available from such websites or resources, nor for any damage,
                        loss or offence caused
                        or alleged to be caused by, or in connection with, the use of or reliance on any such content,
                        goods or services
                        available on such external sites or resources.
                        Personal Data Information
                         We respect your personal information and undertake to comply with applicable Australian Law
                        legislation from time to
                        time in place.
                         You should be aware that:if we are requested by the police or any regulatory or government
                        authority investigating
                        suspected illegal activities, or upon receipt of a court order, to provide your Personal
                        Information and/or information
                        concerning your activities whilst using the Website we shall do so; and
                         We reserve the right in our reasonable discretion to disclose details of your use of the
                        Website in relation to any,
                        or any threatened, Court Proceedings in connection with your use, or the use of anyone under
                        your control, of the
                        Website whether in connection with the matters set out in these Conditions or otherwise.

                         You acknowledge and agree that all copyright, trademarks and all other intellectual property
                        rights in all material or
                        content supplied as part of the Website shall remain at all times vested in us or our licensors.
                        You are permitted to
                        use this material only as expressly authorized by us.

                         The website is Copyrights sales and property management. All rights reserved
                        Law
                        The Conditions will be exclusively governed by and construed in accordance with the laws of
                        Australia whose Courts will
                        have exclusive jurisdiction in any dispute, save that we have the right, at our sole discretion,
                        to commence and pursue
                        proceedings in alternative jurisdictions.
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <a href="insta.com"><img src="images/aa.png" alt="Insta"></a>
        <a href="facebook.com"><img src="images/bb.png" alt="Facebook"></a>


    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
