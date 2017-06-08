@extends('home.layout')
@section('title', '注册 - 用户中心')
@section('staticFile')
    <link rel="stylesheet" href="{{ asset('/home/css/login.css') }}">
@endsection
@section('content')
    <div class="login-boxtitle">
        <a href="/"><img alt="" src="{{ asset('/home/images/logobig.png')  }}"></a>
    </div>
    <div class="res-banner">
        <div class="res-main">
            <div class="login-banner-bg"><span></span><img src="{{ asset('/home/images/big.jpg')  }}" /></div>
            <div class="login-box">
                <div class="am-tabs" id="doc-my-tabs">
                    <ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
                        <li class="am-active"><a href="">手机号注册</a></li>
                        <li><a href="">邮箱注册</a></li>
                    </ul>
                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-active">
                            <form method="POST" action="{{ url('/register') }}" id="form-phone">
                                <fieldset>
                                {{ csrf_field() }}
                                <div class="user-phone am-form-group">
                                    <label for="phone"><i class="am-icon-mobile-phone am-icon-md"></i></label>
                                    <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                                           placeholder="请输入手机号"  pattern="^[1][3-8]+\d{9}" required
                                           data-validation-message="请输入正确的手机号码" />
                                </div>
                                <div class="verification am-form-group">
                                    <label for="code"><i class="am-icon-code-fork"></i></label>
                                    <input type="tel" name="code" id="code" placeholder="请输入验证码" required data-validation-message="请输入验证码" />
                                    <a class="btn" href="javascript:;" onclick="getCode()" id="CodePhone">
                                        <img id="dyMobileButton" src="{{ url( '/imageCode/1' ) }}" alt="验证码" />
                                    </a>
                                </div>
                                <div class="verification am-form-group" id="moblie" style="display:none">
                                    <label for="moblieCode"><i class="am-icon-lock"></i></label>
                                    <input type="tel" name="moblieCode" id="moblieCode"
                                           placeholder="请输入手机验证码" data-validation-message='手机验证码不正确' required/>
                                    <button type="button" id="sendCode" class="am-btn am-btn-danger am-btn-xs">发送验证码</button>
                                </div>
                                <div class="user-pass am-form-group">
                                    <label for="password"><i class="am-icon-lock"></i></label>
                                    <input type="password" name="password" id="password" placeholder="设置密码"
                                           data-validation-message='请输入至少6位密码' minlength="6"  required/>
                                </div>
                                    <div class="login-links">
                                            <input id="reader-me" type="checkbox" checked
                                                   style="width:18px;height:13px">同意商城《服务协议》
                                    </div>
                                    <div class="am-cf" style="margin-top:10px;margin-bottom:10px">
                                        <input id="submit_phone" type="submit" value="注册"
                                               class="am-btn am-btn-primary am-btn-sm am-fl">
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="am-tab-panel">
                            <form method="post" action="{{ url('/register') }}" id="form-email">
                                {{ csrf_field() }}
                                <div class="user-email am-form-group">
                                    <label for="email"><i class="am-icon-envelope-o"></i></label>
                                    <input type="email" name="email" id="email" placeholder="请输入邮箱账号"
                                           data-validation-message='请输入正确的邮箱' required/>
                                </div>
                                <div class="user-pass am-form-group">
                                    <label for="password"><i class="am-icon-lock"></i></label>
                                    <input type="password" name="password" id="password" placeholder="设置密码"
                                           data-validation-message='请输入至少6位密码并以字母开头' minlength="6"
                                           pattern="^[a-zA-z]" required>
                                </div>
                                <div class="user-pass am-form-group">
                                    <label for="passwordRepeat"><i class="am-icon-lock"></i></label>
                                    <input type="password" name="password_confirmation" id="passwordRepeat"
                                           placeholder="确认密码" data-validation-message='两次密码不一致'
                                           data-equal-to="#password" required>
                                </div>
                                <div class="login-links">
                                    <input id="reader-me" type="checkbox" checked
                                           style="width:18px;height:13px"/>同意商城《服务协议》
                                </div>
                                <div class="am-cf">
                                    <input id="submit_email" type="submit" name="" value="注册"
                                           class="am-btn am-btn-primary am-btn-sm am-fl">
                                </div>
                            </form>
                        </div>
                        <hr>
                    </div>

                        <script>
                            $(function() {
                                $('#doc-my-tabs').tabs();
                            })
                            //获取验证码
                            function getCode(  ) {
                                var url = "{{ url( '/imageCode' ) }}" + "/" + Math.random();
                                $( 'img#dyMobileButton' ).attr( 'src' , url );
                            }
                            $('#form-phone').validator({
                                validate: function(validity) {
                                    var $field = $(validity.field);
                                    var v = $field.val();
                                    var comparer = function(v1, v2) {
                                        if (v1 != v2) {
                                            validity.valid = false;
                                        }
                                    }
                                    if (($(validity.field).is( $('input#Code')))){
                                         $.get(
                                             '{{ url("/checkImgCode") }}',
                                             { code: v },
                                             function(status){
                                                 if( status == 1 ){
                                                     $('input#Code').addClass( 'am-field-error' ).
                                                     parent().addClass('am-form-error');
                                                 }
                                             }
                                        );
                                    }
                                    if (($(validity.field).is('#moblieCode'))){
                                        comparer("{{ session('RegMoblie') }}", v);
                                    }
                                },
                                onInValid: function(validity) {
                                    var $field = $(validity.field);
                                    var msg = $field.data('validationMessage') || this.getValidationMessage(validity);
                                    $field.popover({
                                        content: msg
                                        ,trigger: 'focus'
                                    });
                                }
                            });
                            $('#form-email').validator({
                                onInValid: function(validity) {
                                    var $field = $(validity.field);
                                    var msg = $field.data('validationMessage') || this.getValidationMessage(validity);
                                    $field.popover({
                                        content: msg
                                        ,trigger: 'focus'
                                    });
                                }
                            });
                            $('button#sendCode').click(function () {
                                $.get({
                                    'url': "{{ url('sms/send') }}",
                                });
                                var $btn = $(this)
                                var n = 60;
                                $btn.attr('disabled','true');
                                var timeid = setInterval(function(){
                                    $btn.html('重新发送('+ n +')');
                                    if( n == 1 ){
                                        $btn.button('reset');
                                        clearInterval(timeid);
                                        $btn.html('发送验证码');
                                        $btn.attr('disabled','false');
                                    }
                                    n--;
                                }, 1000);
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    @include('home.public.footer')
    <script>
        $(function() {
            $('#doc-my-tabs').tabs();
        })
    </script>
    <script src=""></script>
@endsection
