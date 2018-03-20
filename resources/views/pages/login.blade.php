@extends('layout')
@section('content')
<div class="card card-container">
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
    <p id="profile-name" class="profile-name-card"></p>

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
        {{$err}}
        <br>
        @endforeach
    </div>
    @endif
    
    @if(Session::has('error'))
    <div class="alert alert-danger">
        {{Session::get('error')}}
    </div>
    @endif
    
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    <form class="form-signin" method="post">
        @csrf
        <input type="email" name="email" class="form-control" placeholder="Email address" required>
        
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Sign in</button>
    </form>
    <a href="#" class="forgot-password">
        Forgot the password?
    </a>
</div>
@endsection

@section('title','Đăng nhập')