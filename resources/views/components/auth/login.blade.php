@extends('components.layouts.auth')
@section('contents')
    <div class="app-auth-body mx-auto">
        <div class="app-auth-branding mb-4"><a class="app-logo" ><img class="logo-icon me-2"
            src="{{ asset('assets/images/mws.svg') }}" alt="logo"></a></div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="150" height="50" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>

                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h2 class="auth-heading text-center mb-5">Log in to MWS</h2>
        <div class="auth-form-container text-start">
            <form class="auth-form login-form" method="POST" action="{{ route('auth.login') }}" >
                @csrf
                <div class="email mb-3">
                    <label class="sr-only" for="signin-email">Email</label>
                    <input id="email" name="email" type="email"
                        class="form-control signin-email @error('email') is-invalid @enderror" placeholder="Email address">
                    @error('email')
                        <div class="message mb-2 text-danger">{{ $message }}</div>
                    @enderror
                </div><!--//form-group-->
                <div class="password mb-3">
                    <label class="sr-only" for="signin-password">Password</label>
                    <input id="password" name="password" type="password"
                        class="form-control signin-password @error('password') is-invalid @enderror" placeholder="Password">
                    @error('password')
                        <div class="message mb-2 text-danger">{{ $message }}</div>
                    @enderror
                    <div class="extra mt-3 row justify-content-between">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                                <label class="form-check-label fs-6" for="RememberPassword">
                                    Remember me
                                </label>
                            </div>
                        </div><!--//col-6-->
                        <div class="col-6">
                            <div class="forgot-password text-end fs-6">
                                <a href="{{ route('auth.resetpassword') }}" wire:navigate>Forgot password?</a>
                            </div>
                        </div><!--//col-6-->
                    </div><!--//extra-->
                </div><!--//form-group-->
                <div class="text-center">
                    <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto fs-6">Log In</button>
                </div>
            </form>

            <div class="auth-option text-center pt-5 fs-6">No Account? Sign up <a class="text-link"
                    href="{{ route('auth.register') }}" wire:navigate>here</a>.</div>
        </div><!--//auth-form-container-->

    </div><!--//auth-body-->
@endsection
@push('scripts')
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
