 <ul class="burger__ul">
  @foreach($items as $item)
    @php $submenu=$item->children->count() @endphp
    @if($submenu)
     <li class="burger__li sub_menu"><a class="burger__a" href="">{{ $item->getTranslatedAttribute('title', \App::getLocale()) }}</a>
    <ul class="burgeri__ul">
      @foreach($item->children as $subitem)
      <li class="burgeri__li"><a class="burgeri__a" href="{{ $subitem->url }}"> {{ $subitem->getTranslatedAttribute('title', \App::getLocale()) }}</a></li>
      @endforeach
    </ul>
  </li>
   @else
  <li class="burger__li"><a class="burger__a" href="{{ $item->url }}">{{ $item->getTranslatedAttribute('title', \App::getLocale()) }}</a></li>
   @endif
 @endforeach
</ul>