@extends('layouts.nav',['thisis' => ""]) @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('templates/feedback')
            <div class="card card-default">

                <div class="card-body">
                    <h1 style="color:#1b809e;">Konfirmasi</h1>
                    <p>
                        Apakah anda yakin mau menghapus User yang satu ini?
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" >
                            <thead>
                                <tr class="info ">
                                    <th class="id">id</th>
                                    <th class="">email</th>
                                    <th class="">password</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ini id</td>
                                    <td>ini email</td>
                                    <td>ini passsword</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <a href="javascript:history.back()" class="btn btn-default" role="button">
                                            <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Kembali
                                        </a>
                        <form class="float-right" action="" method="POST"> 
                                   
                                        <button style="float: right; width: 200px;" type="submit" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-trash"></i>
                                            Ya
                                        </button>
                                        
                        </form>
                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection 