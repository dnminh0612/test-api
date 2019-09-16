@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       @foreach($products as $product)
           <div class="col-12 col-lg-4">
               <div class="card" >
                   <img src="{{ Storage::url($product->image) }}" class="card-img-top w-100" alt="...">
                   <div class="card-body">
                       <h5 class="card-title">{{ $product->name }}</h5>
                       <p class="card-text text-danger">{{ $product->price }}</p>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <a href="#" class="btn btn-primary">Go somewhere</a>
                   </div>
               </div>
           </div>
       @endforeach
   </div>
</div>
@endsection
