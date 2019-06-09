@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel"  style="padding: 10px;">
                    <div class="panel-header">
                        <h2>Заявки</h2>
                        <a class="btn btn-success btn-sm" href="{{route('stream.create')}}">Добавить</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Курс</th>
                                <th>Начало</th>
                                <th>Конец</th>
                                <th>Статус</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($streams as $stream)
                                <tr>
                                    <td>{{$stream->id}}</td>
                                    <td>{{$stream->name}}</td>
                                    <td>{{$stream->course->name}}</td>
                                    <td>{{substr($stream->started_at,0,10)}}</td>
                                    <td>{{substr($stream->deadline,0,10)}}</td>
                                    <td><?= $stream->started ? "Открыт" : "Закрыт"?></td>
                                    <td>
                                        <a href="{{route('stream.edit' ,['id'=>$stream->id ])}}" class="btn-xs btn btn-primary"><span class="fa fa-edit"></span> Изменить</a>
                                        <a href="{{route('stream.details' ,['id'=>$stream->id ])}}" class="btn-xs btn btn-info"><span class="fa fa-book"></span> Участники</a>
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