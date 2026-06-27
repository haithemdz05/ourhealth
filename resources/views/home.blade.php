<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home page</title>
   <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/home.css">
  <link rel="shortcut icon" href="/img/icon_site.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</head>



<body>
  <nav>
    <img id="logo" src="/img/logo2.png" />
    <ul class="nav-item">
      <div id="links">
        <li><a href="publication" class="nav">{{__('messages.Publications')}}</a></li>
        <li><a href="about" class="nav">{{__('messages.about')}}</a></li>
        <li><a href="connect" class="nav">{{__('messages.contact')}}</a></li>
        <li><a href="sing_page" class="nav">{{__('messages.Log in')}}</a></li>
        <li><a href="sing_up" class="btn btn-primary">{{__('messages.Sing up')}}</a></li>
      <li>  <div class="list">
        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF"><path d="m476-80 182-480h84L924-80h-84l-43-122H603L560-80h-84ZM160-200l-56-56 202-202q-35-35-63.5-80T190-640h84q20 39 40 68t48 58q33-33 68.5-92.5T484-720H40v-80h280v-80h80v80h280v80H564q-21 72-63 148t-83 116l96 98-30 82-122-125-202 201Zm468-72h144l-72-204-72 204Z"/>
        </svg>    
        </div>
      
           <ul id="hiddenList" class="hidden">
    <li><a href="{{ url('lang/ar') }}">عربية</a></li>
    <li><a href="{{ url('lang/en') }}">English</a></li>
</ul>
        </li>
      </div>
      </div>
    </ul>
  </nav>

 
<div id="card">
  <div style="display: flex; justify-content: center; align-items: center; height: 100%;margin-left: -13px;">
  <img src="/img/img37.jpg" style="width : 60vw ;height :100vh; background-repeat: no-repeat; 
   object-fit: cover;
    -webkit-mask-image: linear-gradient(to left, transparent, rgb(7, 116, 81) 1%);
            mask-image: linear-gradient(to left, transparent, rgb(7, 116, 81) 1%);" alt="">
  <img src="/img/imgpage1.jpg" style="width : 39.15vw ;height :100vh ;background-size: cover;
   background-position: center;
   background-repeat: no-repeat; 
   object-fit: cover;
    -webkit-mask-image: linear-gradient(to right, transparent, rgb(7, 116, 81) 1%);
            mask-image: linear-gradient(to right, transparent, rgb(7, 116, 81) 1%);"  alt="">
  </div>
  <div class="nav-card"  style="position: absolute; text-align: left; color: white; margin-top: 50px;">
    <hr id="hr1">
    <h1>{{ __('messages.title')}}</h1>
    <hr id="hr2">
    <h6 style="font-weight: bolder;">{{ __('messages.subtitle')}}</h6>
    <h1>{{ __('messages.title2')}}</h1>
    <a href="sing_page" class="btn_sing">{{ __('messages.Get Started')}}</a>
  </div>
</div>

<div class="content" style="margin-top: 30px;color:white " >
  <div> 
  <h1>{{ __('messages.Your health is our priority')}}</h1>
  <br>
  <hr id="hr2" style="margin: auto;background-color: #8519ff;">
  <br>
  <h6 style="color: white">{{__('messages.text1')}}</h6>
  </div>
</div>
<div id="content">
  <h1 id="h1" style="text-align: center;margin-top: 50px;margin-bottom: 50px;">{{ __('messages.How')}}</h1>
      <hr id="hr2" style="background-color: black;margin: auto;">
    <div id="section2">
      <div class="card"  class="moving-text5">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16"
            height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2" />
          </svg>{{__('messages.text2')}} </p>
      </div>
      <div class="card"  class="moving-text6">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16"
            height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2" />
          </svg> {{__('messages.text3')}}</p>
      </div>
      <div  class="card" class="moving-text7">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16"
            height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2" />
          </svg> {{__('messages.text4')}}</p>
      </div>
      <div  class="card" class="moving-text8">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16"
            height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2" />
          </svg> {{__('messages.text5')}}</p>
      </div>
    </div>
   


<div class="section1">
  <div class="grid-four">
    <!-- Paper 1 -->
    <div class="paper">
      <div class="paper-body">
        <h3>{{__('messages.Health Monitoring')}}</h3>
        <p>{{__('messages.text6')}}</p>
      </div>
      <img src="/img/img32.jpg" alt="">
    </div>

    <!-- Paper 2 -->
    <div class="paper">
      <div class="paper-body">
        <h3>{{__('messages.Trustworthy')}}</h3>
        <p>{{__('messages.text7')}}</p>
      </div>
      <img src="/img/img33.jpg" alt="">
    </div>

    <!-- Card 1 -->
    <div class="info-card">
      <h4>{{__('messages.What we Offer')}}</h4>
      <p>{{__('messages.text8')}}</p>
    </div>

    <!-- Card 2 -->
    <div class="info-card">
      <h4>{{ __('messages.title')}}</h4>
      <p>{{ __('messages.text9')}}</p>
      <ol>
        <li>{{__('messages.Inaccurate')}}</li>
        <li>{{__('messages.Poor')}}</li>
        <li>{{__('messages.Delayed')}}</li>
      </ol>
    </div>
  </div>
