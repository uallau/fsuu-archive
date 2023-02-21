@extends('layouts.app')
  
@section('content')

<div class="demo-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12 mx-auto">
        
        <div class="p-5 bg-white rounded">
          <h3 class="mb-4 text-center">Log In</h3>
          <form method="POST" action="{{ route('login') }}">
            @csrf
              <input id="floatingInput" floatingClassName="mb-3" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              <br>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
  
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
			
              @if (Route::has('password.request'))
              <p class="m-0 py-4"><a  href="{{ route('password.request') }}" class="text-muted">Forget password?</a></p>
              @endif
								
								<button type="submit" class="btn btn-dark btn-lg w-100">{{ __('LOGIN') }}</button>              

              </form>
		    
		  
              <h6 class="separator my-4">or connect with</h6>

              <div class="d-flex">
                <div class="w-50 pl-1">
                  <div class="bg-primary text-white rounded px-1 py-2">
                    <div class="bg-primary d-inline text-white p-1 rounded mr-2"> 
                      <i class="lni lni-google"></i>
                    </div>
                    <span class="large"><a href="{{ route('google.login') }}" class="text-white">Login as a Guest</a></span> </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</div>
@endsection