<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDICAL RECORD</title>
    <link rel="shortcut icon" href="/img/icon_site.png">
    <link rel="stylesheet" href="/css/medical_f_d.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="content">
        <section class="section1">
             <img src="/img/img49.png" alt="">
             <h1>MEDICAL RECORD</h1>
        </section>
        <hr>
         <section class="section2">
             <div class="right">
            <h1>PATIENT INFORMATION</h1>
            <div>
                <label for="">First Name:</label>
                <input type="text" value="{{$patient->first_name_p}}">
            </div>
            <div>
                <label for="">Last Name:</label>
                <input type="text" value="{{$patient->last_name_p}}">
            </div>
            <div>
                <label for="">Date of Birht:</label>
                <input type="text" value="{{$patient->date_birth_p}}">
            </div>
            <div>
                <label for="">blood </label>
                <input type="text" value="{{$patient->blood_p}}">
            </div>
        </div>
        <div class="left">
             <div>
                <label for="">Sex:</label>
                <input type="text" value="{{$patient->gender}}">
            </div>
            <div>
                <label for="">City: </label>
                <input type="text" value="{{$patient->city_p}}">
            </div>
            <div>
                <label for="">Phone Number </label>
                <input type="text" value="{{$patient->phone_p}}">
            </div>
            <div>
                <label for="">Email </label>
                <input type="text" value="{{$patient->email_p}}">
            </div>
        </div>
        </section> 
        <hr>
        <section class="section3">
            <div id="title">
                <img src="/img/img50.png" alt="">
                <h1>MEDICAL HISTORY</h1>
            </div>
            <div id="medication">
                <div id="title">
                    <img src="/img/icon8.png" alt="">
                    <h2>Current Medication</h2>
                </div>
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
                        @foreach ($medications as $medication)
                          @foreach ($list_medication_m as $medic)
                            @if($medication->id_medication==$medic->id_medication)
                      <tr>
                      <td>{{$medic->name_medication}}</td>
                      <td>{{$medic->use_case}}</td>
                      <td>{{$medic->how_take}}</td>
                      <td>{{$medic->dosage}}</td>
                      <td>{{$medic->duration}} days</td>
                      <td>{{$medication->date_prescribed}}</td>
                      <td>{{$medication->doctor_symbol}}</td>
                      </tr>
                          @endif
                        @endforeach
                      @endforeach
                      </tbody>
                </table>
            </div>
            
            <div class="allergy">
                <div id="title">
                    <img src="/img/icon9.png" alt="">
                    <h2>Medication allergy</h2>
                </div>
                <br>
                
                <div>
                    <table class="table-m">
                        <tr>
                            <th>name medication</th>
                            <th>alternative medication</th>
                            </tr>
                            @foreach ($allergy as $allerg)
                    @foreach ($list_medication_allergy as $medication_allergy)
                        @if($allerg->id_medication==$medication_allergy->id_medication)
                        <tr>
                        <td>{{$medication_allergy->name_medication}}</td>
                        <td>{{$allerg->alternative_medication}}</td>
                        </tr>
                                @endif
                    @endforeach
                @endforeach
                    </table>
                 {{-- <h2 style="display: inline">{{$medication_allergy->name_medication}} ==></h3><p  style="display: inline">  {{$allerg->alternative_medication}}</p> --}}
                </div>
                
            </div>
            </section>
            <br><br>
            <section class="section3">
            <div class="chronic">
                <div id="title">
                    <img src="/img/img52.jpg" alt="" style="width: 50px;height: 50px;">
                    <h2>Chronic Diseases</h2>
                </div>
                <div>
                    <table class="table-m">
                        <thead id="current">
                        <th>Name of the diseaese</th>
                        <th>Date of injury</th>
                        @foreach ($chronicDisease as $chronic)
                             <tr>
                          <td>{{$chronic->name_diseaese}}</td>
                          <td>{{$chronic->date_injury ?:"undefined"}}</td>
                        </tr>
                        @endforeach
                       
                       </table>
                </div>
                </section>
                <br><br>
                <section class="section3">
                <div id="title">
                    <img src="/img/img52.jpg" alt="" style="width: 50px;height: 50px;">
                    <h2>Genitic Diseases</h2>
                </div>
                <div>
                    <table class="table-m">
                        <thead id="current">
                        <th>Name of the diseaese</th>
                        <th>Date of appearence</th>
                    </thead>
                        @foreach ($geneticDisease as $genetic)
                        <tr>
                          <td>{{$genetic->name_diseaese}}</td>
                          <td>{{$genetic->date_appearence ?:""}}</td>
                        </tr>
                        @endforeach
                       </table>
                </div>
            </div>
            </section>
            <br>
            <br>
            <section class="section3">
            <div class="surgeries">
                <div id="title">
                    <img src="/img/icon22.png" alt="">
                    <h2>Surgeries</h2>
                </div>
                <table class="table-m">
                    <th>Date</th>
                    <th>reason of surgery</th>
                    <th>type of surgery</th>
                    @foreach ($surgryies as $surgry)
                    <tr>
                      <td>{{$surgry->date_surgery}}</td>
                      <td>{{$surgry->reason_surgery}}</td>
                      <td>{{$surgry->type_surgery}}</td>
                    </tr>
                    @endforeach
                   
                   </table>
            </div>
            </section>
            <br>
            <br>
             <section class="section3">
            <label for="NH"><div id="title">
                <h2>Negtive Habits</h2>
            </div></label>
            <textarea name="" id="NH">{{$patient->negative_habits}}</textarea>
            <label for="NH"><div id="title">
                <h2>Current symptoms</h2>
            </div></label>
            <textarea name="" id="NH">{{$last_diseases->current_symptoms?? ''}}</textarea>
        </section>
        <hr>
        <section class="section4">
           <div class="right">
    <div id="title">
        <img src="/img/img51.png" alt="">
        <h1>VITAL SIGNS</h1>
    </div>
    <div>
        <label for="">Height:</label>
        <input type="text" value="{{ $last_diseases?->height ?? '' }} cm">
    </div>
    <div>
        <label for="">Weight:</label>
        <input type="text" value="{{ $last_diseases?->weight ?? '' }} kg">
    </div>
    <div>
        <label for="">Blood Pressure:</label>
        <input type="text" value="{{ $last_diseases?->blood_p ?? '' }} mmHg">
    </div>
    <div>
        <label for="">Heart Rate:</label>
        <input type="text" value="{{ $last_diseases?->heart_rate ?? '' }} B/minute">
    </div>
