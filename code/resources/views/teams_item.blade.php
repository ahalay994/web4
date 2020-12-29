@extends('layouts.app')

@section('content')
    <section class="page-team-item">
        <div class="container">
            <h1>{{ $team['name'] }}</h1>

            <div class="row">
                <div class="col-md-5 col-12">
                    <img src="/{{ \App\Models\Team::IMAGE_PATH }}/{{ $team['image'] }}" alt="{{ $team['name'] }}" title="{{ $team['name'] }}">
                </div>
                <div class="col-md-7 col-12">
                    <h3>Описание</h3>
                    <p>
                        <span>Тип: </span>
                        <span>{{ \App\Models\Type::getOptions()[$team['type_id']] }}</span>
                    </p>
                    <p>
                        <span>Возраст: </span>
                        <span>{{ $team['old'] }}</span>
                    </p>
                    <p>
                        <span>Стерелизация/кастрация: </span>
                        <span>{{ $team['sterilization_castration'] == 1 ? 'Да' : 'Нет' }}</span>
                    </p>
                    <p>
                        <span>Всё ещё можно забрать: </span>
                        <span>{{ $team['is_home'] == 0 ? 'Да' : 'Нет' }}</span>
                    </p>
                </div>
                <div class="col-12">
                    {!! $team['description'] !!}
                </div>
            </div>
        </div>

        @if (isset($gallery) && count($gallery) > 0)
            <div class="bg-white">
                <div class="container">
                    <h3>Галерея</h3>
                    <div class="gallery row">
                        @foreach($gallery as $image)
                            <div class="col-lg-4 col-md-6 col-12 item mb-4">
                                <div class="background" style="background-image: url('/{{ \App\Models\TeamGallery::IMAGE_PATH }}/{{ $image['image'] }}')">
                                    <a class="group1 cboxElement" href="/{{ \App\Models\TeamGallery::IMAGE_PATH }}/{{ $image['image'] }}"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

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
