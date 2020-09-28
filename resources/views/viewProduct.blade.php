@extends('layouts.index')

@section('content')
@component('components.breadcrumb')
	@slot('title')
		@lang('lang.prod')
	@endslot
	@slot('desc')
		{{ $product->category->getTranslatedAttribute('name', \App::getLocale()) }}
	@endslot
@endcomponent

<div class="container-fluid cards">
  <div class="container cards__wrapper">
    @include('layouts.categories')
    <div class="cards__right">
      <div class="cards__block"><img class="cards--img" src="{{ Voyager::image($product->image) }}" alt="kuting"/>
        <div class="cards__block--item">
          <h3 class="cards__head">{{ $product->getTranslatedAttribute('name', \App::getLocale()) }}</h3>
          <p class="cards__cost">{{ $product->getTranslatedAttribute('price', \App::getLocale()) }}</p>
          <ul class="cards__ul">
            <li class="cards__li">{{ $product->getTranslatedAttribute('description', \App::getLocale()) }}</li>
          </ul>
        </div>
      </div>
      <p class="cards__text">{{ $product->getTranslatedAttribute('body', \App::getLocale()) }}</p>
    </div>
  </div>
</div>

@endsection