</div>
            <div class="left">
                <div>
                    <label for="">Blood Glucose: </label>
                    <input type="text" value="{{ $last_diseases?->blood_glucose ?? ''}} mg/dL">
                </div>
                <div>
                    <label for="">Body Temperature </label>
                    <input type="text" value="{{$last_diseases?->body_temprerature ?? ''}} C°">
                </div>
            </div>
        </section> 
        <hr>
        <section class="section5">
            <div id="title">
                <img src="/img/img54.webp" alt="">
                <h1>PHYSICIAN NOTES</h1>
            </div>
            <div class="not">
                <div id="content" style="display: block; background-color: #f0f0f0; padding: 20px; border-radius: 10px;">
                    @php $i=1; @endphp
                    @foreach ($notes as $note)
                     <div style="margin-bottom: 25px; border-bottom: 1px solid #ccc; padding-bottom: 10px;">
                      <h3>Note : @php echo $i; $i++ ; @endphp </h3>
                      <p>{{$note->desc_note}}.</p>
                      <div id="infor">
                      @if($doctors->id_doctor == $note->id_doctor)
                      <p>Dr.{{$doctors->first_name_d}}</p>
                      <p>{{$note->date_note}}</p><br>
                      @endif 
                 </div>  
                   </div>
                    @endforeach
                </div> 
            </div>

           <section class="section5">
             <a href="{{route('check.patient', [$id_doctor, $patient->id_patient])}}"><input type="submit" value="Check now"></a>
           </section>

        </section>
    </section>
    
</body>
</html>