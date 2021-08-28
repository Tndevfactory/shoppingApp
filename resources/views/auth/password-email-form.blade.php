@extends('layout.app')

@section('title')
    <title>Shopping-tn | send reset link</title>
@endsection

@section('content')



    <div class="container my-3">

          @include('components.breadcrumb', ['current_page'=> 'Connexion'])


        @if ( session()->get('email'))
            <div class="div bg-danger fs-3 text-white p-2 text-center">
                <span class="text-white">{{ session()->get('email')}}</span>
            </div>
        @endif
        
        @if ( session()->get('status'))
            <div class="div bg-success fs-3 text-white p-2 text-center">
                <span class="text-white">{{ session()->get('status')}}</span>
            </div>
        @endif
        

        <form action="{{ route('password.email') }}" method="POST">
            @csrf
             <div class="mb-1">
                            <label for="email" class="form-label fs-5 ">Email</label>
                            <input type="email" value="{{ old('email')  }}"
                                   class="form-control  @error('email') 'is-invalid' @enderror "
                                   name="email">
                            @error('email')
                            <span class="form-text text-danger small">{{$message}}</span>
                            @enderror
              </div>
            <button type="submit" class="btn btn-primary">send reset link</button>
        </form>
    </div>



@endsection