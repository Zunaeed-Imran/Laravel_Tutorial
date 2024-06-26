<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
  <title>Laragigs layout</title>
  
</head>
<body class="md-48">




   {{-- View output  --}}
  @yield('content')


<main>


 {{-- Nav section  --}}
<nav class="flex justify-between items-center mb-4">
  <a href="/"
      ><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo"
  /></a>
  <ul class="flex space-x-6 mr-6 text-lg">
      <li>
          <a href="register.html" class="hover:text-laravel"
              ><i class="fa-solid fa-user-plus"></i> Register</a
          >
      </li>
      <li>
          <a href="/" class="hover:text-laravel"
              ><i class="fa-solid fa-arrow-right-to-bracket"></i>
              Login</a
          >
      </li>
  </ul>
</nav>







 {{-- Footer  --}}
  <footer
  class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
  >
  <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

  <a
      href="create.html"
      class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
      >Post Job</a
  >
  </footer>


  </main>
</body>
</html>