@extends('master.masters')
@section('con')
<div class="container jumbotron mt-5 ">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">{{ __('Create Customer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createInvice') }}">
                        @csrf
                    <div class="border border-success p-2 mb-2 border-opacity-75">
                            <div class="row mb-3">
                                <label name="Customer" for="Customer" class="col-md-4 col-form-label text-md-end">{{ __('Customer Name') }}</label>

                                <div class="col-md-6">

                                <select name="Customer" id="" class="form-select" aria-label="Default select example"">
                                  <option value="">Customer Name</option>
                                  @foreach ($cusInvoices as $Customer )
                                      
                                  <option value="{{ $Customer->id }}">{{$Customer->Customer_Name}}</option>
                                  @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Currency') }}</label>

                                <div class="col-md-6">
                                <select name="Currency"  class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="105">Doller</option>
                                    <option value="110">Euro</option>
                                    <option value="1">Tk</option>
                                </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('date') }}</label>

                                    <div class="col-md-6">
                                                        <div class="form-group"> <!-- Date input -->
                                    <label class="control-label" for="date">Date</label>
                                    <input class="form-control" id="date" name="delevary_time" placeholder="MM/DD/YYY" type="date"/>
                                </div>
                                </div>
                            </div>
                        
                        </div>
                        
                        <div class="border border-success p-2 mb-2 border-opacity-75">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 text-center m-b-25">Seles Invoice Items</h2>
                                <div class="table-responsive  m-b-40">
                                    <table class="table table-borderless  table-earning">
                                        <thead>
                                            <tr>
                                                <th>Item Code</th>
                                                <th>Item Discription</th>
                                                <th>quantity</th>
                                                <th class="text-right">unit price</th>
                                                <th class="text-right">Discrunt %</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input class="form-control" name="item_code" placeholder="search" type="text">
                                                </td>
                                                <td><select name="item_description" class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    @foreach ($proInvoices as $product )
                                      
                                                        <option value="{{ $product->id }}">{{$product->description}}</option>
                                                        @endforeach
                                                </select></td>
                                                <td><input class="form-control" name="quantity" placeholder="" type="text"></td>
                                                <td class="text-right"><input class="form-control" name="unite_price" placeholder="0.0" type="text"></td>
                                                <td class="text-right"><input class="form-control" name="discount" placeholder="0" type="text">1</td>
                                                <td class="text-right" name="total_price"></td>
                                            </tr>
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
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