<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/mainStyle.css">
    <title>@yield('title','عيادات الموج')</title>

</head>
<body>

    @include('Layout.header')

    @include('Pages.الرئيسية')
    @include('Layout.footer')
    echo "hello"



       <script type="text/javascript" src="{{ asset("js/index.js") }}"></script>
       <script type="text/javascript" src="{{ asset("C:/xampp/htdocs/learn_E-commers/resources/js/test.js") }}"></script>



</body>
</html>
