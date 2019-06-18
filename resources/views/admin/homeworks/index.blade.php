@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel"  style="padding: 10px;">
                    <div class="panel-header">
                        <h2>Домашние работы</h2>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Коментарий</th>
                                <th>Статус</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($homeworks as $homework)
                                <tr>
                                    <td>{{$homework->id}}</td>
                                    <td>{{$homework->comment}}</td>
                                    <td>
                                        @if($homework->status === 1)
                                            <p>Проверено</p>
                                        @else
                                            <p>Не проверено</p>
                                        @endif

                                    </td>
                                    <td class="d-flex">
                                        <a href="{{route('homeworks.edit' ,['id'=>$homework->id ])}}" class="btn-xs btn btn-primary"><span class="fa fa-edit"></span> Изменить</a>
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