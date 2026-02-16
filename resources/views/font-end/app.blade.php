<!DOCTYPE html>
<html lang="EN-GB" xml:lang="EN-GB">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@yield('styles')

<body>
  @yield('header')
  @yield('content')
  @yield('footer')
  {{-- @include('layouts.font-end.javascript') --}}
  @yield('scripts')
</body>
</html>


