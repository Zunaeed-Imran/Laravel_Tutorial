<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Tailwind post CSS laravel --}}
          @vite('resources/css/app.css')

        <title>CRUD</title>

    </head>

    <body>
        <div class="bg-gray-400 text-center p-2 h-96">
            <div class="h-full max-h-full">
                <h1>CRUD APP</h1><br>
                <form action="">
                    <input type="text" name="text"><br>
                    <button class="bg-[#fcba03] p-2 rounded-md" type="submit">ADD</button>
                </form>
            </div>
        </div>
    </body>
</html>
