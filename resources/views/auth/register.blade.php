@extends('home.layout')
@section('title', '注册用户-爱淘宝-淘宝网购物分享平台')
@section('description', '爱淘宝是淘宝旗下购物分享综合型网站，致力于为消费者用互联网技术快速发现高性价比优质潮品、特惠活动，更有资深黄钻买手、时尚达人、红人模特分享购物体验、穿搭技巧')
@section('keywords', '爱淘宝,导购,淘宝导购,淘宝达人推荐,购物分享')
@section('staticFile')
    <link rel="stylesheet" href="{{ asset('/home/css/amazeui.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/css/dlstyle.css') }}">
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
                            <form action="{{ url('/register') }}" id="form-phone">
                                {{ csrf_field() }}
                                <div class="user-phone">
                                    <label for="phone"><i class="am-icon-mobile-phone am-icon-md"></i></label>
                                    <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" placeholder="请输入手机号" data-validation-message="请输入正确的手机号码">
                                </div>
                                <div class="verification">
                                    <label for="code"><i class="am-icon-code-fork"></i></label>
                                    <input type="tel" name="code" id="code" placeholder="请输入验证码" data-validation-message="验证码不正确">
                                    <a class="btn" href="javascript:;" onclick="getCode()" id="CodePhone">
                                        <img id="dyMobileButton" src="{{ url( '/code/1' ) }}" alt="验证码" />
                                    </a>
                                </div>
                                <div class="user-pass">
                                    <label for="password"><i class="am-icon-lock"></i></label>
                                    <input type="password" name="password" id="password" placeholder="设置密码">
                                </div>
                                <div class="user-pass">
                                    <label for="passwordRepeat"><i class="am-icon-lock"></i></label>
                                    <input type="password" name="password_confirmation" id="passwordRepeat" placeholder="确认密码" >
                                </div>
                            </form>
                            <div class="login-links">
                                <label for="reader-me">
                                    <input id="reader-me" type="checkbox"> 点击表示您同意商城《服务协议》
                                </label>
                            </div>
                            <div class="am-cf">
                                <input id="submit_phone" type="submit" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
                            </div>
                        </div>
                        <div class="am-tab-panel">
                            <form method="post" id="form-email">
                                <div class="user-email">
                                    <label for="email"><i class="am-icon-envelope-o"></i></label>
                                    <input type="email" name="email" id="email" placeholder="请输入邮箱账号">
                                </div>
                                <div class="user-pass">
                                    <label for="password"><i class="am-icon-lock"></i></label>
                                    <input type="password" name="password" id="password" placeholder="设置密码">
                                </div>
                                <div class="user-pass">
                                    <label for="passwordRepeat"><i class="am-icon-lock"></i></label>
                                    <input type="password" name="password_confirmation" id="passwordRepeat" placeholder="确认密码">
                                </div>
                            </form>
                            <div class="login-links">
                                <label for="reader-me">
                                    <input id="reader-me" type="checkbox"> 点击表示您同意商城《服务协议》
                                </label>
                            </div>
                            <div class="am-cf">
                                <input id="submit_email" type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
                            </div>
                        </div>
                        <hr>
                    </div>

                        <script>
                            $(function() {
                                $('#doc-my-tabs').tabs();
                            })
                            //获取验证码
                            function getCode(  ) {
                                var url = "{{ url( '/code' ) }}" + "/" + Math.random();
                                $( '#dyMobileButton' ).attr( 'src' , url );
                            }
                            $( 'input[type=submit]' ).click( function () {
                                var that = $( this );
                                if( that.attr( 'id' ) == 'submit_phone' ){
                                    checkFrom( $( '#form-phone') , 1 );
                                }else{
                                    checkFrom( $( '#form-email' ), 2 );
                                }
                                {{--$.ajax({--}}
                                    {{--'type' : 'POST',--}}
                                    {{--'url' : "{{ url( '/' )  }}",--}}

                                {{--});--}}
                            } );
                            $(function() {
                                $('#doc-vld-msg').validator({
                                    onValid: function(validity) {
                                        $(validity.field).closest('.am-form-group').find('.am-alert').hide();
                                    },

                                    onInValid: function(validity) {
                                        var $field = $(validity.field);
                                        var $group = $field.closest('.am-form-group');
                                        var $alert = $group.find('.am-alert');
                                        // 使用自定义的提示信息 或 插件内置的提示信息
                                        var msg = $field.data('validationMessage') || this.getValidationMessage(validity);

                                        if (!$alert.length) {
                                            $alert = $('<div class="am-alert am-alert-danger"></div>').hide().
                                            appendTo($group);
                                        }

                                        $alert.html(msg).show();
                                    }
                                });
                            });
                            function checkFrom( that, num  )
                            {
                                var data = that.serializeArray();

                                if( num == 1 ){
                                    if( data[2].value == '' ){

                                    }
                                }
                                console.log( data );
                            }
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
@endsection
