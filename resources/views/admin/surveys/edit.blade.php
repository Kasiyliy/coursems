@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-header">
                        <h2>Добавить</h2>
                        <a class="btn btn-primary btn-sm" href="{{URL::previous()}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="{{route('order.update', ['id' => $order->id])}}"
                              method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="course_id">Поток</label>
                                        <select class="form-control" name="stream_id" required>
                                            @foreach($streams as $stream)
                                                @if($stream->id != $order->stream_id)
                                                    <option  value="{{$stream->id}}">{{$stream->name}}</option>
                                                @else
                                                    <option selected value="{{$stream->id}}">{{$stream->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="course_id">Пользователь</label>
                                        <select class="form-control" name="user_id" required>
                                            @foreach($users as $user)
                                                @if($user->id != $order->user_id)
                                                    <option value="{{$user->id}}">{{$user->email}}</option>
                                                @else
                                                    <option selected value="{{$user->id}}">{{$user->email}}</option>
                                                @endif
                                            @endforeach
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