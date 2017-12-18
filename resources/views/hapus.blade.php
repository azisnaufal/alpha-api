@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('templates/feedback')
            <div class="panel panel-default">

                <div class="panel-body">
                    <h1 style="color:#1b809e;">Konfirmasi</h1>
                    <p>
                        Apakah anda yakin mau menghapus endpoint yang satu ini?
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" >
                            <thead>
                                <tr class="info ">
                                    <th class="col-md-3">URL</th>
                                    <th class="col-md-1">Kelompok</th>
                                    <th class="col-md-1">HTTP Verb</th>
                                    <th class="col-md-4">Judul</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($result as $row)
                            <tr>
                                <td>
                                    <code>/api/{{$row->url}}</code>
                                </td>
                                <td>
                                    <p>{{$row->kelompok}}</p>
                                </td>
                                <td>
                                    <strong>GET</strong>
                                </td>
                                <td>
                                    <strong>{{$row->judul}}</strong>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="javascript:history.back()" class="btn btn-default" role="button">
                                            <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Kembali
                                        </a>
                        <form class="pull-right" action="{{ url("delete/$id") }}" method="POST"> 
                                    {{ csrf_field() }} 
                                    {{ method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-trash"></i>&nbsp;Ya
                                        </button>
                                        
                        </form>
                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection