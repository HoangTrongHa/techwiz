@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/alogin.css') }}">
@endsection
@section("content")
<div id="alogin">
    <div class="container">
        <div class="login">
            <h1 class="login-title">HARA PETA Project 管理画面</h1>
            <p class="login-desc">ログイン</p>

            <form action="{{ route('post.login.admin') }}" method="POST" class="form-login">
                @csrf
                <div class="form-row">
                    <label for="" class="form-label">ID</label>
                    <div class="form-input">
                        <input type="text" name="email">
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="form-label">パスワード</label>
                    <div class="form-input">
                        <input type="password" name="password">
                    </div>
                </div>
                <div class="form-row">
                    @if($errors->any())
                        <div class="error"> {!! $errors->first() !!} </div>
                    @endif
                </div>
                <button class="button">ログイン</button> <br><br>
                <a href="{{ route('home') }}" class="button">サービストップへ</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/ad/login.js') }}"></script>
@endsection