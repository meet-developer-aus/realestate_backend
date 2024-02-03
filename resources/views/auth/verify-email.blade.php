<!-- resources/views/auth/verify-email.blade.php -->

@extends('auth.layouts') <!-- Use your own layout file -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success" role="alert">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <p>
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                        </p>

                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Resend Verification Email') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
