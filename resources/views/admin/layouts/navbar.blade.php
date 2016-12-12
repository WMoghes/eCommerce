<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="has_sub">
                    <a href="{{ route('dashboard') }}" class="waves-effect"><i class="ti-home"></i>
                        <span> {{ trans('welcome.dashboard') }} </span> </a>
                </li>

                <li class="text-muted menu-title">{{ trans('welcome.settings') }}</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i><span> {{ trans('welcome.site_settings') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('site.settings') }}">{{ trans('welcome.set_site_settings') }}</a></li>
                        <li><a href="form-advanced.html">{{ trans('welcome.set_other_settings') }}</a></li>
                    </ul>
                </li>

                <li class="text-muted menu-title">{{ trans('welcome.users_control') }}</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> {{ trans('welcome.users') }} </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('adminpanel.users.index') }}">{{ trans('welcome.users_show') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('adminpanel.users.create') }}">{{ trans('welcome.users_create') }}</a>
                        </li>
                    </ul>
                </li>

                <li class="text-muted menu-title">{{ trans('welcome.buildings_control') }}</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-grid"></i>
                        <span> {{ trans('welcome.buildings') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('adminpanel.buildings.index') }}">{{ trans('welcome.buildings_show') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('adminpanel.buildings.create') }}">{{ trans('welcome.building_create') }}</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->