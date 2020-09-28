<div class="cards__left">
  <ul class="cards__list">
    <li class="cards__item"><a class="cards__link" href="/products">@lang('lang.vse_prod')</a>
      <!-- <ul>
        <li><a href="#">Специальная шпатлевка</a></li>
        <li><a href="#">Специальная шпатлевка</a></li>
        <li><a href="#">Специальная шпатлевка</a></li>
        <li><a href="#">Специальная шпатлевка</a></li>
      </ul> -->
    </li>
    @foreach($categories as $category)
    <li class="cards__item"><a class="cards__link" href="/products/category/{{ $category->slug }}">{{ $category->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</a></li>
    @endforeach
  </ul>
</div>