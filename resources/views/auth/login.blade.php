
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Document</title>
</head>


<body class="body-bg min-h-screen pt-10 pb-6 px-2 md:px-0" >
  <header class="bg-blue-500 max-w-lg mx-auto rounded">
<h1 class="text-4xl font-bold text-white text-center">HEART</h1>
  </header> 
  <main class="max-w-lg mx-auto p-4 md:p-12 my-10 rounded-lg shadow-2xl">
    <section>
      <h3 class="font-bold text-2xl">Welcome to <span class="text-blue-500">HEART</span></h3>
      <a href="{{ url()->previous() }}"><button class="text-white hover:bg-red-700 transition-500 bg-red-500 px-3 py-2 rounded">Go back</button></a>
    </section>

    <section class="mt-10">
        <form action="{{ route('login.info') }}" method="post" class="flex flex-col mx-auto ">
            @csrf
            <div class="text-red-500">{{ Session('Restrict') }}</div>
        <div class="mb-6 pt-3 rounded bg-gray-200 ">
        <span style="color: red;">@error('email'){{ $message }}@enderror</span>
          <Label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</Label>
        <input type="text" placeholder="EMAIL" name="email"  value="{{ old('email') }}"class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 py-3"/>
      </div>
        
        <div class="mb-6 pt-3 rounded bg-gray-200">
          <Label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</Label>
          <input type="password" placeholder="Password" name="pwd" value="{{ old('pwd') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 py-3"/>
          <span style="color: red;">@error('pwd'){{ $message }}@enderror</span>
        </div>  
        
         <button type="submit" class="bg-blue-400 rounded py-2 px-4 hover:shadow-xl  text-white" >Login</button>
      </form>
      <a href="register" class="text-sm text-gray-400 hover:text-blue-400 hover:underline"><button>Don't have an Account?</button></a>
    </section>
    </main>
  </body> 
</html>
