<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNavDropdown">

    <ul class="navbar-nav mr-auto">

        @foreach($menu as $url => $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ $url }}">{{ $item }}</a>
            </li>
        @endforeach
    </ul>

    <ul class="navbar-nav">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Войти</a>
                </li>
            @endif

{{--            @if (Route::has('register'))--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                </li>--}}
{{--            @endif--}}
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        Выйти из системы
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>
