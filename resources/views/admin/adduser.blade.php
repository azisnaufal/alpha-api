@extends('layouts.nav',['thisis' => ""]) @section('content')
<style>
    .modal.loading .modal-content:before {
        content: 'Loading...';
        text-align: center;
        line-height: 155px;
        font-size: 20px;
        background: rgba(0, 0, 0, .8);
        position: absolute;
        top: 55px;
        bottom: 0;
        left: 0;
        right: 0;
        color: #EEE;
        z-index: 1000;
    }
    .btn.btn-primary.pull-right {
    float: right;
    }
</style>
@include('templates/feedback')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-lg-offset-2">
            <div class="card card-default">
                <div class="card-header">
                    @if (!empty($result)) 
                    <h2>Ubah User</h2>
                    @else
                    <h2>Tambah User</h2>
                    @endif
                </div>

                <div class="card-body">

                    <form method="post" id="loginform" class="form-horizontal col-lg-12" role="form" action="{{ empty($result) ? url('usermgmt/add') : url("usermgmt/edit/$result->id")}}"> 
                        {{ csrf_field() }}
                        @if (!empty($result)) 
                                {{ method_field('patch') }} 
                        @endif
                        <div class="form-group">
                            <label for="contain">Username</label> <label style="color:red;">*</label>
                            <input id="username" name="username" required class="form-control" type="text" placeholder="Masukan username anda"
                                value="{{@$result->username}}" />
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
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection