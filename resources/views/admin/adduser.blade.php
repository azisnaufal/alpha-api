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
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-lg-offset-2">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Tambah User</h2>
                </div>

                <div class="card-body">

                    <form method="post" id="loginform" class="form-horizontal col-lg-12" role="form" action=""> 
                    
                        <div class="form-group">
                            <label for="contain">Email</label> <label style="color:red;">*</label>
                            <input name="Email" required class="form-control" type="email" placeholder="masukan Email"
                                value="" />
                        </div>
                        <div class="form-group">
                            <label for="contain">Password</label>
                            
                            
                            <input name="sql_stat" class="form-control" type="password" placeholder="masukan password" value=""/>
                        </div>
                       <div class="form-group">
                            <label for="contain">masukan ulang password</label>
                            
                            
                            <input name="sql_stat" class="form-control" type="password" placeholder="masukan kembali password" value=""/>
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