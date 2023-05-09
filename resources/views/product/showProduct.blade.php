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
							<th style="width:30%">Product_Name</th>
							<th style="width:30%">Category</th>
							<th style="width:30%">description</th>
							
							
						</tr>
					</thead>

					

					<tbody>
					@foreach($productDelelis as $ProductView)
						<tr>
							<td>{{$ProductView->Product_Name}}</td>
							<td>{{$ProductView->Category}}</td>
							<td>{{$ProductView->description}}</td>			
                           <td>
                            <button class="btn btn-danger btn-xs"><a href="{{ route ('Editproduct',$ProductView->id) }}">Edit<a><button>
                           
                           </td>
						   <td>
							<button class="btn btn-danger btn-xs"><a href="{{ route ('Delete',$ProductView->id) }}">Delete<a><button>
                            </td>
                            
						</tr>
						
                         @endforeach 
                         
                            
                            
					</tbody>
				</table>

	
	</div>
	</div>
</div>


@endsection