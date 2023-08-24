<?php
// app/Http/Controllers/AuthController.php
namespace App\Http\Controllers;

use App\Models\User; // Import model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Login sukses, arahkan ke halaman yang sesuai
            return redirect()->intended('/dashboard');
        }

        // Login gagal, tampilkan pesan error
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi data pendaftaran
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        // Buat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Autentikasi pengguna setelah pendaftaran
        Auth::login($user);

        // Redirect ke halaman setelah pendaftaran sukses
        return redirect('/dashboard');
    }
}
