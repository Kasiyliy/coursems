@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Вы покупаете курс: "{{$course->name}}"</div>

                    <div class="card-body">

                        <form method="POST" action="{{route('pay.course.step3')}}">
                            @csrf
                            <input type="hidden" name="receiver" value="4100110291387351">
                            <input type="hidden" name="formcomment" value="Покупка курса '{{$course->name}}'">
                            <input type="hidden" name="short-dest" value="Покупка курса '{{$course->name}}'">
                            <input type="hidden" name="label" value="{{$user->id.' '.$course->id}}">
                            <input type="hidden" name="quickpay-form" value="shop">
                            <input type="hidden" name="targets" value="транзакция за курс '{{$course->name}}'">
                            <input id="price_yandex" type="hidden" name="sum" value="{{$course->price}}"
                                   data-type="number">
                            <input type="hidden" name="need-fio" value="false">
                            <input type="hidden" name="need-email" value="false">
                            <input type="hidden" name="need-phone" value="false">
                            <input type="hidden" name="need-address" value="false">
                            <input type="hidden" name="successURL"
                                   value="{{route('pay.finish')}}?user_id={{$user->id}}&course_id={{$course->id}}">
                            <label for="paymentType">Выберите способ оплаты</label>
                            <select class="form-control" name="paymentType" id="paymentType"
                                    onchange="onChangePayment()" required>
                                <option value="" disabled selected>Выберите один из вариантов</option>
                                <option value="kaspi-id">по номеру счета</option>
                                <option value="kaspi-phone">по номеру телефона</option>
                                {{--                                <option value="AC">Банковской картой</option>--}}
                                {{--                                <option value="PC">Яндекс.Деньгами</option>--}}
                            </select>
                            <br>
                            <h3>
                                Сумма к оплате: <span id="price">{{$price}}</span> тенге
                            </h3><br>

                            <h4 id="kaspi-id" style="">Реквизиты для платежа:<br><br> <b id="pay-type">5169 4971 4165
                                    4529 </b><br><br>
                                Ахметкали А.Е.
                            </h4>

                            <input type="hidden" name="id" value="{{$course->id}}">

                            <input type="checkbox" id="paid" onclick="checkboxClick()" required> Я произвел оплату <br>

                            <br>
                            <input id="submit-btn" class="btn btn-success" type="submit" value="Далее">
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
            $('#kaspi-id').hide();
        });

        function onChangePayment() {
            if ($('#paymentType').val() === 'kaspi-id') {
                $('#kaspi-id').show();
                $('#pay-type').html('5169 4971 4165 4529');
            } else if ($('#paymentType').val() === 'kaspi-phone') {
                $('#kaspi-id').show();
                $('#pay-type').html('+7701 194 33 46');
            }
        }
    </script>
@endsection
