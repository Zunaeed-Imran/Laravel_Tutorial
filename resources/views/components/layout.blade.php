


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <header>
    <nav>
      <a href="">Home</a>

      <div>
        <a href="#" class="nav-link">Login</a>
        <a href="{{ route('register')}}" class="nav-link">Register</a>
      </div>
    </nav>
  </header>

  <main>
    @yield('main')
    <h1 class="bg-blue-500 text-center text-4xl">Hello from layout</h1>

  </main>
</body>
</html>





