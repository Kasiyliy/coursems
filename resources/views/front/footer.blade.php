{{--<div class="footer-newsletter">--}}
{{--<div class="container">--}}
{{--<div class="footer-newsletter-wrap">--}}
{{--<h3 class="footer-newsletter-heading">NEWSLETTER</h3>--}}
{{--<form class="mailchimp-form">--}}
{{--<div class="mailchimp-form-content clearfix">--}}
{{--<label for="subscribe_email" class="hide">Subscribe</label>--}}
{{--<input type="email" id="subscribe_email" class="form-control" required="required"--}}
{{--placeholder="Enter your email..." name="email">--}}
{{--<button type="submit" class="btn mailchimp-submit">sign up</button>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="footer-featured">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="footer-featured-col col-md-4 col-sm-6">--}}
{{--                <i class="fa fa-money"></i>--}}
{{--                <h4 class="footer-featured-title">--}}
{{--                    100% <br> return money--}}
{{--                </h4>--}}
{{--                free return standard order in 30 days--}}
{{--            </div>--}}
{{--            <div class="footer-featured-col col-md-4 col-sm-6">--}}
{{--                <i class="fa fa-globe"></i>--}}
{{--                <h4 class="footer-featured-title">--}}
{{--                    world wide <br> delivery--}}
{{--                </h4>--}}
{{--                free ship for payment over $100--}}
{{--            </div>--}}
{{--            <div class="footer-featured-col col-md-4 col-sm-6">--}}
{{--                <i class="fa fa-clock-o"></i>--}}
{{--                <h4 class="footer-featured-title">--}}
{{--                    24h <br> shipment--}}
{{--                </h4>--}}
{{--                for standard package--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="footer-widget">
    <div class="container">
        <div class="footer-widget-wrap">
            <div class="row">
                {{--                <div class="footer-widget-col col-md-3 col-sm-6">--}}
                {{--                    <div class="widget widget_text">--}}
                {{--                        <div class="textwidget">--}}
                {{--                            <ul class="address">--}}
                {{--                                <li>--}}
                {{--                                    <i class="fa fa-home"></i>--}}
                {{--                                    <h4>Address:</h4>--}}
                {{--                                    <p>132 Jefferson Avenue, Suite 22, Redwood City, CA 94872, USA</p>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <i class="fa fa-mobile"></i>--}}
                {{--                                    <h4>Phone:</h4>--}}
                {{--                                    <p>(00) 123 456 789</p>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <i class="fa fa-envelope"></i>--}}
                {{--                                    <h4>Email:</h4>--}}
                {{--                                    <p><a href="mailto:email@domain.com">email@domain.com</a></p>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="footer-widget-col col-md-3 col-sm-6">
                </div>
                <div class="footer-widget-col col-md-3 col-sm-6">
                    <div class="widget widget_text">
                        <div class="textwidget">
                            <ul class="address">
                                <li>
                                    <i class="fa fa-mobile"></i>
                                    <h4>Телефон:</h4>
                                    <p>+7 (701) 194 33 46</p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <h4>Email:</h4>
                                    <p><a href="mailto:yerbolat.beisenbek@gmail.com">yerbolat.beisenbek@gmail.com</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-widget-col col-md-3 col-sm-6 ml-12">
                    <div class="widget widget_nav_menu">
                        <div class="menu-infomation-container">
                            <ul class="menu">
                                <li><a href="{{route('front')}}">Главная</a></li>
                                @if($header_courses)
                                    <li><a href="/courses/{{array_shift(array_values($header_courses))->id}}">Курсы</a></li>
                                @endif
                                <li><a href="{{route('front.faqs')}}">FAQ</a></li>
                                <li><a href="{{route('front.about.us')}}">Об авторе</a></li>
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