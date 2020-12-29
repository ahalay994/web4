@extends('layouts.app')

@section('content')
    <section class="team">
        <div class="container">
            <h1>Новости</h1>
            <div class="team-slider row">
                @foreach($news as $item)
                    <div class="team-item col-xl-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <a href="{{ route('news.item', ['id' => $item['id']]) }}" class="card-img-top team-img"
                               style="background-image: url('/{{ \App\Models\News::IMAGE_PATH }}/{{ $item['image'] }}')"></a>
                            <div class="card-body">
                                <div class="card-text">
                                    <h3 class="card-title team-name"><a href="{{ route('news.item', ['id' => $item['id']]) }}">{{ $item['name'] }}</a></h3>
                                    <div class="card-text team-description">{!! $item['short_description'] !!}</div>
                                </div>
                                <a href="{{ route('news.item', ['id' => $item['id']]) }}" class="btn btn-dark team-more">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
