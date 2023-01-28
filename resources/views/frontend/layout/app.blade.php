<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Title -->
    <title>warfira | @yield('title')</title>

    @include('frontend.layout.partials._styles')

    @yield('add_styles')

</head>

<body>
    <!-- preloader Area -->
    @include('frontend.layout.partials._preloader')


    <!-- Header Area -->
    @include('frontend.layout.partials._header')


    @include('frontend.layout.partials._search')

    @yield('content')
    <!-- Abonnez-vous à notre newsletter -->
    @include('frontend.layout.partials._newsletter')
    <!-- Footer  -->
    @include('frontend.layout.partials._footer')

    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>

    @include('frontend.layout.partials._scripts')

    @yield('add_scripts')
</body>

</html>
