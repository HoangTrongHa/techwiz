@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/mypage.css') }}">
@endsection
@section("content")
    <div class="container">
        <div class="wrapTitle">
            <span>
               Fitness Daily
            </span>
        </div>
        <div class="wrapTitleMyPage">
            <span>
                Let is start with us
            </span>
        </div>
        <div class="wrapVideoTitle">
            Three Basic Exercises To Advanced
        </div>
        <div class="wrapVideo">
            <div class="item">
                <div class="titleVideo">
                    Basic
                </div>
                <div class="video">
                    <div id="video1">

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="titleVideo">
                    More advanced
                </div>
                <div class="video">
                    <div id="video2">

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="titleVideo">
                    Increase more
                </div>
                <div class="video">
                    <div id="video3">

                    </div>
                </div>
            </div>
        </div>
            <div class="wrapTitleQuestion">
                <div class="titleQuestion">
                    Questionnaire
                </div>
                <div class="wrapContentQuestion">
                    Based on the results of this survey, we want to see what you can do to take better care of yourself, so please let us know your candid opinion. We are very happy.                </div>
            </div>
            <div class="wrapQuestionAndChanllen">
                <div class="wrapItemQuestion">
                    <div class="itemQuestion">
                        <div class="titleQuestion">
                            0 month
                        </div>
                        @if (Auth::user()->status_view == null)
                        <a href="{{ route('zero.one.question') }}" class="wrapLinkQuestion hide-button" id="oneMonths">
                            Answer the question
                        </a>
                        @else
                        <a href="#" class="wrapLinkQuestion hide-button" id="oneMonths" style="background: #cccccc">
                            Answered
                        </a>
                        @endif    
                    </div>
                    <div class="itemQuestion">
                        <div class="titleQuestion">
                            After 3 Months
                        </div>
                        @if (Auth::user()->status_view == 2 || Auth::user()->status_view == 3)
                        <a href="#" class="wrapLinkQuestion hide-button" id="oneMonths">
                            Answered
                        </a>
                        @else
                        <a href="{{ route('zero.one.question') }}" class="wrapLinkQuestion hide-button" id="oneMonths">
                            Answer the question
                        </a>
                        @endif    
                    </div>
                    <div class="itemQuestion">
                        <div class="titleQuestion">
                            After 6 months
                        </div>
                        @if (Auth::user()->status_view == 3)
                        <a href="#" class="wrapLinkQuestion hide-button" id="oneMonths">
                            Answered
                        </a>
                        @else
                        <a href="{{ route('zero.one.question') }}" class="wrapLinkQuestion hide-button" id="oneMonths">
                            Answer the question
                        </a>
                        @endif 
                    </div>
                </div>
                @if (Auth::user()->status_view == null)
                <div class="wrapUl" style="background: linear-gradient(to bottom, #72d0f4 25%, #3399ff 79%);">
                    <h4>Please tell us a little bit about you. Answer the questions by clicking the "Answer the question" button.</h4>
                   </div>
                    @else
                    <div class="wrapUl" style="background: linear-gradient(to bottom, #72d0f4 25%, #3399ff 79%);">
                        <h4>List Of Exercises</h4>
                        <div class="wrapList">
                            <ul class="blog-list">
                                @foreach ($categories as $item)
                                <li><a href="{{ route('program',$item->id) }}">{{ $item->name }}</a></li>
                                @endforeach
                              </ul>
                        </div>
                       </div>
                @endif
        </div>
    <input type="hidden" value="{{ $currentTime }}" id="currentTime">
    <input type="hidden" value="{{ $join_event }}" id="joinEvent">
    <input type="hidden" value="{{ $threeMonth }}" id="threeMonth">
    <input type="hidden" value="{{ $sixMonth }}" id="sixMonth">
@endsection

@section("script")
<script src="{{ asset('js/client/mypage.js') }}"></script>
@endsection
