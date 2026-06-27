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
        *{
    margin: 0px;
    padding: 0px;
    font-family: "Winky Sans", sans-serif;
        box-sizing: border-box;
 }
        body { text-align: center; margin-top: 50px; font-family: Arial, sans-serif; }
        a { text-decoration: none; color: white;padding: 10px 20px; font-size: 16px; margin-top: 20px;background: rgb(0, 174, 255)}
        h1 { color: #28a745; margin-bottom: 25px}
    </style>
</head>
<body>
    
    <div id="content">
        <div id="img">
            <img src="/img/sentimg.avif" alt="">
        </div>
    <h1>Message sent successfully!</h1>
<br>
    <a href="{{route('create_card.admin')}}">Return to Previous Page</a>
    </div>
</body>
</html>