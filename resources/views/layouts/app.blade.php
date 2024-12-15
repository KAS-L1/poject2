<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', '') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
            <!-- [Favicon] icon -->
        <link rel="icon" href="{{asset('/assets/images/favicon.svg')}}" type="image/x-icon" />
        <!-- [Font] Family -->
        <link rel="stylesheet" href="{{asset('/assets/fonts/inter/inter.css')}}" id="main-font-link" />
        <!-- [phosphor Icons] https://phosphoricons.com/ -->
        <link rel="stylesheet" href="{{asset('/assets/fonts/phosphor/duotone/style.css')}}" />
        <!-- [Tabler Icons] https://tablericons.com -->
        <link rel="stylesheet" href="{{asset('/assets/fonts/tabler-icons.min.css')}}" />
        <!-- [Feather Icons] https://feathericons.com -->
        <link rel="stylesheet" href="{{asset('/assets/fonts/feather.css')}}" />
        <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
        <link rel="stylesheet" href="{{asset('/assets/fonts/fontawesome.css')}}" />
        <!-- [Material Icons] https://fonts.google.com/icons -->
        <link rel="stylesheet" href="{{asset('/assets/fonts/material.css')}}" />
        <!-- [Template CSS Files] -->
        <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" id="main-style-link" />
        <script src="{{asset('/assets/js/tech-stack.js')}}"></script>
        <link rel="stylesheet" href="{{asset('/assets/css/style-preset.css')}}" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
        <!-- [Head] end -->
        <!-- [Body] Start -->

        <body data-pc-preset="preset-8" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
        </div>
        <!-- [ Pre-loader ] End -->

         <!-- [ Sidebar Menu ] start -->
        <x-sidebar-menu />
        <!-- [ Sidebar Menu ] end -->
        <!-- [ Header Topbar ] start -->
        <x-header />
        <!-- [ Header ] end -->

        <!-- [ Main Content ] start -->
        <div class="pc-container">
        <div class="pc-content">
            {{$slot}}
            <!-- [ Main Content ] end -->
        </div>
        </div>
        <!-- [ Main Content ] end -->

        {{-- <x-footer /> --}}

         <!-- Required Js -->
        <script src="{{asset('/assets/js/plugins/popper.min.js')}}"></script>
        <script src="{{asset('/assets/js/plugins/simplebar.min.js')}}"></script>
        <script src="{{asset('/assets/js/plugins/bootstrap.min.js')}}"></script>
        <script src="{{asset('/assets/js/fonts/custom-font.js')}}"></script>
        <script src="{{asset('/assets/js/pcoded.js')}}"></script>
        <script src="{{asset('/assets/js/plugins/feather.min.js')}}"></script>
    </body>

</html>
