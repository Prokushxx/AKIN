@extends('layouts.navbar')

@section('title')

@endsection


@section('body')
<style>

  .header {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4, 9, 30, 0.9), rgba(4, 9, 30, 0.7)), url(../IMAGES/OIP1.jpeg);
    /* background-position: absolute; */
    background-size:cover;
    /* position: relative; */
  }
  .table4 {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
  }
  
  th,
  tr,
  td {
    border: 1px solid #3498db;
padding: 10px 10px;
color: white;
}

.td2 {
  color: white;
}

.tbl2{
  position: fixed;
    top: 75%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
}
</style>


<table class="table4">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Parish</th>
    <th>City</th>
    <th>Course</th>
    <th>Payment Status</th>
    <th>Status</th>
  </tr>  
  @foreach ($students as $student)
  {{-- <img src="{{ asset( $student->pic_location)}}" alt="{{ $student->pic_name }}" class="ml-40 max-w-sm bg-blue-600"> --}}
  <tr>
    <td>{{ $student->firstname }}</td>
    <td>{{ $student->lastname }}</td>
    <td>{{ $student->DOB }}</td>
    <td>{{ $student->gender }}</td>
    <td>{{ $student->parish }}</td>
    <td>{{ $student->town}}</td>
    <td>{{ $student->c_name}}</td>
    <td>{{ $student->paymentstatus}}</td>
    <td> accept <br> reject </td>
    </tr>
  
</table>

@endforeach


{{-- <table class="tbl2 ">
  <tr>
    <th>Subject</th>
    <th>Exam Body</th>
    <th>Qualification</th>
    <th>Grade</th>
    <th>Year</th>
  </tr>
@foreach ($qualify as $qual)
<tr>
  <td>{{ $qual->subject }}</td>
  <td>{{ $qual->exam_body }}</td>
  <td>{{ $qual->qualification }}</td>
  <td>{{ $qual->grade }}</td>
  <td>{{ $qual->year }}</td>
</tr>
@endforeach
</table> --}}

<div class="container ">
	<table class="text-left w-full tbl2   mb-8  ">
		<thead class="flex text-white w-full">
			<tr class="flex w-full mb-4">
        <th class="p-1 w-1/4">Subject</th>
        <th class="p-1 w-1/4">Exam Body</th>
        <th class="p-1 w-1/4">Qualification</th>
        <th class="p-1 w-1/4">Grade</th>
        <th class="p-1 w-1/4">Year</th>
			</tr>
		</thead>
    <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 40vh">
    @foreach ($qualify as $qual)
			<tr class="flex w-full mb-4 ">
				<td class="p-1 w-1/4">{{ $qual->subject }}</td>
				<td class="p-1 w-1/4">{{ $qual->exam_body }}</td>
				<td class="p-1 w-1/4">{{ $qual->qualification }}</td>
				<td class="p-1 w-1/4">{{ $qual->grade }}</td>
				<td class="p-1 w-1/4">{{ $qual->year }}</td>
      </tr>
      @endforeach
		</tbody>
	</table>
</div>
@endsection



