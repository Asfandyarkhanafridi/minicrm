<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show', app()->getLocale()) }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-building nav-icon"></i>
                    <p>
                        {{__('menu.companies')}}
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{route('company.index', app()->getLocale())}}" class="nav-link">
                            <i class="far fas fa-list nav-icon"></i>
                            <p>{{__('menu.list')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('company.create', app()->getLocale())}}" class="nav-link">
                            <i class="far fas fa-plus nav-icon"></i>
                            <p>{{__('menu.create')}}</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users nav-icon"></i>
                    <p>
                        {{__('menu.employees')}}
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{route('employee.index', app()->getLocale())}}" class="nav-link">
                            <i class="far fas fa-list nav-icon"></i>
                            <p>{{__('menu.list')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('employee.create', app()->getLocale())}}" class="nav-link">
                            <i class="far fas fa-plus nav-icon"></i>
                            <p>{{__('menu.create')}}</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
