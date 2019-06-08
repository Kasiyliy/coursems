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
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($streams as $stream)
                                <tr>
                                    <td>{{$stream->id}}</td>
                                    <td>{{$stream->name}}</td>
                                    <td>{{$stream->course->name}}</td>
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