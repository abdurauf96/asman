<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title-->
    <title>ASMAN SILICAT TRAVERTIN</title>
    <meta name="description" content="Декоративная штукатурка на основе травертина от производителя по оптовой цене">
    <!-- title the end-->
    <!-- all css files goes here    -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/slick-theme.css"/>
    <link rel="stylesheet" href="/css/slick.css"/>
    <link rel="stylesheet" href="/css/all.min.css"/>
    <link rel="stylesheet" href="/css/jquery-ui.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/css/animate.css"/>
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css"/>
    <!-- css files the end-->
  </head>
  <body>
    <div class="burger"><span class="fa fa-bars"></span></div>
    <div id="tepaga"></div>
    <header class="container-fluid header ">
      <div class="container header__wrapper wow fadeInDown">
        <div class="header__left"><a class="header__left--logo" href="/"><img class="header__left--img" src="/img/logo.png" alt="kuting"/>
            <h3 class="header__left--text">ASMAN SILICAT TRAVERTIN</h3></a></div>
        <div class="header__right">
          <div class="header__mail"><span class="fa fa-envelope"></span><a class="header__mail--link" href="mailto: info@asman.uz">info@asman.uz</a></div>
          <form class="header__form" action="/search" method="post">
            {{ csrf_field() }}
            <input class="form-control header__form--search" name="data"  type="search" placeholder="Поиск"/>
            <input class="form-control header__form--button" type="submit" value=""/>
          </form>
        </div>
      </div>
    </header>
    <div class="container-fluid burger_menu">
      <div class="container">
        <div class="burger_menu__wrapper">
          <div class="burger_menu__links">
           {{ menu('main', 'layouts.menu') }}
          </div>
          <div class="burger_menu__language">
            <div class="btn-group" role="group" aria-label="">
              <div class="btn-group" role="group">
                <button class="btn dropdown-toggle" id="Mydroup" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  @if(\App::getLocale()=='ru')
                  <img class="dropdown--img" src="/img/rus_flag.png" alt="kuting"/>
                  <span class="dropdown--text">RUS</span>
                  @elseif(\App::getLocale()=='en')
                  <img class="dropdown--img" src="/img/eng_flag.png" alt="kuting"/>
                  <span class="dropdown--text">ENG</span>
                  @else
                  <img class="dropdown--img" src="/img/uz.png" alt="kuting"/>
                  <span class="dropdown--text">UZB</span>
                  @endif
                </button>
                <div class="dropdown-menu" aria-labelledby="Mydroup">
                  @if(\App::getLocale()!='en')
                  <a class="dropdown-item" href="/lang/en">
                    <img class="dropdown--img" src="/img/eng_flag.png" alt="kuting"/><span class="dropdown--text">ENG</span>
                  </a>
                  @endif
                  @if(\App::getLocale()!='ru')
                  <a class="dropdown-item" href="/lang/ru">
                    <img class="dropdown--img" src="/img/rus_flag.png" alt="kuting"/><span class="dropdown--text">RUS</span>
                  </a>
                  @endif
                  @if(\App::getLocale()!='uz')
                  <a class="dropdown-item" href="/lang/uz">
                    <img class="dropdown--img" src="/img/uz.png" alt="kuting"/><span class="dropdown--text">UZB</span>
                  </a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    @yield('content')
    
    <div class="container-fluid vapros newform" >
      <div class="container vapros__wrapper">
        <div class="vapros__left"><img class="vapros__left--img" src="img/devoshka.png" alt="kuting"/></div>
        <div class="vapros__right">
          <h3 class="vapros__right--head"> @lang('page.kak_stat') </h3>
          <p class="vapros__right--text"> @lang('page.kak_stat_sub') {{ setting('site.email') }}</p>
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

    <div class="container-fluid konsul">
      <div class="container konsul__wrapper">
        <p class="konsul__exit">&times;</p>
        <h3 class="konsul__head">@lang('lang.zakajite')</h3>
        <form class="konsul__form" action="/get_consult" method="post">
          {{ csrf_field() }}
          <input class="form-control name" type="text" placeholder="*Ваше имя" required="" />
          <input class="form-control phone" type="number" placeholder="*Телефон" required="" />
          <p class="konsul__text">@lang('lang.ili')</p><a class="konsul__link" href="tel: +998933732471">(+998 93) 373-24-71</a>
          <input class="form-control sendConsult" type="submit"  value="Отправить"/>
        </form>
      </div>
    </div>
    <div class="container-fluid otprovlen">
      <div class="container otprovlen__wrapper">
        <div class="otprovlen__head">Спасибо, Ваша заявка принята</div>
        <div class="otprovlen__text">Наш менеджер свяжется с Вами, Хорошего дня!)</div>
        <a class="btn otprovlen__link" href="#">OK</a>
      </div>
    </div>
    <div class="container-fluid formotziv">
      <div class="container formotziv__wrapper">
        <p class="formotziv__exit">&times;</p>
        <h3 class="formotziv__head">@lang('lang.ostavit')</h3>
        <form class="formotziv__form" action="/sendComment" method="post">
          {{ csrf_field() }}
          <div class="formotziv__block">
            <input class="form-control" id="name" type="text" placeholder="*@lang('lang.imya')"/>
            <input class="form-control" type="number" placeholder="Телефон"/>
          </div>
          <textarea class="form-control" id="comment" name="" placeholder="*@lang('lang.text'):"></textarea>
          <input class="form-control send_comment" type="submit" value="@lang('lang.send')"/>
        </form>
      </div>
    </div>
    <div class="container-fluid footer__absolute"></div>
    <div class="container-fluid map">
      <div class="container map__wrapper"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.379519722321!2d69.27062061492498!3d41.3223600079877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b3bfb9460fb%3A0x6923ea1c96d25b74!2z0YPQu9C40YbQsCDQkNCx0LTRg9C70LvQsCDQmtCw0LTRi9GA0LgsINCi0LDRiNC60LXQvdGCLCDQo9C30LHQtdC60LjRgdGC0LDQvQ!5e0!3m2!1sru!2s!4v1562853700554!5m2!1sru!2s"  frameborder="0" style="border:0" allowfullscreen></iframe></div>
      <div class="container contact">
        <div class="contact__item"><span class="fa fa-map-marker-alt contact__item--icon"></span><a class="contact__item--link" href="#">Узбекистан, г. Ташкент,ул.Садыка Азимова 68</a></div>
        <div class="contact__item"><img class="contact__item--img" src="img/contact--call.png" alt="kuting"/>
          <div class="link__block">
            <a class="contact__item--link" href="tel:+998933732471">{{ setting('site.phone1') }}</span>
            </a>
            <a class="contact__item--link" href="tel:+998933732471">{{ setting('site.phone2') }}</span>
            </a>
          </div>
        </div>
        <div class="contact__item"><span class="fa fa-envelope contact__item--icon"></span><a class="contact__item--link" href="mailto: info@example.uz">{{ setting('site.email') }}</a></div>
      </div>
    </div>
    <div class="container-fluid footer">
      <div class="container footer__wrapper">
        <p class="footer__wrapper--text">© 2019 Все права защищены.</p><a class="naverx" href="#tepaga"><span class="fa fa-chevron-up"></span>
          <p>наверх</p></a>
        <p class="footer__wrapper--text">Создание сайтов <a href="#">Webmasters</a></p>
      </div>
    </div>
    <!-- all js files goes here-->
    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/myjs/jquery-ui.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js" charset="utf-8" ></script>
    <script src="/js/wow.min.js"></script><script src="/js/wow.min.js"></script>
    <script>
      //- codes for wow
      new WOW().init();
      //- wow the end
      
      // mapels ===============
     $(function () {
          $(".map__wrap").mapael({
              map: {
                  name: "world_countries",
                  
                  // Set default plots and areas style
                  defaultPlot: {
                      attrs: {
                          fill: "#004a9b"
                          , opacity: 0.6
                      }
                      , attrsHover: {
                          opacity: 1
                      }
                      , text: {
                          attrs: {
                              fill: "#FFC424",
                              "font-size": 10,
                          }
                          , attrsHover: {
                              fill: "#FFC424"
                          }
                      }
                  }
                  , defaultArea: {
                      attrs: {
                          fill: "#0071BB"
                          , stroke: "#2284C4"
                      }
                      , attrsHover: {
                          fill: "#26c195"
                      }
                      , text: {
                          attrs: {
                              fill: "#505444"
                          }
                          , attrsHover: {
                              fill: "#000"
                          }
                      }
                  }
              },
              // Customize some areas of the map
              // areas: {
              //  "department-56": {
              //    text: {content: "Morbihan", attrs: {"font-size": 5}},
              //    tooltip: {content: "Morbihan (56)"}
              //    // href: "http://fr.wikipedia.org/wiki/Morbihan"
              //  },
              //  "department-21": {
              //    attrs: {
              //      fill: "#488402"
              //    }
              //    , attrsHover: {
              //      fill: "#a4e100"
              //    },
              //    href: "index.html",
              //    target: "_blank"
              //  }
              // },
              // Add some plots on the map
              plots: {
                  // Image plot
                  'dubai': {
                      type: "image",
                      url: "img/karta_dot.png",
                      width: 15,
                      height: 15,
                      latitude: 25.178282,
                      longitude:  55.264777,
                      tooltip: {content: "<div class='map__block'><h3 class='map__head'>Дубай</h3><p>Имя: <span>  Имя Фамилия</span></p><p>Тел: <span>  +971 4 000-00-00</span></p><p>Почта: <span> mail@example.com</span></p></div>"},
                      text: {content: "Дубай"},
                      attrs: {
                          opacity: 1
                      },
                      attrsHover: {
                          fill: "#a4e100"
                      },
                      href: "index.html",
                      target: "_blank"
                  },
                  // Image plot
                   
      
                  'uzbekistan': {
                      type: "image",
                      url: "img/karta_dot.png",
                      width: 15,
                      height: 15,
                      latitude: 43.643514,
                      longitude: 60.213810,
                      tooltip: {content: "<div class='map__block'><h3 class='map__head'>Узбекистан</h3><p>Имя: <span>  Имя Фамилия</span></p><p>Тел: <span>  +971 4 000-00-00</span></p><p>Почта: <span> mail@example.com</span></p></div>"},
                      text: {content: "Узбекистан"},
                      attrs: {
                          opacity: 1
                      },
                      attrsHover: {
                          fill: "#a4e100"
                      },
                      href: "index.html",
                      target: "_blank"
                  },
                  'balgariya': {
                      type: "image",
                      url: "img/karta_dot.png",
                      width: 15,
                      height: 15,
                      latitude: 42.363466,
                      longitude: 25.167359,
                      tooltip: {content: "<div class='map__block'><h3 class='map__head'>Болгария</h3><p>Имя: <span>  Имя Фамилия</span></p><p>Тел: <span>  +971 4 000-00-00</span></p><p>Почта: <span> mail@example.com</span></p></div> "},
                      text: {content: "Болгария"},
                      attrs: {
                          opacity: 1
                      },
                      attrsHover: {
                          fill: "#a4e100"
                      },
                      href: "index.html",
                      target: "_blank"
                  },
                  'Киргизия': {
                      type: "image",
                      url: "img/karta_dot.png",
                      width: 15,
                      height: 15,
                      latitude: 41.218178,
                      longitude: 74.598491,
                      tooltip: {content: "<div class='map__block'><h3 class='map__head'>Киргизия</h3><p>Имя: <span>  Имя Фамилия</span></p><p>Тел: <span>  +971 4 000-00-00</span></p><p>Почта: <span> mail@example.com</span></p></div>"},
                      text: {content: "Киргизия"},
                      attrs: {
                          opacity: 1
                      },
                      attrsHover: {
                          fill: "#a4e100"
                      },
                      href: "index.html",
                      target: "_blank"
                  },
                  'Казахстан': {
                      type: "image",
                      url: "img/karta_dot.png",
                      width: 15,
                      height: 15,
                      latitude: 47.623553,
                      longitude: 66.443291,
                      tooltip: {content: "<div class='map__block'><h3 class='map__head'>Казахстан</h3><p>Имя: <span>  Имя Фамилия</span></p><p>Тел: <span>  +971 4 000-00-00</span></p><p>Почта: <span> mail@example.com</span></p></div> "},
                      text: {content: "Казахстан"},
                      attrs: {
                          opacity: 1
                      },
                      attrsHover: {
                          fill: "#a4e100"
                      },
                      href: "index.html",
                      target: "_blank"
                  }
              },
          });
      });
      // end mapels ===============
    </script>
    <script src="/js/myjs/jquery.mapael.js"></script>
    <script src="/js/myjs/world_countries.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <!-- script files the end-->
  </body>
</html>