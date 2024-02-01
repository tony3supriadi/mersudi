<!DOCTYPE html>
<html lang="id" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-bordered" data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template-no-customizer">
  <head>
    @include('layouts.inc.head')
  </head>
  <body>
    @yield('content')
    @include('layouts.inc.scripts')
  </body>
</html>
