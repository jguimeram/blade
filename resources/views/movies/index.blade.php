@extends('layouts.app')
@section('navigation')
@include('components.nav')
@endsection
@section('content')

<div class="container mx-auto my-5">
    <div class="grid grid-cols-4 gap-4">
        @foreach ($movies as $movie )
        <div class="rounded overflow-hidden shadow-lg">
            <div class="p-2">
                <h1 class="font-bold  text-gray-900 text-3xl ">{{$movie->title}}</h1>
                <p class="text-lg ">
                    {{$movie->description}}
                </p>
                <div class=""><img src="{{url($movie->image)}}" alt="" title="" width="">
                </div>
                <p class="text-sm">{{$movie->year}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection