<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('Admin/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Dashboard | Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('Admin/assets/css/theme.css?ver=3.1.2') }}">
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        <x-dashboard-sidebar/>
        <div class="nk-main ">
            <div class="nk-wrap ">
                <x-dashboard-nav/>
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                             {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <script src="{{ asset('Admin/assets/js/bundle.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('Admin/assets/js/scripts.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('Admin/assets/js/charts/gd-analytics.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('Admin/assets/js/libs/jqvmap.js?ver=3.1.2') }}"></script>
</body>

</html>
