<div class="embla-slider">
    <div class="embla__container-slider">
        @foreach ($sliders as $slider)
            <div class="embla__slide-slider">
                <img class="w-full object-cover" src="{{ url('storage/' . $slider->photo) }}">
            </div>
        @endforeach
    </div>
</div>
