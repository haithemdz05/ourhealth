<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update information</title>
    <link rel="stylesheet" href="/css/update_info.css">
    <link rel="shortcut icon" href="/img/icon27.png">
       <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    {{-- @dd($patient) --}}
    <div id="content">
        <div id="section1">
        <form id="form1" action="{{route('information.update',$patient->id_patient)}}" method="POST" enctype="multipart/form-data">
           @csrf
            @method('PUT')
                 <img src="{{ $patient->image_p ? asset('storage/' . $patient->image_p) : asset('storage/patients/img_user.jpg') }}"  />
            <label for="img" style="border: 1px solid;padding:7px;background:rgb(8, 104, 126);margin-left:120px;border-radius:9px; cursor: pointer;">Update profile photo</label>
            <input type="file" id="img" name="image" value="{{$patient->image_p}}" hidden accept="image/*">
            <div style="width: 36px; height: 36px; position: relative">
              <div style="width: 27.42px; height: 27px; left: 0px; top: 9px; position: absolute; background: white"></div>
              <div style="width: 22.29px; height: 21.80px; left: 13.71px; top: 0px; position: absolute; background: white"></div>
            </div>
            <h1>{{$patient->first_name_p}} {{$patient->last_name_p}}</h1>
            <p>Blood : {{$patient->blood_p}}</p>
           <div id="left">
            <label for="">First name</label><br>
            <input type="text" name="first_name" value="{{ old('first_name', $patient->first_name_p) }}" ><br>
            <label for="">Date of Birth</label><br>
            <input type="text" name="date_birth" value="{{$patient->date_birth_p}}"  >
            <br>
            <label for="">blood</label><br>
            <input type="text" name="blood" value="{{$patient->blood_p}}" ><br>
          <label for="">Phone number:</label><br>
          <input type="text" name="phone" value="{{$patient->phone_p}}" ><br>
          <label for="">Email:</label><br>
          <input type="email" name="email" value="{{$patient->email_p}}"><br>
        </div>
        <div id="right">
          <label for="">Last name</label><br>
          <input type="text" name="last_name" value="{{$patient->last_name_p}}" ><br>
          <label for="">Address</label><br>
          <input type="text" name="address" value="{{$patient->address_p}}" ><br>
          <label for="">Secret number</label><br>
          <input type="text" value="{{$patient->password_p}}" readonly><br> 
          <label for="">City</label><br>
          <input type="text" name="city" value="{{$patient->city_p}}"><br>
          <label for="">Region</label><br>
          <input type="text" name="region" value="{{$patient->region_p}}"><br>
        </div>
        <br>
        <input type="submit" value="update">
      </form>
      </div>
    </div>
     
</body>
</html>