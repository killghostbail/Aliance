<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script>/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-setclasses !*/
!function(n,e,s){function o(n,e){return typeof n===e}function a(){var n,e,s,a,i,l,r;for(var c in f)if(f.hasOwnProperty(c)){if(n=[],e=f[c],e.name&&(n.push(e.name.toLowerCase()),e.options&&e.options.aliases&&e.options.aliases.length))for(s=0;s<e.options.aliases.length;s++)n.push(e.options.aliases[s].toLowerCase());for(a=o(e.fn,"function")?e.fn():e.fn,i=0;i<n.length;i++)l=n[i],r=l.split("."),1===r.length?Modernizr[r[0]]=a:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=a),t.push((a?"":"no-")+r.join("-"))}}function i(n){var e=l.className,s=Modernizr._config.classPrefix||"";if(r&&(e=e.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+s+"no-js(\\s|$)");e=e.replace(o,"$1"+s+"js$2")}Modernizr._config.enableClasses&&(e+=" "+s+n.join(" "+s),r?l.className.baseVal=e:l.className=e)}var t=[],f=[],l=e.documentElement,r="svg"===l.nodeName.toLowerCase(),c={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(n,e){var s=this;setTimeout(function(){e(s[n])},0)},addTest:function(n,e,s){f.push({name:n,fn:e,options:s})},addAsyncTest:function(n){f.push({name:null,fn:n})}},Modernizr=function(){};Modernizr.prototype=c,Modernizr=new Modernizr,a(),i(t),delete c.addTest,delete c.addAsyncTest;for(var u=0;u<Modernizr._q.length;u++)Modernizr._q[u]();n.Modernizr=Modernizr}(window,document);</script>
    <title> Aliance Production</title>
  </head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprites.svg#map-marker"></use>
        </svg>
        <address class="mobile-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprites.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.mobile-info -->
    </div>
    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprites.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprites.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprites.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link">
          +7 (499) 686-10-14
        </a>
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprites.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">
            Комплексное обеспечение товарами и расходными материалами бизнеса
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <button class="button header-button" data-toggle="modal" data-target="#feedback-modal">
            Подробнее о компании
          </button>
        </div>
        <!-- /.header-content -->

        <!-- основной блок слайдера -->
        <div class="swiper features-slider">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprites.svg#time"></use>
              </svg>
              <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprites.svg#certificate"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprites.svg#control"></use>
              </svg>
              <p class="header-features-text">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprites.svg#delivery"></use>
              </svg>
              <p class="header-features-text">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprites.svg#speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>

          <!-- кнопки навигации вперед/назад -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg width="36" height="24">
                <use href="img/sprites.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg width="36" height="24">
                <use href="img/sprites.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>
      </div>
      <!-- /.container -->
    </header>
    
    <?php include_once('./template-parts/steps-block.php'); ?>
    <?php include_once('./template-parts/production-block.php'); ?>
    
    <?php $trademarks_title = "собственные торговые марки"; 
    include_once('./template-parts/trademarks-block.php');
    include_once('./template-parts/founder-block.php');
    include_once('./template-parts/clients-block.php');?>
    
    <section class="section blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Блог экспертов в области производства</h2>
        <!-- Slider main container -->
        <div class="swiper blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide blog-card">
              <picture>
                <source type="image/webp" srcset="img/blog/blog-photo.webp">
                <source type="image/jpeg" srcset="img/blog/blog-photo.jpeg">
                <img src="img/blog/blog-photo.jpeg" alt="" class="blog-card-image" />
              </picture>
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <picture>
                <source type="image/webp" srcset="img/blog/blog-post.webp">
                <source type="image/jpeg" srcset="img/blog/blog-post.jpeg">
                <img src="img/blog/blog-post.jpeg" alt="" class="blog-card-image" />
                </picture>
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <picture>
                <source type="image/webp" srcset="img/blog/blog-photo.webp">
                <source type="image/jpeg" srcset="img/blog/blog-photo.jpeg">
                <img src="img/blog/blog-photo.jpeg" alt="" class="blog-card-image" />
              </picture>
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
          </div>

          <div class="blog-slider-footer">
            <a href="#" class="button-link">Весь блог</a>
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg width="36" height="24">
                  <use href="img/sprites.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg width="36" height="24">
                  <use href="img/sprites.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
            <!-- /.blog-button -->
          </div>
          <!-- /.blog-slider-footer -->
        </div>
      </div>
      <!-- /.container -->
    </section>

    <?php include_once('footer.php');?>