<nav class="col-md-2 d-none d-md-block bg-secondary sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {!! (Route::is('admin.index') ? 'active' : '') !!}" href="{{ route('admin.index') }}">
                    <span data-feather="home"></span>
                    Главная <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! (Request::url() == 'admin/types/*' ? 'active' : '') !!}" href="{{ route('admin.types.index') }}">
                    <span data-feather="file"></span>
                    Типы питомцев
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! (Route::is('admin.teams.index') ? 'active' : '') !!}" href="{{ route('admin.teams.index') }}">
                    <span data-feather="file"></span>
                    Наши питомцы
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! (Route::is('admin.news.index') ? 'active' : '') !!}" href="{{ route('admin.news.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Новости
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! (Route::is('admin.gallery.index') ? 'active' : '') !!}" href="{{ route('admin.gallery.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Галерея
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! (Route::is('admin.slider.index') ? 'active' : '') !!}" href="{{ route('admin.slider.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Слайдер
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! (Route::is('admin.users.index') ? 'active' : '') !!}" href="{{ route('admin.users.index') }}">
                    <span data-feather="bar-chart-2"></span>
                    Пользователи
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! (Route::is('admin.menu.index') ? 'active' : '') !!}" href="{{ route('admin.menu.index') }}">
                    <span data-feather="bar-chart-2"></span>
                    Меню
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! (Route::is('admin.settings.index') ? 'active' : '') !!}" href="{{ route('admin.settings.index') }}">
                    <span data-feather="layers"></span>
                    Настройки
                </a>
            </li>
        </ul>

        {{--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>--}}
    </div>
</nav>
