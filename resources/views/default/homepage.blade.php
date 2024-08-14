@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    @include("partials.register")

    @include("content.proposed-jobs")

    @include("content.tags-jobs")

    @include("content.older-jobs")
@endsection
