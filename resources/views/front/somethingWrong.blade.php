<div class="offcanvas open">
    <div class="offcanvas-wrap">
        <div class="offcanvas-user clearfix">
            <a class="offcanvas-user-wishlist-link" href="wishlist.html">
                <i class="fa fa-heart-o"></i> My Wishlist
            </a>
            @if(!Auth::user())
            <a class="offcanvas-user-account-link" data-rel="loginModal" href="#">
                <i class="fa fa-user"></i> Login
            </a>
                @else
                <a class="offcanvas-user-account-link" href="{{route('logout')}}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">  <i class="fa fa-user"></i> Logout </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
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
                <li><a href="#">Работы</a></li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">Контакты <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="{{route('front.faqs')}}">FAQ</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
