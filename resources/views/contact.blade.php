@extends('layouts.index')

@section('content')
@component('components.breadcrumb')
	@slot('title')
		Контакты
	@endslot
	@slot('desc')
		Контакты
	@endslot
@endcomponent
<div class="container-fluid kontakt">
  <div class="container kontakt__wrapper">
    <div class="kontakt__left">
      <p class="kontakt__left--text">@lang('page.contact_title')</p>
      <p class="kontakt__left--text">@lang('page.contact_desc')</p>
      
    </div>
    <div class="kontakt__right">
      <div class="kontakt__item"><img class="kontakt__item--img" src="img/call.png"/><a class="kontakt__item--link" href="#">Узбекистан, г. Ташкент,ул.Садыка Азимова 68</a></div>
      <div class="kontakt__item"><img class="kontakt__item--img" src="img/map.png"/>
        <div class="link__block"><a class="kontakt__item--link" href="tel:+998933732471">+998 (93) <span>373-24-71</span></a><a class="kontakt__item--link" href="tel:+998933732471">+998 (93) <span>373-24-71</span></a></div>
      </div>
      <div class="kontakt__item"><img class="kontakt__item--img" src="img/pismo__icon.png"/><a class="kontakt__item--link" href="mailto: info@example.uz">{{ setting('site.email') }}</a></div>
    </div>
  </div>
</div>
<div class="container-fluid diler">
  <div class="container diler__wrapper">
    <h3 class="diler__head">@lang('page.dileri') </h3><a class="diler__link" href="#">@lang('lang.stat')</a>
  </div>
  <div class="container diler__item">
    @foreach($dillers as $dil)
    <div class="uzbmap__item">
      <h3 class="uzbmap__item--head uzbmap__item--active">{{ $dil->getTranslatedAttribute('name', \App::getLocale()) }}</h3>
      <div class="uzbmap__block">
        <p class="uzbmap__block--text">@lang('page.diler'): <span class="uzbmap__block--link">{{ $dil->diler_name }}</span></p>
        <p class="uzbmap__block--text">Телeфон.: <a class="uzbmap__block--link" href="tel: {{ $dil->phone}}"> {{ $dil->phone }}</a></p>
      </div>
    </div>
    @endforeach
  </div>
</div>
<div class="container-fluid mapael">
  <div class="container">
    <h3 class="mapael--head">@lang('lang.mejdu')</h3>
  </div>
  <div class="container map__wrap">
    <div class="map"></div>
  </div>
</div>
@component('components.forma')
    @slot('title')
        @lang('page.ostalis')
    @endslot
    @slot('desc')
        @lang('page.nejdite')
    @endslot
   
@endcomponent 

@endsection