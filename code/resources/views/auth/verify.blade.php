@extends('layouts.app')

@section('content')
<div class="container auth">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Подтверждение своего адресв электронной почты</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            На ваш адрес электронной почты была отправлена ссылка для подтверждения аккаунта.
                        </div>
                    @endif

                        <p>Прежде чем продолжить, пожалуйста, проверьте свою электронную почту на наличие ссылки для подтверждения</p>
                        Если вы не получили письмо,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">нажмите здесь, чтобы запросить ещё раз</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
