@extends('layouts.index')

@section('content')
@component('components.breadcrumb')
	@slot('title')
		@lang('page.novosti')
	@endslot
	@slot('desc')
		@lang('page.novosti')
	@endslot
@endcomponent
 <div class="container-fluid filter">
  <div class="container filter__wrapper">
    <a class="filter__wrapper--item  sortPost" data-key="news" href="#">@lang('page.novosti')</a>
    <a class="filter__wrapper--item sortPost" data-key="post" href="#">@lang('page.stati')</a>
    <a class="filter__wrapper--item sortPost" data-key="aksiya" href="#">@lang('page.aksiya')</a>
  </div>
</div>
<div class="container-fluid news">
  <div class="container news__top">
    <h3 class="news__top--head">@lang('lang.novosti')</h3><a class="news__top--link" href="/posts">@lang('lang.vse_novosti')</a>
  </div>
  <div class="container news__wrapper" id="resSortPosts">
   @foreach($posts as $post)
    <a href="/post/{{ $post->slug }}">
    <div class="news__item">
      <h4 class="news__item--absolute">{{ $post->created_at->format('d M, Y') }}</h4>
      <div class="news__item--img"><img src="{{ Voyager::image($post->image) }}" alt="kuting"/></div>
      <h3 class="news__item--avtor">{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</h3>
      <p class="news__item--text">{{ $post->getTranslatedAttribute('excerpt', \App::getLocale()) }}.</p>
    </div>
    </a>
   @endforeach
  </div>
</div>
<div class="container-fluid pagenation">
  <div class="container">
    {{ $posts->links('layouts.pagination') }}
  </div>
</div>
@endsection