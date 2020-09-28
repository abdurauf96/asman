<div class="container-fluid vapros">
  <div class="container vapros__wrapper">
    <div class="vapros__left"><img class="vapros__left--img" src="img/devoshka.png" alt="kuting"/></div>
    <div class="vapros__right">
      <h3 class="vapros__right--head"> {{ $title }} </h3>
      <p class="vapros__right--text">{{ $desc }}</p>
      <form class="form" method="post" action="">
        {{ csrf_field() }}
        <input class="form-control name" type="text"  placeholder="Ваше имя:"/>
        <input class="form-control phone" type="number" placeholder="Телефон:"/>
        <input class="form-control email" type="text" placeholder="Эл. почта:"/>
        <textarea class="form-control msg" placeholder="*Текст сообщения:"></textarea>
        <label for="numer">Или позвоните нам по номеру </label><a href="tel: +998933732471" id="numer">+998 (93) <span>373-24-71</span></a>
        <a class="form__link form-control send_question" href="#">Отправить</a>
      </form>
    </div>
  </div>
</div>