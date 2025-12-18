<div class="container margin-bottom-20">
    <h1 class="title-head"><a href="#">Đăng ký tài khoản</a></h1>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="page-login">
                <div id="login">
                    <div class="social-login text-left margin-bottom-30 margin-top-10">
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
                    <span>Nếu chưa có tài khoản vui lòng đăng ký tại đây</span>

                    <form method="post" action="<?= BASE_URL . 'index.php?mod=account&ac=createUser' ?>" id="customer_register" accept-charset="UTF-8"><input name="FormType" type="hidden" value="customer_register"><input name="utf8" type="hidden" value="true"><input type="hidden" id="Token-ebd6b71a667a46eba4f175728b00da73" name="Token" value="0cAFcWeA4YY6Um1yxSh5KcMHfsMQlsfMHZFqoqwKmHBXAoEkY-8x7wXtJFekQgi3Ph6VxsB3GNJD2k-rEvSLJUAQ3oCzzclo1FIMEtx9rVgg67_24PZLmzxiKCrnL-zC1xMhAXehoFnBzaL8_hQJkg6HY4nDUCGphNvlN9HZHOELcEjE-AxXWpw7E5dGPRI9rEpelnFYNBlrz3btyW8apnkrW_n54lmmx38JvlGCLap3UkTR8cjNBYKz6EtZK4XHW9ZE4tc8wPsekSOG2wXNQHXc2xG9ct0pYV9lBhIiG5-HKkjA3Fy92uq5vTi9wxwyt_J15XsNSf3BMQfrc73GrpncoJfIJdVbCyOToHfvPB6CjUzTFuEFSfCkKmSL95mRgWAFpSv-Cd0m4Zl8LySvkAFCaVagTTjRFWdXsDC4aI4IPlerhA9-y1pBSwCPdoZwVqb2mFzRCbti_PuvY_ZwV9FjuuYwwL4cbJR2fOrbyKomd5WH5gqaejG75VARCqYU7ARuzUp7hRAxrgssEKVX1IwWxYbY8o9NQmcdW2Ceo3l57yb13-kL6UkU110g_InB6l_pWSV8e0KZtL0D1UgraWmAKsXAY417R5AlRPaEOxTGmyhuZdCLM19yHyyQXpmp04rqp-BG1wPQt2gYVpOOaYbtvXa3CTJJtS2MPrvVexIYYBA37dPaVs_9bUGgWp5eJzbaVzV-_WCU-Seh7aiBQ5RENORZKlTIFMghcZBiq_VZ1fXH-RB5lgGUDP1LcB74oi6srk_rTL7ZoyeyR81oCr6K7jVEaeYE_uuw">
                        <script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                        <script>
                            grecaptcha.ready(function() {
                                grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {
                                    action: "customer_register"
                                }).then(function(token) {
                                    document.getElementById("Token-ebd6b71a667a46eba4f175728b00da73").value = token
                                });
                            });
                        </script>
                        <div class="form-signup error" style="color: red">

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
                                <div class="row-md-6">
                                    <fieldset class="form-group">
                                        <label>Nhập lại mật khẩu <span class="required">*</span> </label>
                                        <input type="password" class="form-control form-control-lg" value="" name="verifyPassword" id="verifyPassword" placeholder="" required="">
                                    </fieldset>
                                    <span id="error" style="color: red"></span>
                                </div>
                            </div>


                            <div class="col-xs-12 text-xs-left" style="margin-top:30px; padding: 0">
                                <button type="summit" onclick="return confirmPassword()" value="Đăng ký" class="btn  btn-style btn-primary">Đăng ký</button>
                                <a href="index.php?mod=account" class="btn-link-style btn-register" style="margin-left: 20px;text-decoration: underline; ">Đăng nhập</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmPassword() {
        var password = document.getElementById('password').value;
        var verifyPassword = document.getElementById('verifyPassword').value;
        console.log(password);
        console.log(verifyPassword);
        if (password !== verifyPassword) {
            document.getElementById('error').innerHTML = "Mật khẩu nhập lại không trùng khớp";
            return false;
        }
        return true;
    }
</script>