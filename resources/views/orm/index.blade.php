@extends('layout.app')

@section('content')
    @foreach ($flights as $flight)
        <div class="my-4">
            <h2 class="font-large">{{$flight->name}}</h2>
            {{-- <p>{{$flight->description}}</p>
            <p>{{$flight->company}}</p>
            <p>{{$flight->address}}</p>
            <p>{{$flight->mobile}}</p>
            <p>{{$flight->created_at}}</p>
            <p>{{$flight->updated_at}}</p> --}}
        </div> 
    @endforeach
    <div class="my-4">
        {{-- <h2 class="font-large">{{$flight->name}}</h2> --}}
    </div>
@endsection