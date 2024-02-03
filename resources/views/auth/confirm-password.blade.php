<!-- resources/views/auth/confirm-password.blade.php -->


@extends('auth.layouts')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Confirm Password') }}</div>

                    <div class="card-body">
                        <p>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
