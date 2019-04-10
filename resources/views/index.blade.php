<!doctype html>
<html lang="pl">
    <head>
        @include('partials._head')
    </head>
    <body>
        <main class="container-fluid m-0 p-0"> <!-- główny kontener -->
            @include('partials._nav1')
            <div class="row col-12 m-0 p-0 mt-6"> <!-- kontener z siatką bootstrapową -->
            <!-- Koniec nagłówka. Tutaj tniemy ;) -->

            @yield('content')

            <!-- Tutaj zaczyna się footer -->
            </div>
        </main> 
        @include('partials._scripts')
        @yield('javascript')
    </body>
</html>