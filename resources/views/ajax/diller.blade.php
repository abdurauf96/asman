<div class="uzbmap__item">
	<h3 class="uzbmap__item--head uzbmap__item--active">{{ $diller->getTranslatedAttribute('name', \App::getLocale()) }}</h3>
	<div class="uzbmap__block">
	  <p class="uzbmap__block--text">Дилер: <span class="uzbmap__block--link">{{ $diller->diler_name }}</span></p>
	  <p class="uzbmap__block--text">Тел.: <a class="uzbmap__block--link" href="tel:{{ $diller->phone }}"> {{ $diller->phone }}</a></p>
	</div>
</div>