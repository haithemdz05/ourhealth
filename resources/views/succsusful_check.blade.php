<!-- filepath: c:\xampp\htdocs\Proget_fin_etude\resources\views\succsusful_check.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Saved Successfully</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:wght@500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap (اختياري لجمالية الزر) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Winky Sans", Arial, sans-serif;
        }
        .success-container {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            padding: 40px 30px 30px 30px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .success-icon {
            font-size: 3.5rem;
            color: #a72e28;
            margin-bottom: 18px;
        }
        h1 {
            color: #25ce08;
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
            background: #169cda;
            border-radius: 8px;
            transition: background 0.2s;
            display: inline-block;
            margin-top: 10px;
        }
        .btn-back:hover {
            background: #059fe7;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon"><svg xmlns="http://www.w3.org/2000/svg" width="70px" hiegth="20" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#0593ff" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg></div>
        <h1>Check Saved Successfully!</h1>
        <p>
            The patient's check has been saved.<br>
            Thank you for your work.<br>
            You can return to the patient list or continue your tasks.
        </p>
        <a href="{{ route('new_patient_d.patient', $id_doctor) }}" class="btn-back">Back to Patient List</a>
    </div>
</body>
</html>