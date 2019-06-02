@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel" style="padding: 10px;">
                    <div class="panel-header">
                        <h2>Уроки курса <span class="text-muted">{{$course->name}}</span></h2>
                        <a class="btn btn-success btn-sm" href="{{route('lesson.create', ['id' => $course->id])}}">Добавить урок</a>
                        <a class="btn btn-info btn-sm" href="{{route('course.index')}}">Назад</a>
                    </div>
                    <div class="panel-body">

                        @foreach($course->lessons as  $lesson  )
                            <div class="panel panel-primary">
                                <div class="panel-heading">{{$lesson->name}}</div>
                                <div class="panel-body">{{$lesson->description}}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection