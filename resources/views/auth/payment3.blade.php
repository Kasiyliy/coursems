@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Вы покупаете курс: "{{$course->name}}"</div>

                    <div class="card-body">


                        <h4 id="kaspi-id" style="">
                            Поздравляем! 😊
                            <br>
                            Вы успешно заполнили опрос!

                        </h4>

                        <p style="font-size: 10px">
                            Разбор вашей косметички и личные рекомендации будут высланы вам на почтовый адрес в течение
                            24 часов в формате PDF.
                            <br>
                            Проверяйте пожалуйста почту!
                        </p>
                        <p style="font-size: 10px">* С февраля мы подключим онлайн оплату для вашего удобства, мы
                            работаем над этим!
                        </p>

                        <br>

                        <a class="btn btn-success" href="{{route('front')}}">Далее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
