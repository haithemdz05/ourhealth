<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="shortcut icon" href="/img/icon_site.png">
    <link rel="stylesheet" href="/css/appiontment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="content">
   <section class="section1">
    <div id="title" class="form1">
      <h1>welcome to the appointments section</h1>
      <h6>Our appointments section privides you with access to doctor's hour,locations and contact information such as email making it easy to reach them.</h6>
      <img src="/img/img40.jpg" alt="photo">
    </div>
      <div class="appointment">
        <table class="table table-hover table-bordered align-middle shadow" style="background:#fff; border-radius:12px; overflow:hidden;">
          <thead class="table-primary">
            <th>Type Appointment</th> <!--we have 5 type of Appointment ://visiting/ Vaccination /Examination / check up / Treatment / pre_operation // Appointment -->
            <th>Date</th>
            <th>Note</th>
            <th>Doctor symbol</th>
            <th></th>
          </thead>
          <tbody>
         @forelse ($appointments as $appointment)
    <tr>
        <td>{{ $appointment->Type_Appointment }}</td>
        <td>{{ $appointment->date }}</td>
        <td>{{ $appointment->note }}</td>
        <td>{{ $appointment->doctor_symbol}}</td>
        {{-- {{ route('remove_patient.list_patient', [$id_patient]) }} --}}
        <td> <form  action="{{ route('remove_appointment.patient',[$appointment->id_appointment,$id_patient]) }}" method="GET">
    <button type="button" class="btn btn-danger btn-sm" style="background: #0999dc; border: none;" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this appointment?')) { this.closest('form').submit(); }">
        was completed
    </button>
</form> </td>
    </tr>
@empty
    <tr>
        <td colspan="4" class="text-center">No appointments found.</td>
    </tr>
@endforelse
          </tbody>
        </table>
      </div>
</section>
<section class="section2" style="background: #0999dc5d">
  <div id="title" class="form1">
    <h1>find your doctor</h1>
  </div><br><br>
  <form style="width: 30%;" class="d-flex" role="search" method="GET" action="">
    <input class="form-control me-2" type="search" name="doctor_symbol" placeholder="Find a doctor (symbol)" aria-label="Search" value="{{ request('doctor_symbol') }}">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
 <form action="" style="padding:15px" class="form2">
  <div>
    <img src="{{ $doctor ? asset('storage/'.$doctor->image_d) : '/img/d.png' }}" alt="" width="120px" height="120px" style="border-radius: 100%;">
    <h1>Dr.{{ $doctor->first_name_d ?? 'Doctor Name' }}{{ $doctor->last_name_d ?? ''}}</h1>
    <h6>{{ $doctor->email_d ?? 'email@gmail.com' }}</h6>
   @php
    $s = 'Specialty';
    if ($doctor && $doctor->specialty) {
        if ($doctor->specialty == 'O') {
            $s = 'Ophthalmology';
        } elseif ($doctor->specialty == 'E') {
            $s = 'ENT';
        } else {
            $s = 'General medicine';
        }
    }
@endphp
<h6>{{ $s }}</h6>
@php
   if ($s=='Specialty')
       $s='';
  
   @endphp
    <br>
    <label for="">Name</label>
    <input type="text" value="{{ $doctor->first_name_d ?? '' }}" readonly>
    <label for="">Surname</label>
    <input type="text" value="{{ $doctor->last_name_d ?? '' }}" readonly>
    <label for="">Specialization</label>
    <input type="text" value="{{$s}}" readonly>
  </div>
</form>
</section>
</div>
</body>
</html>