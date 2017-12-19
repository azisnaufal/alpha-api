@extends('layouts.nav') @section('content')

<div class="container" >
	<div class="row">
		<div class="col-md-12"></div>
		@include('templates/feedback')
		<div class="card">
		  <div class="card-header">
		    Dokumentasi rest API
		  </div>
		  <div class="card-body">
		    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
             <h1 style="color:#fed136;">RESTfull API</h1>
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

                    <h3 style="color:#fed136;">Referensi cepat</h3>

                                <p>
                                    
                                Semua akses API melalui protokol HTTP, dan diakses melalui domain <mark>http://localhost:8000/</mark>. 
                                Awalan path URI <code>/api/</code> menunjukkan bahwa saat ini anda sedang menggunakan fitur REST API pada website kami.
                                </p>

                    <h3 style="color:#fed136;">Endpoints <a href="{{url('add')}}">
                        <img class="float-right" title="Tambah" src="{{ asset('img/glyphicons-433-plus.png')}}">
                   </a>
                </h3>

                    
                        <table class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%"  id="tb_endpoints">
                            <thead>
                                <tr class="info ">
                                    <th>URL</th>
                                    <th>Kelompok</th>
                                    <th>HTTP Verb</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
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
                                <td>
                                    <a href="{{ url("edit/$row->id") }}">
                                        <img class="btn" title="Ubah" src="{{ asset('img/glyphicons-151-edit.png')}}">
                                    </a>&nbsp;|&nbsp;
                                    <a href="{{ url("delete/confirm/$row->id") }}">
                                        <img class="btn" title="Hapus" src="{{ asset('img/glyphicons-208-remove.png')}}">
                                    </a>
                                    {{--  <form action="{{ url("delete/$row->id") }}" method="POST" style="display: inline;"> 
                                    {{ csrf_field() }} {{ method_field('DELETE')}}
                                        <button class="btn">
                                            <img title="Hapus" src="{{ asset('img/glyphicons-208-remove.png')}}">
                                        </button>
                                    </form>  --}}
                                    {{--
                                    <a href="/delete/{{$row->id}}">
                                        <img title="Hapus" src="{{ asset('img/glyphicons-208-remove.png')}}">
                                    </a> --}}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
		 
		</div>
	</div>
</div>
		
    





@endsection
