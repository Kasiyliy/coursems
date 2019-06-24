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
                        <span>Контакты</span>
                    </li>
                </ul>
            </div>
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
                                    <div class="content_element title">
                                        <h2>Контакты</h2>
                                    </div>
                                    <div class="accordion mt-5 ml-5" id="accordion1">
                                        <p>г. Алматы</p>
                                        <p>Телефон: <a href="tel:+77011943346">+7701 194 33 46</a></p>
                                        <p>E-mail: <a href="mailto:glamblog.kz@gmail.com">glamblog.kz@gmail.com</a></p>
                                        <p>Instagram: <a href="https://www.instagram.com/_glamblog_/">@_glamblog_</a>
                                        </p>
                                        <br>
                                    </div>
                                    <h3>Сотрудничество:</h3>
                                    <p class="ml-5"><a href="mailto:glamblog.kz@gmail.com">glamblog.kz@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection