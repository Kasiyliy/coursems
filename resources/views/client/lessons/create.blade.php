@extends('layouts.client')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-header">
                        <h2>Добавить урок к курсу: {{$course->name}}</h2>
                        <a  class="btn btn-primary btn-sm" href="{{route('course.details', ['id'=>$course->id])}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="{{route('lesson.store')}}" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input value="{{old('name')}}" type="text" name="name" class="form-control" placeholder="Наименование" required>
                                    </div>
                                    <input type="hidden" name="course_id" value="{{$course->id}}" required>
                                    <div class="form-group">
                                        <label for="name">Описание</label>
                                        <textarea name="description" rows="5" class="form-control" placeholder="Описание" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Ссылка на видео</label>
                                        <input type="text" min="0" name="video_path" class="form-control" placeholder="Ссылка" required>
                                    </div>
                                </div>
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="Добавить">
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