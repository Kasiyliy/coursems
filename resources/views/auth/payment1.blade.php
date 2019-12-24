@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Вы покупаете курс: "{{$course->name}}"</div>

                    <div class="card-body">
                        <form action="{{route('pay.course.step2')}}" method="post">
                            @csrf
                            @if($course->name != 'Разбор косметики')
                                <input type="checkbox" id="repost" onclick="checkboxClick()"> Я сделал репост <br>
                            @endif

                            <h3>
                                Сумма к оплате: <span id="price">0</span> тенге
                            </h3><br>

                            <input type="hidden" name="price" id="hidden-price" value="{{$course->price}}">
                            <input type="hidden" name="id" value="{{$course->id}}">
                            @if($course->name != 'Разбор косметики')
                                <p id="repost">*репост дает вам возможность получить скидку в размере 20%</p>
                            @endif
                            <br>
                            <input id="submit-btn" class="btn btn-success" type="submit" value="Перейти к оплате">
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
        });

        function checkboxClick() {
            checked = !checked;

            if (checked === true) {
                $('#price').html(price * 0.8);
                $('#hidden-price').val(price * 0.8);
            } else {
                $('#price').html(price);
                $('#hidden-price').val(price);
            }
        }
    </script>
@endsection
