@extends('layouts.navbar')

@section('title','Applicants')

@section('body')
<style>
    .header {
        min-height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(../IMAGES/OIP1.jpeg);
        background-position:;
        background-size:cover;
        position: relative;
    }
  table {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60%;
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

  .new{
    background-color: ;
  }

</style>

<table>

  <tr>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>CONTACT INFO</th>
    <th>COURSE</th>
  </tr>
  
  @foreach ($applicants as $apply)
  <tr>
   
    <td>{{ $apply->firstname}} {{ $apply->lastname }}</td>
    <td>{{ $apply->email }}</td>
    <td>1876-{{ $apply->telephone }}</td>
    <td>{{ $apply->c_name }}</td>
    <td ><a href="{{ route('applicants.info',$apply->stud_id) }}" class=" bg-none text-blue-200">View Applicant</a> </td>
   
  </tr>
  @endforeach
 
</table>
  
@endsection