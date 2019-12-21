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
                            <input type="hidden" name="sum" value="{{$course->price}}" data-type="number">
                            <input type="hidden" name="need-fio" value="false">
                            <input type="hidden" name="need-email" value="false">
                            <input type="hidden" name="need-phone" value="false">
                            <input type="hidden" name="need-address" value="false">
                            <input type="hidden" name="successURL" value="{{route('pay.finish')}}">
                            <label for="paymentType">Выберите способ оплаты</label>
                            <select class="form-control" name="paymentType" id="paymentType">
                                <option value="AC">Банковской картой</option>
                                <option value="PC">Яндекс.Деньгами</option>
                            </select>
                            <br>
                            <h3>Сумма к оплате: {{$course->price}} тенге</h3>
                            <p>*комиссия за счет GlamBlog</p>
                            @if($course->name != 'Разбор косметики')
                                <input type="checkbox" id="repost"> Я сделал репост <br>
                                <script type="text/javascript">
                                    $(document).ready(function(){

                                        if($("#repost").attr("checked") == 'checked') {
                                            $('#target').submit(function(){});
                                        } else {
                                            window.alert('Дайте свое согласие на обработку данных!');
                                            $("#agree").css('border', '1px solid red');
                                        }
                                    });
                                </script>
                            @endif
                            <br>
                            <input class="btn btn-success" type="submit" value="Перейти к оплате">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
