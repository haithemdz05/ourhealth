<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Check Page</title>
  <link rel="stylesheet" href="/css/check_g.css">
      <link rel="shortcut icon" href="/img/icon_site.png">

     <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2>Doctor Check Form</h2>
    <div class="map" style="display: flex; justify-content: center;gap: 25px;">
    <button type="submit" onclick="section('page1',this)">General Check</button>
    <button type="submit" onclick="section('page2',this)">medicaiton and tests</button>
    <button type="submit" onclick="section('page3',this)">Drug allergyand diseases</button>
    </div>
    <form action="{{route('save_check.patient',[$id_doctor, $id_patient])}}" method="POST">
      @csrf
      <div id="page1" class="section">
         <label for="bt">Name disease:</label>
     <input type="text" name="name_disease">
      <label for="bt">Patient condition description:</label>
      <textarea id="bt" name="desc_disease" required></textarea>

      <label for="exam">General examination notes:</label>
      <textarea id="exam" name="general_exam" required></textarea>

        <label for="exam">Physician notes:</label>
    <textarea id="exam" name="desc_note" required></textarea>
    <label for="app">The Next Appointment:</label>
    <input type="date" name="next_appointment" >
    <label for="app">Type Appointment:</label>
    <select name="type_appointment" id="app">
      <option value="follow_up">Follow Up</option>
      <option value="checkup">Checkup</option>
      <option value="specialist">Specialist</option>
      <option value="emergency">Emergency</option>
      <option value="routine">Routine</option>
    </select>
    <label for="app">Reason for appointment:</label>
    <input type="text" name="note_appointment" >
<button type="submit" style="">Submit Check</button>
</div>

{{-- </form>
  <form>  --}}
<div id="page2" class="section">
 <label for="test">MEDICAL TESTS:</label>
<ul id="test-list">
    <li>
        <label>Test 1:</label>
        <input type="text" name="tests[]" placeholder="Name of test">
    </li>
</ul>
<button type="button" id="add-test" style="margin:10px 0;">Add Test</button>

      {{--_____________--}}
   <label for="medication">MEDICATION:</label>
<ul id="medication-list">
    <li>
        <label>Medication 1:</label>
        <input type="text" name="medications[]"list="medications-list"   placeholder="name of medication"  autocomplete="off">
           </li>
</ul>
<datalist id="medications-list">
    @foreach($all_medications as $med)
        <option value="{{ $med->name_medication }}">
    @endforeach
</datalist>
   
<button type="button" id="add-medication" style="margin:10px 0;">Add Medication</button><br>
    <button type="submit">Submit Check</button>
     </div>     
{{-- </form>
<form action=""> --}}
<div id="page3" class="section">
    <label for="exam">DRUG ALLERGY:</label>
    <label for="exam">id of the Medicine:</label>
    <input type="text" name="medicine_name">
    <label for="exam">Type of Allgergic Reaction:</label>
    <textarea id="exam" name="type_all"></textarea>
    <label for="exam">Instensity of Interaction:</label>
    <textarea id="exam" name="ii"></textarea>
    <label for="exam">Possible Alternative Medication :</label>
    <textarea id="exam" name="pam"></textarea>
    <label for="exam">Duration of effect :</label>
    <textarea id="exam" name="duration"></textarea>
          <hr>
<label for="exam">Genetic diseases:</label>
<input type="text" name="genetic_diseases">
<label for="exam">Chronic diseases:</label>
<input type="text" name="chronic_diseases">
  <button type="submit" style="">Submit Check</button>
  </div>
    </form>
  </div>
   <script src="/js/medical_h_v.js"></script>
{{-- <script>
  // Tab switching functionality
  function section(pageId, btn) {
    // Hide all sections
    document.querySelectorAll('.section').forEach(el => {
      el.classList.remove('active');
    });

    // Show selected section
    document.getElementById(pageId).classList.add('active');

    // Update active button
    document.querySelectorAll('.map button').forEach(b => {
      b.classList.remove('active');
    });
    btn.classList.add('active');
  }

  // Show first section on page load
  document.addEventListener('DOMContentLoaded', function() {
    const firstBtn = document.querySelector('.map button');
    if(firstBtn) {
      section('page1', firstBtn);
    }
  });

  // Add test functionality
  document.getElementById('add-test')?.addEventListener('click', function() {
    const testList = document.getElementById('test-list');
    const count = testList.children.length + 1;
    const li = document.createElement('li');
    li.innerHTML = `
      <label>Test ${count}:</label>
      <input type="text" name="tests[]" placeholder="Name of test">
      <button type="button" onclick="this.parentElement.remove()" style="background:#ef4444; width:auto; flex:0">✕</button>
    `;
    testList.appendChild(li);
  });

  // Add medication functionality
  document.getElementById('add-medication')?.addEventListener('click', function() {
    const medList = document.getElementById('medication-list');
    const count = medList.children.length + 1;
    const li = document.createElement('li');
    li.innerHTML = `
      <label>Medication ${count}:</label>
      <input type="text" name="medications[]" list="medications-list" placeholder="name of medication" autocomplete="off">
      <button type="button" onclick="this.parentElement.remove()" style="background:#ef4444; width:auto; flex:0">✕</button>
    `;
    medList.appendChild(li);
  });
</script> --}}
</body>
</html>
