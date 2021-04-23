@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/mypage.css') }}">
@endsection
@section("content")
    <div class="container">
        <div class="wrapTitle">
            <span>
                HARA PETA Project
            </span>
        </div>
        <div class="wrapTitleMyPage">
            <span>
                マイページへようこそ
            </span>
        </div>
        <div class="wrapVideoTitle">
            動画コンテンツ
        </div>
        <div class="wrapVideo">
            <div class="item">
                <div class="titleVideo">
                    基礎編
                </div>
                <div class="video">
                    <div id="video1">
                   
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="titleVideo">
                    応用編
                </div>
                <div class="video">
                    <div id="video2">
                   
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="titleVideo">
                    FAQ編
                </div>
                <div class="video">
                    <div id="video3">
                   
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapTitleQuestion">
            <div class="titleQuestion">
                アンケート
            </div>
            <div class="wrapContentQuestion">
                皆様がより良いセルフケアを行うために、どのようなお手伝いをすればよいかを、この調査結果を基に検討していきたいと考えておりますので、 皆様の率直なご意見をお聞かせ下されば幸いです。
            </div>
        </div>
        <div class="wrapItemQuestion">
            <div class="itemQuestion">
                <div class="titleQuestion">
                    0ヶ月
                </div>
                    <a href="{{ route('zero.one.question') }}" class="wrapLinkQuestion hide-button" id="oneMonths">
                        質問に答えて
                    </a>
              
            </div>
            <div class="itemQuestion">
                <div class="titleQuestion">
                    3ヶ月
                </div>
                    <a href="{{ route('zero.two.question') }}" class="wrapLinkQuestion hide-button" id="twoMonths">
                        質問に答えて
                    </a>
            </div>
            <div class="itemQuestion">
                <div class="titleQuestion">
                    6ヶ月
                </div>
                    <a href="" class="wrapLinkQuestion hide-button" id="threeMonths">
                        質問に答えて
                    </a>
            </div>
    </div>
    <input type="hidden" value="{{ $currentTime }}" id="currentTime">
    <input type="hidden" value="{{ $join_event }}" id="joinEvent">
    <input type="hidden" value="{{ $threeMonth }}" id="threeMonth">
    <input type="hidden" value="{{ $sixMonth }}" id="sixMonth">
@endsection

@section("script")
<script src="http://www.youtube.com/player_api"></script>
<script src="{{ asset('js/client/mypage.js') }}"></script>
@endsection