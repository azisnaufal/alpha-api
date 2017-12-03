@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('templates/feedback')
            <div class="panel panel-default">
                <div class="panel-heading">Dokumentasi REST API
                    
                </div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h1 style="color:#1b809e;">RESTful API</h1>
                    <p>
                        REST API memungkinkan Anda berinteraksi dengan App dari apapun yang dapat mengirim permintaan HTTP.
                        Ada banyak hal yang dapat Anda lakukan dengan REST API. Sebagai contoh:
                        <ul>
                            <li>Aplikasi seluler dapat mengakses data App.</li>
                            <li>Webserver dapat menampilkan data dari Aplikasi ini di situs web.</li>
                            <li>Aplikasi yang ditulis dalam bahasa pemrograman apapun dapat berinteraksi dengan data pada Aplikasi
                                ini.</li>
                        </ul>
                    </p>

                    <h3 style="color:#1b809e;">Referensi cepat</h3>

                                <p>
                                    
                                Semua akses API melalui protokol HTTP, dan diakses melalui domain <mark>http://localhost:8000/</mark>. 
                                Awalan path URI <code>/api/</code> menunjukkan bahwa saat ini anda sedang menggunakan fitur REST API pada website kami.
                                </p>

                    <h3 style="color:#1b809e;">Endpoints <a href="{{url('add')}}">
                        <img class="pull-right" title="Tambah" src="{{ asset('img/glyphicons-433-plus.png')}}">
                    </a></h3> 
                    

                    <div class="table-responsive">
                        <table class="table">
                            <tr class="info ">
                                <th class="col-md-3">URL</th>
                                <th class="col-md-2">HTTP Verb</th>
                                <th class="col-md-4">Judul</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                            @foreach ($result as $row)
                            <tr>
                                <td>
                                    <code>/api/{{$row->url}}</code>
                                </td>
                                <td>
                                    <strong>GET</strong>
                                </td>
                                <td>
                                    <strong>{{$row->judul}}</strong>
                                </td>
                                <td>
                                    <a href="{{ url(" edit/$row->id") }}">
                                        <img class="btn" title="Ubah" src="{{ asset('img/glyphicons-151-edit.png')}}">
                                    </a>&nbsp;|&nbsp;
                                    <form action="{{ url(" delete/$row->id") }}" method="POST" style="display: inline;"> {{ csrf_field() }} {{ method_field('DELETE')
                                        }}
                                        <button class="btn">
                                            <img title="Hapus" src="{{ asset('img/glyphicons-208-remove.png')}}">
                                        </button>
                                    </form>
                                    {{--
                                    <a href="/delete/{{$row->id}}">
                                        <img title="Hapus" src="{{ asset('img/glyphicons-208-remove.png')}}">
                                    </a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection