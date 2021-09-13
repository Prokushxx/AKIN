<form action="{{ route('login.info') }}" method="post">
  @csrf
  <span style="color: red;">@error('email'){{$message}}@enderror</span><br>
  <input type="text" placeholder="EMAIL" value="{{ old('email') }}" name="email"/><br>
        <input type="password" placeholder="Password"  value="{{ old('pwd') }}" name="pwd"/><br>
        <span style="color: red;">@error('pwd'){{$message}}@enderror</span><br>
        <input type="submit" value="Login" name="login"/>
  </form>
  <a href="/"><button>HOME</button></a>