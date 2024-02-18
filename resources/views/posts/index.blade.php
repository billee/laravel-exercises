@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-semibold text-gray-800 dark:text-white">Posts</h1>


        this is the slot section
        <!-- Here you can loop through your posts and display them -->
        {{-- @foreach ($posts as $post)
            <div class="mt-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->title }}</h2>
                <p class="mt-2 text-gray-600 dark:text-gray-300">{{ $post->body }}</p>
            </div>
        @endforeach --}}
    </div>
@endsection
