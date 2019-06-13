@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-header">
                        <h2>Изменить</h2>
                        <a class="btn btn-primary btn-sm" href="{{route('faq.index')}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="{{route('faq.update', ['id' => $faq->id])}}" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Вопрос</label>
                                        <input type="text" name="question" class="form-control" placeholder="Вопрос" required value="{{$faq->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Ответ</label>
                                        <input type="text" name="answer" class="form-control" placeholder="Ответ" required value="{{$faq->name}}">
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