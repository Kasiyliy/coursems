@extends('layouts.userSide')
@section('content')
    <div class="content-container commerce page-layout-left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 main-wrap">
                    <div class="main-content">
                        <div class="content-container">
                            <div class="col-md-12 main-wrap">
                                <div class="main-content">
                                    <div class="posts">
                                        <div class="posts-wrap posts-layout-center">
                                            <article class="hentry">
                                                <div class="hentry-wrap">
                                                    <div class="entry-featured">
                                                        <iframe class="embed-responsive-item"
                                                                width="700" height="450"
                                                                src="{{$lesson->video_path}}" frameborder="0"
                                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen></iframe>
                                                    </div>
                                                    <div class="entry-meta icon-meta">
                                                        <div class="entry-info">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title">
                                                                    {{$lesson->name}}
                                                                </h2>
                                                            </div>
                                                            {{$lesson->description}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sidebar-wrap">
                    <div class="main-sidebar">
                        <div class="widget widget_product_categories">
                            <h4 class="widget-title"><span>{{$lesson->course->name}}</span></h4>
                            <ul class="product-categories">
                                @foreach($visibleLessons as $visibleLesson)
                                    <li><a href="/courses/lessons/{{$visibleLesson->id}}">{{$visibleLesson->name}}</a></li>
                                @endforeach
                            </ul>

                            <ul>
                                @if($nextLesson)
                                    <li><a href="/courses/lessons/{{$nextLesson->id}}">Перейти к следующему уроку..</a></li>
                                    @else
                                    <li>
                                        @if(!$lastHomework)
                                            <a href="{{route('homework.add', ['id' => $lesson->id])}}">Сдать домашнее задание</a>
                                            @else
                                            Курс окончен!
                                        @endif
                                    </li>
                                @endif
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection