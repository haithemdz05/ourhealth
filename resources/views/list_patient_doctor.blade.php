{{-- @php use Carbon\Carbon; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor's Patient List</title>
  <link rel="shortcut icon" href="/img/icon_site.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/list_patient.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
<body>
  <style>
    input[type="submit"] ,button{
      width: 150px;
      height: 40px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background: #169cda;
    }
  </style>

  <div class="container">
    <div id="titre">
      <div>
        <img src="img43.png" alt="">
        <h1>Patient List</h1>
      </div>
      </div>
    <form class="d-flex" role="search" method="GET" action=""> 
        <input class="form-control me-2" type="search" name="search" placeholder="Find a patient" aria-label="Search" value="{{ request('search') }}">
        <button class="btn btn-outline-success" type="submit" onclick="search()">Search</button>
      </form>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Condition</th>
          <th>Last visit date</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
  

   @foreach ($patients as $patient)
        <tr>
          {{-- @dd($patient->password_p); --}}
          {{-- <td>{{$patient->id_patient}}</td>
          <td>{{$patient->first_name_p}}</td>
          <td>{{$patient->last_name_p}}</td>
          <td>{{\Carbon\Carbon::parse($patient->date_birth_p)->age}}</td>
          <td>{{$patient->gender}}</td>
          <td>{{$patient->condition_p}}</td>
          <td>{{$patient->last_visit_date}}</td>
            <form action="{{ route('sing_page_patient.patient') }}" method="POST" style="display: flex"  >
            @csrf
            <input type="text" value="{{$patient->id_doctor}}" name="id_doctor" hidden>
            <input type="text" value="{{$patient->card_nbr}}" name="password" hidden>
          <td style="width:400px;height:60px"> <input type="submit" style="color: white" value="move to medical file">
             </form>
          <form id="remove-form-{{ $patient->id_patient }}" action="{{ route('remove_patient.list_patient', [$patient->id_patient,$patient->id_doctor]) }}" method="GET" style="display:inline;">
    <button type="button" class="btn btn-danger btn-sm" style="background: red"
        onclick="confirmRemove({{ $patient->id_patient }})">
        Remove
    </button>
</form>    
       </tr>
          @endforeach
      </tbody>
    </table>
  </div> --}}
  {{-- <script>
function confirmRemove(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you really want to remove this patient from your list?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, remove!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('remove-form-' + id).submit();
        }
    })
}
</script> --}}
 {{-- </body>
 </html>   --}}
@php use Carbon\Carbon; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor's Patient List</title>
  <link rel="shortcut icon" href="/img/icon_site.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/list_patient.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <div class="container">
    <div id="titre">
      <div style="display:flex; align-items:center; gap:12px">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
          <circle cx="9" cy="7" r="4"></circle>
          <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
          <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
        </svg>
        <h1>Patient List</h1>
      </div>
    </div>

    <form class="d-flex" role="search" method="GET" action="">
      <input class="form-control me-2" type="search" name="search" placeholder="Search by name, ID or condition..." aria-label="Search" value="{{ request('search') }}">
      <button class="btn btn-outline-success" type="submit">🔍 Search</button>
    </form>

    @if($patients->count() > 0)
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Condition</th>
          <th>Last Visit</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($patients as $patient)
        <tr>
          <td>#{{ $patient->id_patient }}</td>
          <td>{{ $patient->first_name_p }}</td>
          <td>{{ $patient->last_name_p }}</td>
          <td>{{ \Carbon\Carbon::parse($patient->date_birth_p)->age }} years</td>
          <td>{{ ucfirst($patient->gender ?? 'N/A') }}</td>
          <td>{{ $patient->condition_p ?? 'Stable' }}</td>
          <td>{{ $patient->last_visit_date ? \Carbon\Carbon::parse($patient->last_visit_date)->format('d M Y') : 'Never' }}</td>
          <td style="width: auto;">
            <form action="{{ route('sing_page_patient.patient') }}" method="POST" style="display:inline">
              @csrf
              <input type="text" value="{{ $patient->id_doctor }}" name="id_doctor" hidden>
              <input type="text" value="{{ $patient->card_nbr }}" name="password" hidden>
              <input type="submit" value="📋 Medical File">
            </form>
            <form id="remove-form-{{ $patient->id_patient }}" action="{{ route('remove_patient.list_patient', [$patient->id_patient, $patient->id_doctor]) }}" method="GET" style="display:inline;">
              <button type="button" class="btn btn-danger" onclick="confirmRemove({{ $patient->id_patient }})">🗑 Remove</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <div style="text-align:center; padding:40px; background:white; border-radius:14px; box-shadow:0 12px 32px rgba(3,16,46,0.08)">
      <p style="color:#6b7280; font-size:1.1rem">No patients found</p>
    </div>
    @endif
  </div>

  <script>
    function confirmRemove(id) {
      Swal.fire({
        title: 'Remove Patient?',
        text: "This patient will be removed from your list",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Yes, remove!',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById('remove-form-' + id).submit();
        }
      });
    }
  </script>
</body>
</html>