@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/info.css') }}">
@endsection
@section("content")
<form action="{{ route('user.postInfo') }}" id="inforQuestion" method="POST">
    @csrf
    @method('POST')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="content-header">
                        <h1 class="content-title">
                            0ヵ月時点
                        </h1>
                        <p class="content-desc">
                            あなた自身についてお伺いします。あてはまるものを選択してください。
                        </p>
                    </div>
    
                    <!-- Form -->
                    <div class="content-body">
                            <div class="form-row">
                                <div class="form-left">年齢：</div>
                                <div class="form-right">
                                    <input type="number" name="age">歳
                                </div>
                            </div>
                            <div class="textError">
                                <label id="age-error" class="error" for="age" style="color:red"></label>
                            </div>
                            <div class="form-row">
                                <div class="form-left">婚姻の有無：</div>
                                <div class="form-right">
                                    <div>
                                        <label>
                                             <input name="relation" type="radio" value="既婚">
                                    既婚</label>
                                    </div>                                        
                                    <div>
                                        <label>
                                            <input name="relation" type="radio" value="未婚">
                                            未婚</label>
                                        
                                    </div>
                                    <div>
                                        <label>
                                            <input name="relation" type="radio" value="離別または死別">
                                            離別または死別</label>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="textError">
                                <label id="relation-error" class="error" for="relation" style="color:red"></label>           
                            </div>
                            <div class="form-row">
                                <div class="form-left">同居人：</div>
                                <div class="form-right">
                                    <span>
                                        <input name="roommate" type="radio" value="配偶者">配偶者
                                    </span>
                                    <span>
                                        <input name="roommate" type="radio" value="父">父
                                    </span>
    
                                    <span>
                                        <input name="roommate" type="radio" value="母">母
                                    </span>
                                    <span>
                                        <input name="roommate" type="radio" value="子">子
                                    </span>
                                    <span>
                                        <input name="roommate" type="radio" value="孫">孫
                                    </span>
                                    <span>
                                        <input name="roommate" type="radio" value="その他">その他
                                    </span>
                                    <span>
                                        <input name="roommate" type="radio" value="なし">なし
                                    </span>
                                </div>
                            </div>
                            <div class="textError">
                                <label id="roommate-error" class="error" for="roommate" style="color:red"></label>           
                            </div>
                            <div class="form-row">
                                <div class="wrapHistory">
                                    <div class="form-left">食事療法歴:</div>
                                    <div class="form-right">
                                        <div class="wrapInput">
                                            <div class="itemInput">
                                                <input type="radio" value="なし" name="historyRadio" id="radioHistoryOne">
                                                <label for="radioHistoryOne">なし</label>
                                            </div>
                                            <div class="itemInput">
                                                <input type="radio" value="あり" name="historyRadio" id="radioHistoryTwo" class="btnYes">
                                                <label for="radioHistoryTwo">あり</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row" >
                                <div class="wrapHistory">
                                    <div class="form-left"></div>
                                    <div class="form-right">
                                        <div class="wrapInputSelec">
                                            <div class="itemInput">
                                                <select name="yearpicker" class="yearpicker" id="yearpicker"></select>
                                                <span class="mb-0">年</span>
                                            </div>
                                            <div class="itemInput">
                                                <select name="monthPicker" class="monthPicker" id="monthPicker"></select>
                                                <span class="mb-0">ヵ月</span>
                                            </div>
                                            
                                        </div>
                                        <div class="wrapInputHistory">
                                            <span>中断</span>
                                            <input type="text" name="delayDay" class="delayDay" id="delayDay">
                                            <span>年</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="textError">
                            </div>
                            <div class="form-row">
                                <div class="wrapHistory">
                                    <div class="form-left">低たんぱく食歴:</div>
                                    <div class="form-right">
                                        <div class="wrapInput">
                                            <div class="itemInput">
                                                <input type="radio" value="なし" name="diet" id="dietOne">
                                                <label for="dietOne">なし</label>
                                            </div>
                                            <div class="itemInput">
                                                <input type="radio" value="あり" name="diet" id="dietTwo" class="diet">
                                                <label for="dietTwo">あり</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row" >
                                <div class="wrapHistory">
                                    <div class="form-left"></div>
                                    <div class="form-right">
                                        <div class="wrapInputSelec">
                                            <div class="itemInput">
                                                <select name="yearpickerDiet" class="yearpicker" id="yearpickerDiet"></select>
                                                <span>年</span>
                                            </div>
                                            <div class="itemInput">
                                                <select name="monthPickerDiet" class="monthPicker" id="monthPickerDiet"></select>
                                                <span>ヵ月</span>
                                            </div>
                                            
                                        </div>
                                        <div class="wrapInputHistory">
                                            <span>中断</span>
                                            <input type="text" name='delayDayDiet'class="delayDay" id="delayDayDiet">
                                            <span>年</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="textError">
                            </div>
                            <div class="form-row">
                                <div class="form-left">調理担当者</div>
                                <div class="form-right">
                                    <span>
                                        <input id="cooking1" name="cooking" type="radio" value="本人">本人
                                        <label for="cooking1">その他</label>
                                    </span>
                                    <span>
                                        <input id="cooking2" name="cooking" type="radio" value="家族">家族
                                        <label for="cooking2">その他</label>
                                    </span>
                                    <span>
                                        <input id="cooking3" name="cooking" type="radio" value="その他" id="cooking">
                                        <label for="cooking3">その他</label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-link">
                                <button class="backButton" onclick="goBack()" type="button">戻って</button>
                                <button class="form-link-primary" type="submit">次へ</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

@section("script")
<script src="{{ asset('js/client/infordiet.js') }}"></script>
@endsection