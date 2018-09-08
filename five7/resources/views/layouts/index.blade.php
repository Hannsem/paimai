<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Five 7</title>
    <link rel="stylesheet" href="{{asset('admin_template/lib/layui/css/layui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/css/hp-layui.css')}}" />
    <link rel="shortcut icon" href="{{asset('admin_template/favicon.ico')}}" />
</head>

<body class="layui-layout-body hp-white-theme">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">
            Five 7
        </div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item">
                <a class="hp-tab-add" hp-href="{{route('adminHome')}}" href="javascript:;">动态选项卡</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd>
                        <a class="hp-tab-add" hp-href="hpDemo/hpTab.html" href="javascript:;">邮件管理</a>
                    </dd>
                    <dd>
                        <a href="">消息管理</a>
                    </dd>
                    <dd>
                        <a href="">授权管理</a>
                    </dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a class="name" href="javascript:;"><i class="layui-icon"></i>主题<span class="layui-nav-more"></span></a>
                <dl class="layui-nav-child layui-anim layui-anim-upbit">
                    <dd>
                        <a skin="hp-black-theme" class="hp-theme-skin-switch" href="javascript:;">低调黑</a>
                    </dd>
                    <dd>
                        <a skin="hp-blue-theme" class="hp-theme-skin-switch" href="javascript:;">炫酷蓝</a>
                    </dd>
                    <dd>
                        <a skin="hp-green-theme" class="hp-theme-skin-switch" href="javascript:;">原谅绿</a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="">退出</a>
            </li>
        </ul>
    </div>

    <div class="layui-side hp-left-menu">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav hp-nav-none">
                <li class="layui-nav-item">
                    <a href="javascript:;" class="hp-user-name">
                        <img src="img/1.jpg" class="layui-circle-img"><span class="hp-kd">Admin</span>
                    </a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="">基本资料</a>
                        </dd>
                        <dd>
                            <a href="">安全设置</a>
                        </dd>
                    </dl>
                </li>
            </ul>

            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;"><i class="layui-icon hp-icon-size">&#xe857;</i>商品管理</a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a class="hp-tab-add" hp-href="{{route('CommodityRelease')}}" href="javascript:;">
                                <i class="layui-icon hp-icon-size">&#xe658;</i> 商品发布
                            </a>
                        </dd>
                        <dd>
                            <a class="hp-tab-add" hp-href="{{route('CommodityDetails')}}" href="javascript:;">
                                <i class="layui-icon hp-icon-size">&#xe658;</i> 商品详情
                            </a>
                        </dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon hp-icon-size">&#xe609;</i>商品拍卖</a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a class="hp-tab-add" hp-href="hpDemo/hpTab.html" href="javascript:;">管理</a>
                        </dd>
                    </dl>
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon hp-icon-size">&#xe64c;</i>示例页面</a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a target="_blank" href="pageDemo/login/login1.html">登录页面</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="pageDemo/404.html">404页面</a>
                        </dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon hp-icon-size">&#xe641;</i>商品秒杀</a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a class="hp-tab-add" hp-href="pageDemo/list/dataList.html" href="javascript:;">管理</a>
                        </dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon hp-icon-size">&#xe756;</i>数据分析</a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a class="hp-tab-add" hp-href="pageDemo/echarts/bar.html" href="javascript:;">柱状图</a>
                        </dd>
                        <dd>
                            <a class="hp-tab-add" hp-href="pageDemo/echarts/pie.html" href="javascript:;">饼图</a>
                        </dd>

                    </dl>
                </li>

                <li class="layui-nav-item">
                    <a target="_blank" href="https://github.com/hpit-BAT">github组织</a>
                </li>
                <li class="layui-nav-item">
                    <a target="_blank" href="https://hpit-bat.github.io/hpit-BAT-home">黑科技</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div class="layui-tab hp-tab " style="" lay-filter="hp-tab-filter" lay-allowclose="true">
            <ul class="layui-tab-title" style="">
                <li class="layui-this" lay-id="0">首页</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="layui-carousel" id="test1">
                        <div carousel-item>
                            <div>
                                <div class="layui-bg-green demo-carousel">
                                    <p style="font-size: 30px;">hp-layui 与你同在</p>
                                    <p style="font-size: 28px;">隐无为</p>
                                </div>
                            </div>
                            <div>
                                <div class="layui-bg-red demo-carousel">
                                    <p style="font-size: 30px;">hp-layui 与你同在</p>
                                    <p style="font-size: 28px;">隐无为</p>
                                </div>
                            </div>
                            <div>
                                <div class="layui-bg-blue demo-carousel">
                                    <p style="font-size: 30px;">hp-layui 与你同在</p>
                                    <p style="font-size: 28px;">隐无为</p>
                                </div>
                            </div>
                            <div>
                                <div class="layui-bg-orange demo-carousel">
                                    <p style="font-size: 30px;">hp-layui 与你同在</p>
                                    <p style="font-size: 28px;">隐无为</p>
                                </div>
                            </div>
                            <div>
                                <div class="layui-bg-cyan demo-carousel">
                                    <p style="font-size: 30px;">hp-layui 与你同在</p>
                                    <p style="font-size: 28px;">隐无为</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 源码地址 -->
                    <div style="margin-top: 10px;">
                        <blockquote class="layui-elem-quote">
                            源码地址：<br/><br/>
                            <a target="_blank" href="https://github.com/hpit-BAT/hp-layui"><button class="layui-btn layui-btn-danger  layui-btn-sm">github</button></a>
                        </blockquote>
                        <blockquote class="layui-elem-quote">
                            <h2>hp-layui 厚溥与你同在   @隐无为</h2> 如果你有什么疑问欢迎加入qq群讨论交流前端知识
                            <br/>
                            <b>qq群:693291343</b>
                        </blockquote>
                        <blockquote class="layui-elem-quote">
                            计划:<br/> 1.运用此模板的后台项目(正在码代码中。。。。)
                            <br/> 2.增加更多的事例页面
                            <br/> 3.继续美化样式
                            <br/>

                        </blockquote>
                    </div>
                    <!--时间线 -->
                    <div>
                        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                            <legend>hp-layui 今生前世</legend>
                        </fieldset>
                        <ul class="layui-timeline">
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis"></i>
                                <div class="layui-timeline-content layui-text">
                                    <div class="layui-timeline-title" style="color: red;">
                                        <div class="layui-timeline-title" style="color: red;">
                                            v1.1.0-更新内容如下
                                        </div>
                                        <ul>
                                            <li>
                                                1、 归总模块(具体查看hpModules)
                                            </li>
                                            <li>
                                                2、 样式美化：菜单加上图标、选项卡加上主题色
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop layui-timeline-axis"></i>
                                <div class="layui-timeline-content layui-text">
                                    <div class="layui-timeline-title" style="color: red;">
                                        1.增加配置类hpConfig，兼容静态服务器只能get,若要修改post改参数变量isAjaxType='post' 即可
                                    </div>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop layui-timeline-axis"></i>
                                <div class="layui-timeline-content layui-text">
                                    <div class="layui-timeline-title" style="color: red;">
                                        更新layui 版本 2.2.5 并添加了如下功能
                                    </div>
                                    <ul>
                                        <li>
                                            示例页面
                                        </li>
                                        <li>
                                            数据列表页面
                                        </li>
                                        <li>
                                            数据分析(百度图表技术Echarts)
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis"></i>
                                <div class="layui-timeline-content layui-text">
                                    <div class="layui-timeline-title" style="color: red;">
                                        2018-没想到layui已经陪我到了2018年,感叹青春正在奔跑
                                    </div>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis"></i>
                                <div class="layui-timeline-content layui-text">
                                    <div class="layui-timeline-title" style="color: red;">2017末尾,想把学习的layui成果分享->hp-layui-1.0 </div>
                                    <ul>
                                        <li>
                                            基本功能
                                        </li>
                                        <li>
                                            扩展组件(layui 模块写法)
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis"></i>
                                <div class="layui-timeline-content layui-text">
                                    <div class="layui-timeline-title" style="color: red;">2017 中途,更新版本layui-2.x 感觉layui-越来越好</div>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis"></i>
                                <div class="layui-timeline-content layui-text">
                                    <div class="layui-timeline-title" style="color: red;">2017伊始,接触 layui-1.x 学习使用 </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © hp-layui-version-1.0
    </div>
