<!DOCTYPE html>
<html lang="en" data-theme="cupcake">
    <style>
        html{
            bottom: 0%;
        }
        #header{
            font-family: 'Viga', sans-serif;
        }
    </style>
<head>
    @include('include.meta')
    <title>@yield('title')</title>
    @stack('before-style')
    @include('include.styleslide')
    @stack('after-style')
</head>
<body>
  
    @yield('content')
  
    

    @stack('before-script')
    @include('include.script')
    @stack('after-script')
</body>
</html>
