<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medicale History</title>
    <link rel="stylesheet" href="/css/medical_h.css">
    <link rel="shortcut icon" href="/img/icon_site.png">
 <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
      <section id="hero">
       <nav class="navigation">
        <a href="home.html"><img class="logo" src="/img/logo_home.png" /></a> 
        <ul class="menu">
            <li><a href="{{route('information_m.patient', $patient->id_patient)}}">Personal Information</a></li>
            <li><a href="#" style="color: blue;border-bottom:2px blue solid">Health Information</a></li>
            <li><a href="{{route('medical_data.patient', $patient->id_patient)}}">Medical data</a></li>
            <li><a href="{{route('retrived.patient', $patient->id_patient)}}">Retrieve card</a></li>

           
         </ul>
       </nav>
    </section>
    <section class="section1">
       <div id="medical_treatment_time">
         <img src="/img/calander.png" alt="">
         <h1>The Last Examination Performed on The Patient : <br> <span> Thursday April 12/4/2025</span></h1>
       </div>
       <div id="wisdom">
        <img src="/img/logo2.png" alt="">
       <h1>Stay safe , Stay healthy</h1>
       </div>
    </section>
    <section class="section2">
      <a href="{{route('medical_h_v.patient', $patient->id_patient)}}"><div id="card1">
            <img src="/img/icon3.png" alt="">
            <h1>Vaccination</h1>
      </div> </a>
      <a href="{{route('medication.patient', $patient->id_patient)}}"><div id="card2">
        <img  src="/img/icon2.png" alt="">
        <h1 style="font-size: 23px;">Medications</h1>
      </div></a>
      <a href="{{route('medical_visits.patient', $patient->id_patient)}}"><div id="card3">
        <img src="/img/icon4.png" alt="">
        <h1>Medical Visits</h1>
      </div></a>
    </section>

</body>
</html>