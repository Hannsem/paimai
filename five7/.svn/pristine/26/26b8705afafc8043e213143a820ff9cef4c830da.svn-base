<!DOCTYPE html>
<html>
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
    <script type="text/javascript" charset="utf-8">
        mui.init();
    </script>
    @yield('css')
    <style type="text/css">

    </style>
    @show
</head>
<body>
<header class="mui-bar mui-bar-nav">
    @yield('header')

    @show
</header>
<div class="mui-content" style="padding-bottom: 50px;">
    @yield('content')

    @show
</div>
<nav class="mui-bar mui-bar-tab">
    @yield('nav')

    @show
</nav>
</body>

<script type="text/javascript">
    mui('.mui-bar-tab').on('tap','.mui-tab-item',function(){
        location.href = this.getAttribute('hp-href');
    })

    var gallery = mui('.topSlider');
    gallery.slider({
        interval:5000//自动轮播周期，若为0则不自动播放，默认为0；
    });
</script>
</html>