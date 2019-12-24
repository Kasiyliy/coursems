@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Вы покупаете курс: "{{$course->name}}"</div>

                    <div class="card-body">


                        <h4 id="kaspi-id" style="">
                            Поздравляем!<br><br>
                            Доступ к курсу будет открыт в ближающее время
                            <br><br>
                        </h4>

                        <p style="font-size: 10px">* с февраля будет онлайн оплата, мы работаем над этим</p>

                        <br>

                        <a class="btn btn-success" href="{{route('front')}}">Далее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
