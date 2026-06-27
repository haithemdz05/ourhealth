<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
          * {
            margin: 0px;
            padding: 0px;
            font-family: "Winky Sans", Arial, sans-serif;
            box-sizing: border-box;
        }
        body {
            background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%);
            text-align: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #content {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            padding: 40px 30px 30px 30px;
            max-width: 400px;
            width: 100%;
        }
        #img img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin-bottom: 18px;
            border: 2px solid #28a745;
            background: #f8f8f8;
        }
        h1 {
            color: #28a745;
            margin-bottom: 18px;
            font-size: 2rem;
            font-weight: bold;
        }
        p {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        .btn-back {
            text-decoration: none;
            color: #fff;
            padding: 10px 28px;
            font-size: 16px;
            background: #176488;
            border-radius: 8px;
            transition: background 0.2s;
            display: inline-block;
            margin-top: 10px;
        }
        .btn-back:hover {
            background: #14506b;
        }
        .success-icon {
            font-size: 3rem;
            color: #28a745;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    
   <div id="content">
        <div class="success-icon">✔️</div>
        <div id="img">
            <img src="/img/sentimg.avif" alt="Success">
        </div>
        <h1>Message Sent Successfully!</h1>
        <p>
           The health card is delivered to the patient by the Health Directorate. <br>
           The card code is sent to the patient via the email address he/she is registered with.
        </p>
 <a href="{{route('home')}}">Back to Home Page</a>
    </div>
</body>
</html>
   
