@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel" style="padding: 10px;">
                    <div class="panel-header">
                        <h2>Участники потока <span class="text-muted">{{$stream->name}}</span></h2>
                        {{--<a class="btn btn-success btn-sm" href="{{route('lesson.create', ['id' => $stream->id])}}">Добавить--}}
                            {{--урок</a>--}}
                        <a class="btn btn-info btn-sm" href="{{route('stream.index')}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Пользователь</th>
                                <th>Статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $id => $order)
                                <tr>
                                    <td>{{$id+1}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->status ? 'Оплачено' : 'Не оплачено'}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('order.edit' ,['id'=>$order->id ])}}" class="btn-xs btn btn-primary"><span class="fa fa-edit"></span> Изменить</a>
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