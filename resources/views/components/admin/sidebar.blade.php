<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-center" style="margin-top: 24px">
            <a href="dashboard" class="text-nowrap logo-img">
                <h3>{{ Auth::user()->role == 'Admin' ? 'Admin Page' : 'User Page' }}</h3>
                {{-- <img src="{{ asset('/') }}assets/images/logos/dark-logo.svg" width="180" alt="" /> --}}
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                @if (Auth::user()->role == 'Admin')
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Data</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request()->segment(1) == 'mahasiswa' ? 'active' : '' }}"
                            href="{{ route('mahasiswa') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-list"></i>
                            </span>
                            <span class="hide-menu">Data Mahasiswa</span>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
