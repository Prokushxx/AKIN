@extends('layouts.navbar')

@section('body')
<style>
    body{
        min-height: 80vh;
        width: 100%;
        background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(../IMAGES/OIP1.jpeg);
        background-position: center;
        background-size: cover;
        position: relative;
    }

    td,
    th{
       border: 1px solid blue; 
       font-size: larger;
       color: white;
       
    }
    th{
        font-weight: 700;
    }
</style>

<div class="py-8 w-full bg-green500 mx-auto">
    
    <table class="mx-auto">
        <tr >
            <th class="py-1 px-1">Full Name</th>
            <th class="py-2 px-2">Email</th>
            <th class="py-2 px-2">TRN</th>
            <th class="py-2 px-2">Street</th>
            <th class="py-2 px-2">Town</th>
            <th class="py-2 px-2">Parish</th>
            <th class="py-2 px-2">Contact</th>
            <th class="py-2 px-2">Status</th>

        </tr>
        @foreach($students as $student)
        <tr>
            <td class="py-1 px-2">{{$student->firstname}} {{$student->lastname}}</td>
            <td class="py-2 px-3">{{$student->email}}</td> 
            <td class="py-3 px-3">{{$student->TRN}}</td>
            <td class="py-3 px-3">{{$student->street}}</td>
            <td class="py-3 px-3">{{$student->town}}</td>
            <td class="py-3 px-3">{{$student->parish}}</td>
            <td class="py-3 px-3">{{$student->telephone}}</td>
            <td class="py-3 px-3">{{$student->status}}</td>
        </tr>
        
    </table>
</div>
<div
        class="w-full h-14 pt-2 text-center  bg-gray-700  shadow overflow-hidden sm:rounded-md font-bold text-3xl text-white ">
        UPDATE INFO
    </div>

    <section class="text-gray-600 body-font  m-0 p-0 relative"></section>


    <div class="container mx-auto">


        <div class="mt-10 md:mt-0 md:col-span-2">
            <form action="{{ route('update.address',$student->stud_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-2 py-8 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">


                            <h3 class="pt-10 ml-40 pl-48 col-span-6">ADDRESS</h3>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="street" class="block text-sm font-medium text-gray-700">Street
                                </label>
                                <input type="text" name="street"  placeholder = "{{$student->street}}"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="town" class="block text-sm font-medium text-gray-700">
                                    Town</label>
                                <input type="text" name="town" id="town" placeholder="{{$student->town}}" autocomplete="family-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">
                                    Country</label>
                                <input type="text" name="country"  placeholder="{{$student->country}}" value="{{$student->country}}"
                                    class="mt-3 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="parish" class="block text-sm font-medium text-gray-700">
                                    Parish</label>
                                <input type="text" name="parish" placeholder="{{$student->parish}}" id="parish"
                                    class="mt-3 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>



                            <div class="col-span-6 sm:col-span-3">
                                <label for="Telephone" class="block text-sm font-medium text-gray-700">Telephone</label>
                                <input type="number" name="telephone" placeholder="{{$student->telephone}}" id="Telephone"
                                    class="mt-3 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="photo" class="block text-sm font-medium text-gray-700">Pofile Photo</label>
                                <input type="file" name="photo" id="photo"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block  shadow-sm sm:text-sm border-gray-300 rounded-md">

                                <input type="submit" value="UPDATE"
                                    class="inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring  ring-indigo-500 ring-offset-4 bg-indigo-600 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2  focus:ring-indigo-500">
                            </div>
                        </div>
                         </form>

@endforeach

            <div class="w-full">
              
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </section>
    @endsection