@extends('layouts.app')
@section('navigation')
@include('components.nav')
@endsection
@section('content')


<div class="m-auto">
    <div class="mt-8 max-w-md m-auto">
        <h1 class="font-bold text-gray-900 text-3xl mb-3 ">Edit movie</h1>
        <form action="{{ route('movies.update', ['movie' => $movie->id]) }}" method="POST" class="p-5">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6">
                <label for="title" class="block">
                    <span class="text-gray-700">Title</span>
                    <input type="text" class="mt-1 block w-full form-input" placeholder="" name="title"
                        value="{{$movie->title}}">
                </label>
                <label for="description" class="block">
                    <span class="text-gray-700">Description</span>
                    <input type="text" class="mt-1 block w-full form-input" name="description"
                        value="{{$movie->description}}">
                </label>
                <label for="year" class="block">
                    <span class="text-gray-700">Year</span>
                    <input type="number" class="mt-1 block w-full form-input" min=" 1900" max="2099" step="1"
                        value="{{$movie->year}}" name="year" />
                </label>
                <div class="col-span-full">
                    <label for="image" class="block">
                        <span class="text-gray-700">Image</span>
                    </label>
                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                <label for="image"
                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="image" name="image" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 cursor-pointer">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection