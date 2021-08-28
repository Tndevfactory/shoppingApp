@extends('layout.app')

@section('title')
    <title>Shopping-tn | Accueil</title>
@endsection


@section('content')

    <div class="container">

        @include('components.carousel')


        @if (Session::has('success'))

            <div class="toast_anime  bg-gradient bg-opacity-75 rounded d-inline-block py-1 px-3 " style="background-color: #197278">

                <span class="fs-4 text-white text-center ff-oswald"> 
                    {{Session::get("success")}}
                </span>

                <i class="fas fa-check text-white" style=" font-size:1.5rem"> </i>

            </div>

        @endif



        {{-- boucle categories --}}
        @foreach ( $categories as  $category )

            <div class="p-3  mb-2 bg-gradient bg-opacity-75  rounded-lg d-flex  align-items-center" style="background-color: #197278">
                <a href="" class="text-decoration-none me-auto text-white ">
                    <span class="fs-3 fw-bold ff-oswald text-uppercase">{{$category->name}}</span> 
                    <span class="fs-2 fw-bold text-light"> ({{$products_count["$category->name"]}})</span> 
                </a>
                <a href="" class="text-decoration-none">
                    <span class="fs-3 fw-bold fw-bold ff-oswald " style="color:#ffffff">Voir plus </span>
                </a>
                <a href="" class="text-decoration-none fs-4 ms-2 mt-1 d-inline-block">
                    <i class=" fas fa-chevron-right  " style="color:#ffffff"></i>
                </a>
                <a href="" class="text-decoration-none  fs-4 mt-1">
                    <i class="fas fa-chevron-right  "  style="color:#ffffff"></i>
                </a>

            </div>

            <div class="row row-cols-1 row-cols-md-4  ">
                {{-- boucle product --}}
                @foreach ( $products as $product)

                    @if ($category->id === $product->category_id)
                        <div class="col mb-4">
                            <div class="card rounded-3  card_product">
                                <div class="img-div  p-0 d-flex justify-content-center">
                                    <img src="{{ $product->img_uri }}" class=" " alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold fs-4 text-muted ff-oswald">{{Str::ucfirst($product->name)}}</h5>
                                    <div class="card-text">{{ Str::limit( $product->description , 50)}}</div>
                                    <div class=" mb-1">
                                        <span class="fw-bold fs-4 text-muted me-1 "> Prix:</span>
                                        <span class="fw-bold fs-4 ff-oswald text-success">{{currencyFormat($product->price) }}</span>
                                        <span class="text-muted ms-1 fs-4">TND</span>
                                    </div>
                                    <div class="commande  d-flex justify-content-center gap-3">

                                        <a href="{{route('cart-add',  $product->id )}}"
                                           class="btn btn-success btn-sm " id="liveToastBtn">
                                            <i class="fas fa-plus-square"></i> Acheter
                                        </a>

                                        <a href="{{route('details-product', $product->slug )}}"
                                           class="btn btn-primary btn-sm"> <i class="fas fa-info-circle"></i> Details
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                @endforeach
            </div>

        @endforeach

       {{-- $products->links() --}}
    </div>

 {{-- @include('components.user-online', ['online'=> 'online']) --}}

@endsection