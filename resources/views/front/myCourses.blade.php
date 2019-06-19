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
                        <span>Мои курсы</span>
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
                        <form class="commerce">
                            <div class="wishlist-title ">
                                <h2>Мои курсы</h2>
                            </div>
                            <table class="shop_table cart wishlist_table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name"><span class="nobr">Название курса</span></th>
                                    <th class="product-price"><span class="nobr">Цена</span></th>
                                    <th class="product-add-to-cart">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($myStreams as $myStream)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a>
                                                <img width="100" height="150" src="{{asset($myStream->course->image_path)}}" alt="Product-1"/>
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="{{route('single.course',['id' =>$myStream->course->id])}}" class="btn btn-link" >{{$myStream->course->name}}</a>
                                        </td>
                                        <td class="product-price">
													<span class="amount">
														KZT {{$myStream->course->price}}</span>
													</span>
                                        </td>
                                        <td class="product-add-to-cart">
                                            @php $firstLesson = $myStream->course->lessons->where('next_lesson_id',1)->first() @endphp
                                            @if($firstLesson)
                                            <a href="{{route('single.course.lessons',['id' => $firstLesson->id])}}" class="add_to_cart_button button"> Перейти к курсу</a>
                                            @else
                                                Пока еще нет уроков!
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">&nbsp;</td>
                                </tr>
                                </tfoot>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection