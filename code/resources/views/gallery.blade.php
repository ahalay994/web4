@extends('layouts.app')

@section('content')
    <section class="page-gallery">
        <div class="container">
            <h1>Галерея</h1>
            @if (isset($gallery) && count($gallery) > 0)
                <div class="gallery row">
                    @foreach($gallery as $image)
                        <div class="col-lg-4 col-md-6 col-12 item mb-4">
                            <div class="background" style="background-image: url('/{{ \App\Models\Gallery::IMAGE_PATH }}/{{ $image['image'] }}')">
                                <a class="group1 cboxElement" href="/{{ \App\Models\Gallery::IMAGE_PATH }}/{{ $image['image'] }}"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <h3>Изображения отсутствуют</h3>
            @endif
        </div>

    </section>
@endsection


@push('styles')
@endpush
@push('scripts')
    <script src="https://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
    <script>
        $(".group1").colorbox({rel: 'group1', maxWidth: '98%', maxHeight: '98%'});
    </script>
@endpush
