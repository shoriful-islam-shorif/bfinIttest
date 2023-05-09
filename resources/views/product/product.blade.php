@extends('master.masters')
@section('con')
<div class="container jumbotron mt-5 ">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">{{ __('Create Product ') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="Product_Name	" type="text" class="form-control @error('Product_Name	') is-invalid @enderror" name="Product_Name" value="{{ old('Product_Name') }}" required autocomplete="name" autofocus>

                                @error('Product_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <input id="Category" type="text" class="form-control @error('Category') is-invalid @enderror" name="Category" value="{{ old('Category') }}" required autocomplete="Category">

                                @error('Category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="test" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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