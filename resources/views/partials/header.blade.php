<nav class="navbar navbar-default navbar-inverse" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home.index') }}">My Game List</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="{{ Route::currentRouteNamed('home.index') ? 'active' : '' }}"><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="#">Games</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if(!Auth::check())
                <li class="{{ Route::currentRouteNamed('login') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
                <li class="{{ Route::currentRouteNamed('register') ? 'active' : '' }}"><a href="{{ route('register') }}">Register</a></li>
            @else
                <li><a href="{{ route('favorites.index') }}">My games</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>