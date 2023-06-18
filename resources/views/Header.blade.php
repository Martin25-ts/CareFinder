<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('style-conten')
    @stack('script-conten')
    @stack('font-conten')
    @stack('style-font-family')


    <title>@yield('title')</title>

</head>
<body>

    @yield('navbar')

    @yield('conten')

    @yield('footer')
</body>

</html>
