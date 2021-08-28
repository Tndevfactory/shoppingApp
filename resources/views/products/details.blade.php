@extends('layout.app')

@section('title')
    <title>Shopping-tn | Details</title>
@endsection

@section('content')
<div class="container">
    @include('components.breadcrumb', ['current_page'=> 'Details'])
    <div class="row row-cols-2 my-4">

        <div class="col d-flex justify-content-center " style="min-height: 50vh">
            <img src="{{ $product->img_uri }}" class="img-fluid rounded-lg  shadow-lg" alt="...">
        </div>

        <div class="col">
             <div class="card shadow-lg rounded-lg">
                    <div class="card-body">
                       
                        <p class="card-text fw-bold">{{ $product->name }}</p>
                        <p class="card-text"> <span class="card-text fw-bold"> Description:</span>  {{ $product->description }}</p>
                        <p class="card-text"> <span class="card-text fw-bold"> Prix:</span>  {{  $product->price}}</p>
                        
                        <div class="commande d-flex justify-content-center gap-3">
                                <a href="{{route('welcome')}}"  
                                    class="btn btn-primary btn-sm">
                                    Retour Store
                                </a>

                                <a href="#" class="btn btn-success btn-sm ">
                                    Commande
                                </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>

        
@endsection