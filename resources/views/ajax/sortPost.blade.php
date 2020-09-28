@foreach($posts as $post)
<a href="/post/{{ $post->slug }}">
	<div class="news__item">
	  <h4 class="news__item--absolute">{{ $post->created_at->format('d M, Y') }}</h4>
	  <div class="news__item--img"><img src="{{ Voyager::image($post->image) }}" alt="kuting"/></div>
	  <h3 class="news__item--avtor">{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</h3>
	  <p class="news__item--text">{{ $post->getTranslatedAttribute('excerpt', \App::getLocale()) }}.</p>
	</div>
</a>
@endforeach