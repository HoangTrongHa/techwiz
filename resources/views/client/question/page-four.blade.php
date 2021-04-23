@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/question-list.css') }}">
@endsection
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content">
                <div class="content-header">
                    <h1 class="content-title">
                        0ヵ月時点
                    </h1>
                    <p class="content-desc">
                        次のような人があなたの周りにいますか？当てはまる項目を選択して下さい。
                    </p>
                </div>

                <!-- Form -->
                <div class="content-body">
                    <form class="question">
                        <table class="table table-bordered hide-on-mb">
                            <thead>
                                <tr>
                                    <td rowspan="2" class="question-w-40"></td>
                                    <td class="table-w">いつもそうである</td>
                                    <td class="table-w">まあそうである</td>
                                    <td class="table-w">そうではない</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>感情的になる自分が恥ずかしい方である</td>
                                    <td><input type="radio" name="qqq1" value="1" id=""></td>
                                    <td><input type="radio" name="qqq1" value="2" id=""></td>
                                    <td><input type="radio" name="qqq1" value="3" id=""></td>
                                </tr>
                                <tr>
                                    <td>どちらかと言うと人に頼られる方である</td>
                                    <td><input type="radio" name="qqq2" value="1" id=""></td>
                                    <td><input type="radio" name="qqq2" value="2" id=""></td>
                                    <td><input type="radio" name="qqq2" value="3" id=""></td>
                                </tr>
                                <tr>
                                    <td>感情的にならない自分に安心感がある</td>
                                    <td><input type="radio" name="qqq3" value="1" id=""></td>
                                    <td><input type="radio" name="qqq3" value="2" id=""></td>
                                    <td><input type="radio" name="qqq3" value="3" id=""></td>
                                </tr>
                                <tr>
                                    <td>人に弱音を吐きたくないほうである</td>
                                    <td><input type="radio" name="qqq4" value="1" id=""></td>
                                    <td><input type="radio" name="qqq4" value="2" id=""></td>
                                    <td><input type="radio" name="qqq4" value="3" id=""></td>
                                </tr>
                                <tr>
                                    <td>自立している自分に安心感がある</td>
                                    <td><input type="radio" name="qqq5" value="1" id=""></td>
                                    <td><input type="radio" name="qqq5" value="2" id=""></td>
                                    <td><input type="radio" name="qqq5" value="3" id=""></td>
                                </tr>
                                <tr>
                                    <td>依存的になる自分に許せないとか、恥ずかしさを感じる</td>
                                    <td><input type="radio" name="qqq6" value="1" id=""></td>
                                    <td><input type="radio" name="qqq6" value="2" id=""></td>
                                    <td><input type="radio" name="qqq6" value="3" id=""></td>
                                </tr>
                                <tr>
                                    <td>弱い自分を見せたくない方である</td>
                                    <td><input type="radio" name="qqq7" value="1" id=""></td>
                                    <td><input type="radio" name="qqq7" value="2" id=""></td>
                                    <td><input type="radio" name="qqq7" value="3" id=""></td>
                                </tr>
                                <tr>
                                    <td>人に頼るのは苦手である</td>
                                    <td><input type="radio" name="qqq8" value="1" id=""></td>
                                    <td><input type="radio" name="qqq8" value="2" id=""></td>
                                    <td><input type="radio" name="qqq8" value="3" id=""></td>
                                </tr>
                                <tr>
                                    <td>自分の感情や気持ちがわからなくなることがある</td>
                                    <td><input type="radio" name="qqq9" value="1" id=""></td>
                                    <td><input type="radio" name="qqq9" value="2" id=""></td>
                                    <td><input type="radio" name="qqq9" value="3" id=""></td>
                                </tr>
                                <tr>
                                    <td>理由の分からない下痢、便秘、頭痛、腰痛、肩こり、アレルギーなど慢性的な身体症状がある</td>
                                    <td><input type="radio" name="qqq10" value="1" id=""></td>
                                    <td><input type="radio" name="qqq10" value="2" id=""></td>
                                    <td><input type="radio" name="qqq10" value="3" id=""></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="question-mobile-list hide">
                            <!-- Question mobile -->
                            <ul class="question-mobile">
                                <li class="question-title">
                                    感情的になる自分が恥ずかしい方である
                                </li>
                                <li>
                                    <input type="radio" name="" value="いつもそうである"><label for="">いつもそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="まあそうである"><label for="">まあそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="そうではない"><label for="">そうではない</label>
                                </li>
                            </ul>
                            <!-- Question mobile -->
                            <ul class="question-mobile">
                                <li class="question-title">
                                    どちらかと言うと人に頼られる方である
                                </li>
                                <li>
                                    <input type="radio" name="" value="いつもそうである"><label for="">いつもそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="まあそうである"><label for="">まあそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="そうではない"><label for="">そうではない</label>
                                </li>
                            </ul>
                            <!-- Question mobile -->
                            <ul class="question-mobile">
                                <li class="question-title">
                                    感情的にならない自分に安心感がある
                                </li>
                                <li>
                                    <input type="radio" name="" value="いつもそうである"><label for="">いつもそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="まあそうである"><label for="">まあそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="そうではない"><label for="">そうではない</label>
                                </li>
                            </ul>
                            <!-- Question mobile -->
                            <ul class="question-mobile">
                                <li class="question-title">
                                    人に弱音を吐きたくないほうである
                                </li>
                                <li>
                                    <input type="radio" name="" value="いつもそうである"><label for="">いつもそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="まあそうである"><label for="">まあそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="そうではない"><label for="">そうではない</label>
                                </li>
                            </ul>
                            <!-- Question mobile -->
                            <ul class="question-mobile">
                                <li class="question-title">
                                    自立している自分に安心感がある
                                </li>
                                <li>
                                    <input type="radio" name="" value="いつもそうである"><label for="">いつもそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="まあそうである"><label for="">まあそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="そうではない"><label for="">そうではない</label>
                                </li>
                            </ul>
                            <!-- Question mobile -->
                            <ul class="question-mobile">
                                <li class="question-title">
                                    依存的になる自分に許せないとか、恥ずかしさを感じる
                                </li>
                                <li>
                                    <input type="radio" name="" value="いつもそうである"><label for="">いつもそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="まあそうである"><label for="">まあそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="そうではない"><label for="">そうではない</label>
                                </li>
                            </ul>
                            <!-- Question mobile -->
                            <ul class="question-mobile">
                                <li class="question-title">
                                    弱い自分を見せたくない方である
                                </li>
                                <li>
                                    <input type="radio" name="" value="いつもそうである"><label for="">いつもそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="まあそうである"><label for="">まあそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="そうではない"><label for="">そうではない</label>
                                </li>
                            </ul>
                            <!-- Question mobile -->
                            <ul class="question-mobile">
                                <li class="question-title">
                                    人に頼るのは苦手である
                                </li>
                                <li>
                                    <input type="radio" name="" value="いつもそうである"><label for="">いつもそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="まあそうである"><label for="">まあそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="そうではない"><label for="">そうではない</label>
                                </li>
                            </ul>
                            <!-- Question mobile -->
                            <ul class="question-mobile">
                                <li class="question-title">
                                    自分の感情や気持ちがわからなくなることがある
                                </li>
                                <li>
                                    <input type="radio" name="" value="いつもそうである"><label for="">いつもそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="まあそうである"><label for="">まあそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="そうではない"><label for="">そうではない</label>
                                </li>
                            </ul>
                            <!-- Question mobile -->
                            <ul class="question-mobile">
                                <li class="question-title">
                                    理由の分からない下痢、便秘、頭痛、腰痛、肩こり、アレルギーなど慢性的な身体症状がある
                                </li>
                                <li>
                                    <input type="radio" name="" value="いつもそうである"><label for="">いつもそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="まあそうである"><label for="">まあそうである</label>
                                </li>
                                <li>
                                    <input type="radio" name="" value="そうではない"><label for="">そうではない</label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-link">
                            <button>戻って</button>
                            <button class="form-link-primary">継続する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")
@endsection