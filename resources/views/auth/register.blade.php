<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - StuntCare</title>
</head>
<body class="bg-gray-100">
    <div style="background-color: #f2f5f9; margin: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        <div style="background-color: #ffffff; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 400px; padding: 30px; text-align: center; position: relative;">
            <h2 style="font-size: 24px; margin-bottom: 20px; color: #333333;">Register to StuntCare</h2>
            <form method="POST" action="{{ route('register') }}" style="text-align: left;">
                @csrf
                <label for="name">Name</label>
                <input id="name" type="text" name="name" style="border: 1px solid #e0e0e0; padding: 10px; border-radius: 4px; width: 100%;" required autofocus>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" style="border: 1px solid #e0e0e0; padding: 10px; border-radius: 4px; width: 100%;" required>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" style="border: 1px solid #e0e0e0; padding: 10px; border-radius: 4px; width: 100%;" required>
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" style="border: 1px solid #e0e0e0; padding: 10px; border-radius: 4px; width: 100%;" required>
                <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 4px; border: none; cursor: pointer;">Daftar</button>
            </form>
            <p style="margin-top: 15px; color: #777777;">
                Sudah punya akun? <a href="{{ route('login') }}">Login disini</a>
            </p>
        </div>
    </div>
</body>
</html>
