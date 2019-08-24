<!DOCTYPE html>
<html>
<head>
    @include('backend.include.head')
</head>

<body>

<!-- Loader -->
@include('backend.include.header')

@yield('content')

<!-- Footer -->
@include('backend.include.footer')
<!-- End Footer -->

@include('backend.include.script')
<!-- jQuery  -->

</body>
</html>