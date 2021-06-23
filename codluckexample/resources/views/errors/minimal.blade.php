<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> My Store - Furniture | @yield('title')</title>

        <!-- Favicon  -->
        <link rel="icon" href="{{asset('/assets/img/core-img/favicon.ico')}}">

        <!-- Core Style CSS -->
        <link rel="stylesheet" href="{{asset('/assets/css/core-style.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/style.css')}}">
    </head>
    <body class="antialiased">
        <!-- Search Wrapper Area Start -->
        <div class="search-wrapper section-padding-100">
            <div class="search-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="search-content">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search" placeholder="Type your keyword...">
                                <button type="submit"><img src="{{asset('/assets/img/core-img/search.png')}}" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Wrapper Area End -->

        <!-- ##### Main Content Wrapper Start ##### -->
        <div class="main-content-wrapper d-flex clearfix">

            @include('layouts.partials.app-header')
            <!-- Product Details Area Start -->
                <div class="single-product-area section-padding-100 clearfix">
                    <div class="container-fluid">
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                                <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                                    <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                                        <h1>@yield('code', __('Oh no'))</h1>
                                    </div>

                                    <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                                        @yield('message')
                                    </div>

                                    <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                                        <button class="btn amado-btn active">
                                            {{ __('Go Home') }}
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- ##### Main Content Wrapper End ##### -->

        @include('layouts.partials.app-footer')
    </body>
</html>
