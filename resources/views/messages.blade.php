@extends('layouts.app')

@section('title', 'All messages')

@section('content')
    <h1>All messages</h1>

    @foreach($data as $elem)
        <div class="alert alert-info">
            <h3>{{ $elem->subject }}</h3>
            <p><a href="mailto:{{ $elem->email }}">{{ $elem->email }}</a></p>
            <small>{{ $elem->created_at }}</small>

            <a href="{{ route('home') }}" class="btn btn-outline-warning ml-5">View more</a>
        </div>
    @endforeach
@endsection
