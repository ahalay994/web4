@extends('layouts.app')

@section('content')
    <section class="team">
        <div class="container">
            <h1>Наши питомцы</h1>
            <div class="team-slider row">
                @foreach($teams as $team)
                    <div class="team-item col-xl-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <a href="{{ route('animals.item', ['id' => $team['id']]) }}" class="card-img-top team-img {{ (isset($team['is_home']) && $team['is_home'] == 1) ? 'is-home' : ''  }}"
                               style="background-image: url('/{{ \App\Models\Team::IMAGE_PATH }}/{{ $team['image'] }}')"></a>
                            <div class="card-body">
                                <div class="card-text">
                                    <h3 class="card-title team-name"><a href="{{ route('animals.item', ['id' => $team['id']]) }}">{{ $team['name'] }}</a></h3>
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
@endsection
