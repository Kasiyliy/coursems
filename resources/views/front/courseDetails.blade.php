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
                        <span>{{$course->name}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 main-wrap">
                    <div class="main-content">
                        <div class="posts">
                            <div class="posts-wrap posts-layout-center">

                                <article class="hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <h2 class="entry-title">{{$course->name}}</h2><br>
                                            <a href="blog-detail.html">
                                                <img width="700" height="450" src="{{asset($course->image_path)}}"
                                                     alt="Blog-1"/>
                                            </a>
                                        </div>
                                        @foreach($lessons as $lesson)
                                            <div class="entry-meta icon-meta">
                                                <div class="entry-info">
                                                    <div class="entry-header">
                                                        <h2 class="entry-title">
                                                            <a href="/courses/{{$course->id}}/lessons/{{$lesson->id}}">{{$lesson->name}} </a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection