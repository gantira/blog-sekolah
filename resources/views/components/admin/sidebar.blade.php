<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('bagas.index') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('ruangadmin/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('bagas.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <x-admin.nav-item :active="request()->routeIs('bagas.posts.*') || request()->routeIs('bagas.categories.*')">
        <x-admin.nav-link name="Blog" icon="fa fa-blog" />
        <x-admin.collapse-show name="Blog" :show="request()->routeIs('bagas.posts.*') || request()->routeIs('bagas.categories.*')">
            <h6 class="collapse-header">Post</h6>
            <x-admin.collapse-item :href="route('bagas.posts.index')" :active="request()->routeIs('bagas.posts')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('bagas.posts.create')" :active="request()->routeIs('bagas.posts.create')">
                {{ __('Create') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>

        <x-admin.collapse-show name="Blog" :show="request()->routeIs('bagas.posts.*') || request()->routeIs('bagas.categories.*')">
            <h6 class="collapse-header">Category</h6>
            <x-admin.collapse-item :href="route('bagas.categories.index')" :active="request()->routeIs('bagas.categories.index')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('bagas.categories.create')" :active="request()->routeIs('bagas.categories.create')">
                {{ __('Create') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>

    </x-admin.nav-item>

    <x-admin.nav-item :active="request()->routeIs('bagas.tags.*')">
        <x-admin.nav-link name="Tag" icon="fas fa-tags" />
        <x-admin.collapse-show name="Tag" :show="request()->routeIs('bagas.tags.*')">
            <x-admin.collapse-item :href="route('bagas.tags.index')" :active="request()->routeIs('bagas.tags.index')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('bagas.tags.create')" :active="request()->routeIs('bagas.tags.create')">
                {{ __('Create') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>
    </x-admin.nav-item>

    <x-admin.nav-item :active="request()->routeIs('bagas.galleries.*')">
        <x-admin.nav-link name="Gallery" icon="far fa-image" />
        <x-admin.collapse-show name="Gallery" :show="request()->routeIs('bagas.galleries.*')">
            <x-admin.collapse-item :href="route('bagas.galleries.index')" :active="request()->routeIs('bagas.galleries.index')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('bagas.galleries.create')" :active="request()->routeIs('bagas.galleries.create')">
                {{ __('Create') }}
            </x-admin.collapse-item>
        </x-admin.collapse-show>
    </x-admin.nav-item>

    <x-admin.nav-item :active="request()->routeIs('bagas.registrations.*')">
        <x-admin.nav-link name="Registration" icon="far fa-registered" />
        <x-admin.collapse-show name="Registration" :show="request()->routeIs('bagas.registrations.*')">
            <x-admin.collapse-item :href="route('bagas.registrations.index')" :active="request()->routeIs('bagas.registrations.index')">
                {{ __('Table') }}
            </x-admin.collapse-item>
            <x-admin.collapse-item :href="route('bagas.registrations.export')" :active="request()->routeIs('bagas.registrations.export')">
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
