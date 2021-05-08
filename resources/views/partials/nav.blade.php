<nav class="navbar navbar-light navbar-expand-md bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item"> <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a></li>
                <li class="nav-item"> <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a></li>
                <li class="nav-item"> <a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Projects')</a></li>
                <li class="nav-item"> <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
                @auth
                    <li class="nav-item"> <a class="btn btn-danger ml-4" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('Logout')</a></li>
                @else
                    <li class="nav-item"> <a class="btn btn-outline-info ml-4" href="{{ route('login') }}">@lang('Login')</a></li>
                    <li class="nav-item"> <a class="btn btn-outline-success ml-4" href="{{ route('register') }}">@lang('Registrate')</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<form class="d-none" id="logout-form" method="POST" action="{{ route('logout') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
</form>
