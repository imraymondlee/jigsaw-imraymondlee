<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/build/css/normalize.css">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  </head>
  <body>
    @include('_partials.header')
    <main>
      @yield('content')
    </main>
    @include('_partials.footer')
  </body>
</html>
