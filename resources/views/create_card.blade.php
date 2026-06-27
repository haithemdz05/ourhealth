<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List patient</title>
    <link rel="shortcut icon" href="/img/icon_site.png">
    <link rel="stylesheet" href="/css/dashbored.css">   
       <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
<!-- ==== bootstrape link -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script> -->
</head>
<body>
    <!-- =================================  ============================================ -->
    @include('layout.section_admin')
    <!-- =====================================================  ======================================== -->
    <section class="container">
        <div class="section2">
        <h1 style="font-family:Winky Sans, sans-serif;
        font-optical-sizing: auto;
        font-weight:500;">The new patient</h1>
       
          <table>
            <thead>
                <tr>
                    <th>id patient</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>National ID card Number</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <tbody>
                         @foreach ($newpatients as $newpatient)
                        <tr>
                            <td>{{$newpatient->id_patient}}</td>
                            <td>{{$newpatient->first_name_p}}</td>
                            <td>{{$newpatient->last_name_p}}</td>
                            <td>{{$newpatient->card_nbr}}</td>
                            <td>{{$newpatient->phone_p}}</td>
                            <td>{{$newpatient->email_p}}</td>
                            <td><a href="{{route("send_email.admin", [$newpatient->email_p, $newpatient->first_name_p])}}"><button type="button" class="btn btn-success">Create</button></a></td>
                        </tr>
                          @endforeach
                      </tbody>
          </table>
          <br>
          <h1>Card creation requests</h1>
          <table>
            <thead>
                <tr>
                    <th>id patient</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Note</th>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>exemple@gmail.com</td>
                            <td>Lorem ipsum dolor sit amet consecte, veritatis perspiciatis dolores.</td>
                            <td><button type="button" class="btn btn-success">Create</button></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </section>
</div>
    <script src="/js/toggleButton.js"></script>
    </body>
    </html>