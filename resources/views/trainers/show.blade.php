@extends('Layouts.app')
@section('title', 'Trainer')
@section('content')
   <p>BD</p>
   <img style="heigth: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" 
                class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Card image cap">
   <div class="text-center">
      <h5 class="card-title">{{$trainer->name}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

   </div>
@endsection