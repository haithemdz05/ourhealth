<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/medical_h_v.css">
    <link rel="shortcut icon" href="/img/icon_site.png">
    <title>MEDICAL RECORD</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="page1" class="section">
        <div class="container">
          <h1>Diseases and General Examination</h1>
          <div class="page">
            <div id="titre">
              <img src="/img/icon11.png" alt="">
              <h2>All Check</h2>
            </div>
            @if (!$medical_hs || count($medical_hs) == 0)
                <p>No medical history found.</p>
                
            @endif
            @foreach ($medical_hs as $medical_h)
                 <h1>date : {{$medical_h->date_examination}} </h1>
             <label for="">Blood Pressure:</label> 
              <input type="text" value="{{$medical_h->blood_p}} mmHg" readonly><br>
              <label for="">Heart Rate :</label> 
              <input type="text" value="{{$medical_h->heart_rate}} B/minute" readonly><br>
              <label for="">Blood Glucose:</label> 
              <input type="text" value="{{$medical_h->blood_glucose}} mg/dL" readonly><br>
              <label for="">Body Temperature:</label> 
              <input type="text" value="{{$medical_h->body_temprerature}} C°" readonly><br>
              <label for="">Symptoms:</label> 
              <textarea name="" id="">{{$medical_h->current_symptoms?:'undefined'}}</textarea><br>
              <label for="">Description of disease:</label> 
              <textarea name="" id="">{{$medical_h->desc_disease?:'undefined'}}</textarea><br>
               <label for="">name of diseaese:</label> 
              <input type="text" value={{$medical_h->name_diseaese?:'undefined'}} readonly><br>
              <label for="">General examination notes:</label> 
              <textarea name="" id="">{{$medical_h->general_examination_notes?:'undefined'}}</textarea><br>
            @endforeach
           
             
          </div>      
        
      <div class="page">
      <div id="title" style="width: 100%">
        <img src="/img/img54.webp" alt="">
        <h1>PHYSICIAN NOTES</h1>
    </div>
    <div class="not">
        <div id="content">
          @php
    // أنشئ مصفوفة ربط بين id_doctor واسم الدكتور
    $doctorNames = [];
    foreach($doctors as $doctor) {
        $doctorNames[$doctor->id_doctor] = $doctor->first_name_d;
    }
@endphp
@if($notes && count($notes))
          @foreach ($notes as $note)
              <h3>date : {{$note->date_note}}</h3>
        <p>{{$note->desc_note}}.</p>
        <div id="infor">
            <p>
                Dr.{{ $doctorNames[$note->id_doctor] ?? 'Unknown' }}
            </p>
            <p>{{$note->date_note}}</p>
        </div>
      @endforeach
@else
    <p>No notes found.</p>
@endif
            </div>
        </div>
        </div>
      </div>
   </div>
  </div>

</body>
</html>