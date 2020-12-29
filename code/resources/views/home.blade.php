@extends('layouts.app')

@section('content')
    @include('components.slider')

    <section class="team bg-white">
        <div class="container">
            <h2><a href="{{ route('animals') }}">Наши питомцы</a></h2>
            <div class="team-slider row">
                @foreach($teams as $team)
                    <div class="team-item">
                        <div class="card">
                            <a href="{{ route('animals.item', ['id' => $team['id']]) }}" class="card-img-top team-img {{ (isset($team['is_home']) && $team['is_home'] == 1) ? 'is-home' : ''  }}"
                               style="background-image: url('/{{ \App\Models\Team::IMAGE_PATH }}/{{ $team['image'] }}')"></a>
                            <div class="card-body">
                                <div class="card-text">
                                    <h3 class="card-title team-name"><a href="#">{{ $team['name'] }}</a></h3>
                                    <div class="card-text team-description">{!! $team['description'] !!}</div>
                                </div>
                                <a href="{{ route('animals.item', ['id' => $team['id']]) }}" class="btn btn-dark team-more">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="news bg-light">
        <div class="container">
            <h2><a href="{{ route('news') }}">Последние новости</a></h2>
            <div class="team-slider row">
                @foreach($news as $item)
                    <div class="team-item">
                        <div class="card">
                            <a href="{{ route('news', ['id' => $item['id']]) }}" class="card-img-top team-img"
                               style="background-image: url('/{{ \App\Models\News::IMAGE_PATH }}/{{ $item['image'] }}')"></a>
                            <div class="card-body">
                                <div class="card-text">
                                    <h3 class="card-title team-name"><a href="{{ route('news', ['id' => $item['id']]) }}">{{ $item['title'] }}</a></h3>
                                    <p class="date">{{ date('d.m.Y H:i', strtotime($item['published_at'])) }}</p>
                                    <div class="card-text team-description">{!! $item['short_description'] !!}</div>
                                </div>
                                <a href="{{ route('news', ['id' => $item['id']]) }}" class="btn btn-dark team-more">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $('.team-slider').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            adaptiveHeight: true,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1139,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.news-slider').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            adaptiveHeight: true,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
@endpush
