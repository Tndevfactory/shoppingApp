@extends('layout.app')

@section('title')
    <title>Shopping-tn | reset password</title>
@endsection

@section('content')

    <div class="container my-3">

          @include('components.breadcrumb', ['current_page'=> 'reset password'])


        
        @if ( session()->get('email'))
            <div class="div bg-danger fs-3 text-white p-2 text-center">
                <span class="text-white">{{ session()->get('email')}}</span>
            </div>
        @endif
        
       

        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{$token}}">
             <div class="mb-1">
                    <label for="email" class="form-label fs-5 ">Email</label>
                    <input type="email" value="{{ old('email')  }}"
                            class="form-control  @error('email') 'is-invalid' @enderror "
                            name="email">
                    @error('email')
                    <span class="form-text text-danger small">{{$message}}</span>
                    @enderror
             </div>

             <div class="mb-1">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label fs-5"> Mot de passe</label>
                            <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">forget password</a>
                    </div>

                    <input type="password" class="form-control @error('email') 'is-invalid' @enderror"
                            name="password">
                    @error('password')
                    <span class="form-text text-danger small">{{$message}}</span>
                    @enderror
              </div>
              <div class="mb-3">
                    <label for="password_confirmation" class="form-label fs-5">Confirmation mot de passe</label>
                    <input type="password"  class="form-control @error('password_confirmation') 'is-invalid' @enderror" 
                    name="password_confirmation" >
                    @error('password')
                        <span class="form-text text-danger">{{$message}}</span>
                    @enderror 
               </div>
            <button type="submit" class="btn btn-primary">reset password</button>
        </form>
    </div>



@endsection