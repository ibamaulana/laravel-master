<!DOCTYPE html>
<html lang="en">

@include('layouts.backend.header')

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <img src="{{ url('image/load.gif') }}" style="position: absolute;width: 250px;top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;">
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('layouts.backend.navbar')
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layouts.backend.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- /#page-wrapper -->
    </div>
    @include('layouts.backend.modal.logout')
    @include('layouts.backend.script')
    @stack('scripts')
</body>

</html>
