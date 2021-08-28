<!-- footer start    -->
<div id="footer" class="pt-1 bg-dark">

    <div class="mt-4   text-white" >
    
       <div class="panel-promotion  py-2 pt-5" >
    
            <div class="container pt-3">
    
                <div class="row row-cols-2 row-cols-md-4 ">
    
                    <div class="col d-flex flex-column align-items-center  ">
                        <i class="fas fa-shuttle-van fa-4x "></i> 
                        <p class="mt-2 small text-white">Livraison entre 2 et 4 jours</p>
                    </div>
    
                    <div class="col d-flex flex-column align-items-center">
                            <i class="fas fa-archive fa-4x" ></i>
                            <p class="mt-2 small text-white">10 jours pour changer d’avis</p>
                    </div>
    
                    <div class="col d-flex flex-column align-items-center">
                            <i class="fas fa-thumbs-up fa-4x" ></i>
                            <p class="mt-2 small text-white">Trouver tous les avis des clients</p>
                    </div>
    
                    <div class="col d-flex flex-column align-items-center">
                        <i class="fas fa-shopping-cart fa-4x"></i>
                            <p class="mt-2 small text-white">+20K produits en stocks</p>
                    </div>
                </div>
            </div>
    </div>
    
    {{-- fin zone de promotion --}}
       
        <div class="container">
            <div class="row row-cols-4 mt-3">
            @for ($i=1; $i<=4; $i++)
            <div class="col d-flex justify-content-center">
                <ul class="list-unstyled">
                    <li class="ms-3 h3">Details</li>
                    <li class="">Livraison rapide</li>
                    <li>Condition generale</li>
                    <li>Devenir Vendeur</li>
                    <li>plus d'informations</li>
                </ul>
            </div>
            @endfor
    
            </div>
        </div>

         <div class="container ps-md-5 my-5 p-2">
            <div class="row row-cols-1 row-cols-md-2 p-3">
                <div class="col col-md-4  d-flex justify-content-center flex-column align-items-center">
                    <div class="adresse">
                        <h3  class="text-white">Shopping Tn</h3>
                        <div class="small ms-1">Gsm: 71 887 958</div>
                        <div class="small ms-1">Email: shopping-tn@gmail.com</div>
                    </div>
                </div>
    
                <div class="col col-md-8 ps-md-5 mt-4 mt-md-0 ">
                    <h4 class="text-white">Lettre d'information</h4>
                    <form action="">
                        <div class="row g-0">
                            <div class="col-8 ">
                                <input type="email" class="  form-control rounded-0 " />
                            </div>
                            <div class="col">
                                  <button type="submit" class=" btn btn-outline-light rounded-0 ">
                                     Inscription
                                  </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=" bg-gradient bg-dark py-2 d-flex justify-content-center powered">
            <span class="small">
                Powred by 
                <a href="" class="text-decoration-none text-info">Tndev Factory</a>
            </span>
        </div>
    </div>
    <!-- footer end     -->
</div>
