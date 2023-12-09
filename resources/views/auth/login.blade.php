@extends('layouts.app')

@section('content')
    <div class="container tw-mt-[112px]">
        <div class="row justify-content-sm-center ">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="d-flex justify-content-center mb-4">
                    <img src="{{ asset('logo.svg') }}" alt="logo" width="100">
                </div>
                <div class="card">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center">Login</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="col-md-4 col-form-label"
                                    style="white-space: nowrap">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="w-100">
                                    <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                </div>
                                <div class="position-relative ">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    <div class="btn-showPassword border border-0 position-absolute top-50 translate-middle "
                                        style="right: -5px">
                                        <i id="eyeIcon" class="fas fa-eye"></i>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 d-flex align-items-center ">
                                <div class="form-check flex-grow-1">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" style="white-space: nowrap" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link ms-2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                            <button type="submit"
                                class="tw-w-full text-center tw-bg-[#45BA97] tw-text-white tw-py-2 tw-rounded-md">
                                Login
                            </button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @push('styles')
        <style>
            /* button,
                                                                                            [type='button'],
                                                                                            [type='reset'],
                                                                                            [type='submit'] {
                                                                                                -webkit-appearance: button;
                                                                                                background-color: none !important;
                                                                                                background-image: none;
                                                                                            } */
        </style>
    @endpush
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.btn-showPassword').on('click', function() {
                    const passwordField = $('#password');
                    const fieldType = passwordField.attr('type') === 'password' ? 'text' : 'password';
                    passwordField.attr('type', fieldType);

                    // Toggle FontAwesome classes
                    if ($('#eyeIcon').hasClass('fa-eye')) {
                        $('#eyeIcon').removeClass('fa-eye').addClass('fa-eye-slash');
                    } else {
                        $('#eyeIcon').removeClass('fa-eye-slash').addClass('fa-eye');
                    }
                });
            });
        </script>
    @endpush
@endsection
