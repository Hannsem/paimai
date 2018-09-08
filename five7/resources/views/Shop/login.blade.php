<!DOCTYPE html>
<html class="ui-page-login">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('mui/js/mui.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('mui/css/mui.min.css')}}"/>
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/vue.js')}}"></script>
    <style>
        .area {
            margin: 20px auto 0px auto;
        }

        .mui-input-group {
            margin-top: 10px;
        }

        .mui-input-group:first-child {
            margin-top: 20px;
        }

        .mui-input-group label {
            width: 22%;
        }

        .mui-input-row label ~ input,
        .mui-input-row label ~ select,
        .mui-input-row label ~ textarea {
            width: 78%;
        }

        .mui-checkbox input[type=checkbox],
        .mui-radio input[type=radio] {
            top: 6px;
        }

        .mui-content-padded {
            margin-top: 25px;
        }

        .mui-btn {
            padding: 10px;
        }

        .link-area {
            display: block;
            margin-top: 25px;
            text-align: center;
        }

        .spliter {
            color: #bbb;
            padding: 0px 8px;
        }

        .oauth-area {
            position: absolute;
            bottom: 20px;
            left: 0px;
            text-align: center;
            width: 100%;
            padding: 0px;
            margin: 0px;
        }

        .oauth-area .oauth-btn {
            display: inline-block;
            width: 50px;
            height: 50px;
            background-size: 30px 30px;
            background-position: center center;
            background-repeat: no-repeat;
            margin: 0px 20px;
            /*-webkit-filter: grayscale(100%); */
            border: solid 1px #ddd;
            border-radius: 25px;
        }

        .oauth-area .oauth-btn:active {
            border: solid 1px #aaa;
        }

        .oauth-area .oauth-btn.disabled {
            background-color: #ddd;
        }
    </style>

</head>

<body>
<header class="mui-bar mui-bar-nav">
    <h1 class="mui-title">登录</h1>
</header>
<div class="mui-content">
    <form id='login-form' class="mui-input-group">
        <div class="mui-input-row">
            <label>账号</label>
            <input id='account' type="text" class="mui-input-clear mui-input" placeholder="请输入账号">
        </div>
        <div class="mui-input-row">
            <label>密码</label>
            <input id='password' type="password" class="mui-input-clear mui-input" placeholder="请输入密码">
        </div>
    </form>
    <form class="mui-input-group">
        <ul class="mui-table-view mui-table-view-chevron">
            <li class="mui-table-view-cell">
                自动登录
                <div id="autoLogin" class="mui-switch">
                    <div class="mui-switch-handle"></div>
                </div>
            </li>
        </ul>
    </form>
    <div class="mui-content-padded">
        <button id='login' class="mui-btn mui-btn-block mui-btn-primary">登录</button>
    </div>
    <div class="mui-content-padded oauth-area">

    </div>
</div>
<script src="{{asset('mui/js/mui.enterfocus.js')}}"></script>
<script src="{{asset('mui/js/app.js')}}"></script>
<script>


    mui.ready(function () {
        mui(".mui-content-padded").on('tap', '#login', function (event) {
            var account = $('#account').val()
            var password = $('#password').val()
            reg = /^[a-zA-Z0-9_]+$/;
            if (reg.test(account) && reg.test(password)) {
                mui.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    data: {
                        name: account,
                        password: password
                    },
                    url: '{{route('five7Logins')}}',
                    success: function (res) {
                        if (res['lang']==1){
                            mui.toast(res['msg'])
                            setTimeout(function () {
                                window.location.href = '{{route("five7Home")}}'
                            }, 2000)
                        }else {
                            mui.toast(res['msg'])
                        }

                    }
                })
            } else {
                mui.alert('请检查输入')
            }
        });
    })
</script>
</body>

</html>