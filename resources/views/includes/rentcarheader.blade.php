<header>
    <div class="default-header">
        <div class="default-header">
            <div class="container">
              <div class="row">
                <div class="col-sm-1 col-md-1">
                  <div class="logo"> <a href="#"><img src="img/logo.gif" alt="image"/></a> </div>
                </div>
                <div class="col-sm-11 col-md-10">
                  <div class="header_info">
                    <div class="header_widgets">
                      <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                      <p class="uppercase_text">Suport Email Kita : </p>
                      <a href="mailto:info@example.com">Adichandra101@gmail.com</a> </div>
                    <div class="header_widgets">
                      <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                      <p class="uppercase_text">Jika ada masalah hub: </p>
                      <a href="tel:61-1234-5678-09">0823-7492-1489</a> </div>

                        <div class="social-follow">
                            <ul>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse"
                    class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="header_wrap">
                <div class="user_login">
                    <ul>
                        <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">

                <!-- <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
            <li><a href="logout.php">Sign Out</a></li> -->

                                <li><a href="#">Profile Settings</a>
                                </li>

                                <li><a href="../myposts/{{Auth::user()->id}}" >My Posts</a></li>

                                <li><a onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" href="{{ route('logout') }}" data-toggle="modal"
                                        data-dismiss="modal">Sign Out</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header_search">
                    <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                    <form action="#" method="get" id="header-search-form">
                        <input type="text" placeholder="Search..." class="form-control">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="../home">Home</a> </li>
                    <li><a href="../about-us">About Us</a></li>
                    <li><a href="../car-listing">Car Listing</a>
                    <li><a href="../contact">Contact Us</a></li>
                    <li><a href="../upload-car">Upload Car</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->

</header>
