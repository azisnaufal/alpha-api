
@extends('layouts.nav',['thisis' => "endpoint"]) @section('content')

<div class="container" >
	<div class="row">
		<div class="col-md-12"></div>
		@include('templates/feedback')
		<div class="card">
		  <div class="card-header">
		   <h2> Dokumentasi REST API</h2>
		  </div>
		  <div class="card-body">
		    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    
             <h3 style="color:#fed136;">RESTful API</h3>
                    <p>
                        REST API memungkinkan Anda berinteraksi dengan App dari apapun yang dapat mengirim permintaan HTTP.
                        Ada banyak hal yang dapat Anda lakukan dengan REST API. Sebagai contoh:
                        <ul class="desk">
                            <li>Aplikasi seluler dapat mengakses data App.</li>
                            <li>Webserver dapat menampilkan data dari Aplikasi ini di situs web.</li>
                            <li>Aplikasi yang ditulis dalam bahasa pemrograman apapun dapat berinteraksi dengan data pada Aplikasi
                                ini.</li>
                        </ul>
                    </p>

                    <h3 style="color:#fed136;">Referensi cepat</h3>

                                <p>
                                    
                                Semua akses API melalui protokol HTTP, dan diakses melalui domain <mark>{{ url('') }}</mark>. 
                                Awalan path URI <code>/api/</code> menunjukkan bahwa saat ini anda sedang menggunakan fitur REST API pada website kami.
                                </p>

                    <h3 style="color:#fed136;">Endpoints 
                    @auth
                    <a href="{{url('add')}}">
                        <button class="btn btn-secondary btn-xs float-right" style="color: white; margin-right: 20px; background-color: #121d33 !important;">
                            Tambah
                             <i class="fa fa-plus" title="tambah" aria-hidden="true" style="color: white;"></i>
                        </button>

                        <!-- <img class="float-right" title="Tambah" src="{{ asset('img/glyphicons-433-plus.png')}}"> -->
                    </a>
                    @endauth
                </h3>

                    
                        <table  class="table table-responsive table-striped table-bordered " cellspacing="0" width="100%"  id="tb_endpoints">
                            <thead class="thead-dark">
                                <tr class="info ">
                                    <th>URL</th>
                                    <th>Kelompok</th>
                                    <th>HTTP Verb</th>
                                    <th>Judul</th>
                                    @auth
                                    <th >Aksi</th>
                                    @endauth
                                </tr>
                            </thead>
                        
                            <tbody class="tableku">
                            
                            @foreach ($result as $row)
                            <tr>
                                <td >
                                    <a target="_blank" href="{{url("detil/$row->id")}}"><code>/api/{{$row->url}}</code></a>
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
                                @auth
                                <td>
                                    <!-- <a href="{{ url("edit/$row->id") }}">
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
                                    </a> --}} -->
                                        <span class="btn-group pull-right" style="margin-top: 5px">
                                            <a href="{{ url("edit/$row->id") }}">
                                                <button class="btn btn-warning btn-xs" title="ubah">
                                                    <i class="fa fa-pencil-square-o fa-lg" style="text-decoration: none; color: black;"></i>
                                                </button>
                                            </a>
                                            <a href="{{ url("delete/confirm/$row->id") }}">
                                                <button class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-o fa-lg" style="color: black;" ></i>
                                                </button>
                                            </a>
                                        </span>
                                </td>
                                @endauth
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
		 
		</div>
	</div>
</div>
		
       
        {{--  <script type="text/javascript">
            $(document).ready(function () {
            $('body').on('click','td.warning input',function () { 
                        
                            
                            function (isConfirm) {
                                if (isConfirm) {
                                    swal("Deleted!", "Your imaginary file has been deleted!", "success");
                                } else {
                                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                                }
                            });
                        });

            });
  </script>  --}}

    





@endsection
