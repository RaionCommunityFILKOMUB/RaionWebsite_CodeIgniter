@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Login Member Raion') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.loginPolos.submit') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('NIM') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control" name="number" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        background-color: #0D0E5E;
    }
    .card-header {
        background-color: #EF9A04;
        color: white;
    }
    .btn-warning {
        background-color: #0D0E5E;
        color: white;
    }


</style>
@endsection
