
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="w-full max-w-xs bg-blue-800">
    <form action="{{ route('register.save') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      @csrf
      <input type="text" name="name" value="{{ old('name') }}" placeholder="ENTER YOUR FULL-NAME" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 py-3"><br>
      @error ('name'){{ $message }} @enderror <br>
      <input type="email" name="email" value="{{ old('email') }}" placeholder="ENTER YOUR EMAIL" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 py-3"><br>
      @error ('email'){{ $message }} @enderror <br>
      <input type="password" name="pwd" value="{{ old('pwd') }}" placeholder="PASSWORD" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 py-3"><br>
      @error ('pwd'){{ $message }} @enderror <br>
      <input type="password" name="conpwd" value="{{ old('conpwd') }}" placeholder="CONFIRM PASSWORD" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 py-3"><br>
      @error ('conpwd'){{ $message }} @enderror <br>
      <input type="submit" value="Register">
    </form>
    </div>
</body>
</html>

