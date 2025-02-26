<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('components.auth.login');
    }

    // Handle login logic
    public function login(Request $request)
    {
        // Validate input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Check if "Remember Me" is checked

        if (Auth::attempt($credentials, $remember)) {
            // Regenerate session to prevent session fixation attacks
            $request->session()->regenerate();

            // Redirect to the intended page or default dashboard
            return redirect()->intended('/clothing-items')->with('status', 'Login successful!');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->withInput();
    }

    // Logout function
    public function logout(Request $request)
{
    // Logout the user
    Auth::logout();

    // Invalidate the session
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect to the login route (Ensure this route exists in web.php)
    return redirect()->route('auth.login');
}
}