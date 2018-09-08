@extends('layouts.shopHome')
@section('header')
    <h1 class="mui-title">主页</h1>
@endsection
@section('content')
    {{--//轮播--}}
    <div id="slider" class="mui-slider topSlider">
        <div class="mui-slider-group mui-slider-loop">
            <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
            <div class="mui-slider-item mui-slider-item-duplicate">
                <a href="#">
                    <img src="http://placehold.it/400x300">
                </a>
            </div>
            <!-- 第一张 -->
            <div class="mui-slider-item">
                <a href="#">
                    <img src="http://placehold.it/400x300">
                </a>
            </div>
            <!-- 第二张 -->
            <div class="mui-slider-item">
                <a href="#">
                    <img src="http://placehold.it/400x300">
                </a>
            </div>
            <!-- 第三张 -->
            <div class="mui-slider-item">
                <a href="#">
                    <img src="http://placehold.it/400x300">
                </a>
            </div>
            <!-- 第四张 -->
            <div class="mui-slider-item">
                <a href="#">
                    <img src="http://placehold.it/400x300">
                </a>
            </div>
            <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
            <div class="mui-slider-item mui-slider-item-duplicate">
                <a href="#">
                    <img src="http://placehold.it/400x300">
                </a>
            </div>
        </div>
        <div class="mui-slider-indicator">
            <div class="mui-indicator mui-active"></div>
            <div class="mui-indicator"></div>
            <div class="mui-indicator"></div>
            <div class="mui-indicator"></div>
        </div>
    </div>
    {{--//菜单--}}
    <div id="sliderSegmentedControl"
         class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
        <div class="mui-scroll">
            <a class="mui-control-item mui-active">
                推荐
            </a>
            <a class="mui-control-item">
                热点
            </a>
        </div>
    </div>
    {{--概览--}}
    <div id="shop_detail">
        <ul class="mui-table-view mui-grid-view">
            {{--href="{{route('five7CommodityDetails')}}"--}}
            <li v-for="list in data"  style="border: 1px solid #EEEEEE;padding: 10px" class="mui-table-view-cell mui-media mui-col-xs-6">
                <a @click="todetail(list.id)"   :shopid="list.id">
                    <img  class="mui-media-object" :src="list.imgs">
                    <div class="mui-media-body"
                         style="word-break:break-all; height: 30px;white-space: normal;margin-bottom: 10px;text-indent: 1em">
                        @{{ list.name }}
                    </div>
                    <div class="mui-media-body" style="text-align: center;float: left;width: 50%">￥@{{ list.money }}</div>
                    <div class="mui-media-body" style="text-align: right;float: right;width: 50%;white-space: normal;">
                        <p>2333人付款</p></div>
                </a>
            </li>
        </ul>
    </div>


@endsection
@section('nav')
    <a class="mui-tab-item mui-active" hp-href="{{route('five7Home')}}">
        <span class="mui-icon mui-icon-home"></span>
        <span class="mui-tab-label">首页</span>
    </a>
    <a class="mui-tab-item" hp-href="{{route('five7Personal')}}">
        <span class="mui-icon mui-icon-phone"></span>
        <span class="mui-tab-label">个人中心</span>
    </a>
    <script type="text/javascript">
        mui.ready(function () {
            var vue = new Vue({
                el: '#shop_detail',
                data:{
                    data:''
                },
                methods:{
                    todetail:function (id) {
                        // alert(id)
                        window.location.href="{{route('five7CommodityDetails')}}?sid="+id
                    }
                }

            });
            mui.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '{{route('five7getShop')}}',
                success: function (res) {
                    console.log(res);
                    vue.data=res
                }
            })
        })
    </script>
@endsection

