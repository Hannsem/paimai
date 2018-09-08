<!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>管理员登录</title>
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/body.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}"/>
    <script type="text/javascript" src="{{URL::asset('layui/layui.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/vue.js')}}"></script>
</head>
<body style="background:url({{URL::asset('imges/cloud.jpg')}}) 0 bottom repeat-x  #049ec4;">
<div class="container">
    <section id="content">
        <form>
            <h1>管理员登录</h1>
            <div>
                <input type="text" placeholder="账号" required="" id="username"/>
            </div>
            <div>
                <input type="password" placeholder="密码" required="" id="password"/>
            </div>
            <div>
                <!-- <input type="submit" value="Log in" /> -->
                <input type="button" value="登录" class="btn btn-primary" id="js-btn-login"/>
                <input  style="float: right;" type="submit" value="重置" class="btn btn-primary" id="js-btn-reset"/>
            </div>
        </form><!-- form -->
    </section><!-- content -->
</div>
<!-- container -->

<script>



    $(function () {
        $("#js-btn-login").click(function () {
            $.ajax({
                headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                url:'{{route('verifyLogin')}}',
                type:"post",
                data:{
                    username:$("#username").val(),
                    password:$("#password").val()
                },success:function (data) {

                },erro:function (data) {

                }

            })
            {{--$.post("{{route('verifyLogin')}}",{--}}
                {{--username:$("#username").val(),--}}
                {{--password:$("#password").val()--}}
            {{--},function (data) {--}}


            {{--})--}}
        })
    })
</script>

<a href="{{route('adminHome')}}">11</a>
</body>
</html>