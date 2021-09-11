<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<!-- @stack('headStacking') -->
<body class="fixed-left">

 <!-- Begin page -->
 <div id="wrapper">

@include('partials.sidebar')

  <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
  <!-- Page Content -->
        
        </div>
<!-- END wrapper -->

        @stack('modals')

        @livewireScripts


@include('partials.scripts')        
</body>
</html>

