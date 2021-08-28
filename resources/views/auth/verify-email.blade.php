@extends('layout.app')

@section('title')
    <title>Shopping-tn | verify email </title>
@endsection

@section('content')



    <div class="container my-3">

          @include('components.breadcrumb', ['current_page'=> 'verification emaion'])

          @if ( session()->get('message'))
            <div class="div bg-success fs-3 text-white p-2 text-center">
                <span class="text-white">{{ session()->get('message')}}</span>
            </div>
        @endif

        <h1>Merci de verifier votre email</h1>

        <h2>if you misplace verification link , click button below</h2>

        <form action="{{ route('verification.send')}}" method="POST">
            @csrf

            <button type="submit" class="btn btn-info"> resent verification link</button>
        </form>
    </div>



@endsection