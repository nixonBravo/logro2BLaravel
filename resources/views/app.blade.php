<!DOCTYPE html>
<html lang="en">
<!-- Head -->
@section('title', 'Dashboard')
@include('template.header')
<!-- ./head -->

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-footer-fixed">
    <div class="wrapper">



        <!-- Main Sidebar Container -->
        @include('template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                {{-- @yield('contenido') --}}
                @include('dashboard')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('template.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('template.scripts')
</body>

</html>
