@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel"  style="padding: 10px;">
                    <div class="panel-header">
                        <h2>Заявки</h2>
                        <a class="btn btn-success btn-sm" href="{{route('order.create')}}">Добавить</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Курс</th>
                                <th>Пользователь</th>
                                <th>Статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->course->name}}</td>
                                    <td>{{$order->user->email}}</td>
                                    <td>{{$order->status ? 'Оплачено' : 'Не оплачено'}}</td>
                                    <td class="d-flex">
                                        <form action="{{route('order.toggle.status' ,['id'=>$order->id ])}}" method="post">
                                            {{csrf_field()}}
                                            <button type="submit" class="btn-xs btn btn-warning"><span class="fa fa-money"></span> {{$order->status ? 'Не оплатил' : 'Оплатил'}}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection