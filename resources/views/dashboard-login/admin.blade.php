@extends('dashboard-login.layouts.main')
@section('container')
<div class="container">
    <h1>{{$title}}</h1>
    <form action="/login" method="post">
        @csrf
        @if(session()->has('loginError'))
            <div class="form-control">
                <input type="text" name="username" placeholder="{{session('loginError')}}" required autofocus>
                <label>Username</label>
            </div>
            <div class="form-control">
                <input type="password" name="password" required autofocus>
                <label>Password</label>
            </div>
            <input type="submit" class="btn">
            <p style="text-align: center;color:red;margin-top:10px">Login Failed</p>
        @else
            <div class="form-control">
                <input type="text" name="username" placeholder="{{session('loginError')}}" required autofocus>
                <label>Username</label>
            </div>
            <div class="form-control">
                <input type="password" name="password" required autofocus>
                <label>Password</label>
            </div>
            <input type="submit" class="btn">
        @endif
    </form>
</div>
@endsection