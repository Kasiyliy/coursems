@extends('layouts.userSide')

@section('front.styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">
@endsection

@section('content')
    <div class="content-container no-padding">
        <div class="container-full">
            <div class="main-content">
                {{--Карусель--}}
                <div class="row row-fluid">
                    <div class="col-sm-12">
                        <div class="rev_slider_wrapper fullwidthbanner-container">
                            <div id="rev_slider" class="rev_slider fullwidthabanner">
                                <ul>
                                    @foreach($streams as $stream)
                                        <li data-transition="fade" data-slotamount="default" data-easein="default"
                                            data-easeout="default" data-masterspeed="default" data-thumb=""
                                            data-delay="6000" data-rotate="0" data-saveperformance="off"
                                            data-title="Slide"
                                            data-description="">
                                            <img src="front/images/slideshow/dummy.png" alt="" width="1920" height="657"
                                                 data-lazyload="images/slideshow/slider_1920x657.jpg"/>
                                            <div class="tp-caption home1-small-black tp-resizeme" data-x="125"
                                                 data-y="135"
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
                                            <div class="tp-caption home1-small-black tp-resizeme" data-x="125"
                                                 data-y="360"
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
                                                Цена:
                                                {{$stream->course->price}} KZT
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
                                            <div class="tp-caption home3-big-black tp-resizeme" data-x="125"
                                                 data-y="188"
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

                {{--Видео--}}
                <div class="container">
                    <div class="row row-fluid mb-5 mt-5">
                        <div class="col-sm-6">
                            <div class="box-ft box-ft-1">
                                <img src="front/images/thumb_569x341.jpg" alt="">
                                <a href="#">
                                    <span class="bof-tf-title-wrap">
                                        <span class="bof-tf-title-wrap-2">
                                            <span class="bof-tf-sub-title">New Comming</span>
                                            <span class="bof-tf-title">AUTUMN 2015</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="video-embed-shortcode">
                                <img src="front/images/thumb_569x341.jpg" alt=""/>
                                <div class="video-embed-shortcode mfp-hide">
                                    <div id="video-1" class="embed-wrap">
                                        <iframe width="1200" height="675"
                                                src="https://www.youtube.com/embed/M4z90wlwYs8?feature=oembed"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                                <a class="video-embed-action"
                                   data-video-inline="&lt;div class=&quot;video-embed-shortcode mfp-hide &quot;&gt;&lt;div id=&quot;video-1&quot; class=&quot;embed-wrap&quot;&gt;&lt;iframe width=&quot;1200&quot; height=&quot;675&quot; src=&quot;https://www.youtube.com/embed/M4z90wlwYs8?feature=oembed&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;&lt;/div&gt;&lt;/div&gt;"
                                   href="#video-1" data-rel="magnific-popup-video">
                                    <i class="elegant_arrow_triangle-right_alt2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--Курсы--}}
                <div class="container-full">
                    <div class="row row-fluid mb-0 row-no-padding">
                        <div class="col-sm-12 p-0">
                            <div class="post-grid-wrap">
                                <ul class="row list">
                                    @foreach($streams as $index => $stream)
                                        <li class="col-sm-12">
                                            <article class="hentry">
                                                <div class="hentry-wrap">
                                                    <div class="entry-featured" @if($index % 2 == 0) style="float: left"
                                                         @else style="float: right" @endif>
                                                        <a href="blog-detail.html">
                                                            <img width="700" height="450"
                                                                 src="{{asset($stream->course->image_path)}}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="entry-info" @if($index % 2 == 0) style="float: left"
                                                         @else style="float: right" @endif>
                                                        <div class="entry-header">
                                                            <h3 class="entry-title">
                                                                <a href="{{route('single.course', ['id' => $stream->course->id])}}">
                                                                    {{$stream->course->name}}
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div class="entry-content">
                                                            <p>
                                                                The summer holidays are wonderful. Dressing for them can
                                                                be significantly less so: Packing light is always at a
                                                                premium, but one never wants to feel high, dry, and
                                                                seriously...
                                                            </p>
                                                        </div>
                                                        <div class="entry-meta">
																<span class="meta-date">
																	Date:
																	<time datetime="2015-08-11T06:27:22+00:00">
																		August 11, 2015
																	</time>
																</span>
                                                            <span class="meta-author">
																	Цена:
                                                                    <del>{{$stream->course->price + 5000}}</del> {{$stream->course->price}} KZT
																</span>
                                                            <span class="meta-category">
																	@foreach($registered as $client)
                                                                    @if($client->id == $stream->id)
                                                                        Людей в группе: {{$client->count}}
                                                                    @endif
                                                                @endforeach
																</span>
                                                        </div>
                                                        <a class="read-more btn btn-outline"
                                                           href="{{route('single.course', ['id' => $stream->course_id])}}">
                                                            <span class="text-muted">Подробнее</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
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

                {{--Обо мне--}}
                <div class="container">
                    <div class="row row-fluid mb-0 pt-10">
                        <div class="col-sm-12">
                            <h3 class="text-center heading-center-custom mb-3">
                                Обо мне
                            </h3>
                        </div>
                    </div>

                    <div class="row row-fluid mb-5 mt-5">
                        <div class="col-sm-6">
                            <div class="box-ft box-ft-1">
                                <img src="front/images/avatar/about_me.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <ul class="mt-8">
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
                                        итальянском центре эстетики и красоты "Aldo
                                        Coppola",
                                        сейчас
                                        работаю в Швецарской клинике красоты "Beauty Lab by
                                        L. Raphael"</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-check-circle"></i> Я фанатик "Beauty"
                                        мира. Самое главное в нашей сфере - это развитие,
                                        я всегда совершенствую свои навыки и слежу за всеми
                                        последними
                                        тенденциями</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{--Мои работы--}}
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

                {{--FAQ--}}
                <div class="container mb-5">
                    <div class="row row-fluid pt-10">
                        <div class="col-sm-12">
                            <h3 class="text-center heading-center-custom mb-3">
                                Часто задаваемые вопросы
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-content">
                                <div class="col-sm-8">
                                    <div class="row inner faq-wrapper">
                                        <div class="col-sm-12">
                                            <div class="accordion" id="accordion1">
                                                @foreach($faqs as $faq)
                                                    <div class="accordion-group toggle toggle_default toggle_color_default toggle_size_md mb-1 pl-3">
                                                        <div class="accordion-heading toggle_title">
                                                            <a class="accordion-toggle" data-toggle="collapse"
                                                               data-parent="#accordion1" href="#collapse{{$faq->id}}">
                                                                <b>{{$faq->question}}</b>
                                                            </a>
                                                        </div>
                                                        <div id="collapse{{$faq->id}}"
                                                             class="accordion-body toggle_content collapse">
                                                            <div class="accordion-inner">
                                                                {{$faq->answer}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--Контакты--}}
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