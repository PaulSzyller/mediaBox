<!-- Sidebar navigation -->
<ul id="slide-out" class="side-nav fixed personal-side-nav">

    <!-- Logo -->
    <div class="logo-wrapper waves-light">
        <a href="#">
            <img src="" class="img-circle">
        </a>
    </div>
    <!--/. Logo -->

    <!--About-->
    <div class="about">
        <dl class="dl-horizontal row">
            <dt class="col-sm-4">Name</dt>
            <dd class="col-sm-8">Kurt King</dd>
            <dt class="col-sm-4">Attr</dt>
            <dd class="col-sm-8">Attr</dd>
            <dt class="col-sm-4">Attr</dt>
            <dd class="col-sm-8">Attr</dd>
        </dl>
    </div>
    <!--/.About-->

    <!--Social
    <ul class="social">
        <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
        <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
        <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
        <li><a class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a></li>
    </ul>
    .Social-->

    <!-- Side navigation links -->
    <ul class="collapsible collapsible-accordion">
        <li><a href="{{ URL::to('dashboard') }}" class="waves-effect">Dashboard</a></li>
        <li><a class="collapsible-header waves-effect">Libraries</a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#" class="waves-effect">Books</a></li>
                    <li><a href="{{ URL::to('movie') }}" class="waves-effect">Movies</a></li>
                    <li><a href="#" class="waves-effect">Video Games</a></li>
                    <li><a href="{{ URL::to('vinyl') }}" class="waves-effect">Vinyl</a></li>
                </ul>
            </div>
        </li>
    </ul>
    <!--/. Side navigation links -->
</ul>
<!--/. Sidebar navigation -->

<!-- Navbar-->
<nav class="navbar navbar-fixed-top navbar-dark bg-primary scrolling-navbar double-nav">

    <!-- SideNav slide-out button -->
    <div class="pull-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
    </div>

    <!-- Breadcrumb-->
    <div class="breadcrumb-dn m-l-1">
        <p>MediaBox</p>
    </div>

    <!--Navigation icons-->
    <ul class="nav-icons">
        <li><a href="#" class=""><i class="fa fa-comments-o"></i><br><span>Support</span></a></li>
        <li><a href="#" class=""><i class="fa fa-user"></i><br><span>Account</span></a></li>
        <li><a href="#" class="" data-toggle="modal" data-target="#contactForm"><i class="fa fa-envelope-o"></i><br><span>Contact</span></a></li>
        <li><a href="#" class=""><i class="fa fa-sign-out"></i><br><span>LogOut</span></a></li>
    </ul>
</nav>
<!-- /.Navbar-->
