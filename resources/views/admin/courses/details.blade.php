@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel" style="padding: 10px;">
                    <div class="panel-header">
                        <h2>Уроки курса <span class="text-muted">{{$course->name}}</span></h2>
                        <a class="btn btn-success btn-sm" href="{{route('lesson.create', ['id' => $course->id])}}">Добавить
                            урок</a>
                        <a class="btn btn-info btn-sm" href="{{route('course.index')}}">Назад</a>
                    </div>
                    <div class="panel-body">

                        @foreach($course->lessons as  $lesson)
                            <div class="panel panel-primary">
                                <div class="panel-heading">{{$lesson->name}}</div>
                                <div class="panel-body">
                                    {{$lesson->description}}<br>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"  src="{{$lesson->video_path}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <hr>
                                    <button type="button" class="btn btn-danger btn-xs mr-1" data-toggle="modal" data-target="#exampleModal{{$lesson->id}}">
                                        <span class="fa fa-trash"></span> Удалить
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$lesson->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form method="post" action="{{route('lesson.delete', ['id' => $lesson->id ])}}">
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

                                    <a href="{{route('lesson.edit' ,['id'=>$lesson->id ])}}" class="btn-xs btn btn-primary"><span class="fa fa-edit"></span> Изменить</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection