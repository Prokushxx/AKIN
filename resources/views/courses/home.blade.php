@extends('layouts.course')

@section('title','COURSES')
@section('body')

<!-- course -->
<section class="course" id="course">
  <h1>Course we Offer</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
  
  <div class="row">
    @foreach ($courses as $course)
      <div class="course-col">
        <h3>{{ $course->c_name }}</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quia aliquid illo unde amet quod? Sit modi consequuntur accusantium
            soluta eius dignissimos aliquid, consequatur delectus aperiam voluptas unde facilis nam aliquam!</p>
            <a href="apply"><div class="btn btn-success"> Apply Now</div></a>          
      </div>
      @endforeach 
  </div>
</section>

@endsection