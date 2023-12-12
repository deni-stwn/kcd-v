<aside class="main-sidebar sidebar-dark-gray elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link ">
        <img src="{{ asset('image 4.svg') }}" alt="AdminLTE Logo" style="opacity: .8" width="50" height="50">
        <span class="brand-text tw-font-semibold mt-3">KCD V</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                {{-- <a href="#" class="d-block">{{ Auth::user()->name ?? '' }}</a> --}}
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <x-nav-link icon="fas fa-database" label="blog" link="/admin/blog"
                            :active="Request::is('admin/blog')"></x-nav-link>
                        <x-nav-link icon="fas fa-user" label="user" link="/admin/user" :active="Request::is('admin/user')"></x-nav-link>
                        <li class="nav-item dropdown">
                            <a class="dropdown-item text-blue text-bold" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Keluar') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
{{-- @push('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush --}}
