@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/searchid.css') }}">
@endsection
@section("content")
<div id="searchid">
    <div class="container">
        <div class="login">
            <h1 class="login-title">HARA PETA Project</h1>
            <p class="login-desc">会員ID検索</p>

            <form action="{{ route('postSearchId') }}" class="form-login form-search" method="POST">
                @csrf
                @method('POST')
                <div class="form-row">
                    <label for="" class="form-label">お名前（カナ）</label>
                    <div class="form-input">
                        <input type="text" name="name">
                        <!-- <span class="error">空であってはなりません</span> -->
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="form-label">
                        カロママプラスお問い合わせ番号
                        <p style="font-size: 14px" class="mb-0">確認方法は<a href="">こちら</a></p>
                    </label>
                    <div class="form-input">
                        <input type="text" name="code">
                        <!-- <span class="error">空であってはなりません</span> -->
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="form-label">
                        メールアドレス
                        <p style="font-size: 14px" class="mb-0">カロママプラスに登録済みのもの</p>
                    </label>
                    <div class="form-input">
                        <input type="text" name="email">
                        <!-- <span class="error">空であってはなりません</span> -->
                    </div>
                </div>
                    <p class="search-error">
                        @if($errors->any())
                            <div class="error"> {!! $errors->first() !!} </div>
                        @endif
                    </p>
                <button class="button">検索する</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/client/searchform.js') }}"></script>
@endsection