<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StuntCare</title>
</head>
<body class="bg-gray-100">
    <div style="background-color: #f2f5f9; margin: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        <div style="background-color: #ffffff; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 400px; padding: 30px; text-align: center; position: relative;">
            <h2 style="font-size: 24px; margin-bottom: 20px; color: #333333;">Login to StuntCare</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div style="text-align: left; margin-bottom: 15px;">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" style="border: 1px solid #e0e0e0; padding: 10px; border-radius: 4px; width: 100%;" required autofocus>
                </div>
                <div style="text-align: left; margin-bottom: 15px;">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" style="border: 1px solid #e0e0e0; padding: 10px; border-radius: 4px; width: 100%;" required>
                </div>
                <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 4px; border: none; cursor: pointer;">Login</button>
            </form>
            <div style="margin-top: 15px; color: #777777;">
                Don't have an account? <a href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </div>
</body>
</html>
