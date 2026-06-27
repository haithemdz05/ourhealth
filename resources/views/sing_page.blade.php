<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="/css/sing_page.css">
    <link rel="shortcut icon" href="/img/icon_site.png">
      <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<style>
.custom-alert {
  display: flex;
  align-items: center;
  gap: 12px;
  background: #ffeaea;
  color: #d32f2f;
  border: 1.5px solid #f8bcbc;
  border-radius: 10px;
  padding: 14px 18px;
  margin: 20px auto 0 auto;
  max-width: 400px;
  font-size: 1.08rem;
  box-shadow: 0 2px 12px #f8bcbc33;
  animation: fadeInDown 0.7s;
  position: relative;
}
.custom-alert svg {
  flex-shrink: 0;
}
.custom-alert .close-btn {
  background: none;
  border: none;
  color: #d32f2f;
  font-size: 1.3rem;
  position: absolute;
  top: 8px;
  right: 12px;
  cursor: pointer;
  opacity: 0.7;
  transition: opacity 0.2s;
}
.custom-alert .close-btn:hover {
  opacity: 1;
}
@keyframes fadeInDown {
  from { opacity: 0; transform: translateY(-20px);}
  to { opacity: 1; transform: translateY(0);}
}
</style>
<body>
<div class="main">
@if(session('error'))
    <div class="custom-alert" id="customAlert">
        <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="12" fill="#d32f2f" opacity="0.15"/><path d="M12 7v5m0 3h.01" stroke="#d32f2f" stroke-width="2" stroke-linecap="round"/><circle cx="12" cy="12" r="11" stroke="#d32f2f" stroke-width="1.5"/></svg>
        <span><strong>Error:</strong> {{ session('error') }}</span>
        <button class="close-btn" onclick="document.getElementById('customAlert').style.display='none'">&times;</button>
    </div>
@endif
  <form action="{{route('sing_page.actors')}}" method="POST">
    @csrf
    <center>
      <div id="logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 32 32">
          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 16h20m-8-8l8 8l-8 8m6-20h8v24h-8"/>
        </svg>
        <br><br>
  
        <button type="button" onclick="switch_log('patient');setUserType('patient')" id="patient"> Patient</button>
        <button type="button"  onclick="switch_log('doctor');setUserType('doctor')" id="doctor">Doctor/Nurse</button>
        <input type="hidden" name="user_type" id="user_type" value="patient">
        <br>
        <br>
        <h1 id="text1">Sign in with the card number on the card</h1>
      </div>
      <br>
      <div id="content">
        <h6 id="text2">Here you will find your health information and the latest updates.</h6>
        <br>
        <div class="ident">
<svg xmlns="http://www.w3.org/2000/svg" id="svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M480-480q-51 0-85.5-34.5T360-600q0-50 34.5-85t85.5-35q50 0 85 35t35 85q0 51-35 85.5T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560ZM240-240v-76q0-21 10.5-39.5T279-385q46-27 96.5-41T480-440q54 0 104.5 14t96.5 41q18 11 28.5 29.5T720-316v76H240Zm240-120q-41 0-80 10t-74 30h308q-35-20-74-30t-80-10Zm0-240Zm0 280h154-308 154ZM160-80q-33 0-56.5-23.5T80-160v-160h80v160h160v80H160ZM80-640v-160q0-33 23.5-56.5T160-880h160v80H160v160H80ZM640-80v-80h160v-160h80v160q0 33-23.5 56.5T800-80H640Zm160-560v-160H640v-80h160q33 0 56.5 23.5T880-800v160h-80Z"/></svg>  <input type="text" name="username" placeholder="* Card number" id="code">
        </div>
        <br><br>
        <div class="ident">
          <svg id="svg" width="22" height="22" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.9661 9.28308H27.0516C27.4608 9.28308 27.8532 9.4212 28.1426 9.66706C28.4319 9.91291 28.5944 10.2464 28.5944 10.5941V26.3256C28.5944 26.6733 28.4319 27.0068 28.1426 27.2526C27.8532 27.4985 27.4608 27.6366 27.0516 27.6366H2.36701C1.95783 27.6366 1.56542 27.4985 1.27609 27.2526C0.986762 27.0068 0.824219 26.6733 0.824219 26.3256V10.5941C0.824219 10.2464 0.986762 9.91291 1.27609 9.66706C1.56542 9.4212 1.95783 9.28308 2.36701 9.28308H5.45259V7.97212C5.45259 5.88598 6.42785 3.88528 8.16382 2.41016C9.8998 0.935039 12.2543 0.106323 14.7093 0.106323C17.1644 0.106323 19.5188 0.935039 21.2548 2.41016C22.9908 3.88528 23.9661 5.88598 23.9661 7.97212V9.28308ZM13.1665 19.4195V22.3927H16.2521V19.4195C16.8403 19.1309 17.3 18.6854 17.5599 18.1522C17.8198 17.619 17.8654 17.0278 17.6896 16.4703C17.5138 15.9128 17.1265 15.4202 16.5876 15.0688C16.0488 14.7174 15.3885 14.527 14.7093 14.5269C14.0301 14.527 13.3699 14.7174 12.831 15.0688C12.2922 15.4202 11.9048 15.9128 11.729 16.4703C11.5532 17.0278 11.5988 17.619 11.8587 18.1522C12.1186 18.6854 12.5783 19.1309 13.1665 19.4195ZM20.8805 9.28308V7.97212C20.8805 6.58136 20.2303 5.24756 19.073 4.26415C17.9157 3.28073 16.346 2.72826 14.7093 2.72826C13.0726 2.72826 11.503 3.28073 10.3457 4.26415C9.18834 5.24756 8.53817 6.58136 8.53817 7.97212V9.28308H20.8805Z" fill="white"/>
          </svg>
          <input type="password" name="password" placeholder="* Password" id="password">
        </div>
   
        <h3 class="fp"><a href="rest_page.html" >Forget password?</a></h3>
        <br>
        <input type="submit" value="Enter" id="btn1">
      </div>
      <br>
      <p  style="color: rgb(255, 255, 255);" class="fp">Don't have a card? <b id="fp"><a href="sing_up.html"  id="sing">Sign up</a></b></p>
    </center>
  </form>
</div>
<script src="/js/sing_page.js"></script>
</body>
</html>