</div>

{{--<script src="lib/layui/layui.js"></script>--}}
<script src="{{asset('admin_template/lib/layui/layui.js')}}"></script>
<script>
    // 配置
    layui.config({
        // base: './hpModules/' // 扩展模块目录
        base:'{{asset('admin_template/hpModules/')}}'
    }).extend({ // 模块别名
        {{--hpTab:'{{asset('admin_template/hpModules/hpComponent/hpTab.js')}}',--}}
        {{--hpTheme: '{{asset('admin_template/hpModules/hpComponent/hpTheme')}}',--}}
        hpTab: '/hpComponent/hpTab',
        hpRightMenu: '/hpComponent/hpRightMenu',
        hpFormAll: '/hpComponent/hpFormAll',
        hpLayedit: '/hpComponent/hpLayedit',
        hpTheme: '/hpComponent/hpTheme',
        // test: '{/}./other/test' // {/}的意思即代表采用自有路径，即不跟随 base 路径
    });

    //JavaScript代码区域
    layui.use(['element', 'carousel', 'hpTheme', 'hpTab', 'hpLayedit', 'hpRightMenu'], function() {

        var element = layui.element;
        var carousel = layui.carousel; //轮播
        var hpTab = layui.hpTab;
        var hpRightMenu = layui.hpRightMenu;
        var hpTheme = layui.hpTheme;
        $ = layui.jquery;
        /*var test=layui.test;
        console.log(test.version) */
        // 初始化主题
        hpTheme.init();
        //初始化轮播
        carousel.render({
            elem: '#test1',
            width: '100%', //设置容器宽度
            interval: 1500,
            height: '500px',
            arrow: 'none', //不显示箭头
            anim: 'fade', //切换动画方式
        });

        // 初始化 动态tab
        hpTab.init();
        // 右键tab菜单
        hpRightMenu.init();

    });
</script>
</body>

</html>