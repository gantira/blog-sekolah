<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('ruangadmin/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('admin.dashboards.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <x-admin.nav-item :active="request()->is('admin/posts/*') || request()->is('admin/posts')">
        <x-admin.nav-link name="Blog" />
        <x-admin.collapse-show name="Blog" :show="request()->is('admin/posts/*') || request()->is('admin/posts')">
            <h6 class="collapse-header">Post</h6>
            <x-admin.collapse-item :href="route('admin.posts.index')" :active="request()->routeIs('admin.posts.index')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('admin.posts.create')"
                :active="request()->routeIs('admin.posts.create')">
                {{ __('Create') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>
    </x-admin.nav-item>

    <x-admin.nav-item :active="request()->is('admin/control/*') || request()->is('admin/control')">
        <x-admin.nav-link name="Control" />
        <x-admin.collapse-show name="Control" :show="request()->is('admin/control/*') || request()->is('admin/control')">
            <h6 class="collapse-header">Post</h6>
            <x-admin.collapse-item :href="route('admin.posts.index')" :active="request()->routeIs('admin.posts.index')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('admin.posts.create')"
                :active="request()->routeIs('admin.posts.create')">
                {{ __('Create') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>
    </x-admin.nav-item>

    <li class="nav-item">
        <a class="nav-link" href="ui-colors.html">
            <i class="fas fa-fw fa-palette"></i>
            <span>UI Colors</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Examples
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
            aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Example Pages</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
