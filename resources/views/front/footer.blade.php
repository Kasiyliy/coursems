<div class="footer-widget">
    <div class="container">
        <div class="footer-widget-wrap">
            <div class="row">
                <div class="footer-widget-col col-md-4 col-sm-6">
                    <div class="widget widget_nav_menu">
                        <div class="menu-infomation-container">
                            <ul class="menu">
                                <li><a href="{{route('front')}}">Главная</a></li>
                                <li><a href="{{route('front.faqs')}}">Вопросы</a></li>
                                <li><a href="{{route('front.about.us')}}">Обо мне</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-widget-col col-md-4 col-sm-6">
                    <div class="widget widget_nav_menu">
                        <p>Курсы: </p>
                        <div class="menu-infomation-container">
                            <ul class="menu">
                                @foreach($header_courses as $key => $course)
                                    <li><a href="/courses/{{$course->id}}">{{$course->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-widget-col col-md-4 col-sm-6">
                    <div class="widget widget_text">
                        <div class="textwidget">
                            <ul class="address">
                                <li>
                                    <i class="fa fa-mobile"></i>
                                    <h4>Телефон:</h4>
                                    <p><a href="tel:+77011943346">+7 (701) 194 33 46</a></p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <h4>Email:</h4>
                                    <p><a href="mailto:glamblog.kz@gmail.com">glamblog.kz@gmail.com</a>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-instagram"></i>
                                    <h4>Instagram:</h4>
                                    <p><a href="https://www.instagram.com/_glamblog_/">@_glamblog_</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-copyright text-center">
    Все права защищены 2019
</div>