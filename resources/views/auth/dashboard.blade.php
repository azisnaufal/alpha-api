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
            @if(Auth::user()->level==1)
                <h3 style="color:#fed136;">Daftar User
                    
                     <a href="{{route('adduser')}}">
                        <button class="btn btn-secondary btn-xs float-right" style="color: white; margin-right: 20px; background-color: #121d33 !important;">
                            Tambah
                             <i class="fa fa-plus" title="tambah" aria-hidden="true" style="color: white;"></i>
                        </button>
                    </a>
                    
                </h3>

               <table  class="table table-responsive table-striped table-bordered text-center" cellspacing="0" width="100%"  id="tb_user">
                            <thead class="thead-dark">
                                <tr class="info ">
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                            </thead>
                        
                            <tbody class="tableku">
                                    @foreach($result as $data)
                            <tr>
                            
                           <th scope="row">{{ $data->id }}</th>
                                <td >{{$data->username}}</td> 
                                   
                                <td>
                                    
                              
                                   
                                        <span class="btn-group pull-right" style="margin-top: 5px">
                                            <a href="{{url("/usermgmt/edit/$data->id")}}">
                                                <button class="btn btn-warning btn-xs" title="ubah">
                                                    <i class="fa fa-pencil-square-o fa-lg" style="text-decoration: none; color: black;"></i>
                                                </button>
                                            </a>
                                            <a href="{{url("/usermgmt/delete/$data->id")}}">
                                                <button class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-o fa-lg" style="color: black;" ></i>
                                                </button>
                                            </a>
                                            @if($data->level==2)
                                            <a href="{{url("/usermgmt/naiklevel/$data->id")}}">
                                                <button class="btn btn-warning btn-xs">
                                                    <i class="fa fa-upload fa-lg" style="color: black;" ></i>
                                                </button>
                                            </a>
                                            @else
                                            <a href="{{url("/usermgmt/turunlevel/$data->id")}}">
                                                <button class="btn btn-warning btn-xs">
                                                    <i class="fa fa-download fa-lg" style="color: black;" ></i>
                                                </button>
                                            </a>
                                            @endif
                                        </span>
                                </td>
                                
                               
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
            
            @endif
            @if(Auth::user()->level==2)
            <h2> Ubah username dan password anda</h2>
            <form method="post" id="loginform" class="form-horizontal col-lg-12" role="form" action="{{ empty($result) ? url('usermgmt/add') : url("usermgmt/edit/$result->id")}}"> 
                {{ csrf_field() }}
                @if (!empty($result)) 
                        {{ method_field('patch') }} 
                @endif
                <div class="form-group">
                    <label for="contain">Username</label> <label style="color:red;">*</label>
                    <input id="username" name="username" required class="form-control" type="text" placeholder="Masukan username anda"
                        value="" />
                </div>
                <div class="form-group">
                    <label for="contain">Password</label> <label style="color:red;">*</label>
                    <input name="password" id="password" class="form-control" type="password" placeholder="Masukan password anda" value=""/>
                    @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>Password harus lebih dari 6 karakter dan persis dengan konfirmasi password anda</strong>
                            </span>
                        @endif
                </div>
               <div class="form-group">
                    <label for="contain">Konfirmasi password</label><label style="color:red;">*</label>
                    <input name="password_confirmation" id="password-confirm" class="form-control" type="password" placeholder="Konfirmasi password anda" value=""/>
                </div>
               
                
                
                <div class="modal fade" id="confirm-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin dengan data ini?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-ok btn-primary" data-dismiss="modal" style="color: black">Tidak</button>

                                <button type="submit" class="btn btn-ok btn-primary" style="color: black">Ya</button>
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:history.back()" class="btn btn-default pull-left" role="button" style="color: black">
                                     <i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Kembali
                                </a>
                <button type="button" class="btn btn-primary pull-right" data-record-id="54" data-record-title="Something cool" data-toggle="modal"
                data-target="#confirm-add" style="color: black">Simpan&nbsp<i class="fa fa-floppy-o" aria-hidden="true"></i></button>
            </form>
            @endif
		  </div>
	   </div>
    </div>
  </div>
@endsection
