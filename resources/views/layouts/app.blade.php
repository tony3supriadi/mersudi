<!DOCTYPE html>
<html lang="id" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-bordered" data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template-no-customizer">
  <head>
    @include('layouts.inc.head')
  </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
        @include('layouts.inc.sidebar')

        <!-- Layout container -->
        <div class="layout-page">
          
          <!-- Navbar -->
          @include('layouts.inc.navbar')
        </div>

        @yield('content')
      </div>
    </div>

    @include('layouts.inc.scripts')
  </body>
</html>
