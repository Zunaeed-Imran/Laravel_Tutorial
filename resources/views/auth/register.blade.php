<x-layout>
  <h1 class="text-center text-blue-400">Register a view</h1>

  <div class="mx-auto max-w-screen-sm card">

    <form action="{{ route('register')}}" method="post">
      @csrf
      
      <div class="mb-4">
        <input type="text" name="username" placeholder="Name">
        @error('username')
          {{ $message }}
        @enderror
      </div>

      <div class="mb-4">
        <input type="text" name="email" placeholder="Email">
        @error('email')
          <p class="error">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-4">
        <input type="text" name="password" placeholder="Password">
        @error('password')
          <p class="error">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-4">
        <input type="text" name="password_confirmation" placeholder="Password_confirmation">
      </div>
      <div class="mb-4">
        <button class="bg-green-600 p-1 rounded">Submit</button>
      </div>

    </form>

  </div>
</x-layout>