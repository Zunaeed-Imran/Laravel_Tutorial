<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          @vite('resources/css/app.css')
        <title>Laravel</title>
    </head>

    

    <body>
      
      @if (false)
      <h1 class="
      bg-red-500
      text-4xl
      text-center">Hello</h1>

  @else
      <h1 class="
      bg-red-500
      text-4xl
      text-center">Bye</h1>
  @endif

    </body>
</html>
