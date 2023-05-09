@extends('master.masters')
@section('con')
<div class="container jumbotron mt-5 ">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">{{ __('Create Customer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createCustomer') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="Customer_Name" class="col-md-4 col-form-label text-md-end">{{ __('Customer Name') }}</label>

                            <div class="col-md-6">
                                <input id="Customer_Name" type="text" class="form-control @error('Customer_Name') is-invalid @enderror" name="Customer_Name" value="{{ old('Customer_Name') }}" required autocomplete="name" autofocus>

                                @error('Customer_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="" class="form-control @error('address') is-invalid @enderror" name="Address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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