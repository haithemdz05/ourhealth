<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination</title>
    <link rel="stylesheet" href="/css/vaccination.css">
    <link rel="shortcut icon" href="/img/icon_site.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="content">
        <section class="section1">
             <img src="icon7.png" alt="">
             <h1>Vaccination</h1>
        </section>
        <hr>
        <section class="section2">
            <h1>All vaccination</h1>
            <div>
                <table class="table-m">
                    <thead id="current">
                    <th>Vacccination Name</th>
                    <th>Dose number</th>
                    <th>number of doses</th>
                    <th>date</th>
                        </thead>
                        @foreach ($all_vaccins as $vaccine)
                              <tr>
                      <td>{{$vaccine->name_vacc}}</td>
                      <td>{{$vaccine->num_doses}}</td>
                      <td>{{$vaccine->nbr_duse}}</td>
                      <td>{{$vaccine->date_vacc}}</td>
                          </tr>
                        @endforeach
                      
                   </table>
            </div>
            </section>
            <hr>
            <section class="section2">
                <h1>Current vaccination</h1>
                <div>
                    <form action="/submit_vaccination" method="POST" class="vaccination-form">
                        <div class="form-group">
                            <label for="vaccineName">Vaccination Name:</label>
                            <input type="text" id="vaccineName" name="vaccineName" placeholder="Enter vaccination name" required>
                        </div>
                        <div class="form-group">
                            <label for="vaccineDate">number of dose:</label>
                            <input type="text" id="vaccineDate" name="vaccineDate" required>
                        </div>
                        <div class="form-group">
                            <label for="vaccineDate">Date:</label>
                            <input type="date" id="vaccineDate" name="vaccineDate" required>
                        </div>
                        <div class="form-group">
                            <label for="vaccineNotes">Notes:</label>
                            <textarea id="vaccineNotes" name="vaccineNotes" placeholder="Enter any additional notes"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="vaccineNotes">Next appointment:</label>
                            <input type="date" id="nextAppointment" name="nextAppointment" required>
                            <!-- <textarea id="vaccineNotes" name="vaccineNotes" placeholder="Enter any additional notes"></textarea> -->
                        </div>
                        <button type="submit" class="btn-submit">Submit</button>
                    </form>
                </div>
            </section>
</body>
</html>