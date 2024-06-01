
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          @vite('resources/css/app.css')
        <title>Laravel</title>
    </head>

    

    <body>

      <header>
        <nav>
          <h1 class="text-4xl">Nav</h1>
        </nav>
      </header>

      <main>
        {{$slot}}
      </main>

    </body>
</html>


