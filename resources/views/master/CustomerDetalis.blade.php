@extends('master.masters')
@section('con')

<div class="container jumbotron  ">
	<div class="row">
		<h2 class="text-center">Bootstrap styling for Datatable</h2>
	</div>
    
        <div class="row">
		
            <div class="col-md-12">
                     
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="80%" >
    				<thead>
						<tr>
							<th style="width:30%">Customer_Name</th>
							<th style="width:30%">Address</th>
							<th style="width:30%">email</th>
							
							
						</tr>
					</thead>

					

					<tbody>
					@foreach($CustomerDelelis as $CustomerView)
						<tr>
							<td>{{$CustomerView->Customer_Name}}</td>
							<td>{{$CustomerView->Address}}</td>
							<td>{{$CustomerView->email}}</td>			
                           <td>
                            <button class="btn btn-danger btn-xs"><a href="{{route('editCustomerDetails',$CustomerView->id)}}">Edit<a><button>
                           
                           </td>
						   <td>
							<button class="btn btn-danger btn-xs"><a href="{{route('Delete',$CustomerView->id)}}">Delete<a><button>
                            </td>
                            
						</tr>
						
                         @endforeach 
                         
                            
                            
					</tbody>
				</table>

	
	</div>
	</div>
</div>


@endsection