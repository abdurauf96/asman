@extends('layouts.index')

@section('content')

	@component('components.breadcrumb')
		@slot('title')
			О компании
		@endslot

		@slot('desc')
			О компании
		@endslot
	@endcomponent

	<div class="container-fluid okampaniya">
      <div class="container okampaniya__wrapper">
        <h3 class="okampaniya__wrapper--head">{!! $page->getTranslatedAttribute('title', \App::getLocale()) !!}</h3>
        <p class="okampaniya__wrapper--text">{{ $page->getTranslatedAttribute('body', \App::getLocale()) }}</p>
      </div>
    </div>
    <div class="container-fluid service okampaniya__service">
    	@include('partials.features')
    </div>

    <div class="container-fluid comp">
      <div class="container">
        <h3 class="sertifikat--head">@lang('page.sertifikati')</h3>
      </div>
      @include('partials.sertificat')
    </div>

    <div class="container-fluid otziv otziv_okampaniya">
    	@include('partials.otziv')
    </div>
@endsection