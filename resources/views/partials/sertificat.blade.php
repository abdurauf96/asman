<div class="container slider__ser">
	@foreach($sertificats as $ser)
	<div class="slider__item"><img class="slider__item--img" src="{{ Voyager::image($ser->image) }}" alt="kuting"/></div>
	@endforeach
</div>