<!-- Stored in resources/views/layout.blade.php -->
<html>
    <head>
        <title>@yield('title')</title>

        @section('meta_tags')
            <meta property="og:type" content="website" />
        @show

        @section('styles')
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
        @show

        @section('scripts')
            <script src="{{ url('/js/bundle.min.js') }}"></script>
        @show
    </head>
    <body>
        @yield('content')
    </body>
</html>


<!-- Stored in resources/views/child.blade.php -->
@extends('app')
@section('title', 'About Us')

@section('scripts')
    @parent
    <script src="{{ url('/js/analytics.js') }}"></script>
@show

@section('content')
    <p>This is my body content.</p>
@endsection


Comment in blade
{{-- This comment will not be present in the rendered HTML --}}


<!-- if statements -->
@if (count($posts) === 1)
    Single Post
@elseif (count($posts) > 1)
    I have multiple posts!
@else
    I don't have any post!
@endif


<!-- loops -->
@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor

@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse

@while (true)
    <p>I'm looping again and again.</p>
@endwhile

@foreach ($posts as $post)

    @if ($post->type == 1)
        @continue
    @endif

    @if ($user->type == 5)
        @break
    @endif

    <li>{{ $post->title }}</li>

@endforeach

<!-- Alternatively -->
@foreach ($posts as $post)

    @continue($post->type == 1)
    @break($post->type == 5)

    <li>{{ $post->title }}</li>

@endforeach


<!-- using php -->
@php
    $variable = "this is php";
@endphp


<!-- use for stacks -->
@push('scripts')
    <script src="/laravel.js"></script>
@endpush


<!-- unless  -->
@unless (Auth::check())
    You are not signed in.
@endunless


<!-- random syntax  -->
@isset($records)
    // $records is defined and is not null...
@endisset

@empty($records)
    // $records is "empty"...
@endempty

@auth
    // The user is authenticated...
@endauth

@guest
    // The user is not authenticated...
@endguest

@switch($i)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break

    @default
        Default case...
@endswitch
