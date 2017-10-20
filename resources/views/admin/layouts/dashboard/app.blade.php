@extends('admin.layouts.app')

@section('body')
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            <!-- .navbar-header -->
            @include('admin.layouts.dashboard.navbar.navbar-header')

            <ul class="nav navbar-top-links navbar-right">

                <li>

                    {{-- @include('admin.layouts.dashboard.navbar.top-links.hide-sidebar') --}}

                </li>

                <li class="dropdown">

                    @include('admin.layouts.dashboard.navbar.top-links.messages')
                    
                </li>
                
                <li class="dropdown">

                    @include('admin.layouts.dashboard.navbar.top-links.tasks')

                </li>
                
                <li class="dropdown">

                    @include('admin.layouts.dashboard.navbar.top-links.alerts')

                </li>

                <li class="dropdown">
                    
                    @include('admin.layouts.dashboard.navbar.top-links.user')

                </li>

            </ul>
            <!-- /.navbar-top-links -->
            
            <!-- /.navbar-static-side -->
        </nav>

        {{-- INI sidebar --}}
        <nav class="navbar-default sidebar" role="navigation" id="sidebar">

            @include('admin.layouts.dashboard.sidebar.navbar-collapse')

        </nav>
        {{-- FIN sidebar --}}

        <div id="page-wrapper" class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                @yield('section')
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@endsection

@section('scripts')

     <script type="text/javascript">
         $(document).ready(function () {
             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').toggleClass('active');
                 $("#page-wrapper").toggleClass("active");
             });
         });
     </script>

@endsection