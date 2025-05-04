<!DOCTYPE html>
<html lang="en">
    <head>
        @include('user.partials.head')
    </head>
    <body>
        @include('user.partials.navbar')

        <header class="bg-light border-bottom mb-4">
            @yield('header')
        </header>

        <main class="container">
            @yield('content')
        </main>

        @include('user.partials.footer')

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
