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
                        <span>FAQ</span>
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
                                        <h2>General Questions</h2>
                                    </div>
                                    <div class="accordion" id="accordion1">
                                        @foreach($faqs as $faq)
                                        <div class="accordion-group toggle toggle_default toggle_color_default toggle_size_md mb-1 pl-3">
                                            <div class="accordion-heading toggle_title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse{{$faq->id}}">
                                                    {{$faq->question}}
                                                </a>
                                            </div>
                                            <div id="collapse{{$faq->id}}" class="accordion-body toggle_content collapse">
                                                <div class="accordion-inner">
                                                    {{$faq->answer}}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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