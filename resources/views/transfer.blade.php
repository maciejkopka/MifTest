@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nowy przelew') }}</div>

                <div class="card-body">
                    <form action = "/create" method = "post" class="form-group">
                        @csrf

                        <div class="row mb-3">
                            <label for="ImieNazwisko" class="col-md-4 col-form-label text-md-end">{{ __('Imię i nazwisko') }}</label>

                            <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Imie i Nazwisko" name="ImieNazwisko">
                        </div>  
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="username" name="username">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="kwota" class="col-md-4 col-form-label text-md-end">{{ __('Kwota') }}</label>

                            <div class="col-md-6">
                            <input type="int" class="form-control" placeholder="kwota" name="kwota"><br>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Wyślij przelew') }}
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

