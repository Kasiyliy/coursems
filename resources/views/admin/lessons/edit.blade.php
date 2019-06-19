@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel" style="padding: 10px">
                    <div class="panel-header">
                        <h2>Изменить</h2>
                        <a class="btn btn-primary btn-sm" href="{{route('course.details', ['id' => $lesson->course_id])}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{route('lesson.update' ,['id'=>$lesson->id])}}" method="post">
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input type="text" value="{{$lesson->name}}" name="name" class="form-control"
                                               placeholder="Наименование" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Описание</label>
                                        <textarea name="description" class="form-control" placeholder="Описание"
                                                  required>{{$lesson->description}}</textarea>
                                    </div>

                                    <input type="hidden" value="{{$lesson->course_id}}" name="course_id">

                                    <div class="form-group">
                                        <label for="name">Ссылка на видео</label>
                                        <input type="text" value="{{$lesson->video_path}}" min="0" name="video_path"
                                               class="form-control" placeholder="Ссылка" required>
                                    </div>


                                    <div class="form-group">
                                        <label for="lesson_id">Следующий урок</label>
                                        <select class="form-control" name="next_lesson_id">
                                            <option></option>
                                            @foreach($lesson->course->lessons as $l)
                                                <option {{$lesson->previousLesson ? $lesson->previousLesson->id === $l->id ? 'disabled' : '' : ''}}
                                                        {{$lesson->next_lesson_id ? $lesson->next_lesson_id === $l->id ? 'selected'  :''  : ''}}
                                                        value="{{$l->id}}">{{$l->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-block" value="Изменить">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"  src="{{$lesson->video_path}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
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

@section('scripts')
    <script src="{{asset('admin/tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            setup: function (editor) {
                editor.on('submit', function (e) {
                    editor.save();
                });
            }
        });
    </script>
@endsection