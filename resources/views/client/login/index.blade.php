@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/login.css') }}">
@endsection
@section("content")
<div id="login">
    
    <div class="container">
        <div class="login">
            <h1 class="login-title">HARA PETA Project</h1>
            <p class="login-desc">Member Login</p>

            <form method="POST" action="{{ route('post.login') }}" class="form-login">
                @csrf
                <div class="form-row">
                    <label for="" class="form-label">Caromama Plus ID</label>
                    <div class="form-input">
                        <input type="text" name="code">
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="form-label"></label>
                    <div class="form-input">
                        <a href="{{ route('search') }}" class="note">Those who do not know the Caromama Plus ID</a>
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="form-label">Password</label>
                    <div class="form-input">
                        <input type="password" name="password">
                    </div>
                </div>
                <div class="form-row">
                    @if($errors->any())
                        <div class="error"> {!! $errors->first() !!} </div>
                    @endif
                </div>
                <button type="submit" class="button">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/client/login.js') }}"></script>
@endsection
