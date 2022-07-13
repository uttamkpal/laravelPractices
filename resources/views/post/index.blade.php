@extends('layout.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      @foreach($posts as $po)

      <div class="card my-4">

        
        <div class="card-body">
        <h3 class="card-title">{{$po->title}}</h3>
        <h6> {{$po->created_at}}  {{$po->updated_at}}</h6>
        <!-- <div class="card-text pb-4">{{$po->body}}</div> -->
        <a href=" {{url('/posts/' . $po->id)}} " class="btn btn-outline-success">Read More</a>
        <a href="{{url('/posts/' . $po->id . '/edit')}}" class="btn btn-success">Edit</a>
        <form action="{{route('posts.destroy', $po->id)}}" method="post" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="bg-red-900 text-white btn d-inline">Delete</button>
        </form>
        {{-- <a href="{{url('/posts/'. $po->id)}}" class="btn btn-danger">Delete</a> --}}
        </div>
      </div>

      @endforeach
      <div class="text-center flex">
        {{ $posts->links() }}
      </div>

      <div class="w-full bg-green-800 py-3 text-center text-white">
        <a href="posts/create" class="text-white hover:text-green-900">Add New Post</a>
      </div>
      <div style="margin-bottom:300px"></div>
      
    </div>
  </div>
</div>

@endsection