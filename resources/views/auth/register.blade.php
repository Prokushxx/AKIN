
@extends('layouts.navbar')

@section('body')
  
  <style>
 .form{
   margin-left: 450px;
 }

 body{
   background-color: rgb(172, 165, 165);
 }

  </style>


  <div class="w-full max-w-xs bg-blue-800 form mt-4"> 
    
    <form action="{{ route('register.save') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ">
      @csrf
      <h2 class="text-gray-500 ml-12" >REGISTER</h2>
      <input type="text" name="name" value="{{ old('name') }}" placeholder="ENTER YOUR FULL-NAME" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 py-3"><br>
      <span class="text-red-500">@error ('name'){{ $message }} @enderror</span> <br>
      <input type="email" name="email" value="{{ old('email') }}" placeholder="ENTER YOUR EMAIL" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 py-3"><br>
      <span class="text-red-500">@error ('email'){{ $message }} @enderror</span> <br>
      <input type="password" name="pwd" value="{{ old('pwd') }}" placeholder="PASSWORD" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 py-3"><br>
      <span class="text-red-500">@error ('pwd'){{ $message }} @enderror</span> <br>
      <input type="password" name="conpwd" value="{{ old('conpwd') }}" placeholder="CONFIRM PASSWORD" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 py-3"><br>
      <span class="text-red-500">@error ('conpwd'){{ $message }} @enderror</span> <br>
      <a href="{{ url()->previous() }}" class="text-white hover:bg-red-700 transition-500 bg-red-500 px-2 py-1 rounded mb-2 no-underline">Go back</a>
      <input type="submit" value="Register" class="  ml-2 bg-blue-600 px-2 py-1 rounded-md w-20 text-white hover:bg-blue-900 "><br>
      <div class="pt-2 hover:text-white px-2 py-1 rounded-md bg-gray-500 w-16 justify-center hover:bg-gray-600"><a href="/" class="text-white no-underline">HOME</a></div>
      <div class="pt-2 hover:text-indigo-800" ><a href="{{ route('login') }}">Already have an account?</a></div>
    </form>
    </div>
@endsection