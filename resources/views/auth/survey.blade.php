@extends('layouts.app')

@section('content')
    <div class="container" style="overflow: scroll">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Опрос</div>

                    <div class="card-body">
                        <form enctype="multipart/form-data" method="POST" action="{{ route('survey.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">Возраст</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="age" id="age" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="18-25">18-25</option>
                                        <option value="25-35">25-35</option>
                                        <option value="35-50">35-50</option>
                                        <option value="50-75">50-75</option>
                                    </select>

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
                                    <select class="form-control" name="skin_undertone" id="skin_undertone" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="холодный">холодный</option>
                                        <option value="нейтральный">нейтральный</option>
                                        <option value="теплый">теплый</option>
                                    </select>

                                    @if ($errors->has('skin_undertone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skin_undertone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="skin_type" class="col-md-4 col-form-label text-md-right">Какой у тебя тип
                                    кожи?</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="skin_type" id="skin_type" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="сухая">сухая</option>
                                        <option value="комбинированная">комбинированная</option>
                                        <option value="жирная">жирная</option>
                                    </select>

                                    @if ($errors->has('skin_type'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skin_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="skin_tone" class="col-md-4 col-form-label text-md-right">Какой у тебя тон
                                    кожи?</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="skin_tone" id="skin_tone" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="светлый">светлый</option>
                                        <option value="средний">средний</option>
                                        <option value="смуглый">смуглый</option>
                                    </select>

                                    @if ($errors->has('skin_tone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skin_tone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="skin_photo" class="col-md-4 col-form-label text-md-right">Прикрепите фото
                                    кожи с правильным
                                    освещением</label>

                                <div class="col-md-6">
                                    <input type="file" name="skin_photo" class="form-control" placeholder="Фото"
                                           required>

                                    @if ($errors->has('skin_photo'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skin_photo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="skin_problems" class="col-md-4 col-form-label text-md-right">Есть ли на лице
                                    несовершенства?</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="skin_problems" id="skin_problems" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="нет">нет</option>
                                        <option value="акне">акне</option>
                                        <option value="рубцы">рубцы</option>
                                        <option value="пигментация">пигментация</option>
                                        <option value="ветилиго">ветилиго</option>
                                        <option value="псориаз">псориаз</option>
                                    </select>

                                    @if ($errors->has('skin_problems'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skin_problems') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tone_pressure" class="col-md-4 col-form-label text-md-right">Какой плотности
                                    тон для тебя комфортный?</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="tone_pressure" id="tone_pressure" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="легкий">легкий</option>
                                        <option value="средний">средний</option>
                                        <option value="плотный">плотный</option>
                                    </select>

                                    @if ($errors->has('tone_pressure'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tone_pressure') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tone_finish" class="col-md-4 col-form-label text-md-right">Какой финиш
                                    тонального тебе нравится больше?</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="tone_finish" id="tone_finish" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="влажный">влажный</option>
                                        <option value="матовый">матовый</option>
                                    </select>

                                    @if ($errors->has('tone_finish'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tone_finish') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="make_type" class="col-md-4 col-form-label text-md-right">Какой макияж ты
                                    предпочитаешь на каждый
                                    день?</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="make_type" id="make_type" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="легкий">легкий</option>
                                        <option value="средний">средний</option>
                                        <option value="плотный">плотный</option>
                                    </select>

                                    @if ($errors->has('make_type'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('make_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eye_color" class="col-md-4 col-form-label text-md-right">Какого цвета у тебя
                                    глаза?</label>

                                <div class="col-md-6">
                                    <input id="eye_color" type="text"
                                           class="form-control{{ $errors->has('eye_color') ? ' is-invalid' : '' }}"
                                           name="eye_color" value="{{ old('eye_color') }}" required autofocus>

                                    @if ($errors->has('eye_color'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('eye_color') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hair_color" class="col-md-4 col-form-label text-md-right">Какого цвета у
                                    тебя волосы?</label>

                                <div class="col-md-6">
                                    <input id="hair_color" type="text"
                                           class="form-control{{ $errors->has('hair_color') ? ' is-invalid' : '' }}"
                                           name="hair_color" value="{{ old('hair_color') }}" required autofocus>

                                    @if ($errors->has('hair_color'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hair_color') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="emphasize" class="col-md-4 col-form-label text-md-right">Что любишь выделять
                                    больше?</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="emphasize" id="emphasize" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="глаза">глаза</option>
                                        <option value="губы">губы</option>
                                    </select>

                                    @if ($errors->has('emphasize'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emphasize') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="important" class="col-md-4 col-form-label text-md-right">Что в макияже для
                                    тебя важнее всего?</label>

                                <div class="col-md-6">
                                    <input id="important" type="text"
                                           class="form-control{{ $errors->has('important') ? ' is-invalid' : '' }}"
                                           name="important" value="{{ old('important') }}" required autofocus>

                                    @if ($errors->has('important'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('important') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fav_color" class="col-md-4 col-form-label text-md-right">Какие цвета ты
                                    любишь больше всего в
                                    макияже?</label>

                                <div class="col-md-6">
                                    <input id="fav_color" type="text"
                                           class="form-control{{ $errors->has('fav_color') ? ' is-invalid' : '' }}"
                                           name="fav_color" value="{{ old('fav_color') }}" required autofocus>

                                    @if ($errors->has('fav_color'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fav_color') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="outfit" class="col-md-4 col-form-label text-md-right">Какого стиля в одежде
                                    ты придерживаешься
                                    чаще всего?</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="outfit" id="outfit" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="спорт">спорт</option>
                                        <option value="casual/повседневный">casual/повседневный</option>
                                        <option value="деловой">деловой</option>
                                    </select>

                                    @if ($errors->has('outfit'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('outfit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cosmetics" class="col-md-4 col-form-label text-md-right">Какую косметику ты
                                    можешь купить?</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="cosmetics" id="cosmetics" required>
                                        <option value="" disabled selected>Выберите один из вариантов</option>
                                        <option value="бюджетную">бюджетную</option>
                                        <option value="средние цены">средние цены</option>
                                        <option value="люкс">люкс</option>
                                    </select>

                                    @if ($errors->has('cosmetics'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cosmetics') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cosmetics_photo" class="col-md-4 col-form-label text-md-right">Прикрепите фото
                                    своей косметички</label>

                                <div class="col-md-6">
                                    <input type="file" name="cosmetics_photo" class="form-control" placeholder="Фото"
                                           required>

                                    @if ($errors->has('cosmetics_photo'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cosmetics_photo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Отправить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
