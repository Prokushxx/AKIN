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
  <div class="container xl">
  <form action="{{ route('login.info') }}" method="post">
    @csrf
    <div>
          <input type="text" placeholder="EMAIL" value="{{ old('email') }}" name="email"/>
        </div>
        <div> <span style="color: red;">@error('email'){{$message}}@enderror</span></div>
          <div><input type="password" placeholder="Password"  value="{{ old('pwd') }}" name="pwd"/></div>
          <div><span style="color: red;">@error('pwd'){{$message}}@enderror</span></div>
          <div><input type="submit" value="Login" name="login"/></div>
    </form>
    <a href="/"><button>HOME</button></a>
  </div>
</body>
</html>

