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
    <x-admin.nav-item :active="request()->is('admin/posts/*') || request()->is('admin/posts') || request()->is('admin/categories/*') || request()->is('admin/categories')">
        <x-admin.nav-link name="Blog" icon="fa fa-blog" />
        <x-admin.collapse-show name="Blog" :show="request()->is('admin/posts/*') || request()->is('admin/posts') || request()->is('admin/categories/*') || request()->is('admin/categories')">
            <h6 class="collapse-header">Post</h6>
            <x-admin.collapse-item :href="route('admin.posts.index')" :active="request()->is('admin/posts')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('admin.posts.create')" :active="request()->routeIs('admin.posts.create')">
                {{ __('Create') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>

        <x-admin.collapse-show name="Blog" :show="request()->is('admin/posts/*') || request()->is('admin/posts') || request()->is('admin/categories/*') || request()->is('admin/categories')">
            <h6 class="collapse-header">Category</h6>
            <x-admin.collapse-item :href="route('admin.categories.index')" :active="request()->is('admin/categories')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('admin.categories.create')" :active="request()->routeIs('admin.categories.create')">
                {{ __('Create') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>

    </x-admin.nav-item>

    <x-admin.nav-item :active="request()->is('admin/tags/*') || request()->is('admin/tags')">
        <x-admin.nav-link name="Tag" icon="fas fa-tags" />
        <x-admin.collapse-show name="Tag" :show="request()->is('admin/tags/*') || request()->is('admin/tags')">
            <x-admin.collapse-item :href="route('admin.tags.index')" :active="request()->is('admin/tags')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('admin.tags.create')" :active="request()->routeIs('admin.tags.create')">
                {{ __('Create') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>
    </x-admin.nav-item>

    <x-admin.nav-item :active="request()->is('admin/galleries/*') || request()->is('admin/galleries')">
        <x-admin.nav-link name="Gallery" icon="far fa-image" />
        <x-admin.collapse-show name="Gallery" :show="request()->is('admin/galleries/*') || request()->is('admin/galleries')">
            <x-admin.collapse-item :href="route('admin.galleries.index')" :active="request()->is('admin/galleries')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('admin.galleries.create')" :active="request()->routeIs('admin.galleries.create')">
                {{ __('Create') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>
    </x-admin.nav-item>

    <x-admin.nav-item :active="request()->is('admin/registrations/*') || request()->is('admin/registrations')">
        <x-admin.nav-link name="Registration" icon="far fa-registered" />
        <x-admin.collapse-show name="Registration" :show="request()->is('admin/registrations/*') || request()->is('admin/registrations')">
            <x-admin.collapse-item :href="route('admin.registrations.index')" :active="request()->is('admin/registrations')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('admin.registrations.export')" :active="request()->routeIs('admin.registrations.export')">
                {{ __('Export') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>
    </x-admin.nav-item>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Session
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();getElementById('logout').submit();">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
        <form action="{{ route('logout') }}" method="POST" id="logout">
            @csrf
        </form>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
