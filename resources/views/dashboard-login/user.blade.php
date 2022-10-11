@extends('dashboard-login.layouts.main')
@section('container')
<div class="container">
    <h1>{{$title}}</h1>
    <form action="/login/user" method="POST">
        @csrf
        <div class="form-control">
            <input type="text" name="username" required autofocus>
            <label>Username</label>
        </div>
        <div class="form-control">
            <input type="password" name="password" required autofocus>
            <label>Password</label>
        </div>
        <input type="submit" class="btn"/>
        <p class="text">Login as <a href="/login/admin">Admin</a></p>
    </form>
</div>
@endsection