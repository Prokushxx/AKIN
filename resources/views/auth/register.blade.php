

<form action="{{ route('register.save') }}" method="POST">
  @csrf
  <input type="text" name="name" value="{{ old('name') }}" placeholder="ENTER YOUR FULL-NAME"><br>
  @error ('name'){{ $message }} @enderror <br>
  <input type="email" name="email" value="{{ old('email') }}" placeholder="ENTER YOUR EMAIL"><br>
  @error ('email'){{ $message }} @enderror <br>
  <input type="text" name="age" value="{{ old('age') }}" placeholder="ENTER YOUR AGE"><br>
  @error ('age'){{ $message }} @enderror <br>
  <input type="password" name="pwd" value="{{ old('pwd') }}" placeholder="PASSWORD"><br>
  @error ('pwd'){{ $message }} @enderror <br>
  <input type="password" name="conpwd" value="{{ old('conpwd') }}" placeholder="CONFIRM PASSWORD"><br>
  @error ('conpwd'){{ $message }} @enderror <br>
  <input type="submit" value="Register">
</form>

<a href="/"><button>HOME</button></a>