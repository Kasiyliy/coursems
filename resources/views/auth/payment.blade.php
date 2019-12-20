@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Вы покупаете курс: "{{$course->name}}"</div>

                    <div class="card-body">

                        <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">
                            <input type="hidden" name="receiver" value="4100110291387351">
                            <input type="hidden" name="formcomment" value="Покупка курса {{$course->name}}">
                            <input type="hidden" name="short-dest" value="Покупка курса {{$course->name}}">
                            <input type="hidden" name="label" value="{{$user->id.'='.$course->id}}">
                            <input type="hidden" name="quickpay-form" value="shop">
                            <input type="hidden" name="targets" value="транзакция за курс {{$course->name}}">
                            <input type="hidden" name="sum" value="{{$course->price*1.02}}" data-type="number">
                            <input type="hidden" name="need-fio" value="false">
                            <input type="hidden" name="need-email" value="false">
                            <input type="hidden" name="need-phone" value="false">
                            <input type="hidden" name="need-address" value="false">
                            <input type="hidden" name="successURL" value="{{route('pay.finish')}}">
                            <label for="paymentType">Выберите способ оплаты</label>
                            <select class="form-control" name="paymentType" id="paymentType">
                                <option value="PC">Яндекс.Деньгами</option>
                                <option value="AC">Банковской картой</option>
                            </select>
                            <br>
                            <h3>Сумма с учетом комиссии: {{$course->price*1.02}} тенге</h3>
                            <br>
                            <input class="btn btn-success" type="submit" value="Перейти к оплате">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
