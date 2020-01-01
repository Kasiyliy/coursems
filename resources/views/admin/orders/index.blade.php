@extends('layouts.admin')

@section('content')
    <div class="container-fluid" style="overflow: scroll">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="panel" style="padding: 10px;">
                    <div class="panel-header">
                        <h2>Заявки</h2>
                        {{--                        <a class="btn btn-success btn-sm" href="{{route('order.create')}}">Добавить</a>--}}
                    </div>
                    <div class="panel-body">
                        <table id="dataTable" class="table table-hover table-responsive" style="overflow-y: scroll">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Пользователь</th>
                                <th>Курс</th>
                                <th>Статус</th>
                                <th>Дата покупки</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subscriptions as $subscription)
                                <tr @if($subscription->status == 0) style="background-color: #f5c6cb"
                                    @else style="background-color: #c3e6cb" @endif>
                                    <td>{{$subscription->id}}</td>
                                    <td>{{$subscription->user->email}}</td>
                                    <td>{{$subscription->course->name}}</td>
                                    <td>{{$subscription->status ? 'Оплачено' : 'Не оплачено'}}</td>
                                    <td>{{$subscription->created_at}}</td>
                                    <td class="d-flex">

                                        <form action="{{route('order.toggle.status' ,['id'=>$subscription->id ])}}" method="post">
                                            {{csrf_field()}}
                                            <button type="submit" class="btn-xs btn btn-warning">
                                                <span class="fa fa-money"></span> {{$subscription->status ? 'Доступ открыт' : 'Закрыт'}}
                                            </button>
                                        </form>

                                        {{--                                        <a href="{{route('order.edit' ,['id'=>$subscription->id ])}}"--}}
                                        {{--                                           class="btn-xs btn btn-primary"><span class="fa fa-edit"></span> Изменить</a>--}}

                                        <button type="button" class="btn btn-danger btn-xs mr-1" data-toggle="modal"
                                                data-target="#exampleModal{{$subscription->id}}">
                                            <span class="fa fa-trash"></span> Удалить
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$subscription->id}}" tabindex="-1"
                                             role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post"
                                                          action="{{route('order.delete', ['id' => $subscription->id ])}}">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Предупреждение!</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Вы точно хотите удалить?
                                                            {{csrf_field()}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-sm"
                                                                    data-dismiss="modal">Отмена
                                                            </button>
                                                            <input type="submit" value="Удалить"
                                                                   class="btn btn-danger btn-sm mr-1">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('datatable')

    @include('layouts.datatable')

@endsection