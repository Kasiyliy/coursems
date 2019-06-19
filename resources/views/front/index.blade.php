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
                                             data-elementdelay="0.05">
                                            сам себе визажист
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
                                            дата старта
                                        </div>
                                        <div class="tp-caption home3-big-black tp-resizeme" data-x="125" data-y="188"
                                             data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                             data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500"
                                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                             data-elementdelay="0.05">
                                            Таймер
                                        </div>
                                    </li>
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
                                             data-elementdelay="0.05" data-end="8300">
                                            autumn comming
                                        </div>
                                        <div class="tp-caption home2-big-white tp-resizeme" data-x="-1" data-y="250"
                                             data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                             data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                             data-elementdelay="0.05" data-end="8300">
                                            sale up to 85%
                                        </div>
                                        <div class="tp-caption white-button rev-btn" data-x="" data-y="350"
                                             data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;"
                                             data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);cursor:pointer;"
                                             data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                             data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                             data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                             data-responsive="off" data-end="8300">
                                            discover the collection now
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
                <br>

                <div class="container">
                    <div class="row row-fluid mb-10">
                        <div class="col-sm-12">
                            <div class="caroufredsel product-slider nav-position-center" data-height="variable"
                                 data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                                <div class="product-slider-title">
                                    <h3 class="el-heading">Что даст вам курс?</h3>
                                </div>
                                <div class="caroufredsel-wrap">
                                    <div class="commerce columns-3">
                                        <ul class="products columns-3" data-columns="3">
                                            @foreach($courses as $course)
                                                <li class="product">
                                                    <div class="product-container">
                                                        <figure>
                                                            <div class="product-wrap">
                                                                <div class="product-images">
                                                                    <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                        <img style="height: 40vh; width: auto; margin: 0 auto;"
                                                                             src="{{asset($course->image_path)}}">
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="shop-loop-quickview">
                                                                            <a title="Quick view"
                                                                               href="{{route('single.course', ['id' => $course->id])}}">
                                                                                Подробнее
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <figcaption>
                                                                <div class="shop-loop-product-info">
                                                                    <div class="info-meta clearfix">
                                                                        <div class="star-rating">
                                                                            <span style="width:auto"></span>
                                                                        </div>
                                                                        <div class="loop-add-to-wishlist">
                                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                                <div class="yith-wcwl-add-button">
                                                                                    <a href="#" class="add_to_wishlist">
                                                                                        Add to Wishlist
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-content-wrap">
                                                                        <h3 class="product_title">
                                                                            <a href="{{route('single.course', ['id' => $course->id])}}">{{$course->name}}</a>
                                                                        </h3>
                                                                        <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						{{$course->price}} тенге
																					</span>
																				</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <a href="#" class="caroufredsel-prev"></a>
                                    <a href="#" class="caroufredsel-next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-full">
                    <div class="row row-fluid mb-0 row-no-padding">
                        <div class="col-sm-12 p-0">
                            <div class="post-grid-wrap">
                                <ul class="row list">
                                    @foreach($streams as $stream)
                                        <li class="col-sm-12">
                                            <article class="hentry">
                                                <div class="hentry-wrap">
                                                    <div class="entry-featured">
                                                        <div class="your-clock "></div>
                                                    </div>
                                                    <div class="entry-info">
                                                        <div class="entry-header">
                                                            <h3 class="entry-title">
                                                                <a href="{{route('single.course', ['id' => $stream->course->id])}}">
                                                                    {{$stream->name}}
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div class="entry-meta">
																<span class="meta-date">
																	Дата начала:
																	<time datetime="2015-08-11T06:27:49+00:00">{{$stream->started_at}}</time>
																</span>
                                                            <br>
                                                            <span class="meta-author">
																	Дата окончания:
                                                            <time datetime="2015-08-11T06:27:49+00:00">{{$stream->deadline}}</time>
																</span>
                                                            <br>
                                                            <span class="meta-category">
																	Курс:
																	<a class="link-black btn-link"
                                                                       href="{{route('single.course', ['id' => $stream->course_id])}}">
                                                                        {{$stream->course->name}}
                                                                        <span class="text-muted"> читать дальше..</span>
                                                                    </a>
																</span>
                                                        </div>

                                                        {{--@php--}}
                                                        {{--$paid = false;--}}
                                                        {{--if(Auth::user()){--}}
                                                        {{--foreach ($user->orders as $order){--}}
                                                        {{--if($order->stream_id == $stream->id)--}}
                                                        {{--$paid=true;--}}
                                                        {{--}--}}
                                                        {{--}--}}
                                                        {{--@endphp--}}
                                                        @if(!$stream->alreadyHasId)
                                                            <form method="POST"
                                                                  action="{{route('make.order', ['id' => $stream->id])}}">
                                                                @csrf
                                                                <button type="submit" class="read-more btn btn-outline">
                                                                    Записаться
                                                                </button>
                                                            </form>
                                                        @else
                                                            <h3>
                                                                @if($stream->paid)
                                                                    Вы записаны, пройдите к своим курсам!
                                                                @else
                                                                    Ваша заявка в обработке!
                                                                @endif
                                                            </h3>
                                                        @endif
                                                    </div>
                                                </div>
                                            </article>
                                            <br>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-fluid mb-0 pt-10">
                        <div class="col-sm-12">
                            <h3 class="text-center heading-center-custom mb-3">
                                FAQ
                            </h3>
                            <div class="mb-7">
                                <p class="text-center">
                                    Часто задаваемые вопросы
                                </p>
                            </div>
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
                                                    <div class="testimonial-wrap" style="background-color: #f1f1f1;
                                                border-radius: 5px; padding: 10px; margin: 30px; color: white; box-shadow: 15px 15px 15px rgba(200,200,200,0.5)">
                                                        <div class="testimonial-text">
                                                            <h5 class="text-center">
                                                                {{$faq->question}}
                                                            </h5>
                                                        </div>
                                                        <div class="clearfix">
                                                        <span class="testimonial-author text-center"
                                                              style="color: #0b0b0b;">
                                                        {{$faq->answer}}
                                                        </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                        <a href="#" class="caroufredsel-prev hide"></a>
                                        <a href="#" class="caroufredsel-next hide"></a>
                                    </div>
                                </div>
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
            </div>
        </div>
    </div>
@endsection

@section('front.custom.js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>
    <script type="text/javascript">

        var clock = $('.your-clock').FlipClock(3600, {
            countdown: true
        });


    </script>

@endsection