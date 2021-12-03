@extends('layouts.main')

@section('container')
    <h1>Hello About!</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="images/{{ $image }}" alt="{{ $name }}" width="150px">
@endsection
