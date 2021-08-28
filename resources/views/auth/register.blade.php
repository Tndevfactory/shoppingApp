@extends('layout.app')

@section('title')
    <title>Shopping-tn | Inscription</title>
@endsection

@section('content')



<div class="container my-3">

       @include('components.breadcrumb', ['current_page'=> 'Inscription'])


    <div class="div">
        {{ session()->get('message')}}
    </div>

   

    <div class="row g-0" id="login-form">

        <div class="col">
            <div class="img ">
                <img src="{{ asset('img/shop/shop.jpg') }}"  class="img-fluid" alt="">
            </div>
        </div>

        <div class="col  card">
            <div class="form px-5">
                        

                    <form action="{{route('auth-register')}}" method="POST" class="  ">
                        
                        @csrf
                        <span class="text-center fs-1 d-block text-muted  fw-bold">Formulaire d'inscription</span>
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom et prénom</label>
                            <input type="text" value="{{ old('name') ?? '' }}" class="form-control  
                            @error('name') 'is-invalid' @enderror "  name="name">
                            @error('name')
                                 <span class="form-text text-danger small">{{$message}}.</span>
                            @enderror
                           
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ old('email') ?? '' }}" class="form-control  @error('email') 'is-invalid' @enderror "  name="email">
                            @error('email')
                                 <span class="form-text text-danger small">{{$message}}.</span>
                            @enderror
                           
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password"  class="form-control @error('email') 'is-invalid' @enderror" name="password" >
                            @error('password')
                                <span class="form-text text-danger">{{$message}}</span>
                            @enderror 
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmation mot de passe</label>
                            <input type="password"  class="form-control @error('password_confirmation') 'is-invalid' @enderror" 
                            name="password_confirmation" >
                            @error('password_confirmation')
                                <span class="form-text text-danger">{{$message}}</span>
                            @enderror 
                        </div>

                        <div class="row  ">
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </div>
                            <div class="col-9">
                                 <a href="{{route('login')}}"  class="btn btn-default text-muted">Vous avez un compte, veuillez se connecter</a>
                            </div>
                        </div>
                     
                       
                       

                   </form>
            </div>

        </div>

    </div>


</div>



@endsection