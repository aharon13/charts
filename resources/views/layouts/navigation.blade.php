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
            <li class="{{ isActiveRoute('') }} ">
                <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">Create Chart</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('/') }}">My Charts</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">Tutorials</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </li>
            <li class="{{ isActiveRoute('createchart') }}">
                <a href="{{ url('/createchart') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Create Chart</span> </a>
            </li>
        </ul>

    </div>
</nav>
