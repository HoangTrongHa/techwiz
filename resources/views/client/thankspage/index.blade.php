@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/thanksPage.css') }}">
@endsection
@section("content")
    <div class="container">
        <div id="thank">
            <h1 class="thank-title">HARA PETA Project</h1>
            <h5 class="thank-desc">送信ありがとうございました</h5>
            <p>資材到着までしばらくお待ちください。</p>
            <div class="form-link form-link-pt">
                <a href="{{ route('home') }}" class="button button-first">TOPへ戻る</a>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection