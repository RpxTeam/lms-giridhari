<div class="container">
    <div class="section">

        
        <div class="row">
        <div class="col s12 center">
            <h2>
                Certificate
            </h2>
        </div>
        </div>
        
    <h3>User: {{ $course->name }}</h3>
    <h3>Course: {{ $course->title }}</h3>
    <h3>Completed: {{ $course->complete_date }}</h3>
    <h3>Instructor: {{ $instructor->name }} {{ $instructor->lastname }}</h3>

    <img src="{{$certificate->image}}">
   
  