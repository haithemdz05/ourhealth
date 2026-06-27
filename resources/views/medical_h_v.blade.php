<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vacination</title>
    <link rel="stylesheet" href="/css/medical_h.css">
 <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="section3">
        <div id="card1-page">
          <img src="/img/icon3.png" alt="">
          <h1>Vaccination</h1>
        </div>
      </section>
      <div id="titre"> 
        <img src="/img/icon6.png" alt="">
        <h1>Next vaccine appointment</h1>
      </div>
      <section class="section5">
        <div class="time_vac">
          <label for="">Name of the vacine</label>
          <input type="text" readonly><br>
          <label for="">Vacine Appointment</label>
          <input type="date" readonly><br>
          <label for="">Mandtory or optional</label>
          <input type="text" readonly><br>
          <label for="">Possible side effects</label>
          <textarea name="" id="" readonly></textarea>
        </div>
      </section>
      <div id="titre"> 
        <img src="/img/icon6.png" alt="">
        <h1>Vaccines that have not yet been injected</h1>
      </div>
      <section class="vaccination-section">
        <div class="vaccine-card">
            <img src="/img/icon7.png" alt="Vaccine">
            <h3>(MMR)</h3>
            <p>🔴 Not yet vaccinated</p>
            <p>🗓 vaccination date <strong>10/12/2007</strong></p>
        </div>
        <div class="vaccine-card">
            <img src="/img/icon7.png" alt="Vaccine">
            <h3>Hepatits B(hepB)</h3>
            <p>🔴 Not yet vaccinated</p>
            <p>🗓 vaccination date <strong>30/12/2007</strong></p>
        </div>
    </section>
      <div id="titre">
        <img src="/img/icon6.png" alt="">
        <h1>History of vaccines</h1>
      </div>
      <section class="section4">
        <div class="content" >
         <ul class="menu2">
          <li onclick="section('birth',this)">At birth -> 23 Month</li>
          <li onclick="section('youth',this)">2 Years -> 18 Years</li>
          <li onclick="section('adult',this)">Over 18 years old </li>
         </ul>
         {{-- @dd($vaccination) --}}
         <div id="birth" class="section">
         <table  class="table-v">
          <thead>
        <tr>
          <th>Age</th>
          <th>Vacccination Name</th>
          <th>dose number</th>
          <th>Number of Doses</th>
          <th>Status</th>
          <th>Time</th>
          <th>Doctor Symbol</th>
        </tr>
          </thead>
          <tbody>
            <tr>
        @foreach ($vaccinations as $vaccination)
    @if($vaccination->age_limit_start <= 24)
        @php
            $display_age = $vaccination->age_limit_start == 0 ? 'At birth -> 1 Month' : $vaccination->age_limit_start . ' Month';
            // ابحث عن الجرعة المطابقة لهذا اللقاح
            $matched_vaccin = $vaccins->firstWhere('id_vacc', $vaccination->id_vacc);
        @endphp
        <tr>
            <td>{{ $display_age }}</td>
            <td>{{ $vaccination->name_vacc }}</td>
            <td>{{ $vaccination->num_doses }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->nbr_duse : '0' }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->status_vacc : 'F' }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->date_vacc : 'notyet' }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->doctor_symbol : 'undifined' }}</td>
        </tr>
    @endif
@endforeach
          </tbody>
         </table>
        </div>
         <div id="youth" class="section">
         <table  class="table-v">
          <thead>
         
              <tr>
                <th>Age</th>
                <th>Vacccination Name</th>
                <th>dose number</th>
                <th>Number of Doses</th>
                <th>Status</th>
                <th>Time</th>
                <th>Doctor Symbol</th>
              </tr>
          </thead>
             <tr>
           @foreach ($vaccinations as $vaccination)
    @if($vaccination->age_limit_start > 24 && $vaccination->age_limit_start < 216)
        @php
            $display_age = $vaccination->age_limit_start;
            if ($display_age == 48) $display_age = 4;
            if ($display_age == 72) $display_age = 6;
            if ($display_age == 108) $display_age = 9;
            if ($display_age == 132) $display_age = 11;
            if ($display_age == 192) $display_age = 16;
              $matched_vaccin = $vaccins->firstWhere('id_vacc', $vaccination->id_vacc);
        @endphp
        <tr>
            <td>{{ $display_age }} Years</td>
            <td>{{ $vaccination->name_vacc }}</td>
            <td>{{ $vaccination->num_doses }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->nbr_duse : '0' }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->status_vacc : 'F' }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->date_vacc : 'notyet' }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->doctor_symbol : 'undifined' }}</td>
        </tr>
    @endif
@endforeach
         </table>
        </div>
        <div id="adult" class="section">
          <table  class="table-v">
            <thead>
              <tr>
                  <th>Age</th>
                  <th>Vacccination Name</th>
                  <th>dose number</th>
                  <th>Number of Doses</th>
                  <th>Status</th>
                  <th>Time</th>
                  <th>Doctor Symbol</th>
                </tr>
       
            </thead>
            <tbody>
                       @foreach ($vaccinations as $vaccination)
    @if($vaccination->age_limit_start > 216)
        @php
            $display_age = $vaccination->age_limit_start;
            if ($display_age == 228) $display_age = 19 ;
            if ($display_age == 240) $display_age = 20;
           $matched_vaccin = $vaccins->firstWhere('id_vacc', $vaccination->id_vacc);
        @endphp
        <tr>
            <td>{{ $display_age }} Years</td>
            <td>{{ $vaccination->name_vacc }}</td>
            <td>{{ $vaccination->num_doses }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->nbr_duse : '0' }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->status_vacc : 'F' }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->date_vacc : 'notyet' }}</td>
            <td>{{ $matched_vaccin ? $matched_vaccin->doctor_symbol : 'undifined' }}</td>
        </tr>
    @endif
@endforeach
            </tbody>
           </table>
          </div>
         </table>
        </div>
      </section>
      <script src="/js/medical_h.js"></script>
</body>
</html>