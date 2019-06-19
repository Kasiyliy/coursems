@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-header">
                        <h2>Добавить</h2>
                        <a class="btn btn-primary btn-sm" href="{{route('stream.index')}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="{{route('stream.update', ['id' => $stream->id])}}" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Название</label>
                                        <input type="text" name="name" class="form-control" placeholder="Название" required value="{{$stream->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="course_id">Курс</label>
                                        <select class="form-control" name="course_id" required>
                                            @foreach($courses as $course)
                                                @if($course->id != $stream->course_id)
                                                    <option selected value="{{$course->id}}">{{$course->name}}</option>
                                                @else
                                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="started_at">Начало</label>
                                        <input type="date" class="form-control" name="started_at" required value="{{substr($stream->started_at ,0,10)}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="started_at">Дата окончания</label>
                                        <input type="date" class="form-control" name="deadline" required value="{{substr($stream->deadline ,0,10)}}">
                                    </div>
                                </div>

                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="Изменить">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection