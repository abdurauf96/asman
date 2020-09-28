@extends('layouts.index')

@section('content')
@component('components.breadcrumb')
  @slot('title')
    Поиск
  @endslot
  @slot('desc')
    Результаты поиска по вашему запросу
  @endslot
@endcomponent
<div class="container-fluid cards">
  <div class="container cards__wrapper">
    @include('layouts.categories')
    <div class="cards__right">
      @if($products->count()>0)
      <div class="carta">
        @foreach($products as $prod)
        <div class="carta__item"><img class="carta__img" src="{{ Voyager::image($prod->image) }}" alt="kuting"/>
          <div class="carta__block">
            <h3 class="carta__avtor">{{ $prod->getTranslatedAttribute('name', \App::getLocale()) }}</h3>
            <p class="cards__cost">{{ $prod->getTranslatedAttribute('price', \App::getLocale()) }}</p><a class="carta__link btn" href="/product/{{ $prod->slug }}">Подробнее</a>
          </div>
        </div>
        @endforeach
      </div>
      @else
      
        <h3>Для <i style="color:red">{{ $data }}</i> результатов ничего не найдено</h3>
      
      @endif
      
    </div>
  </div>
</div>
@endsection