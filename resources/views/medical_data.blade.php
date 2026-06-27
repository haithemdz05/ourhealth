<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical data</title>
    <link rel="stylesheet" href="/css/medical_data.css">
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
             <li><a href="{{route('information_m.patient',  $id_patient)}}">Personal Information</a></li>
             <li><a href="{{route('medical_hestory.patient',  $id_patient)}}">Health Information</a></li>
             <li><a href="#"style="color: blue;border-bottom:2px blue solid">Medical data</a></li>
            <li><a href="{{route('retrived.patient',  $id_patient)}}">Retrieve card</a></li>
          </ul>
        </nav>
     </section>
     <section id="section1">
        <div class="content" style="width: 50%; text-align: left;">
        <h1>Stay safe , Stay healthy</h1>
        <br>
        <h2>Welcome To the daily Health Tracker section</h2>
        <h3>we are to help you monitor your health. </h3>
        <br>
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white">!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.<path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
        </a> 
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white">!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.<path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
        </a>
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white">!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.<path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
        </a>
    </div>
     </section>
    <section class="section3">
            <div class="testbox">
                <form action="{{route('save_data.patient', $id_patient)}}" method="POST">
                  @csrf
                  <div class="banner">
                    <h1>Health measurements</h1>
                  </div>
                  <div class="item">
                    <p>weight</p>
                    <div class="name-item">
                      <input type="text" name="weight" placeholder="_ _ kg" required/>
                    </div>
                  </div>
                  <div class="item">
                  <p>height</p>
                  <div class="name-item">
                    <input type="text" name="height"  placeholder="_ , _ _ cm" required/>
                  </div>
                  </div>
                  <div class="item">
                    <p>Blood pressure</p>
                    <div class="name-item">
                      <input type="text" name="blood_pressure" placeholder="_ _ _ /_ _ mmHg" required />
                    </div>
                    </div>
                  <div class="item">
                      <p>Blood Glucose:</p>
                      <div class="name-item">
                        <input type="text" name="blood_glucose" placeholder="_ _ _ mg/dL" required/>
                      </div>
                      </div>
                  <div class="item">
                        <p>Body temperature</p>
                        <div class="name-item">
                          <input type="text" name="body_temp" placeholder="_ _ C°"  required/>
                        </div>
                        </div>
                  <div class="item">
                        <p>Heart Rate:</p>
                        <div class="name-item">
                          <input type="text" name="heart_Rate" placeholder="_ _ _ B/minute" required/>
                        </div>
                        </div>
                        <div class="item">
                          <p>Current symptoms</p>
                          <textarea rows="3" name="current_symptoms"></textarea>
                        </div>
                  <div class="item">
                    <p>Any changes you feel?</p>
                    <textarea rows="3" name="feel"></textarea>
                  </div>
                  <div class="item">
                    <p>Any side effects of some medications?</p>
                    <textarea rows="3" name="effect_medical" placeholder="Please name he medication and side effects"></textarea>
                  </div>
                 
                  <div class="btn-block">
                    <button type="submit" style="width: 200px;" href="/">Update health status</button>
                   </div> 
                </form> 
              
              </div>
    </section>
    <!-- graphes -->
    <section class="section4">
      <div>
      <h1>
       Monitor blood sugar levels over a month
      </h1>
      <p>if blood sugar exceeds 150 medicial intervention is required</p>
    </div>
      <div class="graph1">
      <canvas id="myChart"></canvas>
      <input type="text" value="January" readonly>
    </div>
    </section>
    <section class="section4">
      <div class="graph1">
      <canvas id="mychart"></canvas>
      <input type="text" value="January" readonly>
    </div>
    <div>
      <h1>
       Monitor body temperature over a month
      </h1>
      <p>A temperatue above 38° degrees is considered a sing of fever.</p>
    </div>
    </section>
    <section class="section4">
      <div class="graph1">
      <canvas id="bloodPressureChart"></canvas>
      <input type="text" value="January" readonly>
    </div>
    <div>
      <h1>
       Follow up on blood pressure measurement over a month
      </h1>
      <p>Abnormal blood pressure levels are divided into two main categories: <b>Hypertension Slightly high (Stage 1):</b> 130-139/80-89 mmHg <b> Dangerously high (Stage 2):</b> 140/90 mmHg or higher Hypertensive crisis (emergency): More than 180/120 mmHg – requires immediate medical attention. <b> 2.Hypotension Very low:</b>  less than 90/60 mmHg May cause dizziness, weakness, and fainting, and can be dangerous if severe. <b>Normal blood pressure values Normal blood pressure:</b>  90-120/60-80 mmHg.</p>
    </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/js/medical_data.js"></script>
</body>
</html>