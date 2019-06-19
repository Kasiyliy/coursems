@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel"  style="padding: 10px;">
                    <div class="panel-header">
                        <h2>Курсы</h2>
                        <a class="btn btn-success btn-sm" href="{{route('course.create')}}">Добавить</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Наименование</th>
                                <th>Виден пользователям</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{$course->id}}</td>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->visible ? 'Да' : 'Нет'}}</td>
                                    <td class="d-flex">
                                        <button type="button" class="btn btn-danger btn-xs mr-1" data-toggle="modal" data-target="#exampleModal{{$course->id}}">
                                            <span class="fa fa-trash"></span> Удалить
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post" action="{{route('course.delete', ['id' => $course->id ])}}">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Предупреждение!</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Вы точно хотите удалить?
                                                            {{csrf_field()}}


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Отмена</button>
                                                            <input type="submit" value="Удалить" class="btn btn-danger btn-sm mr-1">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="{{route('course.edit' ,['id'=>$course->id ])}}" class="btn-xs btn btn-primary"><span class="fa fa-edit"></span> Изменить</a>
                                        <a href="{{route('course.details' ,['id'=>$course->id ])}}" class="btn-xs btn btn-info"><span class="fa fa-book"></span> Уроки</a>
                                        <form action="{{route('course.toggle.visible' ,['id'=>$course->id ])}}" method="post">
                                            {{csrf_field()}}
                                            <button type="submit" class="btn-xs btn btn-warning"><span class="fa fa-eye"></span> {{$course->visible ? 'Скрыть' : 'Опубликовать'}}</button>
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