
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          @vite('resources/css/app.css')
        <title>Laravel</title>
    </head>

    

    <body class="bg-slate-100 text-white">

      <header class="bg-slate-800 shadow-lg">
        <nav>
          <a href="#" class="nav-link">Home</a>

          <div class="flex-item-center gap-4">
            <a href="#" class="nav-link">Login</a>
            <a href="#" class="nav-link">Register</a>
          </div>

        </nav>
      </header>

      <main class="py-8 px-4 mx-auto max-w-screen-lg">
        {{$slot}}
      </main>

    </body>
</html>


