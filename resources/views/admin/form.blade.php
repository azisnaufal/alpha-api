@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{url('home')}}"><img class="pull-left"title="Kembali" src="{{ asset('img/glyphicons-225-chevron-left.png')}}"></a>&nbsp;&nbsp; Tambah endpoint</div>

                <div class="panel-body">

                    <form method="post" id="loginform" class="form-horizontal col-md-12" role="form" action="{{ empty($result) ? url('add') : url("edit/$result->id")}}">
                        {{ csrf_field() }}

                        @if (!empty($result))
                            {{ method_field('patch') }}
                        @endif
                        <div class="form-group">
                            <label for="contain">Judul</label>
                            <input name="judul" class="form-control" type="text" placeholder="Contoh : Jumlah Penduduk bergolongan darah A" value="{{@$result->judul}}"/>
                        </div>
                        <div class="form-group">
                            <label for="contain">Query SQL</label>
                            <input name="sql_stat" class="form-control" type="text" placeholder="Contoh : SELECT * FROM tb_konsolidasi" value="{{@$result->sql_stat}}"/>
                        </div>
                        <div class="form-group">
                            <label for="contain">Kelompok</label>
                            <input name="kelompok" class="form-control" type="text" placeholder="Contoh : Golongan darah" value="{{@$result->kelompok}}"/>
                        </div>
                        <div class="form-group">
                            <label for="contain">URL</label>
                            <input name="url" class="form-control" type="text" placeholder="Contoh : konsolidasi/jumlah/penduduk/goldar_a" value="{{@$result->url}}"/>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection