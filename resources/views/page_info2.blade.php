<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information.collect</title>
      <link rel="shortcut icon" href="/img/icon_site.png">
    <link rel="stylesheet" href="/css/medical_data.css">
</head>
<style>
form{
    box-shadow: 0px 5px 30px black;
    width: 50%;
    position: absolute;
    top:10px
 }
 </style>

<body>
    <div class="content2">
        <div class="container">
<form action="{{ route('information.collect2', $card_nbr) }}" method="POST">
       @csrf
        <div class="question">
          <br>
          <h2 style=" font-size: 25px; color: #000000;">Please fill out this form to access your account.</h2>
<br>
        <div class="question">
                <p>Do you suffer from chronic diseases ? what are they?</p>
                <div id="input-container1">
                    <br>
                    <input type="text" name="chronic1" placeholder="chronic disease ">
                  </div>
                  <button type="button" id="add-chronic" style="width:120px">Add a Diseasse</button>
                  <br><br>
              </div>
              <div class="question">
                <p>Do you suffer from Genitic diseases ? what are they?</p>
                <div id="input-container5">
                    <br>
                    <input type="text" name="genetic1" placeholder="Genetic disease ">
                  </div>
                  <button type="button" id="add-genetic" style="width:120px">Add a Diseasse</button>
                  <br><br>
              </div>
     <div class="question">
                <br>
               <p> Have you ever had any surgery ? Whene </p>
               <div id="input-container4">
                  <br>
                     <input type="text" name="surgery1" placeholder="surgery 1">
                     <input type="date" name="date1" placeholder="date of surgery ">
                     <br>
                 </div>
                  <button type="button" id="add-surgery" style="width:150px">Add a medication</button>
                  <br><br>
      </div>
     
        <div class="question">
            <p>Any other diseasses ?</p>
            <br>
          <div id="input-container2">
            <input type="text" name="inputd1" placeholder="Desease ">
          </div>
          <button type="button" id="add-button" style="width:120px">Add a Diseasse</button>
          <br><br>
        </div>
        <div class="btn-block"> 
          <button type="submit" href="/">Next</button>
         </div> 
      </form>
   
</div> 
<script src="/js/js2.js"></script>
</body>
</html>