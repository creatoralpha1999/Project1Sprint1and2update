@extends('layout')
@section('main_content')
<div class="container-fluid">
    <div class="row">
        @foreach($properties as $property)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <span class="badge badge-success">For {{$property->type}}</span>
                <img class="card-img-top" src="{{asset('properties/'.$property->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$property->title}}</h5>
                    <p class="card-text">{{$property->description}}</p>
                    <p class="card-text">Price:: {{$property->price}}</p>
                    <a href="{{route('request-property',['id'=>$property->id])}}"
                        class="btn btn-block btn-primary">Request Property</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
