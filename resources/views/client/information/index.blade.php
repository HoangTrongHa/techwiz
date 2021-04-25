@extends('client.app')
@section('css')
    <link rel="stylesheet" href="{{asset("assets/css/client/information.css")}}">
@endsection
@section("content")
    <div class="container wrappInformation">
        <div class="titleInforMation">
            <span>
                HARA PETA Project
            </span>
        </div>
        <div class="titleSmall">
            送付先情報入力
        </div>
        <div class="wrappFormInformation">
            <form action="{{ route('postInfor') }}" id="informationForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            氏名
                        </span>
                    </div>
                    <div class="wrapInputSpan">
                        <input type="text" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            メールアドレス
                        </span>
                    </div>
                    <div class="wrapInputSpan">
                        <input type="email" id="email" name="email" value="{{ old('email')}}">
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            メールアドレス
                        </span>
                        <div class="mailConfirm">
                            確認
                        </div>
                    </div>
                    <div class="wrapInputSpan">
                        <input type="text" name="emailConfirm" value="{{ old('emailConfirm')}}">
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            日中連絡可能な電話番号
                        </span>
                        <br>
                        <div class="mailConfirm">
                            ハイフン無し
                        </div>
                    </div>
                    <div class="wrapInputSpan">
                        <input type="number" name="phoneNumber" class="uintTextBox" value="{{ old('phoneNumber')}}" />&nbsp;<span class="errmsg" style="color: red;font-weight:100"></span>
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            送付先住所
                        </span>
                        <br>
                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="textTopInput">
                                事便番号
                            </div>
                            <input type="number" name="zipCode" class="uintTextBox2"  value="{{ old('zipCode')}}"/>&nbsp;<span class="errmsg2" style="color: red;font-weight:100"></span>

                        </div>
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">

                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="wrapText">
                                <div class="textTopInput">
                                    地区名
                                </div>
                                <div class="textTopInput">
                                    市の名前
                                </div>
                            </div>
                            <div class="wrapOption">
                                <select class="prefectures" name="district" value=" {{ old('district') }}">
                                    @foreach ($dataPrefectures as $item)
                                    {{-- <option value="{{ $item->kanji }}">
                                        {{ $item->kanji }}
                                    </option> --}}
                                    @if (old('district') == $item)
                                        <option value="{{ $item->kanji }}" selected>{{ $item->kanji }}</option>
                                    @else
                                        <option value="{{ $item->kanji }}">{{ $item->kanji }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <div class="inforCity">
                                    <input type="text" name="city" value="{{ old('city') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">

                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="textTopInput">
                                番地等
                            </div>
                            <div class="wrapOption">
                                <div class="inforCity">
                                    <input type="text" name="address"  value="{{ old('address') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">

                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="textTopInput">
                                建物名
                            </div>
                            <div class="wrapOption">
                                <div class="inforCity">
                                    <input type="text" name="builDing" value="{{ old('builDing') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-link">
                    <button onclick="goBack()" type="button">戻って</button>
                    <button class="form-link-primary" type="submit">継続する</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
<script src="{{ asset('js/client/information.js') }}">

</script>
@endsection
