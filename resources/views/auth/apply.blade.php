@extends('layouts.navbar')

@section('title','Application Form')

@section('body')

<form action="{{ route('student.apply') }}" method="POST" enctype="multipart/form-data">
  @csrf

  
  <input type="number" name="TRN" placeholder="TRN#" value="{{ old('TRN') }}">
  @error('TRN')
  {{ $message }}  
  @enderror <br>

  <input type="text" name="fname" placeholder="*First name" value="{{ old('fname') }}">
  @error('fname')
  {{ $message }}  
  @enderror <br>
  <input type="text" name="lname" placeholder="*Last name" value="{{ old('lname') }}">
  @error('lname')
  {{ $message }}  
  @enderror <br>
  <label for="gender">GENDER</label> <br>
  <select name="gender" id="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
  @error('gender')
  {{ $message }}  
  @enderror <br>
  <label for="course">COURSES</label><br> 
  <select name="course" id="course">
    @foreach ($courses as $course )
    <option value="{{ $course->c_id }}">{{ $course->c_name }}</option>
    @endforeach
  </select>
  @error('course')
  {{ $message }}  
  @enderror <br>
  <input type="date" name="DOB" placeholder="Birth Date" >
  @error('date')
  {{ $message }}  
  @enderror <br>
  <input type="email" name="email" placeholder="*Email" value="{{ old('email') }}">
  @error('email')
  {{ $message }}  
  @enderror <br>
  <input type="text" name="street" placeholder="*street" value="{{ old('street') }}">
  @error('street')
  {{ $message }}  
  @enderror <br>
  <input type="text" name="town" placeholder="*town" value="{{ old('town') }}">
  @error('town')
  {{ $message }}  
  @enderror <br>
  <input type="text" name="country" placeholder="*country" value="{{ old('country') }}">
  @error('country')
  {{ $message }}  
  @enderror <br>
  <input type="text" name="parish" placeholder="*parish" value="{{ old('parish') }}">
  @error('parish')
  {{ $message }}  
  @enderror <br>
  <input type="tel" name="telephone" placeholder="*telephone" value="{{ old('telephone') }}">
  @error('telephone')
  {{ $message }}  
  @enderror <br>
  @if ($user = Session('user'))
  {{-- <label for="photo" value="{{ $user->username }}">Upload Photo</label><br> --}}
  <input type="file" name ="photo"><br>
  @endif
  <input type="submit" value="Submit">
</form>
<br>
<br>
<h1>QUALIFICATIONS</h1>
<form action="{{ route('store.qual') }}" method="POST">
@csrf
  <input type="text" name="subject" value="" placeholder="Subject">
  <input type="text" name="exam" value="" placeholder="Examination Body">
  <input type="text" name="qual" value="" placeholder="Qualifications">
  <input type="text" name="grade" value="" placeholder="Grade">
  <input type="text" name="year" value="" placeholder="Year">
  <input type="submit" value="Submit">
</form>



@endsection