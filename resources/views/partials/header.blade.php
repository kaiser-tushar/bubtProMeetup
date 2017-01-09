<!-- Navigation -->
<style>
.navbar-custom .navbar-nav li.active a, .navbar-custom .navbar-nav li.active a:active, .navbar-custom .navbar-nav li.active a:focus, .navbar-custom .navbar-nav li.active a:hover {
    color: #fff;
    background: #ddab46;
}
 .navbar-custom .navbar-nav li a:hover {
    color: #ddab46;
    
}
.navbar-custom, .dropdown, .dropdown .open,.dropdown-menu {
    background: #0f0f19;
}
</style>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top" id="app_title">BUBT IT Professionals Meetup 2017</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    @if (Auth::guest())
                    <li class="page-scroll">
                        <a href="{{url('register')}}">Register</a>
                    </li>
                    @endif
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                   @if (Auth::guest())
                    <li class="">
                        <a href="{{ url('/login') }}">Login</a>
                    </li>
                    @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" style="background: black">
                                 <li><a href="{{ url('/profile') }}">Profile</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
