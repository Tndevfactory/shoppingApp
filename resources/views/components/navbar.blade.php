<div id="navigation">

  <nav class="navbar navbar-expand-lg navbar-dark  ">
    <div class="container-fluid">
  
      <a class="navbar-brand " href="{{route('welcome')}}"> 

        <span class="title-brand"> Shopping TN </span> 

        <img src="{{ asset('img/logo/icons8-shop-64.png')}}" height="50" alt=" logo entreprise shopping tn">
      </a>
  
      <button class="navbar-toggler" type="button"
       data-bs-toggle="collapse" data-bs-target="#navbarNav" 
       aria-controls="navbarNav" aria-expanded="false" 
       aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse " id="navbarNav">
  
        <ul class="navbar-nav mx-auto menu">
            
          <li class="nav-item ">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }} "  href="{{route('welcome')}}">Accueil</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="#">Commandes</a>
            
          </li>
  
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{route('about')}}">A propos</a>
          </li>
         
        </ul>
        
        {{-- cart  start --}}
        <a href="{{route('cart-show')}}" class="text-decoration-none">

          <div class="cart pe-3 me-3 d-flex flex-column  {{ Cart::count() == 0 ? 'mt-3': '' }} 
          d-inline-block" style="margin-bottom: 2.5rem">

                @if (Cart::count() > 0)
                  <span class="text-white  bg-gradient text-center p-0 " 
                  style="width:2rem; border-radius: 25% ; font-size: 1rem ;background-color:red">
                    {{Cart::count()}}
                   </span>
                @endif

                <i class="fas fa-cart-plus text-white mt-0 p-0" style="font-size: 2.4rem"></i>
          </div>

        </a>

        {{-- cart end --}}

        <div class="auth">

            @guest
                   <a href="{{ route('login')}}" class=" connexion text-decoration-none me-3">
                      Connexion <i class="fas fa-sign-in-alt mt-1" style="font-size: 1.5rem"></i>
                    </a>
            
            @endguest

            @auth
            
                    <div class="row row-cols-4 g-3">

                        <div class="col-2  d-flex justify-content-center align-items-center">
                          <img src="{{Auth::user()->img_uri}} " 
                           class="d-inline-block rounded-circle" height="50" alt="">
                        </div>

                        <div class="col-1  d-flex justify-content-start align-items-center">

                          @if (Auth::user()->is_admin === '1')
                            <span class="text-uppercase text-danger 
                             fs-5 mt-1 ps-2  d-inline-block"> admin</span>
                          @endif

                          @if (Auth::user()->is_admin !== '1')
                            <span class="text-uppercase text-light 
                             fs-5 mt-1 pe-2 d-inline-block"> client</span>
                          @endif

                        </div>

                        <div class="col-5  d-flex justify-content-end align-items-center">
                          <a href="" class="  text-white text-decoration-none">
                              {{Auth::user()->name}} 
                              <i class="fas fa-user-plus " style="font-size: 1.5rem"></i>
                          </a>
                        </div>

                        <div class="col-4  d-flex justify-content-start align-items-center">
                          <a href="{{ route('auth-logout')}}" class="  text-light text-decoration-none">
                              Deconnexion <i class="fas fa-sign-in-alt text-success" style="font-size: 1.9rem"></i>
                          </a>
                        </div>

                    </div>
       
            @endauth
          
  
        </div>
  
      </div>
  
        
  
    </div>
  </nav>


</div>