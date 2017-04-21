<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- 메뉴 상단 -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- 우측 검색 (무슨 검색을 넣어야 할지) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview {{ ($side == "member" ? "active" : "") }}">
                <a href="#">
                    <i class="fa fa-group"></i>
                    <span>Member</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin::member::index') }}">
                            <i class="fa fa-child"></i> 회원 관리
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-weixin"></i> 쪽지 관리
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-money"></i> 포인트 관리
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ ($side == "review" ? "active" : "") }}">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Review</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">new</small>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-th"></i> 카테고리 1
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-th"></i> 카테고리 2
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-th"></i> 카테고리 3
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ ($side == "notice" ? "active" : "") }}">
                <a href="{{ route('admin::bbs::notice::index') }}">
                    <i class="fa fa-desktop"></i> <span>Notice</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">new</small>
                    </span>
                </a>
            </li>
            <li class="{{ ($side == "event" ? "active" : "") }}">
                <a href="#">
                    <i class="fa fa-calendar-check-o"></i> <span>Event</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-red">3</small>
                    </span>
                </a>
            </li>
            <li class="treeview {{ ($side == "chart" ? "active" : "") }}">
                <a href="#">
                    <i class="fa fa-line-chart"></i>
                    <span>통계 분석</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-child"></i> 회원 통계
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-wrench"></i> 카테고리 통계
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-map"></i> 지역 통계
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-money"></i> 포인트 통계
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ ($side == "policy" ? "active" : "") }}">
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span>Policy</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin::tool::common::index') }}">
                            <i class="fa fa-wrench"></i> Common Codes
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>