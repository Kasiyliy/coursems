<div class="offcanvas-overlay"></div>
<header class="header-container header-type-classic header-navbar-classic header-scroll-resize">
    <div class="topbar">
        <div class="container topbar-wap">
            <div class="row">
                <div class="col-sm-6 col-left-topbar">
                    <div class="left-topbar">
                        @if(auth()->user() && auth()->user()->isAdmin())
                            Войдите в админ панель
                            <a href="{{route('home')}}">Админ панель<i class="fa fa-long-arrow-right"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6 col-right-topbar">
                    <div class="right-topbar">
                        <div class="user-login">
                            <ul class="nav top-nav">
                                @if(!Auth::user())
                                    <li>
                                        <a style="float: left" data-rel="loginModal" href="#"><i
                                                    class="fa fa-sign-in"></i> Войти</a>
                                        <a style="float: left" class="ml-2"
                                           href="{{route('register')}}"><i class="fa fa-user"></i>
                                            Регистрация</a>
                                    </li>
                                @else
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i
                                                    class="fa fa-sign-out"></i> Выйти</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-container">
        <div class="navbar navbar-default navbar-scroll-fixed">
            <div class="navbar-default-wrap">
                <div class="container">
                    <div class="row">
                        <div class="navbar-default-col">
                            <div class="navbar-wrap">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar bar-top"></span>
                                        <span class="icon-bar bar-middle"></span>
                                        <span class="icon-bar bar-bottom"></span>
                                    </button>
                                    <a class="navbar-brand" href="{{route('front')}}">
                                        <img class="logo" alt="Glam Blog" src="{{ asset('front/images/logo.png') }}">
                                        <img class="logo-fixed" alt="Glam Blog"
                                             src="{{ asset('front/images/logo-fixed.png') }}">
                                        <img class="logo-mobile" alt="Glam Blog"
                                             src="{{ asset('front/images/logo-mobile.png') }}">
                                    </a>
                                </div>
                                <nav class="collapse navbar-collapse primary-navbar-collapse">
                                    <ul class="nav navbar-nav primary-nav">
                                        @if(auth()->user() && auth()->user()->isAdmin())
                                            <li class=" menu-item-has-children dropdown">
                                                <a href="{{route('home')}}" class="dropdown-hover">
                                                    <span class="underline">Админская панель</span>
                                                </a>
                                            </li>
                                        @endif
                                        <li class=" menu-item-has-children dropdown">
                                            <a href="{{route('front')}}" class="dropdown-hover">
                                                <span class="underline">Главная</span> <span class="caret"></span>
                                            </a>
                                        </li>
                                        <li class="menu-item-has-children dropdown">
                                            <a href="#" class="dropdown-hover">
                                                <span class="underline">Курсы</span> <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($header_courses as $course)
                                                    <li><a href="/courses/{{$course->id}}">{{$course->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @if(Auth::user())
                                            <li>
                                                <a href="{{route('my.courses')}}">
                                                    <span class="underline">Мои курсы</span>
                                                </a>
                                            </li>
                                        @endif

                                        <li class="menu-item-has-children dropdown">
                                            <a href="#" class="dropdown-hover">
                                                <span class="underline">Контакты</span> <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('front.about.us')}}">Обо мне</a></li>
                                                <li><a href="{{route('front.contact')}}">Контакты</a></li>
                                                <li><a href="{{route('front.faqs')}}">Вопросы</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-search-overlay hide">
                <div class="container">
                    <div class="header-search-overlay-wrap">
                        <form class="searchform">
                            <input type="search" class="searchinput" name="s" autocomplete="off" value=""
                                   placeholder="Search..."/>
                        </form>
                        <button type="button" class="close">
                            <span aria-hidden="true" class="fa fa-times"></span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>