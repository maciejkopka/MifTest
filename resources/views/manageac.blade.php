@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Zarządzanie kontem') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md  text-xl-center">{{ __('Adres') }}</label>
                        </div>

                        <div class="row mb-3">
                            <label for="string" class="col-md-4 col-form-label text-md-end">{{ __('Ulica i nr domu') }}</label>

                            <div class="col-md-6">
                                <input id="string" type="string" class="form-control @error('string') is-invalid @enderror" name="string" value="{{ old('string') }}" required autocomplete="string">

                                @error('string')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="string" class="col-md-4 col-form-label text-md-end">{{ __('Miasto') }}</label>

                            <div class="col-md-6">
                                <input id="string" type="string" class="form-control @error('string') is-invalid @enderror" name="string" required autocomplete="new-string">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="string" class="col-md-4 col-form-label text-md-end">{{ __('Kod pocztowy') }}</label>

                            <div class="col-md-6">
                                <input id="string" type="string" class="form-control @error('string') is-invalid @enderror" name="string" required autocomplete="new-string">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="string" class="col-md-4 col-form-label text-md-end">{{ __('Adres E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="string" type="string" class="form-control @error('string') is-invalid @enderror" name="string" required autocomplete="new-string">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Aktualizuj') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
