@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel" style="padding: 10px;">
                    <div class="panel-header">
                        <h2>Уроки курса <span class="text-muted">{{$course->name}}</span></h2>
                        <a class="btn btn-info btn-sm" href="{{route('client.course.index')}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        @foreach($course->lessons as  $lesson  )
                            <div class="panel panel-primary">
                                <div class="panel-heading">{{$lesson->name}}</div>
                                <div class="panel-body">
                                    {{$lesson->description}}<br>
                                    <iframe width="560" height="315" src="{{$lesson->video_path}}" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    <br>
                                    <a href="{{route('lesson.edit' ,['id'=>$lesson->id ])}}"
                                       class="btn-xs btn btn-primary"><span class="fa fa-edit"></span> Изменить</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection