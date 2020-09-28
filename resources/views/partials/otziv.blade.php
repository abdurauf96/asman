

  <div class="container">
    <h3 class="otziv--head">@lang('lang.otzivi')</h3>
  </div>
  <div class="container">
    <div class="slider__otziv">  
      @foreach($comments as $com)
      <div class="slider__item">
        <h3 class="slider__item--head"> {{ $com->username }}</h3>
        <p class="slider__item--text">{{ $com->body }}</p>
      </div>
      @endforeach
    </div>
    <div class="otziv__link"><a class="getOtziv otziv__link--button" href="#">@lang('lang.ostavit_otziv')</a></div>
  </div>
