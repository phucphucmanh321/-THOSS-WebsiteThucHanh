<div class="container margin-bottom-20">
    <h1 class="title-head"><span>Đăng nhập tài khoản</span></h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="page-login margin-bottom-30">
                <div id="login">
                    <div class="social-login text-left margin-bottom-20 margin-top-10">
                        <style>
                            .social-login a {
                                display: inline-block;
                            }
                        </style>
                        <script>
                            function loginFacebook() {
                                var a = {
                                        client_id: "947410958642584",
                                        redirect_uri: "https://store.mysapo.net/account/facebook_account_callback",
                                        state: JSON.stringify({
                                            redirect_url: window.location.href
                                        }),
                                        scope: "email",
                                        response_type: "code"
                                    },
                                    b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0);
                                window.location.href = b
                            }

                            function loginGoogle() {
                                var a = {
                                        client_id: "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",
                                        redirect_uri: "https://store.mysapo.net/account/google_account_callback",
                                        scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
                                        access_type: "online",
                                        state: JSON.stringify({
                                            redirect_url: window.location.href
                                        }),
                                        response_type: "code"
                                    },
                                    b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0);
                                window.location.href = b
                            }

                            function encodeURIParams(a, b) {
                                var c = [];
                                for (var d in a)
                                    if (a.hasOwnProperty(d)) {
                                        var e = a[d];
                                        null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e))
                                    } return 0 == c.length ? "" : (b ? "?" : "") + c.join("&")
                            }
                        </script>
                        <a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                        <a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
                    </div>
                    <span>
                        Nếu bạn đã có tài khoản, đăng nhập tại đây.
                    </span>
                    <form method="post" action="index?mod=account&ac=access" id="customer_login" accept-charset="UTF-8"><input name="FormType" type="hidden" value="customer_login"><input name="utf8" type="hidden" value="true">
                        <div class="form-signup" style="color: red">

                        </div>
                        <div class="form-signup clearfix">
                            <div class="col">
                                <div class="row-md-6">
                                    <fieldset class="form-group">
                                        <label>Username <span class="required">*</span></label>
                                        <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control form-control-lg" value="" name="username" id="username" placeholder="" required="">
                                    </fieldset>
                                </div>
                                <div class="row-md-6">
                                    <fieldset class="form-group">
                                        <label>Mật khẩu <span class="required">*</span> </label>
                                        <input type="password" class="form-control form-control-lg" value="" name="password" id="password" placeholder="" required="">
                                    </fieldset>
                                </div>
                            </div>

                            <span style="color: red;"><?php if (isset($_SESSION['error'])) echo $_SESSION['error'] ?></span>

                            <div class="pull-xs-left" style="margin-top: 25px;">
                                <input class="btn btn-style btn-primary" type="submit" value="Đăng nhập">
                                <a href="/account/register" class="btn-link-style btn-register" style="margin-left: 20px;text-decoration: underline; ">Đăng ký</a>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
<?php if (isset($_SESSION['error'])) unset($_SESSION['error']); ?>