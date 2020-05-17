@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
    <h1>Contact page</h1>

    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" id="subject" name="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Текст сообщения</label>
            <textarea id="message" name="message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
