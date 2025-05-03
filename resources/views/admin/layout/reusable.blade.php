<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.header')

</head>
<body class="sb-nav-fixed">
    @include('admin.partials.navbar')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('admin.partials.sidebar')
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content') 
                </div>
            </main>

            @include('admin.partials.footer')
        </div>
    </div>

</body>
</html>
