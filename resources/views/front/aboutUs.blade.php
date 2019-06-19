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
                        <span>О нас</span>
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
                                        <h2>О нас</h2>
                                    </div>
                                    <div class="accordion" id="accordion1">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection