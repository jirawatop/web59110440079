@extends('layouts.app')

@section('content')

<div class="container">
    @foreach ($all as $item)
        
   
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-header text-white bg-dark">
                     <h1>{{$item->brand}}( ปี {{$item->year}}) </h1>
                </div>
                <div class="card-body text-white bg-dark">    
                    <img src="storage/{{$item->filename}}" class="card-img" >
                    <h1></h1>
                    <h5 class="card-title">ยี่ห้อ {{$item->brand}}</h5>
                    <p class="card-text">เกียร์ : {{$item->gearsystem}}</p>
                    <p class="card-text">เลขไมล์(กม.) : {{$item->mileage}}</p>
                    <p class="card-text">ราคา : {{$item->price}} บาท</p>
                    <p class="card-text"> {{$item->updated_at}}</p>
                    <a href="{{route('products',$item->id)}}"class="btn btn-secondary">ติดต่อ</a>
                </div>     
        </div>
    </div>
    
    <div class="pt-5">
    </div>
    @endforeach
</div>
@endsection
