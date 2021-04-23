@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/thanksPage.css') }}">
@endsection
@section("content")
    <div class="container">
        <div id="thank">
            <h1 class="thank-title">HARA PETA Project</h1>
            <h5 class="thank-desc">送信ありがとうございました</h5>
            <div class="form-link form-link-pt">
                <a href="{{ route('myPage') }}" class="button button-first">マイページへ戻る</a>
                <div></div>
                <a href="{{ route('home') }}" class="button">TOPへ戻る</a>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection