@extends('layout.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      
      @foreach($post as $po)

      <div class="card my-4">

        
        <div class="card-body">
        <form action="{{route('posts.update', $po->id)}}" method="post">
          @method('PUT')

          @csrf 
          <!-- <input type="hidden" name="method" value="PUT"> -->
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title" value=" {{$po->title}} ">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descreption</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="10"> {{$po->body}} </textarea>
          </div>
          <button class="btn btn-success" type="submit">Update</button>

        </form>

          
        </div>
      </div>

      @endforeach
      <div style="margin-bottom:300px"></div>
    </div>
  </div>
</div>

@endsection