

<div class="container-fluid faq">
  <div class="container faq__wrapper">
    <div class="faq__left">
      <h3 class="faq__left--head">@lang('lang.chto')</h3>
      <p class="faq__left--text">@lang('lang.travertin')</p>
    </div>
    <div class="faq__right">
      <div id="accordion">
        @foreach($faqs as $faq)
        <h3 class="faq__accordion--head">{{ $faq->getTranslatedAttribute('title',\App::getLocale() ) }}<span class="fa fa-minus"></span></h3>
        <p class="faq__accordion--body">{{ $faq->getTranslatedAttribute('body',\App::getLocale() ) }}</p>
        @endforeach
      </div>
    </div>
  </div>
</div>
