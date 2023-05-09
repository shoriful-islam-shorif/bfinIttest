@extends('master.masters')
@section('con')

<div class="container jumbotron  ">
	<div class="row">
		<h2 class="text-center">Bootstrap styling for Datatable</h2>
	</div>
    
        <div class="row">
		
            <div class="col-md-12">
                <div class="card-body">
                    <form method="POST" action="{{route('update',$editCustomer->id)}}">
                                @csrf
                                <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" name="Customer_Name" value="{{$editCustomer->Customer_Name}}"
                                            
                                             autofocus>

                                    
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" name="Address" value="{{$editCustomer->Address}}"
                                            
                                             autofocus>

                                    
                                    </div>
                                </div>
 <input type="hidden" id="custId" name="id">
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" name="email" value="{{$editCustomer->email}}"
                                                
                                                 autofocus>

                                        
                                        </div>
                                    </div>

                            

                           

                            <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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