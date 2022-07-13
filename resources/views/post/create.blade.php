@extends('layout.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">


      <div class="card my-4">

        
        <div class="card-body">
        <form action="/posts" method="post">
          @csrf 
          <!-- <input type="hidden" name="method" value="PUT"> -->
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">title</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="title" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descreption</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="10"> </textarea>
          </div>
          <button class="btn btn-success" type="submit">Create</button>

        </form>

          
        </div>
      </div>
      <div style="margin-bottom:300px"></div>
    </div>
  </div>
</div>

@endsection