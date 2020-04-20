<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />


    <!-- font awesome 4.7 -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/lib/font-awesome-4.7.0/css/font-awesome.min.css') }}"
    />
    @stack('css')
    <title>@yield('title') Megono-Dev</title>
    <link
      rel="icon"
      href="https://img.icons8.com/material-two-tone/90/000000/blockly-green.png"
      type="image/icon type"
    />
  </head>
  <body>
            @yield('content')

    @stack('scripts')
  </body>
</html>