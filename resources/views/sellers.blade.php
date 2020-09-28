@extends('layouts.index')

@section('content')
@component('components.breadcrumb')
	@slot('title')
		@lang('page.dileram')
	@endslot
	@slot('desc')
		@lang('page.dileram')
	@endslot
@endcomponent

<div class="container-fluid uzbmap">
  <div class="container uzbmap__wrapper">
    <div class="uzbmap__left">
     @include('layouts.karta')
     <p class="uzbmap__left--text ">Постоянное обновление технологии, выпуск действительно хорошей продукции. Чтобы внедриться на уже сформировавшийся рынок, нужно делать все на 30 % лучше и на 30 % дешевле, как минимум. Мы следуем этому закону!</p>
    </div>
    <div class="uzbmap__right" id="resDiller">
      <div class="uzbmap__item">
        <h3 class="uzbmap__item--head uzbmap__item--active">Ташкент</h3>
        <div class="uzbmap__block">
          <p class="uzbmap__block--text">@lang('page.diler'): <span class="uzbmap__block--link">Холиков Маъруфхон</span></p>
          <p class="uzbmap__block--text">Телефон.: <a class="uzbmap__block--link" href="tel: +998930005"> +99893 640 00 05</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid service">
 	@include('partials.features')
</div>
  @component('components.forma')
      @slot('title')
         @lang('page.kak_stat') 
      @endslot
      @slot('desc')
          @lang('page.kak_stat_sub') {{ setting('site.email') }}
      @endslot
       
  @endcomponent

<div class="container-fluid rabotat"> 
  <div class="container">
    <h3 class="rabotat--head">@lang('page.kak_eto') </h3>
  </div>
  <div class="container rabotat__wrapper">
    <div class="rabotat__item wow bounceInUp">
      <h4 class="rabotat__item--head">01</h4><img class="rabotat__item--img" src="img/karandash.png" alt="kuting"/>
      <h2 class="rabotat__item--avtor">@lang('page.title1') </h2>
      <p class="rabotat__item--text">@lang('page.body1') </p>
    </div>
    <div class="rabotat__item wow bounceInUp">
      <h4 class="rabotat__item--head">02</h4><img class="rabotat__item--img" src="img/lyudi.png" alt="kuting"/>
      <h2 class="rabotat__item--avtor">@lang('page.title2') </h2>
      <p class="rabotat__item--text">@lang('page.body2') </p>
    </div>
    <div class="rabotat__item wow bounceInUp">
      <h4 class="rabotat__item--head">03</h4><img class="rabotat__item--img" src="img/pismo.png" alt="kuting"/>
      <h2 class="rabotat__item--avtor">@lang('page.title3') </h2>
      <p class="rabotat__item--text">@lang('page.body3') </p>
    </div>
    <div class="rabotat__item wow bounceInUp">
      <h4 class="rabotat__item--head">04</h4><img class="rabotat__item--img" src="img/nastroyka.png" alt="kuting"/>
      <h2 class="rabotat__item--avtor">@lang('page.title4') </h2>
      <p class="rabotat__item--text">@lang('page.body4') </p>
    </div>
  </div>
</div>
<div class="container-fluid zachem">
  <div class="container zachem__wrapper">
    <div class="zachem__left">
      <h3 class="zachem--head">@lang('page.kak_stat2')</h3>
      
      <ul class="zachem__list">
        <li class="zachem__item">@lang('page.one') </li>
        <li class="zachem__item">@lang('page.two') </li>
        <li class="zachem__item">@lang('page.three') </li>
        <li class="zachem__item">@lang('page.four') </li>
        <li class="zachem__item">@lang('page.five') </li>
      </ul>
    </div>
    <div class="zachem__right">
      <h3 class="zachem--head">@lang('page.zachem')</h3>
      <div class="zachem__block">
        <p class="zachem--text">@lang('page.cebec') </p>
      </div>
      <div class="zachem__block"> 
        <h3 class="zachem--head">@lang('page.kak_stat') Какую конечную задачу будет решать ваш клиент с помощью <span>нашей продукции?</span></h3>
        <p class="zachem--text">@lang('page.kogda') <a href="#">ASMAN SILICAT TRAVERTIN .</a></p>
      </div>
    </div>
  </div>
</div>
@endsection