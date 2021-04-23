@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/question-list.css') }}">
@endsection
@section("content")
<form action=" {{ route('postQuestionPageThree') }} " method="POST">
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
                            日ごろのあなたの気持ちや考えに当てはまる項目を選択して下さい。
                        </p>
                    </div>
    
                    <!-- Form -->
                    <div class="content-body">
                        <form class="question">
                            <table class="table table-bordered hide-on-mb">
                                <thead>
                                    <tr>
                                        <td rowspan="2" class="question-w-40"></td>\
                                        @foreach (Config::get('dataquestion.page_question_3.optionAnswer') as $item)
                                        <td class="table-w">{{ $item }}</td>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>自分ながら自分が偉いなあと思うことがある</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer{{ $key }}"><input type="radio" name="answer3[1][0]" value="{{ $item }}" id="answer{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>自分がかわいそうだから、良くないことでも「いいよ」と許してしまうことがある</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer1{{ $key }}"><input type="radio" name="answer3[2][0]" value="{{ $item }}" id="answer1{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>「どんなことをしても自分だけは守ってあげるからね」と思うことがある</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer2{{ $key }}"><input type="radio" name="answer3[3][0]" value="{{ $item }}" id="answer2{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>自分で自分を「よくやっているよ」と慰めてあげたいと思うことがある</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer3{{ $key }}"><input type="radio" name="answer3[4][0]" value="{{ $item }}" id="answer3{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>自分が少々のことをしても「大目に見てあげた」という気持ちがある</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer4{{ $key }}"><input type="radio" name="answer3[5][0]" value="{{ $item }}" id="answer4{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>自分が生き残るためには「そんなことぐらい気にするな」という思いがある</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer5{{ $key }}"><input type="radio" name="answer3[6][0]" value="{{ $item }}" id="answer5{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>自分は辛いことが多いから「別にそんなことぐらいしてもいい」という思いがある</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer6{{ $key }}"><input type="radio" name="answer3[7][0]" value="{{ $item }}" id="answer6{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>自分が生きるためには「色々な思いを切って進むしかない」という思いがある</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer7{{ $key }}"><input type="radio" name="answer3[8][0]" value="{{ $item }}" id="answer7{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>甘いことを言っていたら生きていけないから「やるしかない」と思うことがある</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer8{{ $key }}"><input type="radio" name="answer3[9][0]" value="{{ $item }}" id="answer8{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>自分を「よくやっている」と慰めている</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer9{{ $key }}"><input type="radio" name="answer3[10][0]" value="{{ $item }}" id="answer9{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>


                            <div class="question-mobile-list hide">
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        自分ながら自分が偉いなあと思うことがある
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[1][0]" value="いつもそうである"><label for="">いつもそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[1][0]" value="まあそうである"><label for="">まあそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[1][0]" value="どちらともいえない"><label for="">どちらともいえない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[1][0]" value="まあそうではない"><label for="">まあそうではない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[1][0]" value="そうではない"><label for="">そうではない</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        自分がかわいそうだから、良くないことでも「いいよ」と許してしまうことがある
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[2][0]" value="いつもそうである"><label for="">いつもそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[2][0]" value="まあそうである"><label for="">まあそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[2][0]" value="どちらともいえない"><label for="">どちらともいえない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[2][0]" value="まあそうではない"><label for="">まあそうではない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[2][0]" value="そうではない"><label for="">そうではない</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        「どんなことをしても自分だけは守ってあげるからね」と思うことがある
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[3][0]" value="いつもそうである"><label for="">いつもそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[3][0]" value="まあそうである"><label for="">まあそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[3][0]" value="どちらともいえない"><label for="">どちらともいえない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[3][0]" value="まあそうではない"><label for="">まあそうではない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[3][0]" value="そうではない"><label for="">そうではない</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        自分で自分を「よくやっているよ」と慰めてあげたいと思うことがある
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[4][0]" value="いつもそうである"><label for="">いつもそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[4][0]" value="まあそうである"><label for="">まあそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[4][0]" value="どちらともいえない"><label for="">どちらともいえない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[4][0]" value="まあそうではない"><label for="">まあそうではない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[4][0]" value="そうではない"><label for="">そうではない</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        自分が少々のことをしても「大目に見てあげた」という気持ちがある
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[5][0]" value="いつもそうである"><label for="">いつもそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[5][0]" value="まあそうである"><label for="">まあそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[5][0]" value="どちらともいえない"><label for="">どちらともいえない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[5][0]" value="まあそうではない"><label for="">まあそうではない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[5][0]" value="そうではない"><label for="">そうではない</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        自分が生き残るためには「そんなことぐらい気にするな」という思いがある
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[6][0]" value="いつもそうである"><label for="">いつもそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[6][0]" value="まあそうである"><label for="">まあそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[6][0]" value="どちらともいえない"><label for="">どちらともいえない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[6][0]" value="まあそうではない"><label for="">まあそうではない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[6][0]" value="そうではない"><label for="">そうではない</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        自分は辛いことが多いから「別にそんなことぐらいしてもいい」という思いがある
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[7][0]" value="いつもそうである"><label for="">いつもそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[7][0]" value="まあそうである"><label for="">まあそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[7][0]" value="どちらともいえない"><label for="">どちらともいえない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[7][0]" value="まあそうではない"><label for="">まあそうではない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[7][0]" value="そうではない"><label for="">そうではない</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        自分が生きるためには「色々な思いを切って進むしかない」という思いがある
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[8][0]" value="いつもそうである"><label for="">いつもそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[8][0]" value="まあそうである"><label for="">まあそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[8][0]" value="どちらともいえない"><label for="">どちらともいえない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[8][0]" value="まあそうではない"><label for="">まあそうではない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[8][0]" value="そうではない"><label for="">そうではない</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        甘いことを言っていたら生きていけないから「やるしかない」と思うことがある
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[9][0]" value="いつもそうである"><label for="">いつもそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[9][0]" value="まあそうである"><label for="">まあそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[9][0]" value="どちらともいえない"><label for="">どちらともいえない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[9][0]" value="まあそうではない"><label for="">まあそうではない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[9][0]" value="そうではない"><label for="">そうではない</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        自分を「よくやっている」と慰めている
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[10][0]" value="いつもそうである"><label for="">いつもそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[10][0]" value="まあそうである"><label for="">まあそうである</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[10][0]" value="どちらともいえない"><label for="">どちらともいえない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[10][0]" value="まあそうではない"><label for="">まあそうではない</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[10][0]" value="そうではない"><label for="">そうではない</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="form-link">
                                <button class="backButton" onclick="goBack()" type="button">戻って</button>
                                <button class="form-link-primary" type="submit">継続する</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section("script")
@endsection