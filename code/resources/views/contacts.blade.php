@extends('layouts.app')

@section('content')
    <section class="page-contacts">
            <div class="container">
                <h1>О нас</h1>

                <div class="admin row">
                    <img class="admin-img col" src="../images/admin.png" alt="">
                    <div class="admin-desc col">
                        <h3>Наш директор</h3>
                        <b>Мистер Джинглз</b>
                    </div>
                </div>

                <div class="contact row">
                    <div class="col-12">
                        <h3>Контакты</h3>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6 col-12 d-flex flex-column mt-2">
                        <p>{{ $settings['phone']['name'] }}: <b><a href="tel:+{{ preg_replace('/[^0-9]/', '', $settings['phone']['value']) }}">{{ $settings['phone']['value'] }}</a></b></p>
                        <p>{{ $settings['email']['name'] }}: <b><a href="mailto:{{ $settings['email']['value'] }}">{{ $settings['email']['value'] }}</a></b></p>
                        <p>{{ $settings['address']['name'] }}: <b>{{ $settings['address']['value'] }}</b></p>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6 col-12">
                        <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae3b547a49321964ce56614d59f662142db2bc770a18872a25a22d5985e9530f2&amp;source=constructor" frameborder="0"></iframe>
                    </div>
                </div>

                @if (session()->has('msg.success'))
                    <div class="alert bg-success alert-styled-left">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only"></span></button>
                        {{ session('msg.success') }}
                    </div>
                @endif
                <form action="{{ route('contacts') }}" method="post">
                    <h3>Есть вопросы или предложения? Напишите нам</h3>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-md-6 col-12">
                            <label for="name">Имя*</label>
                            <input name="name" type="text" class="form-control" id="name"  required placeholder="Введите имя">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="email">E-mail*</label>
                            <input name="email" type="email" class="form-control" id="email" required placeholder="Введите e-mail">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="phone">Телефон</label>
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Введите номер телефона">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="place">Где вы узнали про нас?</label>
                            <input name="place" type="text" class="form-control" id="place" placeholder="Где вы узнали про нас?">
                        </div>
                        <div class="form-group col-12">
                            <label for="message">Сообщение*</label>
                            <textarea name="message" type="message" class="form-control" id="message" required placeholder="Напишите сообщение" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Отправить сообщение</button>
                </form>
            </div>
    </section>
@endsection


@push('styles')
@endpush
@push('scripts')
    <script src="https://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
    <script>
        $(".group1").colorbox({rel:'group1', maxWidth:'98%', maxHeight:'98%'});
    </script>
@endpush
