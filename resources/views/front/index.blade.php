@extends('layouts.userSide')

@section('front.styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">
@endsection

@section('content')
    <div class="content-container no-padding">
        <div class="container-full">
            <div class="main-content">
                <div class="row row-fluid">
                    <div class="col-sm-12">
                        <div class="rev_slider_wrapper fullwidthbanner-container">
                            <div id="rev_slider" class="rev_slider fullwidthabanner">
                                <ul>
                                    @foreach($streams as $stream)
                                        <li data-transition="fade" data-slotamount="default" data-easein="default"
                                        data-easeout="default" data-masterspeed="default" data-thumb=""
                                        data-delay="6000" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                        data-description="">
                                        <img src="front/images/slideshow/dummy.png" alt="" width="1920" height="657"
                                             data-lazyload="images/slideshow/slider_1920x657.jpg"/>
                                        <div class="tp-caption home1-small-black tp-resizeme" data-x="125" data-y="135"
                                             data-transform_idle="o:1;"
                                             data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                             data-elementdelay="0.05" id="{{$stream->id}}timer">
                                        </div>
                                        <div class="tp-caption tp-resizeme" data-x="125" data-y="300"
                                             data-width="['none','none','none','none']"
                                             data-height="['none','none','none','none']" data-transform_idle="o:1;"
                                             data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                             data-responsive_offset="on" data-elementdelay="0.05">
                                            <img src="front/images/slideshow/dummy.png" alt="" width="23" height="3"
                                                 data-ww="23px" data-hh="3px"
                                                 data-lazyload="images/slideshow/rev_home1_img3.png"/>
                                        </div>
                                        <div class="tp-caption home1-small-black tp-resizeme" data-x="125" data-y="360"
                                             data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                             data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                             data-elementdelay="0.05">
                                            Дата старта: {{date("d.m.Y", strtotime($stream->started_at))}}
                                        </div>
                                        {{--<div class="tp-caption home1-small-black tp-resizeme mt-3" data-x="125" data-y="360"--}}
                                        {{--data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"--}}
                                        {{--data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"--}}
                                        {{--data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"--}}
                                        {{--data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"--}}
                                        {{--data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"--}}
                                        {{--data-splitin="chars" data-splitout="none" data-responsive_offset="on"--}}
                                        {{--data-elementdelay="0.05">--}}
                                        {{--Продолжительность: 4 дня--}}
                                        {{--</div>--}}
                                        <div class="tp-caption home1-small-black tp-resizeme mt-3" data-x="125"
                                             data-y="360"
                                             data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                             data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                             data-elementdelay="0.05">
                                            Цена: {{$stream->course->price}} KZT
                                        </div>
                                        {{--<div class="tp-caption home1-small-black tp-resizeme mt-9" data-x="125" data-y="360"--}}
                                        {{--data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"--}}
                                        {{--data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"--}}
                                        {{--data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"--}}
                                        {{--data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"--}}
                                        {{--data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"--}}
                                        {{--data-splitin="chars" data-splitout="none" data-responsive_offset="on"--}}
                                        {{--data-elementdelay="0.05">--}}
                                        {{--<i>*Курс будет доступен 30 дней</i>--}}
                                        {{--</div>--}}
                                        <div class="tp-caption home3-big-black tp-resizeme" data-x="125" data-y="188"
                                             data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                             data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                             data-elementdelay="0.05">
                                            {{$stream->course->name}}
                                        </div>
                                    </li>
                                    @endforeach
                                    <li data-transition="fade" data-slotamount="default" data-easein="default"
                                        data-easeout="default" data-masterspeed="default" data-thumb=""
                                        data-delay="6000" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                        data-description="">
                                        <img src="front/images/slideshow/dummy.png" alt="" width="1920" height="657"
                                             data-lazyload="images/slideshow/slider_1920x657.jpg"/>
                                        <div class="tp-caption home2-medium-white tp-resizeme" data-x="" data-y="200"
                                             data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                             data-elementdelay="0.05" data-end="8300"
                                             style="color: black">
                                            Лучшие 2 ученицы получат
                                        </div>
                                        <div class="tp-caption home2-big-white tp-resizeme" data-x="-1" data-y="250"
                                             data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                             data-elementdelay="0.05" data-end="8300"
                                             style="color: black">
                                            по 10 000 тенге
                                        </div>
                                        {{--<div class="tp-caption btn-default rev-btn" data-x="" data-y="350"--}}
                                        {{--data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"--}}
                                        {{--data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;"--}}
                                        {{--data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);cursor:pointer;"--}}
                                        {{--data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"--}}
                                        {{--data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"--}}
                                        {{--data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"--}}
                                        {{--data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"--}}
                                        {{--data-splitin="none" data-splitout="none" data-responsive_offset="on"--}}
                                        {{--data-responsive="off" data-end="8300" style="color: #0b0b0b">--}}
                                        {{--записаться на курс--}}
                                        {{--</div>--}}
                                        <div class="tp-caption Fashion-BigDisplay tp-resizeme" data-x="100" data-y="100"
                                             data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                             data-transform_in="opacity:0;s:300;e:Power2.easeInOut;"
                                             data-transform_out="opacity:0;s:300;e:Power3.easeInOut;s:300;e:Power3.easeInOut;"
                                             data-start="500" data-splitin="none" data-splitout="none"
                                             data-responsive_offset="on"></div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer tp-bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-full">
                    <div class="row row-fluid custom-bg-1 mb-0 pt-9 pb-10">
                        <div class="col-sm-12">
                            <h3 class="text-uppercase mb-2 white text-center">
                                the one for you
                            </h3>
                            <div class="mb-6">
                                <p class="text-center white">We offer a range of models to accommodate a variety body
                                    shapes and sizes</p>
                            </div>
                            <a class="btn btn-white-outline btn-align-center" href="#">
                                <span>find your leather coats</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container-full" style="background-color: #f8f9fb">
                    <div class="row row-fluid mb-10 mt-3 mb-0 row-no-padding">
                        <div class="col-sm-12 p-0">
                            <div class="caroufredsel product-slider nav-position-center" data-height="variable"
                                 data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                                <div class="post-grid-wrap">
                                    <div class="product-slider-title mt-3">
                                        <h3 class="el-heading">Доступные курсы</h3>
                                    </div>
                                    <ul class="row list">
                                        @foreach($streams as $stream)
                                            <li class="col-sm-12">
                                                <article class="ml-10 mt-3 hentry">
                                                    <div class="hentry-wrap">
                                                        <div class="entry-featured">
                                                            <div class="entry-header">
                                                                <h3 class="entry-title">
                                                                    <a href="{{route('single.course', ['id' => $stream->course->id])}}">
                                                                        {{$stream->course->name}}
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                            <div class="entry-meta">
																<span class="meta-date">
                                                                    @foreach($registered as $client)
                                                                        @if($client->id == $stream->id)
                                                                            Людей в группе: {{$client->count}}
                                                                        @endif
                                                                    @endforeach
																</span>
                                                                <a class="read-more btn btn-outline"
                                                                   href="{{route('single.course', ['id' => $stream->course_id])}}">
                                                                    <span class="text-muted">Подробнее</span>
                                                                </a>
                                                                <span class="meta-date pt-5">
                                                                    Цена: {{$stream->course->price}} KZT
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <br>
                                            </li>
                                            <!-- Display the countdown timer in an element -->
                                            <script>
                                                // Set the date we're counting down to
                                                var countDownDate{{$stream->id}} = new Date("{{$stream->started_at}}");
                                                countDownDate{{$stream->id}}.setDate(countDownDate{{$stream->id}}.getDate() + 1);
                                                countDownDate{{$stream->id}} = countDownDate{{$stream->id}}.getTime();

                                                // Update the count down every 1 second
                                                var x{{$stream->id}} = setInterval(function () {

                                                    // Get today's date and time
                                                    var now{{$stream->id}} = new Date().getTime();

                                                    // Find the distance between now and the count down date
                                                    var distance{{$stream->id}} = countDownDate{{$stream->id}} - now{{$stream->id}};

                                                    // Time calculations for days, hours, minutes and seconds
                                                    var days{{$stream->id}} = Math.floor(distance{{$stream->id}} / (1000 * 60 * 60 * 24));
                                                    var hours{{$stream->id}} = Math.floor((distance{{$stream->id}} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                    var minutes{{$stream->id}} = Math.floor((distance{{$stream->id}} % (1000 * 60 * 60)) / (1000 * 60));
                                                    var seconds{{$stream->id}} = Math.floor((distance{{$stream->id}} % (1000 * 60)) / 1000);

                                                    // Display the result in the element with id="demo"
                                                    var dayWord = " дней ";
                                                    if (days{{$stream->id}} === 1) {
                                                        dayWord = " день ";
                                                    } else if (days{{$stream->id}} > 1 && days{{$stream->id}} < 5) {
                                                        dayWord = " дня ";
                                                    } else if (days{{$stream->id}} === 0) {
                                                        dayWord = "";
                                                        days{{{$stream->id}}} = "";
                                                    }

                                                    var hourWord = " часов ";
                                                    if (hours{{$stream->id}} === 1) {
                                                        hourWord = " час ";
                                                    } else if (hours{{$stream->id}} > 1 && hours{{$stream->id}} < 5) {
                                                        hourWord = " часа ";
                                                    } else if (hours{{$stream->id}} === 0) {
                                                        hourWord = "";
                                                        hours{{{$stream->id}}} = "";
                                                    }

                                                    var minuteWord = " минут ";
                                                    if (minutes{{$stream->id}} === 1) {
                                                        minuteWord = " минута ";
                                                    } else if (minutes{{$stream->id}} > 1 && minutes{{$stream->id}} < 5) {
                                                        minuteWord = " минуты ";
                                                    } else if (minutes{{$stream->id}} === 0) {
                                                        minuteWord = "";
                                                        minutes{{{$stream->id}}} = "";
                                                    }

                                                    var secondWord = " секунд ";
                                                    if (seconds{{$stream->id}} === 1) {
                                                        secondWord = " секунда ";
                                                    } else if (seconds{{$stream->id}} > 1 && seconds{{$stream->id}} < 5) {
                                                        secondWord = " секунды ";
                                                    } else if (seconds{{$stream->id}} === 0) {
                                                        secondWord = "";
                                                        seconds{{{$stream->id}}} = "";
                                                    }

                                                    document.getElementById("{{$stream->id}}timer").innerHTML = days{{$stream->id}} + dayWord + hours{{$stream->id}}
                                                        + hourWord + minutes{{$stream->id}} + minuteWord + seconds{{$stream->id}} + secondWord;

                                                    // If the count down is finished, write some text
                                                    if (distance{{$stream->id}} < 0) {
                                                        clearInterval(x{{$stream->id}});
                                                        document.getElementById("{{$stream->id}}timer").innerHTML = "EXPIRED";
                                                    }
                                                }, 1000);
                                            </script>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row row-fluid mb-0 pt-10">
                        <div class="col-sm-12">
                            <h3 class="text-center heading-center-custom mb-3">
                                Обо мне
                            </h3>
                        </div>
                    </div>
                    <div class="content-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-content">
                                        <div class="col-sm-8">
                                            <div class="row inner faq-wrapper">
                                                <div class="col-sm-12">
                                                    <div class="accordion" id="accordion1">
                                                        <ul>
                                                            <li>
                                                                <p><i class="fa fa-check-circle"></i> Меня зовут Айгуль
                                                                    Ахметкали, я визажист - бровист</p>
                                                            </li>
                                                            <li>
                                                                <p><i class="fa fa-check-circle"></i> Обучалась в
                                                                    Академии "MAKE UP FOR EVER" в Париже</p>
                                                            </li>
                                                            <li>
                                                                <p><i class="fa fa-check-circle"></i> Работала в
                                                                    итальянском центре эстетики и красоты "ALDO
                                                                    CAPPOLA",
                                                                    сейчас
                                                                    работаю в Швецарской клинике красоты "Beauty Lab by
                                                                    L. Raphael"</p>
                                                            </li>
                                                            <li>
                                                                <p><i class="fa fa-check-circle"></i> Я фанатик "Beauty"
                                                                    мира. Самле главное в нашей сфере - это развитие,
                                                                    я всегда совершенствую свои навыки и слежу за всеми
                                                                    последними
                                                                    тенденциями</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-full" style="background-color: #f8f9fb">
                    <div class="row row-fluid mt-10 mb-10">
                        <div class="col-sm-12">
                            <div class="caroufredsel product-slider nav-position-center" data-height="variable"
                                 data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                                <div class="product-slider-title">
                                    <h3 class="el-heading">Мои работы</h3>
                                </div>
                                <div class="caroufredsel-wrap">
                                    <div class="commerce columns-4">
                                        <ul class="products columns-4" data-columns="4">
                                            <li class="product">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/1.jpg"/>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/1.jpg"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/2.jpg"/>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/2.2.jpg"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/3.jpg"/>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/3.3.jpg"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/7.jpg"/>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/7.jpg"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/6.jpg"/>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/6.jpg"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/8.jpg"/>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <img width="375" height="505"
                                                                         src="front/images/myWorks/8.jpg"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" class="caroufredsel-prev"></a>
                                    <a href="#" class="caroufredsel-next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row row-fluid mb-0 pt-10">
                        <div class="col-sm-12">
                            <h3 class="text-center heading-center-custom mb-3">
                                Часто задаваемые вопросы
                            </h3>
                        </div>
                    </div>
                    <div class="row row-fluid mb-7">
                        <div class="col-sm-12">
                            <div class="testimonial mb-5">
                                <div class="caroufredsel" data-visible-min="1" data-visible-max="2"
                                     data-scroll-fx="scroll" data-speed="5000" data-responsive="1" data-infinite="1"
                                     data-autoplay="0">
                                    <div class="caroufredsel-wrap">
                                        <ul class="caroufredsel-items">

                                            @foreach($faqs as $faq)
                                                <li class="caroufredsel-item col-sm-6">
                                                    <div class="testimonial-wrap pb-3" style="background-color: #f1f1f1;
                                                border-radius: 5px; padding: 10px; margin: 30px; color: white; box-shadow: 15px 15px 15px rgba(200,200,200,0.5)">
                                                        <div class="testimonial-text">
                                                            <h5 class="text-center">
                                                                {{$faq->question}}
                                                            </h5>
                                                        </div>
                                                        <div class="clearfix">
                                                        <span class="testimonial-company text-center"
                                                              style="color: #0b0b0b;">
                                                        {{$faq->answer}}
                                                        </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--<div class="container">--}}
                {{--<div class="row row-fluid mb-0 pt-10">--}}
                {{--<div class="col-sm-12">--}}
                {{--<h3 class="text-center heading-center-custom mb-3">--}}
                {{--Контакты--}}
                {{--</h3>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="content-container">--}}
                {{--<div class="container">--}}
                {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                {{--<div class="col-sm-12">--}}
                {{--<div class="accordion mt-5 ml-5" id="accordion1">--}}
                {{--<p>г. Алматы</p>--}}
                {{--<p>Телефон: <a href="tel:+77011943346">+7701 194 33 46</a></p>--}}
                {{--<p>E-mail: <a href="mailto:glamblog.kz@gmail.com">glamblog.kz@gmail.com</a></p>--}}
                {{--<p>Instagram: <a href="https://www.instagram.com/_glamblog_/">@_glamblog_</a>--}}
                {{--</p>--}}
                {{--<br>--}}
                {{--</div>--}}
                {{--<h3>Сотрудничество:</h3>--}}
                {{--<p class="ml-5"><a href="mailto:glamblog.kz@gmail.com">glamblog.kz@gmail.com</a></p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection

@section('front.custom.js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>

@endsection