@extends('layouts.navbar')

@section('title','Users')

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
    <th>Username</th>
    <th>Email</th>
    <th>Status</th>
  </tr>

  @foreach ($user as $info)
  <tr>
    <td>{{ $info->username }}</td>
    <td>{{ $info->email }}</td>
    @if ($info->Active_flag == 1)
    <td>Active </td>
    <td>
      <form action="{{ route('user.active',$info->id) }}" method="POST">
        @csrf
       <input type="hidden" value="0" name="idk">
       <input type="submit" value="Deactivate" class="bg-blue-400 bg-opacity-0 text-red-600 ml-10">
      </form>
    </td>
     @else
     <td>Inactivate</td>
     <td>
      <form action="{{ route('user.notactive',$info->id) }}" method="POST">
        @csrf
       <input type="hidden" value="1" name="ik">
       <input type="submit" value="Activate" class="bg-blue-400 bg-opacity-0 text-blue-600 ml-10">
      </form> 
    </td>
    @endif
  </tr>
  @endforeach
  
</table>
<p class="mt-40 pt-28 mx-10 text-blue-700">{{ $user->links() }}</p>
  
@endsection