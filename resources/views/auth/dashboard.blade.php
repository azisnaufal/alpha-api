
@extends('layouts.nav',['thisis' => "usermgmt"]) @section('content')

<div class="container" >
	<div class="row">
		<div class="col-md-12"></div>
		@include('templates/feedback')
		<div class="card">
		  <div class="card-header">
		   <h2> User Management </h2>
		  </div>
		  <div class="card-body">
		    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    
             
		 
		</div>
	</div>
</div>
		
        {{--  <!-- Modal -->
        <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content loginmodal-container">
              <div class="modal-header">
                <h2 class="modal-title" id="loginmodal">Login</h2>
                
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
                </div>  --}}
              
             {{--  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>  --}}
            {{--  </div>
          </div>
        </div>  --}}
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
