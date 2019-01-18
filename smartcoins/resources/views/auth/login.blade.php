@if (Auth::guest())
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			EasternStar | Login Page
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="{{asset('main/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('main/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{{asset('main/assets/demo/default/media/img/logo/favicon.ico')}}" />
	</head>

	<style>
		.btn-focus {
			color: #fff;
			background-color: #3b6aad;
			border-color: #a5c0e6;
		}

		.btn-outline-focus {
			color: #3b6aad;
			background-color: transparent;
			background-image: none;
			border-color: #a5c0e6;
		}
	</style>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								<div class="m-login__logo">
									<a href="#">
										<img src="{{asset('main/assets/app/media/img/logos/logo-5.png')}}" width="20%">
									</a>
								</div>
								<div class="m-login__signin">
                                     @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
									<div class="m-login__head">
										<h3 class="m-login__title">
											Log In
										</h3>
									</div>
									<form id="frm-login" class="m-login__form m-form" action="{{ route('login') }}" method="post">
                                         {{ csrf_field() }}
										<div class="form-group m-form__group {{ $errors->has('email') ? ' has-error' : 'has-feedback' }}">
											<input class="form-control m-input" type="text" placeholder="Username" name="email" autocomplete="off" value="{{ old('username') }}">
                                             <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                             @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                             @endif
										</div>
										<div class="form-group m-form__group {{ $errors->has('password') ? ' has-error' : 'has-feedback' }}">
											<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                                             <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                             @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                             @endif
										</div>
										<div class="row m-login__form-sub">
											<div class="col m--align-left">
												<label class="m-checkbox m-checkbox--focus">
													<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
													Remember me
													<span></span>
												</label>
											</div>
											<div class="col m--align-right">
												<a href="javascript:;" id="m_login_forget_password" class="m-link">
													Forget Password ?
												</a>
											</div>
										</div>
										<div class="m-login__form-action">
											<button id="m_login_signin_submit" id="btnsubmit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
												Submit
											</button>
										</div>
									</form>
								</div>

								<div class="m-login__forget-password">
									<div class="m-login__head">
										<h3 class="m-login__title">
											Forgotten Password ?
										</h3>
										<div class="m-login__desc">
											Enter your email to reset your password:
										</div>
									</div>
									<form class="m-login__form m-form" action="">
										<div class="form-group m-form__group">
											<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
										</div>
										<div class="m-login__form-action">
											<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
												Request
											</button>
											<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
												Cancel
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="m-stack__item m-stack__item--center">
							<div class="m-login__account">
								<span class="m-login__account-msg">
									Don't have an account yet ?
								</span>
								&nbsp;&nbsp;
								<a href="{{ route('register') }}" id="m_login_signup1" class="m-link m-link--focus m-login__account-link">
									Registration
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url({{asset('landingpage/assets/images/architecture-buildings-business-442579.jpg')}})">

					<div class="m-grid__item m-grid__item--middle">
						<h3 class="m-login__welcome">
							Explore digital assets in a new way
						</h3>
						<p class="m-login__msg">
							EasternStar - Community Driven Digital Asset Marketplace

						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="{{asset('main/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('main/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
		<!--end::Base Scripts -->
        <!--begin::Page Snippets -->
        {{-- <script src="{{asset('main/assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script> --}}
        <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

        <script>

                var pages = function(){

                    return {
                        Init : function() {
                            $('#btnsubmit').click(function() {
                                $(this).text('Please wait . .');
                                $.ajax({
                                    url : $('#frm-login').attr('action'),
                                    type:'post',
                                    data:{
                                        email : $('input[name=email]').val(),
                                        _token: $('input[name=_token]').val(),
                                        password: $('input[name=password]').val()
                                    },

                                    success:function(data, status, c) {
                                        $('#msg').addClass(`alert-success`);
                                        $('#msg strong').text(`Login Success`);
                                        $('#msg').show();
                                        $('#btnsubmit').text('Sign In');
                                        window.location = `/home`;
                                    },

                                    error:function(data, status, c) {
                                        $('#msg').addClass(`alert-warning`);
                                        $('#msg strong').text(data.responseJSON.errors.email[0])
                                        $('#msg').show();
                                        $('#btnsubmit').text('Sign In');
                                    }
                                })

                           })
                       }

                    }

                }();


                $(function(){
                    $('#msg').hide();
                    // pages.Init();
                    $('#btnsubmit').text();
                })


            </script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>

@else
@php Redirect::to('/') @endphp
@endif
