<!DOCTYPE html>
<html lang="zh">

@include('Index.public.common-head')

<body data-type="chart">
    <script src="{{ URL::asset('assets/js/theme.js') }}"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
@include('Index.public.common-header')
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="{{ URL::asset('assets/img/user04.png') }}" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              禁言小张
          </span>
                    <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-heading">Components <span class="sidebar-nav-heading-info"> 附加组件</span></li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/index') }}"  >
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/table') }}">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 表格
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/calendar') }}">
                        <i class="am-icon-calendar sidebar-nav-link-logo"></i> 日历
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/form') }}" >
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 表单

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/chart') }} " class="active">
                        <i class="am-icon-bar-chart sidebar-nav-link-logo"></i> 图表

                    </a>
                </li>

                <li class="sidebar-nav-heading">Page<span class="sidebar-nav-heading-info"> 常用页面</span></li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 数据列表
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{ url('admin/table-list') }}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文字列表
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="{{ url('admin/table-list-img') }}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 图文列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/sign-up') }}">
                        <i class="am-icon-clone sidebar-nav-link-logo"></i> 注册
                        <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/login') }}">
                        <i class="am-icon-key sidebar-nav-link-logo"></i> 登录
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/404') }}">
                        <i class="am-icon-tv sidebar-nav-link-logo"></i> 404错误
                    </a>
                </li>

            </ul>
        </div>

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 图表 <small>Amaze UI</small></div>
                        <p class="page-header-description">图表组件使用的是 <a href="http://echarts.baidu.com">百度图表echarts</a>。</p>
                    </div>
                    <div class="am-u-lg-3 tpl-index-settings-button">
                        <button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>
                    </div>
                </div>

            </div>

            <div class="row-content am-cf">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">折线</div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog"></a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        <div style="height: 400px" class="" id="tpl-echarts-A">

                        </div>
                    </div>
                </div>


                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">雷达</div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog"></a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        <div style="height: 400px" id="tpl-echarts-B">

                        </div>
                    </div>
                </div>


                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">折线柱图</div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog"></a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        <div style="height: 400px" id="tpl-echarts-C">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <script src="{{ URL::asset('assets/js/amazeui.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/amazeui.datatables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

</body>

</html>