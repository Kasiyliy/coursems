<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="userloginModalForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Вход</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="checkbox clearfix">
                        <label class="form-flat-checkbox pull-left">
                            <input type="checkbox" class="form-check-input" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <i></i>
                            <label class="form-check-label" for="remember">Запомнить меня</label>
                        </label>
                        <span class="lostpassword-modal-link pull-right">
									@if (Route::has('password.request'))
                                <a class="" data-rel="lostpasswordModal"
                                   href="{{ route('password.request') }}">
										Забыли пароль?
									</a>
                            @endif
								</span>
                    </div>
                </div>
                <div class="modal-footer">
							<span class="user-login-modal-register pull-left">
									<a class="" href="{{route('register')}}">
										Не зарегистрированы?
									</a>
							</span>
                    <button type="submit" class="btn btn-default pull-right">Вход</button>

                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="userregisterModalForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Register account</h4>
                </div>
                <div class="modal-body">
                    <div class="user-login-facebook">
                        <button class="btn-login-facebook" type="button">
                            <i class="fa fa-facebook"></i>Sign in with Facebook
                        </button>
                    </div>
                    <div class="user-login-or"><span>or</span></div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user_login" required class="form-control" value=""
                               placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email</label>
                        <input type="email" id="user_email" name="user_email" required class="form-control" value=""
                               placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="user_password">Password</label>
                        <input type="password" id="user_password" required value="" name="user_password"
                               class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="user_password">Retype password</label>
                        <input type="password" id="cuser_password" required value="" name="cuser_password"
                               class="form-control" placeholder="Retype password">
                    </div>
                </div>
                <div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
                    <button type="submit" class="btn btn-default btn-outline">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="userlostpasswordModalForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Forgot Password</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Username or E-mail:</label>
                        <input type="text" name="user_login" required class="form-control" value=""
                               placeholder="Username or E-mail">
                    </div>
                </div>
                <div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
                    <button type="submit" class="btn btn-default btn-outline">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="minicart-side">
    <div class="minicart-side-title">
        <h4>Shopping Cart</h4>
    </div>
    <div class="minicart-side-content">
        <div class="minicart">
            <div class="minicart-header no-items show">
                Your shopping bag is empty.
            </div>
            <div class="minicart-footer">
                <div class="minicart-actions clearfix">
                    <a class="button no-item-button" href="#">
                        <span class="text">Go to the shop</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript' src='{{asset('front/js/jquery.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery-migrate.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.themepunch.tools.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.themepunch.revolution.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/easing.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/imagesloaded.pkgd.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/bootstrap.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/superfish-1.7.4.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.appear.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/script.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/swatches-and-photos.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.cookie.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.prettyPhoto.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.prettyPhoto.init.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.selectBox.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.touchSwipe.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.transit.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.carouFredSel.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/jquery.magnific-popup.js')}}'></script>

<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.video.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.slideanims.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.actions.min.js')}}'></script>
<script type='text/javascript'
        src='{{asset('front/js/extensions/revolution.extension.layeranimation.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.kenburn.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.navigation.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.migration.min.js')}}'></script>
<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.parallax.min.js')}}'></script>
<script src="{{ asset('js/toastr.js') }}"></script>
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
<script type="text/javascript">
    var tpj = jQuery;

    var revapi7;
    tpj(document).ready(function () {
        if (tpj("#rev_slider").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider");
        } else {
            revapi7 = tpj("#rev_slider").show().revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "gyges",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    }
                    ,
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "hephaistos",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5,
                        tmp: ''
                    }
                },
                gridwidth: 1170,
                gridheight: 600,
                lazyType: "smart",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });	/*ready*/
</script>