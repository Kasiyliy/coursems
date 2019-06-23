@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel" style="padding: 10px">
                    <div class="panel-header">
                        <h2>Изменить</h2>
                        <a class="btn btn-primary btn-sm" href="{{route('course.index')}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{route('course.update' ,['id'=>$course->id])}}" method="post" novalidate>
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input type="text" value="{{$course->name}}" name="name" class="form-control"
                                               placeholder="Наименование" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Описание</label>
                                        <textarea id="editor" name="description" rows="10" class="form-control"
                                                  placeholder="Описание" required>{{$course->description}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Цена</label>
                                        <input type="number" value="{{$course->price}}" min="0" name="price"
                                               class="form-control" placeholder="Цена" required>
                                    </div>

                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-block" value="Изменить">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset($course->image_path)}}" alt="{{$course->name}}"
                                             class="img-thumbnail">
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('course.update.image' ,['id'=>$course->id])}}"
                                              method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="name">Фото</label>
                                                <input type="file" name="image_path" class="form-control"
                                                       placeholder="Фото" required>
                                            </div>
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-block"
                                                       value="Изменить фото">
                                            </div>
                                        </form>
                                    </div>
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