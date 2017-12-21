@extends('layouts.nav') @section('content')
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
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="card card-default">
                <div class="card-header">
                    <a href="{{url('home')}}">
                        <img class="pull-left" title="Kembali" src="{{ asset('img/glyphicons-225-chevron-left.png')}}">
                    </a>&nbsp;&nbsp; Tambah endpoint</div>

                <div class="card-body">

                    <form method="post" id="loginform" class="form-horizontal col-lg-12" role="form" action="{{ empty($result) ? url('add') : url("edit/$result->id")}}"> {{ csrf_field() }} @if (!empty($result)) {{ method_field('patch') }} @endif
                        <div class="form-group">
                            <label for="contain">Judul</label>
                            <input name="judul" required class="form-control" type="text" placeholder="Contoh : Jumlah Penduduk bergolongan darah A"
                                value="{{@$result->judul}}" />
                        </div>
                        <div class="form-group">
                            <label for="contain">Query SQL</label>
                            <input name="sql_stat" class="form-control" type="text" placeholder="Contoh : SELECT * FROM tb_konsolidasi" value="{{@$result->sql_stat}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="contain">Kelompok</label>
                            <input name="kelompok" required class="form-control" type="text" placeholder="Contoh : Golongan darah" value="{{@$result->kelompok}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="contain">URL</label>
                            <input name="url" required class="form-control" type="text" placeholder="Contoh : konsolidasi/jumlah/penduduk/goldar_a" value="{{@$result->url}}"
                            />
                        </div>
                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin dengan data ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-ok btn-primary">Ya</button>
                                        <button type="button" class="btn btn-ok btn-primary" data-dismiss="modal">Tidak</button>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"class="btn btn-primary pull-right" data-record-id="54" data-record-title="Something cool" data-toggle="modal"
                        data-target="#confirm-delete">Simpan</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection