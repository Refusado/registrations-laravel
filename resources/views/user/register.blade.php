@extends('layout.base')

@section('title', 'Register of users')

@section('content')
    <form action="{{ route('saveName') }}" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div class="btn">
            <button type="submit">Send</button>
        </div>
    </form>

@endsection
