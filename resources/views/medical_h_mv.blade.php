<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medicale History</title>
    <link rel="stylesheet" href="/css/medical_h_v.css">
    <link rel="shortcut icon" href="/img/icon_site.png">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
      <!--  -->
    <section class="section3">
        <div id="card3-page">
            <img src="/img/icon4.png" alt="">
            <h1>Medical Visits</h1>
          </div>
      </div>
    </section>
    <!-- =====================contenu====================== -->
    <section class="section4">
      <div class="content" >
       <ul class="menu2">
        <li onclick="section('page1',this)">Diseases and general examination</li>
        <li onclick="section('page2',this)">Medical specialties</li>
        <li onclick="section('page3',this)">Surgery</li>
       </ul>
       <!-- ====================================================== -->
       <div id="page1" class="section">
        <div class="container">
          <h1>Diseases and General Examination</h1>
          <div class="page">
            <div id="titre">
              <img src="/img/icon11.png" alt="">
              <h2>Last Check</h2>
            </div>
            {{-- @if (!$last_examination)
                <p>No last examination found.</p>
            @endif --}}
            <label for="">Blood Pressure:</label> 
<input type="text" value="{{ $last_examination?->blood_p ?? '0' }} mmHg" readonly><br>
<label for="">Heart Rate :</label> 
<input type="text" value="{{ $last_examination?->heart_rate ?? '0' }} B/minute" readonly><br>
<label for="">Blood Glucose:</label> 
<input type="text" value="{{ $last_examination?->blood_glucose ?? '0' }} mg/dL" readonly><br>
<label for="">Body Temperature:</label> 
<input type="text" value="{{ $last_examination?->body_temprerature ?? '0' }} C°" readonly><br>
<label for="">Symptoms:</label> 
<textarea name="" id="">{{ $last_examination?->current_symptoms ?? 'undefined' }}</textarea><br>
<label for="">Condition description:</label> 
<textarea name="" id="">{{ $last_examination?->desc_disease ?? 'undefined' }}</textarea><br>
<label for="">name of disease:</label> 
<input type="text" value="{{ $last_examination?->name_disease ?? 'undefined' }}" readonly><br>
<label for="">General examination notes:</label> 
<textarea name="" id="">{{ $last_examination?->general_examination_notes ?? 'undefined' }}</textarea><br>
<label for="">Medical examination date:</label> 
<input type="date" value="{{ $last_examination?->date_examination ?? '' }}" readonly><br>
<label for="">The next appointment:</label> 
<input type="date" value="{{ $last_examination?->next_appoin ?? '' }}" readonly><br>
          </div>      
          <div class="page">
            <div id="titre">
              <img src="/img/icon12.png" alt="">
              <h2>Diseases and Healthy Condition</h2>
            </div>
            <label for="">Chronic diseases:</label> 
            <!-- <textarea name="" id=""></textarea><br> -->
            
             <table class="table-m">
              <tr>
              <th>Name of the diseaese</th>
              <th>Date of injury</th>
              </tr>
            @foreach ($chronicDiseases as $chronicDisease)
             <tr>
                <td>{{$chronicDisease->name_diseaese}}</td>
                <td>{{$chronicDisease->date_injury?$chronicDisease->date_injury:"undefined"}}</td>
             </tr>
            @endforeach
             </table>
            <label for="">Genetic diseases:</label> 
            <!-- <textarea name="" id=""></textarea><br> -->
            <table class="table-m">
              <tr>
              <th>Name of the diseaese</th>
              <th>Date of appearence</th>
              </tr>
              @foreach ($geneticDiseases as $geneticDisease)
              <tr>
                <td>{{$geneticDisease->name_diseaese}}</td>
                <td>{{$geneticDisease->date_appearence}}</td>
              </tr>
            @endforeach
             </table>
      </div>
      <div class="page">
      <div id="title">
        <img src="/img/img54.webp" alt="">
        <h1>PHYSICIAN NOTES</h1>
    </div>
    <div class="not">
        <div id="content">
            <h3>LAST NOTE :</h3>
            @if (!$note)
            <br>
            <p>No notes available.</p>
            
            @else
                 <p>{{$note->desc_note}}.</p>
            <div id="infor">
                <p>Dr.{{$name_doctor}}</p>
                <p>{{$note->date_note}}</p>
            </div>
            @endif
        </div>
        </div>
      </div>
     <a href="{{ route('file_record.patient', $id_patient) }}" style="color: rgb(3, 133, 255);">Medical record...</a>   
    </label>
    <input type="file" id="file-upload" />
   </div>
  </div>

      <!-- ===================================================================== -->
       <div id="page2" class="section">
        <div class="container">
          <h1>Medical specialties</h1>
          <div class="cards">
            <div class="card" onclick="section2('eyes')">
               <img src="/img/Ophthalmology.jpg" alt="">
               <h3>Ophthalmology section</h3>
            </div>   
            <div class="card"  onclick="section2('teeth')">
              <img src="/img/th.jpg" alt="">
              <h3>dentistry section</h3>
            </div>  
            <div class="card"  onclick="section2('nandt')">
              <img src="/img/ENT.jpg" alt="">
              <h3>ENT section</h3>
            </div>  
          </div>
         </div>
             <div id="eyes" class="specialties">
                <div id="titre">
                   <img src="/img/icon13.png" alt="">
                   <h2>Test and diagnostics</h2>
                 </div>
                    <div class="page">
                    <label for="">date of check</label>
                    <input type="date" readonly><br>
                    <label for="">Visual acuity (Right eye)../10</label>
                    <input type="text" readonly><br>
                    <label for="">Visual acuity (Left eye)../10</label>
                    <input type="text" readonly><br>
                    <!-- <label for="">Eye pressure</label>
                    <input type="text" readonly><br>
                    <label for="">Fundus examination notes</label>
                    <textarea name="" id="" readonly></textarea>
                     <label for="">field of vision test notes</label>
                    <textarea name="" id="" readonly></textarea>
                   <label for="">Light refraaaction examination</label>
                   <textarea name="" id="" readonly></textarea> -->
                   <label for="">Notes</label>
                   <textarea name="" id="" readonly></textarea>
                   </div>
                <div id="titre">
                    <img src="/img/icon13.png" alt="">
                    <h2>Recorded diseases andcases</h2>
                </div>
                <table  class="table-v">
                  <thead>
                    <tr>
                  <th>Name disease</th>
                  <th>date of diagnosis</th>
                  <th>Number of visits</th>
                  <th>Treatment</th>
                  <th>Next appointment</th>
                  <th>Doctor Symbol</th>
                </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                <div id="titre">
                  <img src="/img/icon15.png" alt="">
                  <h2>Surgical operations</h2>
              </div>
              <table  class="table-v" >
                <thead >
                  <tr>
                <th>Type of surgery</th>
                <th>date of surgery</th>
                <th>Affected eye</th>
                <th>Reason for surgery</th>
                <th>Hospital of surgery</th>
                <th>Doctor Symbol</th>
              </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>        
              <a href="##" style="color: rgb(3, 133, 255);">Medical record...</a>
            </div>
            <div id="teeth" class="specialties">
              <div class="Departement_parodontie" >
                <div id="titre">
                  <img src="/img/icon16.png" alt="">
                  <h2>Gum Part</h2>
              </div>
              <div class="page">
                <label for="">Gum disease</label>
                <input type="text" readonly> <br>
                <label for="">Causes of gum disease</label>
                <input type="text" readonly><br>
                <label for="">Date of exposure</label>
                <input type="text" readonly><br>
                <label for="">Treatment </label>
                <input type="text" readonly><br>
                <label for="">Date of next examination</label>
                <input type="date" readonly><br>
                <label for="">Doctor Symbol</label>
                <input type="text" readonly><br>
              </div>
              </div>

              <div class="Departement_dentaire" >
                <div id="titre">
                  <img src="/img/icon17.png" alt="">
                  <h2>Dental part</h2>
              </div>
              <div class="page">
                <label for="">Damage type</label>
                <input type="text" readonly><br>
                <label for="">Treament</label>
                <input type="text" readonly><br>
                <label for="test">Oral hygiene assessment:</label>
                <input type="number" placeholder="/10"><br>
                <label for="">Date of next examination</label>
                <input type="date" readonly><br>
                <label for="">Doctor Symbol</label>
                <input type="text" readonly><br>
              </div>
              </div>
              <a href="##" style="color: rgb(3, 133, 255);">Medical record...</a>
            </label>
            <input type="file" id="file-upload" />
            </div>
            <div id="nandt" class="specialties">
              <div id="titre">
                <img src="/img/icon18.png" alt="">
                <h2>Current diseases of ENT</h2>
            </div>
            <div class="page">
              <label for="">Nose problems</label>
                <input type="text" readonly><br>
                <label for="">Ear problems</label>
                <input type="text" readonly><br>
                <label for=""> Throat problems</label>
                <input type="text" readonly><br>
                <label for="">3.Nasal Condition </label>
                <textarea name="" id="" readonly></textarea>
                <label for="">4.Laryngeal Condition </label>
                <textarea name="" id="" readonly></textarea>
            </div>
            <a href="##" style="color: rgb(3, 133, 255);">Medical record...</a>
          </div>
      </div>
      <!-- ===================================================================== -->
      <div id="page3" class="section">
        <div class="container">
        <div id="titre">
          <img src="/img/icon22.png" alt="">
          <h2>Upcoming surgeries</h2>
      </div>
      <div class="page" style=" border-left: 5px solid #5100ff85;">
       <label for="">Date of surgery</label>
       <input type="date" value="{{ $last_surgery ? $last_surgery->date_surgery : '' }}" readonly>
       <label for="">Reason for surgery</label>
      <textarea name="" id="" readonly>{{ $last_surgery?->reason_surgery }}</textarea>
      <label for="">Type of surgery</label>
      <input type="text" value="{{ $last_surgery?->type_surgery }}" readonly>
      <label for="">Required  tests</label>
      <textarea name="" id="" readonly>{{ $last_surgery?->required_test }}</textarea>
      <label for="">Doctor Symbol</label>
      <input type="text" value="{{ $last_surgery?->doctor_symbol }}" readonly>
      </div>
      <div id="titre">
        <img src="/img/icon22.png" alt="">
        <h2>Previous surgeries</h2>
    </div>
    <table  class="table-v" >
      <thead style="background-color: #f52303;">
        <tr>
      <th>date of surgery</th>
      <th>Reason for surgery</th>
      <th>Hospital of surgery</th>
      <th>Symbol Doctor</th>
       </tr>
      </thead>
      <tbody>
        @foreach ($surgeries as $sergery)
        <tr>
          <td>{{$sergery->date_surgery}}</td>
          <td>{{$sergery->reason_surgery}}</td>
          <td>{{$sergery->name_hospitel}}</td>
          <td>{{$sergery->doctor_symbol}}</td>
        </tr>
        @endforeach
       
      </tbody>
    </table>    
      </div>
      
      </div>
    </section>
<script src="/js/medical_h_v.js"></script>
</body>
</html>