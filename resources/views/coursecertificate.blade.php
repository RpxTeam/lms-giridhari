@include('partials.front')
<div class="container">
    <div class="section">
         <div class="row">
            <div class="col s12 center">
                <h2>
                    Certificate
                </h2>
            </div>
        </div>
        
        <canvas id="certificate" width="380" height="380">
            <img src="{{$certificate->image}}" id="img">
            <p id="name">{{ $course->name }}</p>
            <p id="title">{{ $course->title }}</p>
            <p id="date">{{ $course->complete_date }}</p>
            <p id="instructor">{{ $instructor->name }} {{ $instructor->lastname }}</p>
            
        </canvas>
        {{-- <p>User: {{ $course->name }}</p>
        <p>Course: {{ $course->title }}</p>
        <p>Completed: {{ $course->complete_date }}</p>
        <p>Instructor: {{ $instructor->name }} {{ $instructor->lastname }}</p> --}}
    </div>
    <br>
    <br>
    <button href="#" onClick="exportCertificate(); ">Exportar</button>
</div>
  @include('partials.back')