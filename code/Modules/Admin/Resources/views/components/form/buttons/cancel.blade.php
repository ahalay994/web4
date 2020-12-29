@if (isset($params))
    <a class="btn btn-default" href="{{ is_array($route)? route($route[0]) : route($route, $params) }}">{{ isset($title)?: 'Отмена' }}</a>
@else
    <a class="btn btn-default" href="{{ is_array($route)? route($route[0]) : route($route) }}">{{ isset($title)?: 'Отмена' }}</a>
@endif
