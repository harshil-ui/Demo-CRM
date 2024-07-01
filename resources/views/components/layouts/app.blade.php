<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>

    @if (Route::currentRouteName() != 'login' &&
            Route::currentRouteName() != 'login-2' &&
            Route::currentRouteName() != 'register' &&
            Route::currentRouteName() != 'register-2')
        <div class="container-scroller d-flex">
            <livewire:includes.sidebar />
            <div class="container-fluid page-body-wrapper">
                <livewire:includes.navbar />
                <div class="main-panel">
    @endif

    {{ $slot }}

    @if (Route::currentRouteName() != 'login' &&
            Route::currentRouteName() != 'login-2' &&
            Route::currentRouteName() != 'register' &&
            Route::currentRouteName() != 'register-2')
        <livewire:includes.footer />
    @endif
    </div>
    </div>
    </div>

    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/file-upload.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    @livewireScriptConfig

</body>

</html>
