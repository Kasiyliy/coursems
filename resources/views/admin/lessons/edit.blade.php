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
                                <form action="{{route('lesson.update' ,['id'=>$lesson->id])}}" method="post" novalidate>
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input type="text" value="{{$lesson->name}}" name="name" class="form-control"
                                               placeholder="Наименование" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Описание</label>
                                        <textarea id="editor" name="description" class="form-control" placeholder="Описание"
                                                  required>{{$lesson->description}}</textarea>
                                    </div>

                                    <input type="hidden" value="{{$lesson->course_id}}" name="course_id">

                                    <div class="form-group">
                                        <label for="name">Ссылка на видео</label>
                                        <input type="text" value="{{$lesson->video_path}}" min="0" name="video_path"
                                               class="form-control" placeholder="Ссылка" required>
                                    </div>


                                    <div class="form-group">
                                        <label for="lesson_id">Очередность урока</label>
                                        <input type="number" value="{{$lesson->next_lesson_id}}" min="0" name="next_lesson_id"
                                               class="form-control" placeholder="Номер урока" required>
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
    <script src="{{asset('admin/cke/cke.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection