<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>@yield('title') - My Store Aministrator</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('admin/img/apple-touch-icon.png')}}" sizes="180x180">
    <link rel="icon" href="{{ asset('admin/img/favicon-32x32.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('admin/img/favicon-16x16.png')}}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ asset('admin/manifest.json')}}">
    <link rel="mask-icon" href="{{ asset('admin/img/safari-pinned-tab.svg')}}" color="#7952b3">
    <link rel="icon" href="{{ asset('admin/img/favicon.ico')}}">
    <meta name="theme-color" content="#7952b3">
    <!-- Custom styles for this template -->
    <link href="{{ asset('admin/css/dashboard.css')}}" rel="stylesheet">
</head>
<body>

@include('admin.partials.header')

<div class="container-fluid">
    <div class="row">
        @include('admin.partials.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
</body>
</html>
