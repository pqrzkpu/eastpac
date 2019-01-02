
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />

        <title>Metronic | Login Page - 1</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <link rel="stylesheet" href="{{ asset('/assets/vendor/countdown/jquery.countdown.css') }}" />
        <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}" />
    </head>
    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
	            <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
		            <div class="m-stack m-stack--hor m-stack--desktop">
				        <div class="m-stack__item m-stack__item--fluid">

					        <div class="m-login__wrapper">

                                <div class="m-login__logo">
                                    <a href="#">
                                      <img src="{{ asset('/assets/images/logo/logo2.png') }}">
                                    </a>
                                </div>

						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign In </h3>
                            </div>

							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
										<input type="checkbox" name="remember"> Remember me
										<span></span>
										</label>
									</div>
									<div class="col m--align-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Sign In</button>
								</div>
							</form>
						</div>
						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign Up</h3>
								<div class="m-login__desc">Enter your details to create your account:</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" name="password">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
								</div>
								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
										<input type="checkbox" name="agree"> I Agree the <a href="#" class="m-link m-link--focus">terms and conditions</a>.
										<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Sign Up</button>
									<button id="m_login_signup_cancel" class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">Cancel</button>
								</div>
							</form>
						</div>

						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">Forgotten Password ?</h3>
								<div class="m-login__desc">Enter your email to reset your password:</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Request</button>
									<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">Cancel</button>
								</div>
							</form>
						</div>
					</div>

				</div>
				<div class="m-stack__item m-stack__item--center">

					<div class="m-login__account">
						<span class="m-login__account-msg">
						Dont have an account yet ?
						</span>&nbsp;&nbsp;
						<a href="javascript:;" id="m_login_signup" class="m-link m-link--focus m-login__account-link">Sign Up</a>
					</div>

				</div>
		</div>
	</div>
    <div id="mlayout" class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content m-grid-item--center"
    style="background-image: url({{ asset('assets/images/background/bannerbg.jpg') }})">

		<div class="m-grid__item" style="padding:10px">
			<h3 class="m-login__welcome">The World’s 1st ICO Platform That Offers
                Rewards Contributors
                </h3>
			<p class="m-login__msg">
				ICO aims to become the leading digital ICO
base template in worldwide

            </p>



            <div class="row no-gutters justify-content-center">
                <div class="col-xl-4 col-md-5" >
                    <div class="presale-countdown"style="min-height:143px !important">
                        <h5>Pre-sale is Live Now</h5>
                        <h6>Pre-Sale ends in</h6>
                        <div class="token-countdown" id="countdown" data-date="2019/03/15">

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-7">
                    <div class="presale-status">
                        <h5>Pre Sale</h5>
                        <div class="presale-bar">
                            <div class="presale-bar-percent" style="width:35%"></div>
                        </div>
                        <div class="presale-points d-flex justify-content-between">
                            <span>15k Sold</span>
                            <span>75k Sold</span>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>


</div>
<style>
    .presale-bar {
        background: #fff;
    }
    .presale-bar {
        padding: 6px;
        width: 100%;
        background: #fff;
        border-radius: 16px;
    }

    .presale-bar-percent {
        background: linear-gradient(45deg, #ff6c3f 0%, #fe4350 100%);
    }
    .presale-bar-percent {
        height: 20px;
        border-radius: 20px;
        background: linear-gradient(45deg, #ff6c3f 0%, #fe4350 100%);
    }

    .presale-points {
        padding-top: 6px;
        font-weight: .93em;
    }
    .justify-content-between {
        -ms-flex-pack: justify!important;
        justify-content: space-between!important;
    }

    .presale-status {
        background: #fe4350;
    }
    .presale-status {
        padding: 30px 30px;
        background: rgba(255,255,255,.2);
        color:#ffffff;
        border-radius: 0px 0px 0px 0px;
        box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    }
    .presale-status h5 {
        font-weight: 600;
    }
    .d-flex {
        display: -ms-flexbox!important;
        display: flex!important;
    }

    .presale-countdown {
        background: url(../images/contdown-shape-zinnia.png) 0 0 no-repeat, #fff9f7;
        background-size: contain,100%;
        box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
        border-radius: 0px 0px 0 0;
        padding: 30px 30px 18px 30px;
        min-height: 100px;
    }
</style>



<script src="{{ asset('landingpage/js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/jquery.countdown-2.2.0/jquery.countdown.js') }}"></script>
<script src="{{ asset('/assets/vendor/particlejs/particles.js') }}"></script>
                        <script>


                            $(function(){

                                var note = $('#note'),
                                    ts = new Date(201, 2, 12),
                                    newYear = true;



                                $('#countdown').countdown("2019/01/04", function(event) {
                                    $(this).html(
                                        '<span>'+event.offset.days+'</span> : '+
                                        '<span>'+event.offset.hours+'</span> : '+
                                        '<span>'+event.offset.minutes+'</span> : '+
                                        '<span>'+event.offset.seconds+'</span>'

                                    );
                                  });;

                            });
                        </script>
                    </body>
    <!-- end::Body -->
</html>