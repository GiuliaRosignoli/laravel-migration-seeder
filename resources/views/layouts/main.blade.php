<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Style -->
        <link href="{{ asset('./css/app.css') }}" rel="stylesheet">

        <title>Holiday Packages</title>
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        {{--Header--}}
        <header>
            @include('./partials/header')
        </header>

        {{--Main--}}
        <main>
            @yield('content')
        </main>
        {{--/Main--}}


        {{--Footer--}}
        <footer>
            @include('./partials/footer')
        </footer>
    </body>
</html>
