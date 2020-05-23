@extends('layouts.app')

@section('title', 'Updating ' . $data->subject)

@section('content')
    <h1>Editing message {{ $data->subject }}</h1>
    <form action="{{ route('contact-update', $data->id) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $data->name }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $data->email }}">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" id="subject" name="subject" class="form-control" value="{{ $data->subject }}">
        </div>

        <div class="form-group">
            <label for="message">Текст сообщения</label>
            <textarea id="message" name="message" class="form-control">{{ $data->message }}</textarea>
        </div>

        <button type="submit" class="btn btn-outline-primary">Update</button>
        <a href="{{ route('contact-delete', $data->id) }}" class="btn btn-outline-danger ml-2">Delete</a>
    </form>
@endsection
