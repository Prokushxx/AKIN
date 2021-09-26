@extends('layouts.navbar')

@section('title')

@endsection


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
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
  }
  
  th,
  tr,
  td {
    border: 1px solid #3498db;
padding: 10px 10px;
color: #3498db;
}

td {
  color: white;
}

.tbl2{
  position: fixed;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
}
</style>


<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Parish</th>
    <th>City</th>
    <th>Course</th>
    <th>Status</th>
  </tr>  
  @foreach ($students as $student)
  <img src="{{ asset('/storage/PHOTO/'. $student->pic_name)}}" alt="{{ $student->pic_name }}" class="ml-40 max-w-sm bg-blue-600">
  <tr>
    <td>{{ $student->firstname }}</td>
    <td>{{ $student->lastname }}</td>
    <td>{{ $student->DOB }}</td>
    <td>{{ $student->gender }}</td>
    <td>{{ $student->parish }}</td>
    <td>{{ $student->town}}</td>
    <td>{{ $student->c_name}}</td>
    <td> accept <br> reject </td>
    </tr>
  
</table>

@endforeach
<table class="tbl2 ">
  <tr>
    <th>Subject</th>
    <th>Exam Body</th>
    <th>Qualification</th>
    <th>Grade</th>
    <th>Year</th>
  </tr>
@foreach ($students as $qual)
<tr>
  <td>{{ $qual->subject }}</td>
  <td>{{ $qual->exam_body }}</td>
  <td>{{ $qual->qualification }}</td>
  <td>{{ $qual->grade }}</td>
  <td>{{ $qual->year }}</td>
</tr>
@endforeach
</table>


@endsection