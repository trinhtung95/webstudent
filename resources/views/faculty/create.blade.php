@extends('layouts.master')
@section('title')

@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="">Faculty</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Faculty</li>
        </ol>
    </nav>
    @include('faculty.form')
@endsection