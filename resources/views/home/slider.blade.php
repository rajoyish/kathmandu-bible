<div class="embla">
  <div class="embla__container">
    @foreach($sliders as $slider)
      <div class="embla__slide">
        <img class="w-full object-cover" src="{{ url('storage/'.$slider->photo) }}">
      </div>
    @endforeach
  </div>
</div>

{{--@push('embla-script')--}}
{{--  <script>--}}

{{--  </script>--}}
{{--@endpush--}}
