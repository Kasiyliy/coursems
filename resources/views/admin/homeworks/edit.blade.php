@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-header">
                        <h2>Редактровать</h2>
                        <a class="btn btn-info btn-sm" href="{{route('stream.index')}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset($homework->image_path)}}" alt="{{$homework->name}}" class="img-thumbnail">
                                </div>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" action="{{route('homeworks.update', ['id' => $homework->id])}}" method="post">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="name">Комментарий</label>
                                        <textarea name="comment"  class="form-control" placeholder="Комментарий" required>{{$homework->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Статус</label>
                                        <select class="form-control" name="course_id" required>
                                            <option selected value="{{$homework->status = 0}}">Не проверено</option>
                                            <option value="{{$homework->status = 1}}">Проверено</option>
                                        </select>
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