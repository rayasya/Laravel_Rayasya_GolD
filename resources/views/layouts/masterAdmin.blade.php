@include('components.admin.head')

<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    @include('components.admin.sidebar')
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">

        <!--  Header Start -->
        @include('components.admin.header')
        <!--  Header End -->

        <div class="container-fluid">
            <!--  Content -->
            @yield('content')
            <!-- Content End-->
        </div>
    </div>

</div>
{{-- @dd(session()->get('success')) --}}
@include('sweetalert::alert')
@include('components.admin.scripts')
