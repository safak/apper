<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="{{route('admin.home.index')}}"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
            <li><a href="{{route('admin.features.index')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Features</span></a></li>
            <li><a href="{{route('admin.security.index')}}"><i class="icon-lock"></i><span class="hidden-tablet"> Security</span></a></li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-edit"></i><span class="hidden-tablet"> FAQ</span></a>
                <ul>
                    <li><a class="submenu" href="{{route('admin.faq.index')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All</span></a></li>
                    <li><a class="submenu" href="{{route('admin.faq.create')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create</span></a></li>
                </ul>
            </li>
            <li><a href="{{route('admin.download.index')}}"><i class="icon-download"></i><span class="hidden-tablet"> Download</span></a></li>
            <li><a href="{{route('admin.devices.index')}}"><i class="icon-phone"></i><span class="hidden-tablet"> Devices</span></a></li>
            <li><a href="{{route('admin.settings.index')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Settings</span></a></li>
        </ul>
    </div>
</div>