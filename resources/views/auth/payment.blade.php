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
                            <input type="hidden" name="formcomment" value="Покупка курса '{{$course->name}}'">
                            <input type="hidden" name="short-dest" value="Покупка курса '{{$course->name}}'">
                            <input type="hidden" name="label" value="{{$user->id.'='.$course->id}}">
                            <input type="hidden" name="quickpay-form" value="shop">
                            <input type="hidden" name="targets" value="транзакция за курс '{{$course->name}}'">
                            <input id="price_yandex" type="hidden" name="sum" value="{{$course->price}}"
                                   data-type="number">
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
                            <h3>Сумма к оплате: <span id="price">0</span> тенге или <span id="rub_price">0</span> рублей
                            </h3>
                            <p>*комиссия за счет GlamBlog</p>
                            <p>*курс рубля фиксированный 6.16 тенге</p>
                            @if($course->name != 'Разбор косметики')
                                <input type="checkbox" id="repost" onclick="checkboxClick()"> Я сделал репост <br>
                            @endif
                            <br>
                            <input class="btn btn-success" type="submit" value="Перейти к оплате">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        checked = false;
        price = {{$course->price}};

        $(document).ready(function () {
            $('#price').html(price);
            $('#price_yandex').html(Math.floor(price / 6.16));
            $('#rub_price').html(Math.floor(price / 6.16));
        });

        function checkboxClick() {
            checked = !checked;

            if (checked === true) {
                $('#price').html(price * 0.8);
                $('#rub_price').html(Math.floor((price / 6.16) * 0.8));
                $('#price_yandex').val(Math.floor((price / 6.16) * 0.8));
            } else {
                $('#price').html(price);
                $('#rub_price').html(Math.floor(price / 6.16));
                $('#price_yandex').val(Math.floor(price / 6.16));
            }
        }
    </script>
@endsection
