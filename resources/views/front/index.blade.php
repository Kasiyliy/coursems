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
                                    @foreach($courses as $course)
                                        <li data-transition="fade" data-slotamount="default" data-easein="default"
                                            data-easeout="default" data-masterspeed="default" data-thumb=""
                                            data-delay="6000" data-rotate="0" data-saveperformance="off"
                                            data-title="Slide"
                                            data-description="">
                                            @if($course->id == 2)
                                                <img src="front/images/slideshow/cosmetics.jpg" alt="" width="1920"
                                                     height="657"
                                                     data-lazyload="images/slideshow/slider_1920x657.jpg"/>
                                            @else
                                                <img src="front/images/slideshow/girl.jpg" alt="" width="1920"
                                                     height="657"
                                                     data-lazyload="images/slideshow/slider_1920x657.jpg"/>
                                            @endif
                                            {{--                                            <div class="tp-caption home1-small-black tp-resizeme" data-x="125"--}}
                                            {{--                                                 data-y="135"--}}
                                            {{--                                                 data-transform_idle="o:1;"--}}
                                            {{--                                                 data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"--}}
                                            {{--                                                 data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"--}}
                                            {{--                                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"--}}
                                            {{--                                                 data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"--}}
                                            {{--                                                 data-splitin="chars" data-splitout="none" data-responsive_offset="on"--}}
                                            {{--                                                 data-elementdelay="0.05" id="{{$stream->id}}timer">--}}
                                            {{--                                            </div>--}}
                                            <div class="tp-caption home3-big-black tp-resizeme" data-x="125"
                                                 data-y="150"
                                                 data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                                 data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                                 data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                                 data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                                 data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                                 data-elementdelay="0.05">{{$course->name}}
                                            </div>
                                            <div class="tp-caption tp-resizeme" data-x="125" data-y="300"
                                                 data-width="['none','none','none','none']"
                                                 data-height="['none','none','none','none']"
                                                 data-transform_idle="o:1;"
                                                 data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                                 data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                                 data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                                 data-responsive_offset="on" data-elementdelay="0.05">
                                                <h3>Цена: {{$course->price}} тенге</h3>
                                            </div>
                                            @if($course->name != 'Разбор косметики')
                                                <div class="tp-caption tp-resizeme" data-x="125" data-y="350"
                                                     data-width="['none','none','none','none']"
                                                     data-height="['none','none','none','none']"
                                                     data-transform_idle="o:1;"
                                                     data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                                     data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                                     data-responsive_offset="on" data-elementdelay="0.05">
                                                    Скидка 20% при репосте <a href="#">видео</a> в Stories
                                                </div>
                                            @endif
                                            <div class="tp-caption tp-resizeme" data-x="125" data-y="430"
                                                 data-width="['none','none','none','none']"
                                                 data-height="['none','none','none','none']"
                                                 data-transform_idle="o:1;"
                                                 data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                                 data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                                 data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                                 data-responsive_offset="on" data-elementdelay="0.05">
                                                <a class="read-more btn btn-outline"
                                                   href="{{route('make.order' ,['id'=>$course->id ])}}">
                                                    <span class="text-muted">Купить</span>
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                    <li data-transition="fade" data-slotamount="default" data-easein="default"
                                        data-easeout="default" data-masterspeed="default" data-thumb=""
                                        data-delay="6000" data-rotate="0" data-saveperformance="off"
                                        data-title="Slide"
                                        data-description="">
                                        <img src="front/images/slideshow/tree.jpg" alt="" width="1920"
                                             height="657"
                                             data-lazyload="images/slideshow/slider_1920x657.jpg"/>
                                        <div class="tp-caption tp-resizeme" data-x="125" data-y="300"
                                             data-width="['none','none','none','none']"
                                             data-height="['none','none','none','none']" data-transform_idle="o:1;"
                                             data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                             data-responsive_offset="on" data-elementdelay="0.05">
                                            Сделай подарок сестре, подруге или маме
                                        </div>
                                        <div class="tp-caption home3-big-black tp-resizeme" data-x="125"
                                             data-y="188"
                                             data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                             data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                             data-elementdelay="0.05">
                                            С наступающим :)
                                        </div>
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
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="video-embed-shortcode">
                                <img src="front/images/video_screen.png" alt=""/>
                                <div class="video-embed-shortcode mfp-hide">
                                    <div id="video-1" class="embed-wrap">
                                        <iframe width="1200" height="675"
                                                src="https://www.youtube.com/embed/lj33nrF8QPg"
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
                                    @foreach($courses as $index => $course)
                                        <li class="col-sm-12">
                                            <article class="hentry">
                                                <div class="hentry-wrap">
                                                    <div class="entry-featured" @if($index % 2 == 0) style="float: left"
                                                         @else style="float: right" @endif>
                                                        <a href="blog-detail.html">
                                                            <img width="700" height="450"
                                                                 src="{{asset($course->image_path)}}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="entry-info" @if($index % 2 == 0) style="float: left"
                                                         @else style="float: right" @endif>
                                                        <div class="entry-header">
                                                            <h1 class="entry-title">
                                                                <a href="{{route('single.course', ['id' => $course->id])}}">
                                                                    {{$course->name}}
                                                                </a>
                                                            </h1>
                                                        </div>
                                                        <div class="entry-content">
                                                            <p>
                                                                {!!$course->description!!}
                                                            </p>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <span class="meta-author">
                                                                Цена:
                                                                {{$course->price}} тенге
                                                            </span>
                                                        </div>
                                                        <a class="read-more btn btn-outline"
                                                           href="{{route('single.course', ['id' => $course->id])}}">
                                                            <span class="text-muted">Подробнее</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                        {{--                                        <script>--}}
                                        {{--                                            // Set the date we're counting down to--}}
                                        {{--                                            var countDownDate{{$stream->id}} = new Date("{{$stream->started_at}}");--}}
                                        {{--                                            countDownDate{{$stream->id}}.setDate(countDownDate{{$stream->id}}.getDate() + 1);--}}
                                        {{--                                            countDownDate{{$stream->id}} = countDownDate{{$stream->id}}.getTime();--}}

                                        {{--                                            // Update the count down every 1 second--}}
                                        {{--                                            var x{{$stream->id}} = setInterval(function () {--}}

                                        {{--                                                // Get today's date and time--}}
                                        {{--                                                var now{{$stream->id}} = new Date().getTime();--}}

                                        {{--                                                // Find the distance between now and the count down date--}}
                                        {{--                                                var distance{{$stream->id}} = countDownDate{{$stream->id}} - now{{$stream->id}};--}}

                                        {{--                                                // Time calculations for days, hours, minutes and seconds--}}
                                        {{--                                                var days{{$stream->id}} = Math.floor(distance{{$stream->id}} / (1000 * 60 * 60 * 24));--}}
                                        {{--                                                var hours{{$stream->id}} = Math.floor((distance{{$stream->id}} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));--}}
                                        {{--                                                var minutes{{$stream->id}} = Math.floor((distance{{$stream->id}} % (1000 * 60 * 60)) / (1000 * 60));--}}
                                        {{--                                                var seconds{{$stream->id}} = Math.floor((distance{{$stream->id}} % (1000 * 60)) / 1000);--}}

                                        {{--                                                // Display the result in the element with id="demo"--}}
                                        {{--                                                var dayWord = " дней ";--}}
                                        {{--                                                if (days{{$stream->id}} === 1) {--}}
                                        {{--                                                    dayWord = " день ";--}}
                                        {{--                                                } else if (days{{$stream->id}} > 1 && days{{$stream->id}} < 5) {--}}
                                        {{--                                                    dayWord = " дня ";--}}
                                        {{--                                                } else if (days{{$stream->id}} === 0) {--}}
                                        {{--                                                    dayWord = "";--}}
                                        {{--                                                    days{{{$stream->id}}} = "";--}}
                                        {{--                                                }--}}

                                        {{--                                                var hourWord = " часов ";--}}
                                        {{--                                                if (hours{{$stream->id}} === 1) {--}}
                                        {{--                                                    hourWord = " час ";--}}
                                        {{--                                                } else if (hours{{$stream->id}} > 1 && hours{{$stream->id}} < 5) {--}}
                                        {{--                                                    hourWord = " часа ";--}}
                                        {{--                                                } else if (hours{{$stream->id}} === 0) {--}}
                                        {{--                                                    hourWord = "";--}}
                                        {{--                                                    hours{{{$stream->id}}} = "";--}}
                                        {{--                                                }--}}

                                        {{--                                                var minuteWord = " минут ";--}}
                                        {{--                                                if (minutes{{$stream->id}} === 1) {--}}
                                        {{--                                                    minuteWord = " минута ";--}}
                                        {{--                                                } else if (minutes{{$stream->id}} > 1 && minutes{{$stream->id}} < 5) {--}}
                                        {{--                                                    minuteWord = " минуты ";--}}
                                        {{--                                                } else if (minutes{{$stream->id}} === 0) {--}}
                                        {{--                                                    minuteWord = "";--}}
                                        {{--                                                    minutes{{{$stream->id}}} = "";--}}
                                        {{--                                                }--}}

                                        {{--                                                var secondWord = " секунд ";--}}
                                        {{--                                                if (seconds{{$stream->id}} === 1) {--}}
                                        {{--                                                    secondWord = " секунда ";--}}
                                        {{--                                                } else if (seconds{{$stream->id}} > 1 && seconds{{$stream->id}} < 5) {--}}
                                        {{--                                                    secondWord = " секунды ";--}}
                                        {{--                                                } else if (seconds{{$stream->id}} === 0) {--}}
                                        {{--                                                    secondWord = "";--}}
                                        {{--                                                    seconds{{{$stream->id}}} = "";--}}
                                        {{--                                                }--}}

                                        {{--                                                document.getElementById("{{$stream->id}}timer").innerHTML = days{{$stream->id}} + dayWord + hours{{$stream->id}}--}}
                                        {{--                                                    + hourWord + minutes{{$stream->id}} + minuteWord + seconds{{$stream->id}} + secondWord;--}}

                                        {{--                                                // If the count down is finished, write some text--}}
                                        {{--                                                if (distance{{$stream->id}} < 0) {--}}
                                        {{--                                                    clearInterval(x{{$stream->id}});--}}
                                        {{--                                                    document.getElementById("{{$stream->id}}timer").innerHTML = "EXPIRED";--}}
                                        {{--                                                }--}}
                                        {{--                                            }, 1000);--}}
                                        {{--                                        </script>--}}
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
                                <img src="front/images/avatar/about_me.jpg" alt="about_me">
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