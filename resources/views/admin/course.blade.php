@extends('layouts.navbar')

@section('title','USERS')


@section('body')

<style>
  
  .header {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(../IMAGES/OIP1.jpeg);
    background-position:;
    background-size:cover;
    /* position: relative; */
  }
  table {
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
  }
  
  th,
  tr,
   {
    border: 1px solid #3498db;
padding: 10px 10px;
color: #3498db;
}

td {
    border: 1px solid #3498db;
padding: 10px 10px;
color: white;
}

</style>

<table>
  <tr>
    <td>Course ID</td>
    <td>Course Name</td>
    <td>Course Price</td>
  </tr>
@foreach ($courses as $course)
  
<tr>
  <td>{{ $course->c_id }}</td>
  <td>{{ $course->c_name }}</td>
  <td>{{ $course->price }}</td>
  <td>
    <form action="{{ route('delete.course',$course->c_id) }}" method="post">
      @csrf
    @method('DELETE')
    <input type="submit" value="DELETE" class="bg-red-500 px-4 py-2 text-white hover:bg-red-800">
    </form>
  </td>
</tr>
@endforeach
<div class="mt-52 bg-blue-400">{{ $courses->links() }}</div>
</table>
<div class="container">
<H3 class="text-white">ADD A COURSE</H3>
  <form action="{{ route('add.course') }}" method="POST">
    @csrf
    <span class="text-red-500"> @error('cname')
      {{ $message }}
      @enderror
    </span><br>
 
    <input type="text" name="cname" value="{{ old('cname') }}" placeholder="Course Name" class="py-2 px-2 text-blue-500 font-semibold placeholder-blue-500 ">
    <input type="number" name="cprice" value="{{ old('cprice') }}" placeholder="Course Price" class="py-2 px-2 text-blue-500 font-semibold placeholder-blue-500 ">
    <input type="submit" value="Add" class="bg-green-500 py-2 px-3 text-white font-semibold hover:bg-green-300">
  </form>
</div>
  @endsection