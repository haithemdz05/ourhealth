<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nurse_page</title>
    <link rel="stylesheet" href="/css/nurse.css">
    <link rel="shortcut icon" href="/img/icon_site.png">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  </head>
<body>
    <section id="hero">
        <nav class="navigation">
          <a href="home.html"><img class="logo" src="/img/logo_home.png" /></a> 
          <h1>Welcome to our health page</h1>
          </nav>
     </section>
     <section class="section1">
        <div class="card">
            <img src="/img/img60.jpg" alt="">
            <div  id="formule">
                    <form action="{{route('file_medical.nurse',$nurse->id_nurse)}}" method="POST">
                        @csrf
                        <label for="">The card number of patient :</label><br>
                        <input type="text" name="card_number" required>
                        <input type="submit" value="validation">
                    </form>
            </div>

        </div>
     </section>

</body>
</html>