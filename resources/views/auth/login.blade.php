@extends('layout.app')

@section('title')
    <title>Shopping-tn | Connexion</title>
@endsection

@section('content')

     

    <div class="container my-3">

          @include('components.breadcrumb', ['current_page'=> 'Connexion'])


        @if ( session()->get('message'))
            <div class="div bg-danger fs-3 text-white p-2 text-center">
                <span class="text-white">{{ session()->get('message')}}</span>
            </div>
        @endif
      
        {{-- reset password link session --}}
        @if ( session()->get('status'))
            <div class="div bg-success fs-3 text-white p-2 text-center">
                <span class="text-white">{{ session()->get('status')}}</span>
            </div>
        @endif
        {{-- end reset password link session --}}

        <div class="row g-0" id="login-form">
            <div class="col">
                <div class="img ">
                    <img src="{{ asset('img/shop/shop.jpg') }}"
                         class="img-fluid" alt="">
                </div>
            </div>
            <div class="col card">
                <div class="form  p-5   mt-1">
                    <form action="{{route('auth-login')}}" method="POST" class=" p-2 mt-1">
                        @csrf
                        <span class="text-center fs-1 d-block mb-2 fw-bold"
                              style="color:#00afb9">
                            Formulaire de Connexion
                        </span>
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
                        <div class="row pt-3 ">
                            <div class="col-3">
                                <button type="submit" class="btn btn-secondary">Se Connecter</button>
                            </div>
                            <div class="col-9">
                                <a href="{{route('register-form')}}" class="btn btn-default  text-secondary fw-bold">
                                    Creer un nouveau compte, veuillez <span class="text-secondary fw-bold">s'inscrire</span>  </a>
                            </div>
                        </div>
                    </form>

                    <div class="text-center text-muted ">OU</div>
                    <div class="border border-top border-1 border-dark-50"></div>

                    <div class="d-flex justify-content-center align-items-center gap-2 mt-4">
                       {{-- <span class="h5 text-muted">Se connecter avec</span>--}}
                      
                        <a href="{{ route('socialite.redirect', 'google') }}" title="Connecter avec Google"
                           class="btn btn-danger d-flex justify-content-center align-items-center">google<i class="fab fa-google-plus-square fa-2x ms-2"></i></a>

                        <a href="{{ route('socialite.redirect', 'facebook') }}"
                           title="Connexion avec Facebook" class="btn btn-primary d-flex justify-content-center align-items-center">facebook<i class="fab fa-facebook-square ms-2 fa-2x"></i></a>

                        <a href="{{ route('socialite.redirect', 'github') }}" title="Connecter avec Github"
                           class="btn btn-dark d-flex justify-content-center align-items-center ">github<i class="fab fa-github-square ms-2 fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection