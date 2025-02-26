@extends('components.layouts.auth')
@section('contents')
    <div class="app-auth-body mx-auto">
        <div class="app-auth-branding mb-4"><a class="app-logo">
            <img class="logo-icon me-2"
                    src="{{ asset('assets/images/mws.svg') }}" alt="logo"></a></div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h2 class="auth-heading text-center mb-4">Sign up to MWS</h2>

        <div class="auth-form-container text-start mx-auto">
            <form class="auth-form auth-signup-form" method="POST" action="{{ route('auth.register') }}">
                @csrf
                <div class="email mb-3">
                    <label class="sr-only" for="email">Your Name</label>
                    <input id="name" name="name" type="text"
                        class="form-control signup-name @error('name') is-invalid @enderror" placeholder="Full name">
                    @error('name')
                        <div class="message mb-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="email mb-3">
                    <label class="sr-only" for="signup-email">Your Email</label>
                    <input id="email" name="email" type="email"
                        class="form-control signup-email @error('email') is-invalid @enderror" placeholder="Email">
                    @error('email')
                        <div class="message mb-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="password mb-3">
                    <label class="sr-only" for="password">Password</label>
                    <input id="password" name="password" type="password"
                        class="form-control signup-password @error('password') is-invalid @enderror"
                        placeholder="Create a password">
                    @error('password')
                        <div class="message mb-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="password mb-3">
                    <label class="sr-only" for="confirm-password">Confirm Password</label>
                    <input id="confirm-password" name="password_confirmation" type="password"
                        class="form-control signup-password @error('password_confirmation') is-invalid @enderror"
                        placeholder="Confirm your password">
                    <div class="message mb-2 text-danger" id="password-error" style="display: none;">
                        Passwords do not match!
                    </div>
                </div>

                {{-- <div class="text-center">
                    <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto" id="submit-btn" disabled>Sign Up</button>
                </div>
                 --}}

                <div class="extra mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                        <label class="form-check-label" for="RememberPassword">
                            I agree to Portal's <a href="#" class="app-link">Terms of Service</a> and <a
                                href="#" class="app-link">Privacy Policy</a>.
                        </label>
                    </div>
                </div><!--//extra-->

                <div class="text-center">
                    <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
                </div>
            </form><!--//auth-form-->

            <div class="auth-option text-center pt-5">Already have an account? <a class="text-link "
                    style="font-size: 20px;" href="{{ route('auth.login') }} " wire:navigate>Log in</a></div>
        </div><!--//auth-form-container-->



    </div><!--//auth-body-->
@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const passwordField = document.getElementById("password");
            const confirmPasswordField = document.getElementById("confirm-password");
            const passwordError = document.getElementById("password-error");
            const submitBtn = document.getElementById("submit-btn");

            function validatePassword() {
                if (passwordField.value !== confirmPasswordField.value || passwordField.value === "") {
                    passwordError.style.display = "block";
                    submitBtn.disabled = true;
                } else {
                    passwordError.style.display = "none";
                    submitBtn.disabled = false;
                }
            }

            passwordField.addEventListener("input", validatePassword);
            confirmPasswordField.addEventListener("input", validatePassword);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                let alert = document.querySelector(".alert");
                if (alert) {
                    alert.style.transition = "opacity 0.5s";
                    alert.style.opacity = "0";
                    setTimeout(() => alert.remove(), 500);
                }
            }, 3000); // Auto-dismiss after 3 seconds
        });
    </script>
@endpush
