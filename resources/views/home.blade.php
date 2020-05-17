@extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <h1>Main page</h1>

    <p>Lorem</p>
@endsection

@section('aside')
    @parent

    <p>Дополнительный текст</p>
@endsection