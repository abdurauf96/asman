@extends('layouts.index')

@section('content')
@component('components.breadcrumb')
	@slot('title')
		Фотогалерея
	@endslot
	@slot('desc')
		Фотогалерея
	@endslot
@endcomponent
 <div class="container-fluid galareya">
  @foreach($images as $image)
  <div class="galareya__item">
    <a href="{{ Voyager::image($image->image) }}" data-fancybox="gallery" data-caption="Asosiy1">
      <img src="{{ Voyager::image($image->image) }}" alt="" />
    </a>
  </div>
  @endforeach
</div>
@endsection