@extends('layout.base')

@section('title', 'Register of users')

@section('content')
    <form action="{{ route('saveName') }}" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">

            @if($errors->has('name'))
                @foreach($errors->get('name') as $error)
                    <strong class="error">{{ $error }}</strong>
                @endforeach
            @endif
        </div>

        <div class="field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            @if($errors->has('email'))
                @foreach($errors->get('email') as $error)
                    <strong class="error">{{ $error }}</strong>
                @endforeach
            @endif
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            @if($errors->has('password'))
                @foreach($errors->get('password') as $error)
                    <strong class="error">{{ $error }}</strong>
                @endforeach
            @endif
        </div>

        <div class="btn">
            <button type="submit">Send</button>
        </div>
    </form>

@endsection
