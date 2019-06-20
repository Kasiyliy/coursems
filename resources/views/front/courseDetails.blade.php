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
                <div class="col-md-7 main-wrap">
                    <div class="main-content">
                        <div class="posts">
                            <div class="posts-wrap posts-layout-center">

                                <article class="hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <h2 class="entry-title">{{$course->name}}</h2><br>
                                            <a>
                                                <img width="700" height="450" src="{{asset($course->image_path)}}"
                                                     alt="Blog-1"/>
                                            </a>
                                        </div>
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <th>
                                                <p class="text-center">№</p>
                                            </th>
                                            <th>
                                                <p class="text-left">Наименование</p>
                                            </th>
                                            </thead>
                                            <tbody>
                                            @if(count($lessons))
                                                @foreach($lessons as $index => $lesson)
                                                    <tr>
                                                        <td>
                                                            <b>{{$index+1}}</b>
                                                        </td>
                                                        <td>
                                                            <p class="text-dark text-left">{{$lesson->name}}</p>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="2">
                                                        <p class="text-center">Нет уроков</p>
                                                    </td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="entry-content">
                        <p>
                            {!!$course->description!!}
                        </p>
                    </div>
                    <div class="entry-header">
                        <h4>Стоимость: {{$course->price}} KZT</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection