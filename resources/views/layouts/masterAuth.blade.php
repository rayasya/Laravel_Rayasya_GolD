@include('components.auth.head')

<!--  Body Wrapper -->
@yield('content')
<!--  Body Wrapper End -->

@include('sweetalert::alert')
@include('components.auth.scripts')
