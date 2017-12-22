@extends('layouts.nav',['thisis' => ""]) @section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-lg-offset-2">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Tambah endpoint</h2>
                </div>


                <div class="card-body">
                	<div>
                		<h3>Endpoint</h3>
                		<input class="form-control" type="text" placeholder="GET https://api.spotify.com/v1/albums/{id}" readonly>
                	</div>

                	<div>
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
                	<div>
						<div class="card">
						  <div class="card-header">
						    Quote
						  </div>
						  <div class="card-block">
						    <blockquote class="card-blockquote">
						      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
						     
						    </blockquote>
						  </div>
						</div>
                	</div>
                	<div>
                		<div>
                			<h3>Album object full</h3>
                		</div>
 						<table class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%" >
                			<thead>
                				<tr>
                				
							      
							      <th scope="col">Key</th>
							      <th scope="col">Value type</th>
							      <th scope="col">Value Description</th>
							      
							   
                			</tr>
                			</thead>
                			
                			<tbody>
						    <tr>
						      
						      <td>Authorization</td>
						      <td>Required. A valid access token from the Spotify Accounts service: see the Web API Authorization Guide for details.</td>
						      <td>adfagadga</td>
						      
						    </tr>
                		</table>
                	</div>


                	

                    
                        
                        
                     
                </div>
            </div>
        </div>
    </div>
</div>