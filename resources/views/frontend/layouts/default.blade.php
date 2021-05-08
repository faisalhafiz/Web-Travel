<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.components.header')
    @yield('css')
</head>

<body>
    @include('frontend.layouts.components.navigation')
    <div class="container">
        @yield('content')
        @yield('car')
        @yield('testimonial')
    </div>
</body>
@include('frontend.layouts.components.footer')

</html>
