@extends('layouts.app')

@section('title', 'All messages')

@section('content')
    <h1>All messages</h1>

    @foreach($data as $elem)
        <div class="alert alert-info">
            <h3>{{ $elem->subject }}</h3>
            <p><a href="mailto:{{ $elem->email }}">{{ $elem->email }}</a></p>
            <small>{{ $elem->created_at }}</small>

            <a href="{{ route('contact-data-message', $elem->id) }}" class="btn btn-outline-warning ml-5">View more</a>
            <a href="{{ route('contact-data-update', $elem->id) }}" class="btn btn-outline-primary ml-2">Edit</a>
        </div>
    @endforeach
@endsection
