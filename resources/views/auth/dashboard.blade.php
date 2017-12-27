
@extends('layouts.nav',['thisis' => "usermgmt"]) @section('content')

<div class="container" >
	<div class="">
		<div class="col-md-12"></div>
		@include('templates/feedback')
		<div class="card">
		  <div class="card-header">
		   <h2> User Management </h2>
		  </div>
		  <div class="card-body">
		    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                <h3 style="color:#fed136;">Daftar User
                    @auth
                    <a href="{{url('/usermgmt/add')}}">
                        <img class="float-right" title="Tambah" src="{{ asset('img/glyphicons-433-plus.png')}}">
                    </a>
                    @endauth
                </h3>

               <table  class="table table-responsive table-striped table-bordered " cellspacing="0" width="100%"  id="tb_user">
                            <thead class="thead-dark">
                                <tr class="info ">
                                    <th>id</th>
                                    <th>email</th>
                                    <th>password</th>
                                    @auth
                                    <th >Aksi</th>
                                    @endauth
                                </tr>
                            </thead>
                        
                            <tbody class="tableku">
                          
                            <tr>

                           <th scope="row">1</th>
                                <td >admin@admin.crom</td>
                                <td>123145214</td>
                              
                                <td>
                                    
                              
                                   
                                        <span class="btn-group pull-right" style="margin-top: 5px">
                                            <a href="{{url('/usermgmt/edit')}}">
                                                <button class="btn btn-warning btn-xs" title="ubah">
                                                    <i class="fa fa-pencil-square-o fa-lg" style="text-decoration: none; color: black;"></i>
                                                </button>
                                            </a>
                                            <a href="{{url('/usermgmt/delete')}}">
                                                <button class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-o fa-lg" style="color: black;" ></i>
                                                </button>
                                            </a>
                                        </span>
                                </td>
                               
                            </tr>
                            
                            </tbody>
                        </table>   
                    
             
		 
		  </div>
	   </div>
    </div>
  </div>
		
     





@endsection
