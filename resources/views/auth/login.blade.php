@extends('layouts.app')

@section('content')

<div class="container container-login">

    <div class="row justify-content-center align-items-center minh" style="height: 100%" >
        <div class="col-xs-12">
           
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <div class="form-group row">
                          

                          
                                <input id="email" type="email" class="input-per  form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus placeholder="Usuario:">

                                @error('email')
                                 <div class="col-xs-12">
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                </div>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            

                        
                                <input id="password" type="password" class="input-per form-control @error('password') is-invalid @enderror" name="password" required  placeholder="Contraseña:" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                     

                             <div class="form-group row">
                                <button type="submit" class="btn boton-per btn-block ">
                                    {{ __('Login') }}
                                </button>

                             
                            </div>
                      
                    </form>
             
        </div>
    </div>
</div>
@endsection
