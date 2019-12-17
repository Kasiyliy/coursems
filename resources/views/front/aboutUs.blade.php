@extends('layouts.userSide')
@section('content')
    <div class="heading-container">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li>
                        <span>
                            <a class="home" href="{{route('front')}}">
                                <span>Главная</span>
                            </a>
                        </span>
                    </li>
                    <li>
                        <span>Обо мне</span>
                    </li>
                </ul>
            </div>
        </div>
    </div><br>
    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content">
                        <div class="col-sm-8">
                            <div class="row inner faq-wrapper">
                                <div class="col-sm-12">
                                    <div class="content_element title">
                                        <h2>Обо мне</h2>
                                    </div>
                                    <div class="accordion" id="accordion1">
                                        <ul>
                                            <li>
                                                <p><i class="fa fa-check-circle"></i> Меня зовут Айгуль Ахметкали, я визажист - бровист</p>
                                            </li>
                                            <li>
                                                <p><i class="fa fa-check-circle"></i> Обучалась в Академии "MAKE UP FOR EVER" в Париже</p>
                                            </li>
                                            <li>
                                                <p><i class="fa fa-check-circle"></i> Работала в итальянском центре эстетики и красоты "ALDO CAPPOLA",
                                                    сейчас
                                                    работаю в Швейцарской клинике красоты "Beauty Lab by L. Raphael"</p>
                                            </li>
                                            <li>
                                                <p><i class="fa fa-check-circle"></i> Я фанатик "Beauty" мира. Самле главное в нашей сфере - это развитие,
                                                    я всегда совершенствую свои навыки и слежу за всеми последними
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
        <div class="container">
            <div class="row row-fluid mt-10 mb-10">
                <div class="col-sm-12">
                    <div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
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
                                                            <img width="375" height="505" src="front/images/myWorks/1.jpg"/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="front/images/myWorks/1.jpg"/>
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
                                                            <img width="375" height="505" src="front/images/myWorks/2.jpg"/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="front/images/myWorks/2.2.jpg"/>
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
                                                            <img width="375" height="505" src="front/images/myWorks/3.jpg"/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="front/images/myWorks/3.3.jpg"/>
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
                                                            <img width="375" height="505" src="front/images/myWorks/7.jpg"/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="front/images/myWorks/7.jpg"/>
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
                                                            <img width="375" height="505" src="front/images/myWorks/6.jpg"/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="front/images/myWorks/6.jpg"/>
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
                                                            <img width="375" height="505" src="front/images/myWorks/8.jpg"/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="front/images/myWorks/8.jpg"/>
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
    </div>
@endsection