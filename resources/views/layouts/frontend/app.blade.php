<!doctype html>
<html lang="en">
<head>
    @include('layouts.frontend.link')
</head>
<body class="common-front " >

    @include('layouts.frontend.header')

    @yield('content')

    @include('layouts.frontend.footer')
    @include('layouts.frontend.script')

</body>
</html>
