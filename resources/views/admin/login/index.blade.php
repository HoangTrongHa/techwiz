@extends('admin.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/alogin.css') }}">
@endsection
@section("content")
<div id="alogin">
    <div class="container">
        <div class="login">
           
            <p class="login-desc">Login</p>

            <form action="{{ route('post.login.admin') }}" method="POST" class="form-login">
                @csrf
                <div class="form-row">
                    <label for="" class="form-label">Email</label>
                    <div class="form-input">
                        <input type="text" name="email">
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
                <button class="button">Login</button> <br><br>
                <a href="{{ route('home') }}" class="button">To service top</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/ad/login.js') }}"></script>
@endsection
