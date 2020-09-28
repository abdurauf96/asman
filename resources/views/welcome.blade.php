@extends('layouts.index')

@section('content')
<div class="container-fluid" id="resultSearch">
    
</div>
<div class="container-fluid absolute"></div>
    @include('partials.top')
    @include('partials.faq')
<div class="container-fluid service">
    @include('partials.features')
</div>
    @include('partials.about')
    @include('partials.products')
    @include('partials.sotrud')
    @include('partials.map')
<div class="container-fluid otziv">
    @include('partials.otziv')
</div>
    @component('components.forma')
        @slot('title')
            @lang('page.ostalis')
        @endslot
        @slot('desc')
             @lang('page.nejdite')
        @endslot
       
    @endcomponent

    @include('partials.news')

@endsection