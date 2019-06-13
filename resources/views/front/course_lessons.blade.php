@extends('layouts.userSide')
@section('content')
<div class="heading-container">
    <div class="container heading-standar">
        <div class="page-breadcrumb">
            <ul class="breadcrumb">
                <li>
								<span>
									<a class="home" href="{{route('front')}}">
										<span>Home</span>
									</a>
								</span>
                </li>
                <li>
                    <span>{{$course->name}}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="content-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="posts">
                        <div class="posts-wrap posts-layout-center">
                            @foreach($lessons as $lesson)
                            <article class="hentry">
                                <div class="hentry-wrap">
                                    <div class="entry-featured">
                                        <a href="blog-detail.html">
                                            <img width="700" height="450" src="{{asset($course->image_path)}}" alt="Blog-1"/>
                                        </a>
                                    </div>
                                    <div class="entry-info">
                                        <div class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="blog-detail.html">{{$lesson->name}} </a>
                                            </h2>
                                        </div>
                                        <div class="entry-content">
                                            {{$lesson->name}}
                                        </div>
                                        <div class="entry-meta icon-meta">
														<span class="meta-date">
															Date:
															<time datetime="2015-08-11T06:27:49+00:00">
																August 11, 2015
															</time>
														</span>
                                            <span class="meta-author">
															By:
															<a href="#">sitesao</a>
														</span>
                                            <span class="meta-category">
															Course:
															<a href="#">{{$course->name}}</a>, <a href="#">Nunc</a>
														</span>
                                        </div>
                                        <div class="readmore-link">
                                            <a href="blog-detail.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                                @endforeach
                        </div>
                        <div class="paginate">
                            <div class="paginate_links">
                                <span class='page-numbers current'>1</span>
                                <a class='page-numbers' href='#'>2</a>
                                <a class="next page-numbers" href="#">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection