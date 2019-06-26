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
                                    <div>
                                        <div style="text-align: center">
                                            <img class="img-sm mb-3" src="{{asset($course->image_path)}}"
                                                 alt="Blog-1"/>
                                            <h2 class="entry-title mb-3">{{$course->name}}</h2>
                                            <a class="read-more btn btn-outline mb-3" href="">купить курс</a>
                                            <p>Стоимость: {{$course->price}} KZT</p>
                                            <br>
                                        </div>
                                        <p>
                                            {!!$course->description!!}
                                        </p>
                                        <h3>Уроки</h3>
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

                </div>
            </div>
        </div>
    </div>

@endsection