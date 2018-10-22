<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
        <div class="user-profile">
             <div class="dropdown user-pro-body">
                <div><img src="{{ asset('image/default-user.png') }}" alt="user-img" class="img-circle"></div>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li> <a href="{{ route('panel.dashboard') }}" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a>
            </li>
            <li class="devider"></li>
            <li> <a href="{{ route('panel.product') }}" class="waves-effect"><i class="mdi mdi-archive fa-fw" data-icon="v"></i> <span class="hide-menu"> Product </span></a>
            </li>
            <li class="devider"></li>
             <li> <a href="{{ url('panel/website') }}" class="waves-effect"><i class="mdi mdi-laptop fa-fw" data-icon="v"></i> <span class="hide-menu"> Manage Webiste <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('panel-website-profil') }}"><i data-icon="&#xe026;" class="mdi mdi-arrow-right-bold fa-fw"></i> <span class="hide-menu">Webstie Profile</span></a></li>
                    <li><a href="{{ url('panel-user-permission') }}"><i data-icon="&#xe025;" class="mdi mdi-arrow-right-bold fa-fw"></i> <span class="hide-menu">Website Media</span></a></li>
                </ul>
            </li>
            @if(!empty(Session::get('permission')['manage_user']))
            <li> <a href="{{ url('panel/user') }}" class="waves-effect"><i class="mdi mdi-account-multiple fa-fw"></i> <span class="hide-menu">Manage User<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('panel-user') }}"><i data-icon="&#xe026;" class="mdi mdi-arrow-right-bold fa-fw"></i> <span class="hide-menu">User</span></a></li>
                    <li><a href="{{ url('panel-user-permission') }}"><i data-icon="&#xe025;" class="mdi mdi-arrow-right-bold fa-fw"></i> <span class="hide-menu">Role & Permission</span></a></li>
                </ul>
            </li>
            @endif
            <li class="devider"></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#modalLogout" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
            <li class="devider"></li>
            <li><a href="documentation.html" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
        </ul>
    </div>
</div>