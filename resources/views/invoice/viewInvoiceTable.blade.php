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
							<th style="width:5%">Invoice</th>
							<th style="width:5%">Ref</th>
							<th style="width:15%">Customer</th>
							<th style="width:15%">Email</th>
							<th style="width:5%">cust Order Ref</th>
							<th style="width:10%">Order Date</th>
                                <th style="width:10%">Required By</th>
                                 <th style="width:15%">Delevary To</th>
								 <th style="width:5%">Order total</th>
								 <th style="width:5%">Due</th>
								 <th style="width:5%">carrency</th>
						</tr>
					</thead>

					

					<tbody>
						@foreach($invoicesView as $invoiceView)
						<tr>
							<td>{{$invoiceView->item_code}}</td>
							<td>auto</td>
							<td>{{$invoiceView->Customer_Name}}</td>
							<td>{{$invoiceView->email}}</td>
							<td></td>
							<td>{{$invoiceView->delevary_time}}</td>
							<td>{{$invoiceView->delevary_time}}</td>
							<td>{{$invoiceView->Customer_Name}}</td>
							<td>{{$invoiceView->total_price}}</td>
              <td>{{$invoiceView->total_price}}</td>
           
              <td>
                            <button class="btn btn-danger btn-xs"><a href="{{ route ('showInvoice', $invoiceView) }}">view<a><button>
                           
                           </td
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						
                            
                          @endforeach
                            
                            
                            
					</tbody>
				</table>

	
	</div>
	</div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Tiger Nixon">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="System Architect">
        </div>
        <div class="form-group">
        
        
      <input class="form-control " type="text" placeholder="Edinburgh">
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 

@endsection