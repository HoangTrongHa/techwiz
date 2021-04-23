<div class="container topmenu">
    <div class="wrapHeader">
        <div class="headerLeft">
            <a href="{{ route("home") }}"><img src="{{ asset("images/kowa_logo.svg") }}" alt="kowa"></a>
        </div>
        @if ( Auth::check() == false)
            <div class="headerRight hide-tl">
                <div class="navBar">
                    <a class="headerLink" href="{{ route('login') }}">
                        今すぐ参加
                    </a>
                    <a class="headerLink" href="{{ route("myPage") }}">
                        メンバーページ
                    </a>
                    <a class="headerLink">
                        お問い合わせ
                    </a>
                </div>
            </div>
        @elseif (Request::is('admin/*'))
                    <div class="headerRight hide-tl">
                        <div class="navBar">
                            <a class="headerLink" href="{{ route('login') }}">
                                今すぐ参加
                            </a>
                            <a class="headerLink" href="{{ route("myPage") }}">
                                メンバーページ
                            </a>
                            <a class="headerLink">
                                お問い合わせ
                            </a>
                        </div>
                    </div>
                @else 
                    <div class="headerRight hide-tl">
                        <div class="navBar">
                            <a class="headerLink" href=" {{ route('information') }}">
                                会員ID: {{ Auth::user()->code }}
                            </a>
                            <a class="headerLink" href="#">
                                お問い合わせ
                            </a>
                            <a class="headerLink" href="{{ route('logout') }}">
                                ログアウト
                            </a>
                        </div>
                    </div>
        @endif

        <div class="icon-menu hide-pc">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<div class="menu-tl hide-pc">
    <div class="icon-menu">
        <div class="top"></div>
        <div class="mid"></div>
        <div class="bot"></div>
    </div>
    <div class="menu-content">
        @if ( Auth::check() == false)
            <div class="headerRight">
                <div class="navBar">
                    <a class="headerLink" href="{{ route('login') }}">
                        今すぐ参加
                    </a>
                    <a class="headerLink" href="{{ route("myPage") }}">
                        メンバーページ
                    </a>
                    <a class="headerLink">
                        お問い合わせ
                    </a>
                </div>
            </div>
        @elseif (Request::is('admin/*'))
                    <div class="headerRight">
                        <div class="navBar">
                            <a class="headerLink" href="{{ route('login') }}">
                                今すぐ参加
                            </a>
                            <a class="headerLink" href="{{ route("myPage") }}">
                                メンバーページ
                            </a>
                            <a class="headerLink">
                                お問い合わせ
                            </a>
                        </div>
                    </div>
                @else 
                    <div class="headerRight">
                        <div class="navBar">
                            <a class="headerLink" href=" {{ route('information') }}">
                                会員ID: {{ Auth::user()->code }}
                            </a>
                            <a class="headerLink" href="#">
                                お問い合わせ
                            </a>
                            <a class="headerLink" href="{{ route('logout') }}">
                                ログアウト
                            </a>
                        </div>
                    </div>
        @endif
    </div>
</div>

{{-- <div class="topmenuSp">
    <div class="wrapHeader">
        <div class="headerLeft">
            <a href="{{ route("home") }}" id="h1_kowa_logo"><img src="{{ asset("images/kowa_logo.svg") }}" width="178" height="77" alt="kowa"></a>
        </div>
        <div class="menuInner">
            <div class="menu">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
        </div>
    </div>
</div> --}}

