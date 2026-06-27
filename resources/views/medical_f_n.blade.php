<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medical_record</title>
    <link rel="shortcut icon" href="/img/icon_site.png">
    <link rel="stylesheet" href="/css/medical_f_n.css">
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
                <label for="">Full Name:</label>
                <input type="text" value=" {{ $patient->first_name_p }}" readonly>
            </div>
            <div>
                <label for="">Last Name:</label>
                <input type="text" value=" {{ $patient->last_name_p }}" readonly>
            </div>
            <div>
                <label for="">Date of Birht:</label>
                <input type="text" value=" {{ $patient->date_birth_p }}" readonly>
            </div>
            <div>
                <label for="">Sex:</label>
                <input type="text" value="{{ $patient->gender }}" readonly>
            </div>
            <div>
                <label for="">blood </label>
                <input type="text" value="{{ $patient->blood_p }}" readonly>
            </div>
        </div>
        <div class="left">
    <div>
                <label for="">Address:</label>
                <input type="text" value="{{ $patient->address_p }}" readonly>
            </div>
            <div>
                <label for="">City:</label>
                <input type="text" value="{{ $patient->city_p }}" readonly>
            </div>
            <div>
                <label for="">Region:</label>
                <input type="text" value="{{ $patient->region_p }}" readonly>
            </div>
            <div>
                <label for="">Phone Number </label>
                <input type="text" value="{{ $patient->phone_p }}" readonly>
            </div>
            <div>
                <label for="">Email </label>
                <input type="text" value="{{ $patient->email_p }}" readonly>
            </div>
        </div>
        </section> 
        <hr>
        <section class="section3">
            <div id="title">
                <img src="img50.png" alt="">
                <h1>MEDICAL HISTORY</h1>
            </div>
            <br><br>
            <br>
            <br>
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
                            </thead>
                          @foreach ($chronicDisease as $chronic)
                             <tr>
                          <td>{{$chronic->name_diseaese}}</td>
                          <td>{{$chronic->date_injury ?:"undefined"}}</td>
                        </tr>
                        @endforeach
                       </table>
                </div>
                <br><br>
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
            <br>
            <br>
            
            <label for="NH"><div id="title">
                <h2>Current symptoms</h2>
            </div></label>
            <textarea name="" id="NH">{{$last_diseases->current_symptoms?? ''}}</textarea>
            
        </section>
        <hr>
        <section class="section4">
            <div class="right">
                <div id="title">
                    <img src="img51.png" alt="">
                    <h1>VITAL SINGS MEASUREMENT</h1>
                </div>
                <form action="{{'misure.nurse',$patient->id_patient,$id_nurse}}" method="POST">
                    @csrf
                <div>
                    <label for="">Height:</label>
                    <input type="text" name="height">
                </div>
                <div>
                    <label for="">Weight:</label>
                    <input type="text" name="weight">
                </div>
                <div>
                    <label for="">Blood Pressure:</label>
                    <input type="text" name="blood_pressure">
                </div>
                <div>
                    <label for="">Heart Rate:</label>
                    <input type="text" name="heart_rate">
                </div>
            </div>
            <div class="left">
                <div>
                    <label for="">Blood Glucose: </label>
                    <input type="text" name="blood_glucose">
                </div>
                <div>
                    <label for="">Body Temperature </label>
                    <input type="text" name="body_temperature">
                </div>
                <div>
                    <label for="NH"><div id="title">
                        <h2>Current symptoms</h2>
                    </div></label>
                    <textarea name="symptoms" id="NH" placeholder="Current notes about the patient"></textarea>
                </div>
                <input type="submit" value="update">
            </div>
        </form>
        </section> 
        <a href="{{route('vaccination.nurse',[$patient->id_patient,$id_nurse])}}" id="vaccination">vaccination</a>
        <hr>
    </section>
    
</body>
</html>