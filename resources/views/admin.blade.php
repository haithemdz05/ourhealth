<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Authentication</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    <div class="auth-container">
        <div class="auth-box">
            <h1>Admin Login</h1>
            <form action="{{route('singin.admin')}}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Email</label>
                    <input type="email" id="username" name="email" placeholder="* Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="* Enter your password" required>
                </div>
                <button type="submit" class="auth-button">Login</button>
            </form>
        </div>
    </div>
</body>
</html>