@extends('layout.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      @foreach($post as $po)

      <div class="card my-4">

        
        <div class="card-body">
        <h3 class="card-title">{{$po->title}}</h3>
        <h6> {{$po->created_at}}  {{$po->updated_at}}</h6>
        <div class="card-text pb-4">{{$po->body}}</div>
        <a href="{{url()->previous()}}" class="btn btn-primary">Go Back</a>
        </div>
      </div>

      @endforeach
      <div style="margin-bottom:300px"></div>
    </div>
  </div>
</div>

@endsection