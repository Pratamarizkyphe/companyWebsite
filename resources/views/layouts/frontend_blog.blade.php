<!DOCTYPE html>
<html lang="en" data-theme="cupcake">
<head>
    @include('include.meta')
    <title>@yield('title')</title>
    @stack('before-style')
    @include('include.styleslide')
    @stack('after-style')
</head>
<body style="font-family: 'Poppins', sans-serif;">
  
    @yield('content')
  
    

    @stack('before-script')
    @include('include.script')
    @stack('after-script')
</body>
</html>