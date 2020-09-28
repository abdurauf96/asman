@extends('layouts.index')

@section('content')
@component('components.breadcrumb')
	@slot('title')
		@lang('page.novosti')
	@endslot
	@slot('desc')
		{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}
	@endslot
@endcomponent

<div class="container-fluid newcard">
  <div class="container newcard__wrapper">
    <div class="newcard__left">
      <h4 class="newcard__date">{{ $post->created_at->format('d M, Y') }} </h4>
      <p class="newcard__text">{{ $post->getTranslatedAttribute('body', \App::getLocale()) }}</p>
      <img class="newcard__img" src="{{ Voyager::image($post->image) }}" alt="kuitng"/><a class="newcard__nazad" href="{{ url()->previous() }}">Вернуться назад</a>
    </div>
    <div class="newcard__right">
    @foreach($posts as $post)
    <a href="/post/{{ $post->slug }}">
      <div class="news__item">
        <h4 class="news__item--absolute">{{ $post->created_at->format('d M, Y') }}</h4>
        <div class="news__item--img"><img src="{{ Voyager::image($post->image) }}" alt="kuting"/></div>
        <h3 class="news__item--avtor">{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}</h3>
      </div>
    </a>
    @endforeach
      <a class="newcard__vse" href="/posts">@lang('lang.vse_novosti')</a>
    </div>
  </div>
</div>

@endsection