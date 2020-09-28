@extends('layouts.index')

@section('content')
@component('components.breadcrumb')
	@slot('title')
		@lang('lang.prod')
	@endslot
	@slot('desc')
		@lang('lang.prod')
	@endslot
@endcomponent
<div class="container-fluid cards">
  <div class="container cards__wrapper">
    @include('layouts.categories')
    <div class="cards__right">
      <div class="carta">
        @foreach($products as $prod)
        <div class="carta__item"><img class="carta__img" src="{{ Voyager::image($prod->image) }}" alt="kuting"/>
          <div class="carta__block">
            <h3 class="carta__avtor">{{ $prod->getTranslatedAttribute('name', \App::getLocale()) }}</h3>
            <p class="cards__cost">{{ $prod->getTranslatedAttribute('price', \App::getLocale()) }}</p><a class="carta__link btn" href="/product/{{ $prod->slug }}">@lang('lang.more')</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection