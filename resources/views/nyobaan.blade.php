@extends('layouts.nav') @section('content')

<div class="container" >
	<div class="row">
		<div class="col-md-12"></div>
		@include('templates/feedback')
		<div class="card">
		  <div class="card-header">
		   <h2> Dokumentasi rest API </h2>
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
                        <img class="float-right" title="Tambah" src="{{ asset('img/glyphicons-433-plus.png')}}">
                    </a>
                    @endauth
                </h3>

                    
                        <table class="table table-responsive table-striped table-bordered" cellspacing="0" width="100%"  id="tb_endpoints">
                            <thead>
                                <tr class="info ">
                                    <th>URL</th>
                                    <th>Kelompok</th>
                                    <th>HTTP Verb</th>
                                    <th>Judul</th>
                                    @auth
                                    <th  >Aksi</th>
                                    @endauth
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
                                @auth
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
                                @endauth
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
		 
		</div>
	</div>
</div>
		
        <!-- Modal -->
        <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content loginmodal-container">
              <div class="modal-header">
                <h1 class="modal-title " id="loginmodal">Login</h1>
                
              </div>
              <div class="modal-body">
                 <form method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                  <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    
                            <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            
                        </div>
                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                          
                            <input type="password" required name="password" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            
                        </div>
                            <input type="submit" name="login" class="btn btn-primary btn-xl login loginmodal-submit" value="Login">

                </form>
                </div>
              
             {{--  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>  --}}
            </div>
          </div>
        </div>

    





@endsection
