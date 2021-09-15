<form action="{{ route('student.apply') }}" method="POST">
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
  <select name="course" id="">
    <option value="web">Web Development</option>
    <option value="net">Network Support</option>
    <option value="AA">Administrative Assistance</option>
    <option value="HK">House Keeping</option>
    <option value="CS">Customer Service</option>
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
  <input type="number" name="telephone" placeholder="*telephone" value="{{ old('telephone') }}">
  @error('telephone')
  {{ $message }}  
  @enderror <br>
  <input type="submit" value="Submit">
</form>
<br>
<form action="" method="POST">
  @csrf
<label for="photo">Upload Photo</label>
<input type="file" name = "photo">
</form>
<br>

<h1>QUALIFICATIONS</h1>
<form action="#" method="POST">

  <input type="text" name="subject" value="" placeholder="Subject">
  <input type="text" name="exam" value="" placeholder="Examination Body">
  <input type="text" name="qual" value="" placeholder="Qualifications">
  <input type="text" name="grade" value="" placeholder="Grade">
  <input type="text" name="year" value="" placeholder="Year">
  
</form>