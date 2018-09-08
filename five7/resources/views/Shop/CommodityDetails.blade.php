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

</head>
<body>
<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">商品详情</h1>
</header>
<nav class="mui-bar mui-bar-tab">
    <a class="taps" href="#test">
        <button type="button" class="mui-btn mui-btn-red mui-btn-block">点击就送</button>
    </a>
</nav>
<div class="mui-content">
    <div id="slider" class="mui-slider">
        <div class="mui-slider-group mui-slider-loop">
            <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
            <div class="mui-slider-item mui-slider-item-duplicate">
                <a href="#">
                    <img src="{{$details['imgs']}}">
                </a>
            </div>
            <!-- 第一张 -->
            <div class="mui-slider-item">
                <a href="#">
                    <img src="{{$details['imgs']}}">
                </a>
            </div>
            <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
            <div class="mui-slider-item mui-slider-item-duplicate">
                <a href="#">
                    <img src="{{$details['imgs']}}">
                </a>
            </div>
        </div>
        <div class="mui-slider-indicator">
            <div class="mui-indicator mui-active"></div>
        </div>
        <div id="endtime"
             style="width: 100%;height: 50px;background: #00FF00;position: relative;text-align: center;line-height: 50px"></div>
    </div>
    <div class="mui-row">
        <div class="mui-col-sm-12" style="margin: 10px 0;padding-left: 20px;">
            <span>{{$details['name']}}</span><sub>规格：200kg</sup>
        </div>
        <div class="mui-col-sm-12">
            <div class="mui-row">
                <div class="mui-col-sm-4" style="color: red;border-right: 1px solid #AAAAAA;">
                    <h4 style="float: left;">￥{{$details['money']}}<sub>起</sub></h4>
                </div>
                <div class="mui-col-sm-8" style="color: red;padding-left: 5px">
                    <h4>激烈竞拍中！<sub>每次加价不得小于<span style="color: black">{{$details['minmoney']}}</span>元</sub></h4>
                </div>
            </div>
            <div class="mui-col-sm-12">

                <ul class="mui-table-view">
                    <li class="mui-table-view-cell mui-media">
                        @if (count($getmessagr) >= 1)
                            <a href="javascript:;">
                                <img class="mui-media-object mui-pull-left" src="http://placehold.it/40x30">
                                <div class="mui-media-body">
                                    {{$getmessagr[0]->name}}
                                    <p class="mui-ellipsis">最新报价：<span
                                                style="color: red;font-size: 16px;"> {{$getmessagr[0]->name}}</span>用户出价，当前价格为:<span> {{$getmessagr[0]->money}}</span>
                                    </p>
                                </div>
                            </a>
                        @else
                            <a href="javascript:;">
                                <div class="mui-media-body">
                                    暂无用户出价。
                                </div>
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
            <div class="mui-col-sm-12">
                <div class="mui-slider">
                    <div class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
                        <a class="mui-control-item" href="#item1">商品详情</a>
                        <a class="mui-control-item" href="#item2">已出价用户</a>
                    </div>
                    <div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-6"></div>
                    <div class="mui-slider-group">
                        <div id="item1" class="mui-slider-item mui-control-content mui-active">
                            <img src="{{$details['imgs']}}" alt="">
                        </div>
                        <div id="item2" class="mui-slider-item mui-control-content">
                            <ul class="mui-table-view">
                                @foreach ($getmessagr as $v)
                                    <li class="mui-table-view-cell mui-media">
                                        <a href="javascript:;">
                                            <img class="mui-media-object mui-pull-left" src="http://placehold.it/40x30">
                                            <div class="mui-media-body">
                                                {{ $v->name }}
                                                <p class="mui-ellipsis"><span
                                                            style="color: red;font-size: 16px;">{{ $v->name }}</span>用户已出价,价格为:<span>{{ $v->money }}</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="test" class="box mui-popover mui-popover-action mui-popover-bottom">
    <form class="mui-input-group">
        @if ($isdeposit == 0)
            <div class="mui-input-row">
                <label style="width: 50%">请先缴纳{{$details['deposit']}}元押金</label>
                <input style="width: 50%" type="text" name="isdeposit" class="mui-input-clear" placeholder="请输入价格">
            </div>
        @else
            <div class="mui-input-row">
                <label>出价</label>
                <input type="text" name="money" class="mui-input-clear" placeholder="请输入出价">
            </div>
        @endif
        <div style="width: 40%;margin: 0 auto;">
            <button type="button" class="mui-btn mui-btn-blue">确定</button>
            {{--<button style="float: right;" type="button" class="mui-btn mui-btn-blue">取消</button>--}}
        </div>
    </form>
</div>
</body>

<script type="text/javascript">

    /*
时间倒计时插件
TimeDown.js
*/
    function TimeDown(id, endDateStr) {
        //结束时间
        var endDate = new Date(endDateStr);
        //当前时间
        var nowDate = new Date();
        //相差的总秒数
        var totalSeconds = parseInt((endDate - nowDate) / 1000);
        //天数
        var days = Math.floor(totalSeconds / (60 * 60 * 24));
        //取模（余数）
        var modulo = totalSeconds % (60 * 60 * 24);
        //小时数
        var hours = Math.floor(modulo / (60 * 60));
        modulo = modulo % (60 * 60);
        //分钟
        var minutes = Math.floor(modulo / 60);
        //秒
        var seconds = modulo % 60;
        //输出到页面
        document.getElementById(id).innerHTML = "还剩:" + days + "天" + hours + "小时" + minutes + "分钟" + seconds + "秒";
        //延迟一秒执行自己
        setTimeout(function () {
            TimeDown(id, endDateStr);
        }, 1000)
    }

    var endtime = '{{$details["endtime"]}}' * 1000;
    TimeDown('endtime', endtime)   //活动倒计时


    var gallery = mui('#slider');
    gallery.slider({
        interval: 3000//自动轮播周期，若为0则不自动播放，默认为0；
    });


    //页面提交方法
    mui.ready(function () {
        mui("#test").on('tap', '.mui-btn', function (event) {
            if (endtime < new Date()) {
                mui.alert('请在活动时间拍卖')
            } else {
                var isdeposit = $('input[name="isdeposit"]').val();
                var money = $('input[name="money"]').val();
                mui.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: '{{route('five7deposit')}}',
                    data: {sid: '{{$details["id"]}}', deposit: isdeposit, money: money},
                    success: function (res) {
                        if (res['type'] == 1) {
                            mui.toast(res['data'])
                            setTimeout(function () {
                                location.reload();
                            }, 2000)
                        } else {
                            mui.alert(res['data'])
                        }
                    }

                })
            }

        })
    })
</script>
</html>