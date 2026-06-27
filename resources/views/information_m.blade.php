<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personnel information</title>
    <link rel="stylesheet" href="/css/information_m.css">
    <link rel="shortcut icon" href="/img/icon_site.png">
  <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
 <style>
    .alert {
      padding: 15px;
      background-color: #4CAF50; /* Green */
      color: white;
      margin: auto;
      text-align: center;
      margin-bottom: 15px;
      border-radius: 5px;
      width: 50%;
       opacity: 1;
      transition: opacity 1.5s ease-out; 
    }
      .fade-out {
      opacity: 0;
    }
  </style>
<body>  
  <section id="hero">
    <nav class="navigation">
      <a href="home.html"><img class="logo" src="/img/logo_home.png" /></a> 
      <ul class="menu">
         <li><a href="#" style="color: blue;border-bottom:2px blue solid">Personal Information</a></li>
         <li><a href="{{route('medical_hestory.patient', $patient->id_patient)}}">Health Information</a></li>
         <li><a href="{{route('medical_data.patient', $patient->id_patient)}}">Medical data</a></li>
         <li><a href="{{route('retrived.patient', $patient->id_patient)}}">Retrieve card</a></li>
      </ul>
      <div id="list">
        <a href="{{route('appointment.patient',$patient->id_patient)}}" class="nav-appointment-btn"style="position: relative;"> 
          Appointment
   @if($hasAppointment)
        <span style="
            position: absolute;
            top: -6px;
            right: -9px;
            width: 19px;
            height: 19px;
            background: red;
            border-radius: 50%;
            display: inline-block;
            border: 2px solid #fff;
            box-shadow: 0 0 4px #c00;
        "></span>
    @endif
  </a>
        <input type="checkbox" name="" id="check">
        <label for="check" class="checkbtn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </label>
      </div>
      </nav>
 </section>


       <div class="section1">
        <div class="content"style="text-align: center; margin-top: 20px;">
       <img src="{{ $patient->image_p ? asset('storage/' . $patient->image_p) : asset('storage/patients/img_user.jpg') }}"  style="
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 3px solid #036370;
        object-fit: cover;
        object-position: center;
        box-shadow: 0 2px 15px #00c3ff;
        display: block;
        margin: 0 auto 15px auto;
        background: #f2f2f2;
    " 
    alt="Profile Image" />
        <br>
        <br>
        <h1>Hello <span style="color: #00c3ff"> {{$patient->first_name_p}} {{$patient->last_name_p}}</span>  </h1>
        <h3>Welcome To your Account</h3>
        <!-- <p>This section contains the patient's essential personal details, which are crucial for identification and communication. Please ensure that all information provided is accurate and up-to-date</p> -->
       </div> 
      </div>
        <div id="section2">
          <img src="/img/img2_peronnel.jpg" alt="">
          <h1>Your personal information</h1>
          <form action="">
            <div id="profile">
       <img src="{{ $patient->image_p ? asset('storage/' . $patient->image_p) : asset('storage/patients/img_user.jpg') }}" style="
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 2px solid #00bcd4;
        object-fit: cover;
        object-position: center;
        margin-rigth: 60px;
        margin-top: 40px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.12);
        background: #f2f2f2;"alt="" />
              <h5 style="color:white;margin-left:10px"><span style="color: rgb(255, 255, 255)"> {{$patient->first_name_p}} {{$patient->last_name_p}}</span></h5>
              <a href="update_info.html"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffff"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/></svg></a>
            </div>
            <br>
            <br>
            <br>
            <br>
          <br>
            <div id="left">
            <label for="">Last name</label><br>
            <input type="text" value="{{$patient->last_name_p}}" readonly>
            <br>
            <label for="">blood</label><br>
            <input type="text" value="{{$patient->blood_p}}" readonly>
            <br>
            <label for="">Secret number</label><br>
            <input type="text" value="{{$patient->password_p}}" readonly>
            <br>
            <label for="">City</label><br>
            <input type="text" value="{{$patient->city_p}}" readonly>
            <br>
            <label for="">Phone number</label><br>
            <input type="text" value="{{$patient->phone_p}}" readonly>
          </div>
           <div id="right">
            <label for="">First name</label><br>
            <input type="text" value="{{$patient->first_name_p}}" readonly>
            <br>
            <label for="">Date of Birth</label><br>
            <input type="text" value="{{$patient->date_birth_p}}" readonly >
            <br>
            <label for="">Address</label><br>
            <input type="text" value="{{$patient->address_p}}" readonly>
            <br>
            <label for="">Region</label><br>
            <input type="text" value="{{$patient->region_p}}" readonly>
            <br>
            <label for="">Email</label><br>
            <input type="text" value="{{$patient->email_p}}" readonly>
          </div>
          <br>
          <a href="{{route('update_info.patient',$patient->id_patient)}}" style="background-color: rgb(255, 255, 255);padding: 10px; color: rgb(0, 0, 0); border-radius: 8px;">Update information</a>
          </form>
        </div>
        <div id="section3">
         <form action="">
          <div id="head">
            <img src="/img/img37.jpg" alt="">
          </div>
          <div id="body">
            <h1>We care about your opinion!</h1>
            <h6>feel free to sharee your feedback to improe our services</h6>
            <label for="">Your imppression about our site</label><br>
            <textarea name="" id="" placeholder="Comment"></textarea><br>
            <label for="">What problems are you facing?</label><br>
            <textarea name="" id="" placeholder="Comment"></textarea><br>
          <div id="footer">
            <div>
           <h1>Contact Info</h1>  
           <h6>Please leave your email address if you would like us to contact you regarding any questions.</h6> 
         <br>
          </div>
          <div id="input-footer">
              <div>
                <label for="">Full name</label>
                <input type="text">
              </div>
              <div>
                <label for="">Email</label>
                <input type="email" placeholder="your_mail@gmail.com">
              </div>
          </div>
          </div>
          <br>
          <input type="submit" value="Submit">
        </div>
         </form>
        </div>
        <div id="section4">
          <h1> Accurate Information </h1>
          <div id="card1">  
            <p>1. Accurate Diagnosis and Appropriate Treatment: Accurate information helps doctors diagnose medical conditions correctly and determine the most suitable treatments.</p>
          </div>
          <div id="card2">
            <p >2. Monitoring Health Status: Facilitates tracking the patient's health over time, helping doctors understand changes and provide continuous care.</p>
          </div>
          <div id="card3">
            <p>3. Preventing Medical Errors: Recording accurate information minimizes the likelihood of errors, such as incorrect dosages or unnecessary procedures.</p>
          </div>
        </div> 
      
</body>
</html>
