@include('partials.user-header')
@include('partials.user-topbar')
		<div class="page-wrapper">
            <!-- Left Sidenav -->
            <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu">
                    @include('partials.user-menu')
                </ul>
            </div>
            <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                	@yield('content')
                </div><!-- container -->
@include('partials.user-footer')