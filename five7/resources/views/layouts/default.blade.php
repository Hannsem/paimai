<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap 101 Template</title>
    <link href="{{URL::asset('layui/css/layui.css')}}" rel="stylesheet">
    <script src="{{URL::asset('layui/layui.js')}}"></script>
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/vue.js')}}"></script>
</head>
<body>
@yield('content')
<script>
    layui.use('element', function(){
        var element = layui.element;
    });
</script>
</body>
</html>