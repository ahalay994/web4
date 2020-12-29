@extends('layouts.app')

@section('content')
    <section class="page-team-item">
        <div class="container">
            <h1>{{ $news['title'] }}</h1>

            <div class="row">
                <div class="col-md-5 col-12">
                    <img src="/{{ \App\Models\News::IMAGE_PATH }}/{{ $news['image'] }}" alt="{{ $news['title'] }}" title="{{ $news['title'] }}">
                </div>
                <div class="col-12 description">
                    {!! $news['description'] !!}
                </div>
            </div>
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
