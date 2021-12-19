<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('app.name'))</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    @include('admin.layouts.parts.nav')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.layouts.parts.sidebar')

    <div class="content-wrapper">
        @include('admin.layouts.parts.header')
        <section class="content">
            @yield('content')
        </section>
    </div>
    @include('admin.layouts.parts.footer')
</div>

<script src="{{ mix('js/app.js') }}" defer></script>

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
