
<div class="container-fluid comp">
  <div class="container comp__wrapper">
    <div class="comp__left">
      <h3 class="comp__left--head">{!! $page->getTranslatedAttribute('title', \App::getLocale()) !!}</h3>
      <p class="comp__left--text">
      	@php $text=$page->getTranslatedAttribute('body', \App::getLocale())  @endphp
      	{{ Str_limit($text, 250) }}
      </p>
      <a class="comp__left--link btn" href="/aboutUs">@lang('lang.readmore') </a>
    </div>
    <div class="comp__right">
      <iframe src="https://www.youtube.com/embed/8kMkChbTy1U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  @include('partials.sertificat')
</div>

