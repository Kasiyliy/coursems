@extends('layouts.userSide')
@section('content')
    <div class="heading-container">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li>
								<span>
									<a class="home" href="#">
										<span>Home</span>
									</a>
								</span>
                    </li>
                    <li>
                        <span>Домашняя работа на урок {{$lesson->name}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content">
                        <div class="col-sm-8">
                            <div class="row inner faq-wrapper">
                                <div class="col-sm-12">
                                    <div class="content_element title">
                                        <h2>Домашняя работа на урок {{$lesson->name}}</h2>
                                    </div>
                                    <form enctype="multipart/form-data" action="{{route('homework.store', ['id' => $lesson->id])}}" method="post">
                                        <div class="form-group">
                                            <label for="comment">Комментарий</label>
                                            <input type="textarea" name="comment"  class="form-control" placeholder="Комментарий" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="image_path">Фото к уроку</label>
                                            <input type="file" name="image_path" class="form-control" placeholder="Фото" required>
                                        </div>
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-block" value="Закончить домашнее задание">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection