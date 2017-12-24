@extends('layouts.nav',['thisis' => "endpoint"]) @section('content')
<link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
<div class="container" >
	<div class="">
		<div class="col-md-12"></div>
		@include('templates/feedback')
		<div class="card">
		  <div class="card-header">
		   <h2>Detail Endpoint</h2>
		  </div>
		  <div class="card-body">
		  <div>
										<h3>Endpoint </h3>
                		<input class="form-control" type="text" value="GET {{url("api/$result->url")}}" readonly> 
                	</div>

                	{{--  <div>
                		<h3>Request Parameter</h3>
                		<div>
                			<table class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%" >
                			<thead>
                				<tr>
                				
							      
							      <th scope="col">Header Field</th>
							      <th scope="col">Value</th>
							      
							   
                			</tr>
                			</thead>
                			
                			<tbody>
						    <tr>
						      
						      <td>Authorization</td>
						      <td>Required. A valid access token from the Spotify Accounts service: see the Web API Authorization Guide for details.</td>
						      
						    </tr>
                		</table>
                		<div>
                			<table class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%" >
                			<thead>
                				<tr>
                				
							      
							      <th scope="col">Path parameter</th>
							      <th scope="col">Value</th>
							      
							   
                			</tr>
                			</thead>
                			
                			<tbody>
						    <tr>
						      
						      <td>id</td>
						      <td>jsfgbshfbgsb vb</td>
						      
						    </tr>
                		</table>
                		</div>
                		<div>
                			<table class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%" >
                			<thead>
                				<tr>
                				
							      
							      <th scope="col">Query Parameter </th>
							      <th scope="col">Value</th>
							      
							   
                			</tr>
                			</thead>
                			
                			<tbody>
						    <tr>
						      
						      <td>market</td>
						      <td>Required. A valid access token from the Spotify Accounts service: see the Web API Authorization Guide for details.</td>
						      
						    </tr>
                		</table>
                		</div>
                		</div>
                		
                	</div>

                	<div>
                		<h3>Response Format</h3>
                		<p>
                			On success, the HTTP status code in the response header is 200 OK and the response body contains an album object in JSON format. On error, the header status code is an error code and the response body contains an error object.
                		</p>
                	</div>
                	<div>  --}}
						<div class="card">
						  <div class="card-header">
						    <pre style="color:#fec503;">$ curl -X "{{url("api/$result->url")}}"</pre>
						  </div>
						  <div class="card-block">
						    <blockquote class="card-blockquote">
										<pre id="result" style="margin-left: 20px"></pre>
						     
						    </blockquote>
							</div>
							
						</div>
						<br>
						<a target="_blank" href="{{url("api/$result->url")}}" class="btn btn-primary" role="button">
							Coba !
						</a>
                	</div>
                	<div>
                		<div class="card-body">
                			<h3>Keterangan setiap objek</h3>
                		
 						<table class="table table-responsive-sm table-striped table-bordered" cellspacing="0" width="100%" >
                			<thead class="thead-dark">
                				<tr>
                				
							      
							      <th scope="col">Objek</th>
							      <th scope="col">Tipe data</th>
							      <th scope="col">Deskripsi</th>

							   
                			</tr>
                			</thead>
                			
                			<tbody>
											@foreach($sql as $desc)
											<tr>
												
												<td>{{$desc->keyss}}</td>
												<td>{{$desc->value_type}}</td>
												<td>{{$desc->value_desc}}</td>
												
											</tr>
											@endforeach
                		</table>
                	</div>
										
								</div>
           
             
		 
		</div>
	</div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {

			$.getJSON('{{url("api/$result->url")}}', function(data) {
				//alert(vkbeautify.json(data,4));
				$("#result").append(JSON.stringify(data,null,'    '));
			});

});
</script>		

        <!-- Modal -->
        
    





@endsection
