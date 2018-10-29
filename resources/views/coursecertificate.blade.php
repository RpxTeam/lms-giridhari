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
        
        <canvas id="certificate" width="844" height="595">
            <img src="{{ URL::to('/') }}/images/certificate_template.png" id="img">
            <p id="name">{{ $course->name }} {{ $course->lastname }}</p>
            <p id="title">{{ $course->title }}</p>
            <p id="date">{{ Carbon\Carbon::parse($course->complete_date)->format('d/m/Y') }}</p>
            <p id="instructor">{{ $instructor->name }} {{ $instructor->lastname }}</p>
            <p id="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore,</p>
            <p id="text2">ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            <p id="text3">duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            
            
        </canvas>
        {{-- <p>User: {{ $course->name }}</p>
        <p>Course: {{ $course->title }}</p>
        <p>Completed: {{ $course->complete_date }}</p>
        <p>Instructor: {{ $instructor->name }} {{ $instructor->lastname }}</p> --}}
    </div>
    <br>
    <br>
    <button href="#" onClick="exportCertificate('{{ $course->name }}-{{ $course->slug}}'); ">Exportar</button>
</div>
  @include('partials.back')