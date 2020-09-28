<div class="container-fluid news">
  <div class="container news__top">
    <h3 class="news__top--head">@lang('lang.novosti')</h3>
    <a class="news__top--link" href="/posts">@lang('lang.vse_novosti')</a>
  </div>
  <div class="container news__wrapper">
    @foreach($posts  as $post)
    <a href="/post/{{$post->slug}}">
    <div class="news__item">
      <h4 class="news__item--absolute">{{ $post->created_at->format('d M, Y') }}</h4>
      <div class="news__item--img"><img src="{{ Voyager::image($post->image) }}" alt="kuting"/></div>
      <h3 class="news__item--avtor">{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}</h3>
      <p class="news__item--text">{{ $post->getTranslatedAttribute('excerpt', \App::getLocale()) }}</p>
    </div>
    </a>
    @endforeach
  </div>
</div>