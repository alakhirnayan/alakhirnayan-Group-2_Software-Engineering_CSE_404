@extends('layouts.includes.main')
@section('title','Products')
@section('content')
 
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
              <div class=""></div>
        </div>
        
        </div>
    </div>
 </div>
        


 <div class="container">
   <ol class="breadcrumb">
   <li class="breadcrumb-item"><a href="">Home</a></li>
   <li class="breadcrumb-item"><a href="">Products</a></li>
     
   </ol>

 </div>
 
        <div class="container">
         <div class="row">
         @foreach($products as $product)
           <div class="col-md-3">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-body">
                    <div class="thumnail-image">
                     <img src="{{asset('/images/'.$product->image)}}" alt="" />
                    </div>
                    <div class="info-product">
                    <a href="{{route('proinfo',$product->id)}}" class="btn btn-primary pull-right btn-sm">Product Info</a>
                    </div>
                    <div class="title-product"> <h4>{{$product->title}}</h4></div>
                    <div class="size"> 
                    <span class="fa fa-star star_color"></span>
                    <span class="fa fa-star star_color"></span>
                    <span class="fa fa-star star_color"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    </div>
                    <div class="price">  <p>{{$product->price}}</p></div>
                    <div class="addToCart">
                     <i class="fa fa-heart-o"></i>
                     <i class="fa fa-share"></i>
                     <a href="{{route('addToCart',$product->id)}}" class="btn btn-primary pull-right btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
 
 <!-- Modal -->

 @endforeach


        
        <div class="container">
        <div class="text-center">
            {!!$products->links()!!}

        </div>
            
        </div>
</div><br>
        <div class="container-fluid">
          <div class="jumbotron jumbotron-bg" style="background-color: #099; color: #fff;">
            <h1>Hot!</h1> 
            <button class="btn btn-success">Promo</button>
          </div>
         </div> 

@endsection

 