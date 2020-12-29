<div class="slider">
    @foreach($slider as $slide)
        <div class="slide">
            <div class="bg-image" style="background-image: url('/{{ \App\Models\Slider::IMAGE_PATH }}/{{ $slide['image'] }}')"></div>
            <img class="front" src="/{{ \App\Models\Slider::IMAGE_PATH }}/{{ $slide['image'] }}" />
        </div>
    @endforeach
</div>

@push('scripts')

    <script>
        $('.slider').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
@endpush
