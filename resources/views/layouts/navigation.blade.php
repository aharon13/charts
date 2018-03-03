<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">
                                    @if (Auth::guest())
                                        <a href="{{ route('login') }}">Login</a>
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif
                                </strong>
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    CH
                </div>
            </li>
           
            <li class="{{ isActiveRoute('welcome') }}">
                <a href="{{ url('/welcome') }}"><i class="fas fa-chart-pie"></i> <span class="nav-label">My Charts Gallery</span> </a>
            </li>
            <li class="{{ isActiveRoute('createchart') }}">
                <a href="{{ url('/createchart') }}"><i class="fas fa-pencil-alt"></i> <span class="nav-label">Create Thing Chart</span> </a>
            </li>
            <li class="{{ isActiveRoute('t') }}">
                <a href="{{ url('/createchart') }}"><i class="fas fa-book"></i> <span class="nav-label">Tutorials</span> </a>
            </li>
            <li class="{{ isActiveRoute('pu') }}">
                <a href="{{ url('/createchart') }}"><i class="fas fa-images"></i> <span class="nav-label">Public Gallery</span> </a>
            </li>
            <li class="{{ isActiveRoute('pr') }}">
                <a href="{{ url('/createchart') }}"><i class="fas fa-dollar-sign"></i> <span class="nav-label">Pricing and Plans</span> </a>
            </li>
            <li class="{{ isActiveRoute('s') }}">
                <a href="{{ url('/createchart') }}"><i class="fas fa-cog"></i> <span class="nav-label">Settings</span> </a>
            </li>
            <li class="{{ isActiveRoute('p') }}">
                <a href="{{ url('/createchart') }}"><i class="fas fa-user"></i> <span class="nav-label">Profile</span> </a>
            </li>
            <li class="{{ isActiveRoute('l') }}">
                <a href="{{ url('/createchart') }}"><i class="fas fa-sign-out-alt"></i> <span class="nav-label">LOGOUT</span> </a>
            </li>
        </ul>

    </div>
</nav>