</div>
    
    <div id="section3"> 
      <img style="position: absolute; left: 200px; margin-bottom:0px; width: 500px; "  src="/img/imgdoc.png" alt="">
      <img  style="position: absolute; left: 180px; margin-bottom:0px ;"width="300px" src="/img/doctorimg.png" alt="">
      <div id="card8" class="moving-text9">
        <h1 style="color: white;">{{ __('messages.Your health is our priority')}}</h1>
        <P style="color: rgb(255, 255, 255); font-size: 16px;">{{__('messages.text10')}}</P>
      </div>
      <div id="card9" class="moving-text9">
        <h1>{{__('messages.text11')}} </h1>
        <p> {{__('messages.text12')}}<br>
        <h3>{{__('messages.w')}}</h3>
        <ol>
          <li>{{__('messages.text13')}}</li>
          <li>{{__('messages.text14')}} </li>
          <li>{{__('messages.text15')}} </li>
        </ol>
      {{__('messages.text16')}}
        </p>
        <a href="sing_up"><button type="button" class="btn btn-primary">Sing up</button></a>
      </div>
    </div>
    <footer>
      <div id="section4">
        <div>
          <h3 class="footer">Contact Us: </h3>
          <span class="footer">If you have any questions about our privacy, terms, or services, you can contact us by<br/> email:</span>
          <span class="footer"> OURHEALTH@gmail.com </span>
          <span class="footer">or<br /> through our Contact Us page.</span>
          <br>
          <br>
          <a class="btn btn-primary" href="connect" class="nav">Connect us</a>
          <br><br>
          <div style="display: flex; width: 20%; justify-content: space-between;height: 90px;">
          <a href=""><img src="/svg/facebook.svg" alt="" style="stroke:black;"></a>
          <a href=""><img src="/svg/mail.svg" alt="" style="stroke:rgb(255, 255, 255);"></a>
          <a href=""><img src="/svg/x.svg" alt="" style="stroke:black;"></a>
        </div>
      </div>
        <div>
        <p>Last Updated: 12/06/2025</p>
        <p class="footer">All rights reserved. Simplify medical data management and improve continuity of care with our innovative solution.</p>

        <p class="footer">© 2024 OUR HEALTH.COM</p>
      </div>
      </div>
    </footer>
  </div>
</div>
<script>
  document.getElementsByClassName("list")[0].addEventListener("click", function () {
  const list = document.getElementById("hiddenList");
  const bottomElement = document.getElementById("port4");
  if (list.classList.contains("hidden")) {
      list.classList.remove("hidden");
      bottomElement.style.marginTop = "150px";
  } else {
      list.classList.add("hidden");
      bottomElement.style.marginTop = "20px"; 
  }
});
document.getElementById("toggleButton").onclick = function () {
    var list = document.getElementById("hiddenList");
    list.classList.toggle("hidden");
};
</script>
  <!-- <script src="home.js"> </script>  -->
</body>
</html>
 <!-- <div id="welcom">
    <span
      style="color: rgb(255, 255, 255); font-size: 48px; font-family: Inter; font-weight: 500; line-height: 58.56px; word-wrap: break-word; filter: blur(2px)">Welcom
      to </span>
    <span
      style="color: rgba(255, 0, 0, 0.68); font-size: 48px; font-family: Inter; font-weight: 500; line-height: 58.56px; word-wrap: break-word; filter: blur(2px)">O</span>
    <span
      style="color: rgba(255, 0, 0, 0.68); font-size: 40px; font-family: Inter; font-weight: 200; line-height: 48.80px; word-wrap: break-word; filter: blur(2px)">UR</span>
    <span
      style="color: #0093FF; font-size: 48px; font-family: Inter; font-weight: 300; line-height: 58.56px; word-wrap: break-word; filter: blur(2px)">H</span>
    <span
      style="color: #0093FF; font-size: 48px; font-family: Caudex; font-weight: 400; line-height: 58.56px; word-wrap: break-word; filter: blur(2px)">EALT</span>
    <span
      style="color: #0093FF; font-size: 48px; font-family: Caudex; font-weight: 400; line-height: 62.38px; word-wrap: break-word; filter: blur(2px)">H</span>
    <span
      style="color: #0093FF; font-size: 48px; font-family: ABeeZee; font-weight: 400; line-height: 57.20px; word-wrap: break-word; filter: blur(2px)">
    </span>
    <span
      style="color: rgb(255, 255, 255); font-size: 48px; font-family: Inter; font-weight: 500; line-height: 58.56px; word-wrap: break-word; filter: blur(2px)">site</span>
  </div> -->