@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel" style="padding: 10px;">
                    <div class="panel-header">
                        <h2>Заявки на разбор косметики</h2>
                        <a class="btn btn-success btn-sm" href="{{route('survey.index')}}">Назад</a>
                    </div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" method="POST" action="">
                            @csrf

                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">Возраст</label>

                                <div class="col-md-6">
                                    {{$user->survey->age}}

                                    @if ($errors->has('age'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="skin_undertone" class="col-md-4 col-form-label text-md-right">Какой у тебя
                                    подтон?</label>

                                <div class="col-md-6">
                                    {{$user->survey->skin_undertone}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="skin_type" class="col-md-4 col-form-label text-md-right">Какой у тебя тип
                                    кожи?</label>

                                <div class="col-md-6">
                                    {{$user->survey->skin_type}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="skin_tone" class="col-md-4 col-form-label text-md-right">Какой у тебя тон
                                    кожи?</label>

                                <div class="col-md-6">
                                    {{$user->survey->skin_tone}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="skin_photo" class="col-md-4 col-form-label text-md-right">Прикрепите фото
                                    кожи с правильным
                                    освещением</label>

                                <div class="col-md-6">
                                    <img src="{{asset($user->survey->skin_photo)}}" alt=""
                                         class="img-thumbnail">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="skin_problems" class="col-md-4 col-form-label text-md-right">Есть ли на лице
                                    несовершенства?</label>

                                <div class="col-md-6">
                                    {{$user->survey->skin_problems}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tone_pressure" class="col-md-4 col-form-label text-md-right">Какой плотности
                                    тон для тебя комфортный?</label>

                                <div class="col-md-6">
                                    {{$user->survey->tone_pressure}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tone_finish" class="col-md-4 col-form-label text-md-right">Какой финиш
                                    тонального тебе нравится больше?</label>

                                <div class="col-md-6">
                                    {{$user->survey->tone_finish}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="make_type" class="col-md-4 col-form-label text-md-right">Какой макияж ты
                                    предпочитаешь на каждый
                                    день?</label>

                                <div class="col-md-6">
                                    {{$user->survey->make_type}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eye_color" class="col-md-4 col-form-label text-md-right">Какого цвета у тебя
                                    глаза?</label>

                                <div class="col-md-6">
                                    {{$user->survey->eye_color}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hair_color" class="col-md-4 col-form-label text-md-right">Какого цвета у
                                    тебя волосы?</label>

                                <div class="col-md-6">
                                    {{$user->survey->hair_color}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="emphasize" class="col-md-4 col-form-label text-md-right">Что любишь выделять
                                    больше?</label>

                                <div class="col-md-6">
                                    {{$user->survey->emphasize}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="important" class="col-md-4 col-form-label text-md-right">Что в макияже для
                                    тебя важнее всего?</label>

                                <div class="col-md-6">
                                    {{$user->survey->important}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fav_color" class="col-md-4 col-form-label text-md-right">Какие цвета ты
                                    любишь больше всего в
                                    макияже?</label>

                                <div class="col-md-6">
                                    {{$user->survey->fav_color}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="outfit" class="col-md-4 col-form-label text-md-right">Какого стиля в одежде
                                    ты придерживаешься
                                    чаще всего?</label>

                                <div class="col-md-6">
                                    {{$user->survey->outfit}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cosmetics" class="col-md-4 col-form-label text-md-right">Какую косметику ты
                                    можешь купить?</label>

                                <div class="col-md-6">
                                    {{$user->survey->cosmetics}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cosmetics_photo" class="col-md-4 col-form-label text-md-right">Прикрепите фото
                                    своей косметички</label>

                                <div class="col-md-6">
                                    <img src="{{asset($user->survey->cosmetics_photo)}}" alt=""
                                         class="img-thumbnail">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cosmetics_photo" class="col-md-4 col-form-label text-md-right">Почта пользователя</label>

                                <div class="col-md-6">
                                    {{$user->email}}
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection