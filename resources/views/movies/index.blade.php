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
                <a href="{{ route('movies.edit', ['movie' => $movie->id]) }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">Edit</a>
                <form method="post" action="{{ route('movies.destroy', ['movie' => $movie->id]) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300
                    font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700
                    dark:focus:ring-red-900 cursor-pointer w-full">
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection