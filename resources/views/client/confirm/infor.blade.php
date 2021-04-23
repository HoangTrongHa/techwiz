@extends('client.app')
@section('css')
    <link rel="stylesheet" href="{{asset("assets/css/client/confirmInfor.css")}}">
@endsection
@section("content")
    <div class="wrapConfirmInfor container">
        <div class="wrapTitle">
            <div class="titleBig">
                HARA PETA Project
            </div>
            <div class="titleSmall">
                送付先情報入力
            </div>
        </div>
        <form action="{{ route("postInforUser") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
                <div class="wrapForm">
                    <div class="title">
                        <div>
                            氏名
                        </div>
                    </div>
                    <div class="answer">
                        <div>
                            {{ $dataInfor['name'] }}
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">
                        <div>
                            メールアドレス
                        </div>
                    </div>
                    <div class="answer">
                        <div>
                            {{ $dataInfor['email'] }}
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">
                        <div class="wrapPhoneNumber">
                            <div class="spanTitle">
                                日中連絡可能な電話番号

                            </div>
                            <div class="tutorialTitle">
                                ハイフン無し
                            </div>
                        </div>
                    </div>
                    <div class="answer">
                        <div>
                            {{ $dataInfor['phoneNumber'] }}
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">
                        <div>
                            送付先住所
                        </div>
                    </div>
                    <div class="answer">
                        <div class="wrapAnswer">
                            <div class="titleAnswer">
                                事便番号
                            </div>
                            <div class="textAnswer">
                                {{ $dataInfor['zipCode'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">    
                    </div>
                    <div class="answer">
                        <div class="wrapAnswerCity">
                            <div class="wrapDistrict">
                                <div class="titleAnswer">
                                    地区名
                                </div>
                                <div class="textAnswer">
                                    {{ $dataInfor['district'] }}
                                </div>
                            </div>
                            <div class="wrapDistrict">
                                <div class="titleAnswer">
                                    市の名前
                                </div>
                                <div class="textAnswer">
                                    {{ $dataInfor['city'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">
                       
                    </div>
                    <div class="answer">
                        <div class="wrapAnswer">
                            <div class="titleAnswer">
                                番地等

                            </div>
                            <div class="textAnswer">
                                {{ $dataInfor['address'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">
                       
                    </div>
                    <div class="answer">
                        <div class="wrapAnswer">
                            <div class="titleAnswer">
                                建物名
                            </div>
                            <div class="textAnswer">
                                {{ $dataInfor['builDing'] }}
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
@endsection

@section("script")

@endsection