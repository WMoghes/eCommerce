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
                        <li><a href="{{ route('adminpanel.users.index') }}">{{ trans('welcome.users_show') }}</a></li>
                        <li><a href="{{ route('adminpanel.users.create') }}">{{ trans('welcome.users_create') }}</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Forms </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="form-elements.html">General Elements</a></li>
                        <li><a href="form-advanced.html">Advanced Form</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-pickers.html">Form Pickers</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-mask.html">Form Masks</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                        <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                        <li><a href="form-code-editor.html">Code Editor</a></li>
                        <li><a href="form-uploads.html">Multiple File Upload</a></li>
                        <li><a href="form-xeditable.html">X-editable</a></li>
                        <li><a href="form-image-crop.html">Image Crop</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->