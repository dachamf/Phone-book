{{--Add contact form page--}}
@extends('layouts.master')

@section('title')
    404 Not found!
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection

@section('content')
    <div class="content" style="text-align: center;">
        <h1>Oops, Page not found!</h1>
        <span style="text-align: center; font-size: 350px; font-weight: bold;">
            404
        </span>
        <h1>Back to <a href="{{ route('contact.index') }}">front page</a></h1>
    </div>
@endsection