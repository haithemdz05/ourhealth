<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="/img/icon_site.png">
    <link rel="stylesheet" href="/css/dashbored.css">
       <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <!-- ==== bootstrape link -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script> -->
</head>
<body>
    @include('layout.section_admin')
    <!-- =====================================================  ======================================== -->
    <section class="container" class="left-bar">
        <div class="section1">
            <div class="card1">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"><path fill="currentColor" d="M11.5 14c4.14 0 7.5 1.57 7.5 3.5V20H4v-2.5c0-1.93 3.36-3.5 7.5-3.5m6.5 3.5c0-1.38-2.91-2.5-6.5-2.5S5 16.12 5 17.5V19h13zM11.5 5A3.5 3.5 0 0 1 15 8.5a3.5 3.5 0 0 1-3.5 3.5A3.5 3.5 0 0 1 8 8.5A3.5 3.5 0 0 1 11.5 5m0 1A2.5 2.5 0 0 0 9 8.5a2.5 2.5 0 0 0 2.5 2.5A2.5 2.5 0 0 0 14 8.5A2.5 2.5 0 0 0 11.5 6"/></svg>
                <h1>Welcome Admin . We are happy to have you here !!!</h1>
                <h2 style="font-weight: 400;font-size: 20px;">Here you can monitor and manage users,health data and create health cart to ensure smooth and secure system operation.</h2>
            </div>
            <div class="card2">
                <div>
                <img src="/img/patient-icon.png" alt="">
                 <h1>nomber patinet</h1>
                 <h2>34444</h2>
                </div>
                <div>
                 <img src="/img/doctor-icon.jpg" alt="">
                  <h1>nomber doctor</h1>
                  <h2>99</h2>
                </div>
                <div>
                  <img src="/img/nurse-icon.jpg" alt="">
                   <h1>nomber nurse</h1>
                   <h2>100</h2>
                </div>
            </div>
        </div>
    </section>
  

 <script>
    document.getElementById("toggleButton").addEventListener("click", function () {
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
 </script>
</body>
</html>