<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav" id="navigasiBar">

                <!-- Visible if role 'admin'. if not role is'n 'admin', it will be hide -->
                @if(Auth::check())
                    @if(Auth::user()->role_user=='Admin')
                        <li><a href="index.html"><i class="lnr lnr-home"></i> <span>Dashboard Admin</span></a></li>
                        <li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Information Report</span></a></li>
                        <li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>All Data User</span></a></li>
                        <li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Add Documentation</span></a></li>
                        <li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Add new admin</span></a></li>
                        @else
                        <li><a href="{{ route('adminPages') }}" class="{{ Route::currentRouteNamed('adminPages') ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="{{ route('tableArticle') }}" class="{{ Route::currentRouteNamed('tableArticle') ? 'active' : '' }}"><i class="lnr lnr-dice"></i> <span>Your Article</span></a></li>
                        <li><a href="{{ route('createArticlePages') }}" class="{{ Route::currentRouteNamed('createArticlePages') ? 'active' : '' }}"><i class="lnr lnr-text-align-left"></i> <span>Create Article</span></a></li>
                        <li><a href="charts.html"><i class="lnr lnr-list"></i> <span>Make Your List to do</span></a></li>
                    @endif
                @endif



                <!--<li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">Profile</a></li>
                            <li><a href="page-login.html" class="">Login</a></li>
                            <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                        </ul>
                    </div>
                </li> -->
            </ul>
        </nav>
    </div>
</div>