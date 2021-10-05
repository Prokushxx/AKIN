@extends('layouts.navbar')

@section('title', 'Application Form')

<style>
    .header {
        min-height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(../IMAGES/OIP1.jpeg);
        /* background-position: ; */
        background-size: cover;
        position: relative;
    }

    label {
        color: white;
    }

</style>
@section('body')

    <div
        class="w-full h-14 pt-2 text-center  bg-gray-700  shadow overflow-hidden sm:rounded-md font-bold text-3xl text-white ">
        APPLICATION FORM
    </div>

    <section class="text-gray-600 body-font  m-0 p-0 relative"></section>


    <div class="container mx-auto">


        <div class="mt-10 md:mt-0 md:col-span-2">
            <form action="{{ route('student.apply') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-2 py-8 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="TRN" class="block text-sm font-medium text-black">TRN</label>
                                <input type="number" name="TRN" placeholder="TRN" id="TRN" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="fname" class="block text-sm font-medium text-black">First Name</label>
                                <input type="text" name="fname" placeholder="First Name" id="fname" required  class="mt-1 focus:ring-indigo-500 text-black-300  focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                <span class="text-red-500"> @error('fname')
                                  {{ $message }}
                              @enderror
                          </span>
                              </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" name="lname" placeholder="Last Name" id="lname" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <span class="text-red-500"> @error('lname')
                                      {{ $message }}
                                  @enderror
                              </span>
                            </div>

                            <div class="col-span-6 sm:col-span-3">

                                <label for="last-name" class="block text-sm font-medium text-gray-700">
                                    Email</label>
                                <input type="email" name="email" placeholder="Email" id="email" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span class="text-red-500"> @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>



                            <div class="col-span-6 sm:col-span-3">
                                <label for="courses" class="block text-sm font-medium text-gray-700">
                                    Courses</label>
                                <select id="courses" name="courses" autocomplete="courses"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->c_id }}">{{ $course->c_name }}  </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="gender" class="block text-sm font-medium text-gray-700">
                                    Gender</label>
                                <select id="gender" name="gender" autocomplete="gender"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="DOB" class="block text-sm font-medium text-gray-700">
                                    DATE OF BIRTH</label>
                                <input type="date" name="DOB" placeholder="above 18" id="DOB"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <h3 class="pt-10 ml-40 pl-48 col-span-6">ADDRESS</h3>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="street" class="block text-sm font-medium text-gray-700">Street
                                </label>
                                <input type="text" name="street"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="town" class="block text-sm font-medium text-gray-700">
                                    Town</label>
                                <input type="text" name="town" id="town" placeholder="" autocomplete="family-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">
                                    Country</label>
                                <input type="text" name="country"
                                    class="mt-3 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="parish" class="block text-sm font-medium text-gray-700">
                                    Parish</label>
                                <input type="text" name="parish" placeholder="" id="parish"
                                    class="mt-3 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>



                            <div class="col-span-6 sm:col-span-3">
                                <label for="Telephone" class="block text-sm font-medium text-gray-700">Telephone</label>
                                <input type="number" name="telephone" placeholder="Telephone #" id="Telephone"
                                    class="mt-3 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="photo" class="block text-sm font-medium text-gray-700">Pofile Photo</label>
                                <input type="file" name="photo" id="photo"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block  shadow-sm sm:text-sm border-gray-300 rounded-md">

                                <input type="submit" value="Save"
                                    class="inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring  ring-indigo-500 ring-offset-4 bg-indigo-600 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2  focus:ring-indigo-500">
                            </div>
                        </div>
                         </form>
                         <h6 class="text-red-400 pt-6">PLEASE SAVE INFORMATION BEFORE ADDING QUALIFICATIONS</h6>



            <h3 class="pt-10 ml-40 pl-48 col-span-6">Qualification</h3>
            <form action="{{ route('store.qual') }}" method="POST">
                @csrf
                <div class=" grid grid-flow-row grid-cols-5 grid-rows-2 gap-2">
                    <div class="">
                      <label for=" subjects" class=" text-sm font-medium text-gray-700">
                        Subjects</label><br>
                        <input type=" text" name="subject" placeholder="" id="subject" autocomplete="family-name" value="{{ old('subject') }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-00 bg-gray-00 border-4 bg-opacity-40 py-1 shadow-sm sm:text-sm border-blue-300 rounded-md">
                    </div>

                    <div>
                        <label for="subjects" class=" text-sm font-medium text-gray-700">
                            Examination Body</label><br>
                        <input type="text" name="exam" placeholder="" id="exam" autocomplete="family-name" value="{{ old('exam') }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-00 bg-gray-00 border-4 bg-opacity-40 py-1 shadow-sm sm:text-sm border-blue-300 rounded-md">
                    </div>

                    <div class="">
                      <label for=" qual" class=" text-sm font-medium text-gray-700">
                        Qualifications</label><br>
                        <input type=" text" name="qual" placeholder="3" id="qual" autocomplete="family-name" value="{{ old('qual') }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-00 bg-gray-00 border-4 bg-opacity-40 py-1 shadow-sm sm:text-sm border-blue-300 rounded-md">
                    </div>

                    <div>
                      <label for="grade" class=" text-sm font-medium text-gray-700">
                          Grade</label><br>
                      <input type="text" name="grade" placeholder="" id="grade" autocomplete="family-name" value=" {{ old('grade') }}"
                      class="mt-1 focus:ring-indigo-500 focus:border-indigo-00 bg-gray-00 border-4 bg-opacity-40 py-1 shadow-sm sm:text-sm border-blue-300 rounded-md">
                  </div>

                  <div>
                    <label for="year" class=" text-sm font-medium text-gray-700">
                        Year</label><br>
                    <input type="text" name="year" placeholder="" id="year" autocomplete="family-name" value="{{ old('year') }}"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-00 bg-gray-00 border-4 bg-opacity-40 py-1 shadow-sm sm:text-sm border-blue-300 rounded-md">
                        <input type="submit" value="ADD" class="bg-green-500 px-1 text-white py-0 rounded-md hover: ease-in-out">
                </div>
                </div>

            </form>

            <form action="{{ route('store.qual') }}" method="POST">
              @csrf
              <div class=" grid grid-flow-row grid-cols-5 grid-rows-2 gap-2">
                  <div class="">
                    <label for=" subject" class=" text-sm font-medium text-gray-700">
                      Subjects</label><br>
                      <input type=" text" name="subject" placeholder="" id="subject" autocomplete="family-name"
                      class="mt-1 focus:ring-indigo-500 focus:border-indigo-00 bg-gray-00 border-4 bg-opacity-40 py-1 shadow-sm sm:text-sm border-blue-300 rounded-md">
                  </div>

                  <div>
                      <label for="subjects" class=" text-sm font-medium text-gray-700">
                          Examination Body</label><br>
                      <input type="text" name="exam" placeholder="" id="exam" autocomplete="family-name"
                      class="mt-1 focus:ring-indigo-500 focus:border-indigo-00 bg-gray-00 border-4 bg-opacity-40 py-1 shadow-sm sm:text-sm border-blue-300 rounded-md">
                  </div>

                  <div class="">
                    <label for=" subjects" class=" text-sm font-medium text-gray-700">
                      Qualifications</label><br>
                      <input type=" text" name="qual" placeholder="3" id="qual" autocomplete="family-name"
                      class="mt-1 focus:ring-indigo-500 focus:border-indigo-00 bg-gray-00 border-4 bg-opacity-40 py-1 shadow-sm sm:text-sm border-blue-300 rounded-md">
                  </div>

                  <div>
                    <label for="grade" class=" text-sm font-medium text-gray-700">
                        Grade</label><br>
                    <input type="text" name="grade" placeholder="" id="grade" autocomplete="family-name"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-00 bg-gray-00 border-4 bg-opacity-40 py-1 shadow-sm sm:text-sm border-blue-300 rounded-md">
                </div>

                <div>
                  <label for="year" class=" text-sm font-medium text-gray-700">
                      Year</label><br>
                  <input type="text" name="year" placeholder="" id="year" autocomplete="family-name"
                      class="mt-1 focus:ring-indigo-500 focus:border-indigo-00 bg-gray-00 border-4 bg-opacity-40 py-1 shadow-sm sm:text-sm border-blue-300 rounded-md">
                      <input type="submit" value="ADD" class="bg-green-500 px-1 text-white py-0 rounded-md hover: ease-in-out">
              </div>
            </div>
          </form>
          {{-- <a href="{{ route('payment.show',$stud->stud_id) }}" class="bg-green-500 mx-w-full py-3 text-white pa rounded-md hover: ease-in-out ml-48 px-40">NEXT STEP</a> --}}
          <div class="bg-blue-400 my-4 shadow p-8 rounded-lg">
            <div class="flex items-center mb-4">
                <div class="border-2 border-blue px-3 py-2 rounded-full font-bold text-blue mr-2">1</div>
                <h2 class="text-lg">Your Payment Information</h2>
            </div>
            <div class="w-full">
              
              <form action="{{ route('payment.post') }}" method="POST">
                @csrf
                
                <Label for="course">Please Select A Course</Label>
                <Select name="course">
                  @foreach ($courses as $course)
                  <option value="{{ $course->c_id }}">{{ $course->c_name }} -><br> ${{ $course->price }} </option>
                  @endforeach
                </Select>

              <input type="hidden" value="{{ $course->c_id }}">
            <label for="payment" class="block text-sm mb-2">Credit Card</label>
            <div class="flex">
              <input type="text" name="cardnumber" id="payment" class="w-5/6 flex-1 text-sm bg-grey-light text-grey-darkest rounded-l p-3 focus:outline-none" placeholder="Card Number" required>
              <input type="text" name="expirationdate" id="payment" class="w-1/6 inline-block text-sm bg-grey-light text-grey-darkest p-3 focus:outline-none" placeholder="MM / YY" required>
              <input type="text" name="cvc" id="payment" class="w-1/6 inline-block text-sm bg-grey-light text-grey-darkest rounded-r p-3 focus:outline-none" placeholder="CVC" required>
            </div>
          </div>
        </div>
        <input type="submit" class="bg-green-500 mx-w-full py-3 text-white pa rounded-md hover: ease-in-out ml-48 px-40" value="Make Payment">
      </form>
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </section>
@endsection