<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>HoopsVision</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="app-container">

        @include('components.dashboard.top-bar')
        <div class="app-content">
            @livewire('navigation-menu')

            @yield('content')

        </div>

    </div>
    <script>
        feather.replace();
    </script>


    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
