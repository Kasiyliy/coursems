@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Опрос</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">Возраст</label>

                            <div class="col-md-6">
                                <select class="form-control" name="age" id="age">
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

{{--                        TODO: rename and add to db--}}
                        <div class="form-group row">
                            <label for="skin_tone" class="col-md-4 col-form-label text-md-right">Какой у тебя подтон?</label>

                            <div class="col-md-6">
                                <select class="form-control" name="skin_tone" id="skin_tone">
                                    <option value="холодный">холодный</option>
                                    <option value="нейтральный">нейтральный</option>
                                    <option value="теплый">теплый</option>
                                </select>

                                @if ($errors->has('skin_tone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skin_tone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="skin_type" class="col-md-4 col-form-label text-md-right">Какой у тебя тип кожи?</label>

                            <div class="col-md-6">
                                <select class="form-control" name="skin_type" id="skin_type">
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
                            <label for="skin_tone" class="col-md-4 col-form-label text-md-right">Какой у тебя подтон?</label>

                            <div class="col-md-6">
                                <select class="form-control" name="skin_tone" id="skin_tone">
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

{{--                        TODO: add photo--}}

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Фамилия</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email адрес (почта)</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">Номер телефона</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="tel" min="0" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Подтвердите пароль</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Ссылка на instagram</label>

                            <div class="col-md-6">
                                <input class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}" name="instagram" value="{{ old('instagram') }}" required>

                                @if ($errors->has('instagram'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('instagram') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Регистрация
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
