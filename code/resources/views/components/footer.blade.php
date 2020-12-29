<footer class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-12 text-center text-sm-left">
                <h3>Меню</h3>
                <ul class="footer-menu">
                    @foreach ($menu as $url => $item)
                        <li>
                            <a href="{{ $url }}">{{ $item }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-12 text-center text-sm-left">
                <h3>Контакты</h3>
                <p>{{ $settings['phone']['name'] }}: <a href="tel:+{{ preg_replace('/[^0-9]/', '', $settings['phone']['value']) }}">{{ $settings['phone']['value'] }}</a></p>
                <p>{{ $settings['email']['name'] }}: <a href="mailto:{{ $settings['email']['value'] }}">{{ $settings['email']['value'] }}</a></p>
                <p>{{ $settings['address']['name'] }}: {{ $settings['address']['value'] }}</p>
            </div>
            <div class="col-lg-6 col-12 text-center text-sm-left">
                <iframe id="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae3b547a49321964ce56614d59f662142db2bc770a18872a25a22d5985e9530f2&amp;source=constructor" width="475" height="240" frameborder="0"></iframe>
            </div>
            <div class="col-12">
                <p class="text-center">Все права защищены ©{{ date('Y', time()) }}</p>
            </div>
        </div>
    </div>
</footer>
