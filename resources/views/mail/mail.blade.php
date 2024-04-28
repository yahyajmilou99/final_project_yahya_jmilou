@extends('layouts.index')

@section('content')
    <h1>Contact Form Submission</h1>

    <ul>
        <li>Name: {{ $data["name"] }}</li>
        <li>Email: {{ $data["email"] }}</li>
        <li>Message: {{ $data["message"] }}</li>
    </ul>
@endsection
