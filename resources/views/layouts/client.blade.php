<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GlamBlog.kz</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link rel="stylesheet" href="{{asset("admin/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/bower_components/font-awesome/css/font-awesome.min.css")}}">

    <link rel="stylesheet" href="{{asset("admin/dist/css/AdminLTE.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/dist/css/skins/_all-skins.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/jquery.select.css")}}">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">

    <script src="//code.jivosite.com/widget/eQatvcawrb" async></script>


    <link rel="stylesheet" type="text/css"
          href="{{asset("admin/bower_components/datatable/css/dataTables.bootstrap.min.css")}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{asset("admin/bower_components/datatable/css/responsive.bootstrap.min.css")}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{asset("admin/bower_components/datatable/css/scroller.bootstrap.min.css")}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{asset("admin/bower_components/daterangepicker/daterangepicker.css")}}"/>
    <link href="{{asset("admin/bower_components/select2/select2.css")}}"
          el="stylesheet"/>
    <style>
        .panel {
            padding: 10px;
        }

    </style>
    @yield('styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <a href="/" class="logo">
            <span class="logo-mini">GB</span>
            <span class="logo-lg">glamblog.kz</span>
        </a>

        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user-circle" style="color:white"></i>
                            <span class="hidden-xs">{{Auth::user()->first_name. ' '. Auth::user()->last_name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <i class="fa fa-home fa-3x" style="color:white"></i>
                                <p>
                                    {{Auth::user()->first_name. ' '. Auth::user()->last_name}}
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{route('self.user.edit')}}" class="btn btn-default btn-flat">Профиль</a>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выход
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left text-white">
                    <i class="fa fa-user-circle fa-2x " style="color:white"></i>
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->first_name. ' '. Auth::user()->last_name}}</p>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Главная</li>
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i> <span>Главная</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('client.course.index')); ?>">
                        <i class="fa fa-file-text"></i> <span>Курсы</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content">

            @yield('content')

        </section>
    </div>
    <footer class="main-footer text-center">
        Все права защищены {{date('Y')}}.
    </footer>
</div>


<script src="{{asset("admin/bower_components/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("admin/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/jquery.select.js")}}"></script>
<script src="{{asset("js/number.divider.js")}}"></script>
<script src="{{asset("admin/dist/js/adminlte.min.js")}}"></script>
<script src="{{asset('js/toastr.js')}}"></script>
<script src="{{asset('js/bootbox.all.min.js')}}"></script>

<script type="text/javascript" src="{{asset("admin/bower_components/datatable/js/jquery.datatables.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("admin/bower_components/datatable/js/dataTables.bootstrap.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("admin/bower_components/datatable/js/dataTables.responsive.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("admin/bower_components/datatable/js/responsive.bootstrap.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("admin/bower_components/datatable/js/dataTables.scroller.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("admin/bower_components/datatable/js/dataTables.fixed-header.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("admin/bower_components/datatable/js/datatable.sum.js")}}"></script>

<script type="text/javascript"
        src="{{asset("admin/bower_components/daterangepicker/moment.js")}}"></script>
<script type="text/javascript"
        src="{{asset("admin/bower_components/daterangepicker/daterangepicker.js")}}"></script>
<script src="{{asset("admin/bower_components/select2/select2.js")}}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('datatable')

<script>
    toastr.options.closeButton = true;
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif

    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
    @endif

    @if(Session::has('error'))
    toastr.info("{{Session::get('error')}}");
    @endif

    @if(Session::has('warning'))
    toastr.info("{{Session::get('warning')}}");
    @endif

</script>
@yield('scripts')
</body>
</html>