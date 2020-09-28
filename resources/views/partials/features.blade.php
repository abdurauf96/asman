

  <div class="container">
    <h3 class="service--head">@lang('lang.preimush') <span>ASMAN SILICAT TRAVERTIN</span></h3>
    <h2 class="service--soya">@lang('lang.pochemu')</h2>
  </div>
  <div class="container service__wrapper">
    @foreach($features as $fea)
    <div class="service__item wow bounceInUp">
      <h2 class="service__item--absolute">0{{$loop->iteration }}</h2>
      <h3 class="service__item--head">{{ $fea->getTranslatedAttribute('title', \App::getLocale()) }}</h3>
      <p class="service__item--text">{{ $fea->getTranslatedAttribute('desc', \App::getLocale()) }}  </p>
    </div>
    @endforeach
  </div>

