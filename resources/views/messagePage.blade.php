@extends('layouts.app')

@section('title', $data->subject)

@section('content')
    <h1>{{ $data->subject }}</h1>
    <p>
        from {{ $data->name }} <a href="mailto:{{ $data->email }}">{{ $data->email }}</a><br/>
        <small>{{ $data->created_at }}</small>
    </p>

    <p>{{ $data->message }}</p>
@endsection
