@extends('layouts.nav',['thisis' => ""]) @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('templates/feedback')
            <div class="card card-default">

                <div class="card-body">
                    <h1 style="color:black;">Konfirmasi</h1>
                    <p>
                        Apakah anda yakin mau menghapus User yang satu ini?
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" >
                            <thead>
                                <tr class="info ">
                                    <th class="id">ID</th>
                                    <th class="">Username</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$result->id}}</td>
                                    <td>{{$result->username}}</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <a href="javascript:history.back()" class="btn btn-default" role="button" style="color: black;">
                                             <i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Kembali
                                        </a>
                        <form class="float-right" action="{{ url("usermgmt/delete/$id") }}" method="POST"> 
                            {{ csrf_field() }} 
                            {{ method_field('DELETE')}}
                                        <button style="float: right; width: 200px; color: black" type="submit" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-trash" style="color: black;""></i>
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