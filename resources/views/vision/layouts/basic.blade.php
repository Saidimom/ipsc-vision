<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>IPSC&bull;VISION</title>

        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('cssFiles')

    </head>

    <body  class="m-content--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside--offcanvas-default">

        @yield('header')

        @yield('content')

        @if ($errors->any())
            <div class="col-md-10">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @if ($status = session('status'))
            <div class="col-md-10">
                <div class="alert alert-success">
                    {{ $status }}
                </div>
            </div>
        @endif

        @yield('jsFiles')

    </body>
    <!-- end::Body -->
</html>
