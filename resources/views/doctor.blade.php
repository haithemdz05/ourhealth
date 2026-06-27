<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor</title>
    <link rel="stylesheet" href="/css/doctor.css">
    <link rel="shortcut icon" href="/img/icon_site.png">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  </head>
<body>
    <section id="hero">
        <nav class="navigation">
          <a href="home.html"><img class="logo" src="/img/logo_home.png" /></a> 
          <ul class="menu">
            
            <li><a href="{{route('new_patient_d.patient',$doctor->id_doctor)}}">New patient</a></li>
             <li><a href="{{route('list_patient_d.patient',$doctor->id_doctor)}}">List patient</a></li>
             <li><a href="{{route('personnel_page_d',[$doctor->id_doctor])}}"><img src="/img/img42.jpg" alt="" width="50px" height="50px" style="border-radius: 100%;margin-top: 6px;"></a> </li>
          </ul>
          <div id="list">
            <input type="checkbox" name="" id="check">
            <label for="check" class="checkbtn">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            </label>
          </div>
          </nav>
     </section>
     <class class="section2">
        <div id="title">
            <img src="/img/img42.jpg" alt="" width="100px" height="100px" style="border-radius: 100%;"> 
            <h1>Dr. {{$doctor->first_name_d}} {{$doctor->last_name_d}}</h1>
            <h5>{{$doctor->email_d}}</h5>
            {{-- <h6>{{$doctor->Specialite}}</h6> --}}
         <br>
            <h2>Welcome to your account, Doctor. We're happy to have you on board!</h2>
            <p>"Respected Doctor, to view the patient's medical file, you are required to enter their unique account"</p>
        </div>
     </class>
    
</body>
</html>