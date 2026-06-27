<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medicale History</title>
    <link rel="stylesheet" href="/css/medical_h_mt.css">
    <link rel="shortcut icon" href="/img/icon_site.png">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="section3">
        <div id="card2-page">
            <img src="/img/icon2.png" alt="">
            <h1>Medications and Treatments</h1>
          </div>
    </section> 
    <!-- ====================================================================== -->
     {{-- @dd($medications); --}}
    {{-- @dd($list_medication); --}}
    <div id="titre">
      <img src="/img/icon8.png" alt="">
      <h1>Current medication</h1>
    </div>
    <section class="section5">
      <table>
<thead id="current">
  <th>Name Medicine</th>
  <th>Use cases</th>
  <th>How to take it</th>
  <th>Dosage</th>
  <th>Duration</th>
  <th>Date prescribed</th>
  <th>Doctor symbol</th>
</thead>
<tbody>
@foreach ($medications_m as $medication)
@foreach ($list_medication as $medic)
    @if($medication->id_medication==$medic->id_medication)
        <tr>
            <td>{{ $medic->name_medication }}</td>
            <td>{{ $medic->use_case }}</td>
            <td>{{ $medic->how_take }}</td>
            <td>{{ $medic->dosage }}</td>
            <td>{{ $medic->duration }} jour</td>
            <td>{{ $medication->date_prescribed }}</td>
            <td>{{ $medication->doctor_symbol }}</td>
        </tr>
    @endif
    @endforeach
@endforeach
</tbody>
</table>
    </section>
    <hr>
    <!-- ====================================================================== -->
    <div id="titre">
      <img src="/img/icon9.png" alt="">
      <h1>Medication allergy</h1>
    </div>
    <section class="section4">
        {{-- allergy --}}
        {{-- list_medication_allergy --}}
        @foreach ($allergy as $allerg)
@foreach ($list_medication_allergy as $medication_allergy)
    @if($allerg->id_medication==$medication_allergy->id_medication)
   <div class="card">
    <h2>{{$medication_allergy->name_medication}}</h2>
    <ul style="list-style-type:disc;">
      <li><b>type of allgergic reaction :</b>{{$allerg->type_allgergic}}</li>
      <li><b>Instensity of interaction :</b>{{$allerg->instensity_interaction}}</li>
      <li><b>Possible alternative medication :</b>{{$allerg->alternative_medication}}</li>
      <li><b>Duration :</b>{{$allerg->duration}}</li>
    </ul>
   </div>
    @endif
    @endforeach
@endforeach
    </section>
    <hr>
<!-- ================================================================= -->
<div id="titre">
  <img src="/img/icon10.png" alt="">
  <h1>Previous medications(1 Month)</h1>
</div>
<section class="section5">
  <table>
<thead id="history">
<th>Name Medicine</th>
<th>Use cases</th>
<th>Duration</th>
<th>Date prescribed</th>
<th>Doctor symbol</th>
</thead>
<tbody>
@foreach ($medications_m as $medication_m)
@foreach ($list_medication_m as $medic_m)
    @if($medication_m->id_medication==$medic_m->id_medication)
        <tr>
            <td>{{ $medic_m->name_medication }}</td>
            <td>{{ $medic_m->use_case }}</td>
            <td>{{ $medication_m->duration }}</td>
            <td>{{ $medication_m->date_prescribed }}</td>
            <td>{{ $medication_m->doctor_symbol }}</td>
        </tr>
    @endif
    @endforeach
@endforeach

</tbody>
</table>
</section>
<hr>
<!-- ================================= -->
<div id="titre">
  <img src="/img/icon30.png" alt="">
  <h1>medical tests</h1>
</div>
<section class="section5">
  <table>
<thead id="history">
<th>date</th>
<th>Test type</th>
</thead>
<tbody>
@foreach ($list_test as $test)
<tr>
<td>{{$test->date_test}}</td>
<td>{{$test->name_test}}</td>
</tr>
 @endforeach
</tbody>
</table>
</section>
</body>
</html>