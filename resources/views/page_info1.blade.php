<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information.collect</title>
    <link rel="stylesheet" href="/css/medical_data.css">
    <link rel="shortcut icon" href="/img/icon_site.png">
</head>
<style>
  form{
    box-shadow: 0px 5px 30px black;
   
  }
</style>
<body>
    <div class="content2">
        <div class="container">
         
    <form action="{{route('information.collect1',$card_nbr)}}" method="POST">
     @csrf
        <div class="question" style=" text-align: center;">
          <br>
          <h2 style=" font-size: 25px; color: #000000;">Please fill out this form to access your account.</h2>

<br>
            <h2 style="text-align: center; font-size: 20px; color: #00000090;">Entering your information accurately and truthfully ensures appropriate and safe healthcare</h2>
            </div>
            <br>
<br>
<br>
{{-- <p>{{$card_nbr}}</p> --}}
<div class="question">
                <p>Do you have constant anixiety and tension?</p>
                <div class="question-answer">
                  <input type="radio" value="yes" id="radio_3" name="anixiety"/>
                  <label for="radio_3" class="radio"><span>Yes</span></label>
                  <input type="radio" value="no" id="radio_4" name="anixiety" />
                  <label for="radio_4" class="radio"><span>No</span></label>
                </div>
              </div>
        <div class="question">
          <p>do you play sports?</p>
          <div class="question-answer">
            <input type="radio" value="regular" id="radio_7" name="sport"/>
            <label for="radio_7" class="radio"><span>regular</span></label>
            <input type="radio" value="a little" id="radio_8" name="sport" />
            <label for="radio_8" class="radio"><span>a little</span></label>
          </div>
        </div>
        <div class="question">
          <p>Do you smoke?</p>
          <div class="question-answer">
            <input type="radio" value="yes" id="radio_5" name="smoke"/>
            <label for="radio_5" class="radio"><span>Yes</span></label>
            <input type="radio" value="no" id="radio_6" name="smoke" />
            <label for="radio_6" class="radio"><span>No</span></label>
          </div>
        </div>
        <div class="question">
          <p>have you taken drugs or alcohol ?</p>
          <div class="question-answer">
            <input type="radio" value="yes" id="radio_9" name="drink"/>
            <label for="radio_9" class="radio"><span>Yes</span></label>
            <input type="radio" value="no" id="radio_10" name="drink" />
            <label for="radio_10" class="radio"><span>No</span></label>
            <input type="radio" value="sometimes" id="once" name="drink" />
            <label for="once" class="radio"><span>Every once in a while</span></label>
          </div>
        </div>
        <div class="question">
             <input type="text" name="address" placeholder="Please enter your address"> 
             <br> 
             <input type="text" name="city_p" placeholder="Please enter your city number">
             <br>     
            <input type="text" name="region_p" placeholder="Please enter your region">            
       </div>
        <div class="btn-block">
          <!-- <button type="submit" id="Return" href="/">Return</button> -->
          <button type="submit" href="page_info2.html">Next</button>
         </div> 
      </form>
    </div> 
</div> 
<script src="/js/js.js"></script>
</body>
</html>