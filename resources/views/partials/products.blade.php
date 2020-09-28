
 <div class="container-fluid good">
  <div class="container good__wrapper">
    <div class="good__item item1">
      <h3 class="good__head">@lang('lang.prod')</h3>
      <p class="good__text">@lang('lang.nashey') </p>
    </div>
    @foreach($images as $image)
    <div class="good__item item{{ $loop->iteration +1 }}"><img class="good__img" src="{{ Voyager::image($image->image) }}" alt="kuting"/>
      <h2 class="good__absolute">{{ $image->getTranslatedAttribute('title', \App::getLocale())}}</h2>
    </div>
   @endforeach
  </div>
</div>

