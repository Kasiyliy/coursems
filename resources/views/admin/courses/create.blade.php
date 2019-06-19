@extends('layouts.admin')

@section('content')


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-header">
                        <h2>Добавить</h2>
                        <a  class="btn btn-primary btn-sm" href="{{route('course.index')}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="{{route('course.store')}}" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input type="text" name="name" class="form-control" placeholder="Наименование" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Описание</label>
                                        <textarea name="description" rows="10" class="form-control" placeholder="Описание" ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Цена</label>
                                        <input type="number" min="0" name="price" class="form-control" placeholder="Цена" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Фото</label>
                                        <input type="file" name="image_path" class="form-control" placeholder="Фото" required>
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