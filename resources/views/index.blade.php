@extends('layouts.app')
@section('navigation')
@include('components.nav')
@endsection
@section('content')
<div class="container mx-auto my-5">
    <div class="grid grid-cols-4 gap-4">
        <div class="rounded overflow-hidden shadow-lg">
            <div class="p-2">
                <h1 class="font-bold  text-gray-900 text-3xl ">Ant-Man</h1>
                <p class="text-lg ">
                    Movie of Ant-Man</p>
                <div class=""><img src="{{ url('storage/images/ant_man_ver3_xlg.jpg') }}" alt="" title="" width="">
                </div>
                <p class="text-sm">2008</p>
            </div>
        </div>
    </div>
</div>
@endsection