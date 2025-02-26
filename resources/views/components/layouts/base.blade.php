<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WMS / Wardrobe Management System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link src="{{ asset('assets/images/mws.svg') }}" rel="icon">
    <link href=src="{{ asset('assets/images/mws.svg') }}" >

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('panel/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('panel/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('panel/css/style.css') }}" rel="stylesheet">
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles

</head>

<body class="">

    <!-- header -->
    @include('components.layouts.includes.header')
    <!-- header-end -->
    <!-- Sidebar -->
    @include('components.layouts.includes.sidebar')
    <!-- Sidebar-end -->
    <main id="main" class="main">
       {{ $slot }}
    </main>
    <!-- Footer -->
    @include('components.layouts.includes.footer')
    <!-- Footer-end -->
    {{-- </main> --}}


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('panel/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset("panel/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset('panel/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('panel/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('panel/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('panel/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('panel/js/main.js') }}"></script>
    @livewireScripts
    @stack('scripts')
</body>

</html>
