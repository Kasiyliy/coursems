<div class="offcanvas open">
    <div class="offcanvas-wrap">
        <div class="offcanvas-user clearfix">
            <a class="offcanvas-user-wishlist-link" href="{{route('front')}}">
                <i class="fa fa-heart-o"></i> GlamBlog.KZ
            </a>
            @if(!Auth::user())
                <a class="offcanvas-user-account-link" data-rel="loginModal" href="#">
                    <i class="fa fa-user"></i> Вход
                </a>
            @else
                <a class="offcanvas-user-account-link" href="{{route('logout')}}" onclick="event.preventDefault();
                                                document.getElementById('logout-form1').submit();"> <i
                            class="fa fa-user"></i>Выход </a>
                <form id="logout-form1" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            @endif
        </div>
        <nav class="offcanvas-navbar">
            <ul class="offcanvas-nav">
                <li class="menu-item-has-children dropdown current-menu-ancestor">
                    <a href="{{route('front')}}" class="dropdown-hover">Главная</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="" class="dropdown-hover">Курсы<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($header_courses as $course)
                            <li class="menu-item-has-children dropdown-submenu">
                                <a href="#">{{$course->name}} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @foreach($course->streams as $stream)
                                        <li><a href="#">{{$stream->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @if(Auth::user())
                    <li>
                        <a href="{{route('my.courses')}}">
                            Мои курсы
                        </a>
                    </li>
                @endif
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">Контакты <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('front.about.us')}}">О нас</a></li>
                        <li><a href="{{route('front.contact')}}">Контакты</a></li>
                        <li><a href="{{route('front.faqs')}}">FAQ</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
