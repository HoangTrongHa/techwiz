@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/question-list.css') }}">

@endsection
@section("content")
<form action="{{ route('postConfirmquestion') }}" method="POST" class="confirm-question">
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
                            HARA PETA Projectに参加する前をイメージしてご回答ください。
                        </p>
                    </div>
                    <div class="content-body">
                        <form class="question">
                            <div class="form-box">
                                <h5 class="question-title">食</h5>
                                <ul class="question-list">
                                    <li class="question-item">
                                        1. 食習慣
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">① 減量のための食べ方に気を付けていますか？</span>
                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_1_1') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[1][1]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[1][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[1]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>     
                                                    @endforeach
                                                </div>
                                            </li>
                                            <li>
                                                <span class="question-title">② 主食・主菜・副菜 ３つのお皿を揃える和食の食べ方をしていますか？</span>

                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_1_2') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[1][2]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[1][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[1]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>     
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="question-item">
                                        2. 野菜
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">① 適正な野菜の摂取量は1日に350g以上です。このような習慣についてどのように思いますか？</span>
                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_2_1') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[2][1]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[2][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[2]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>     
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="question-item">
                                        3. よく噛んで食べる
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">① 食事はよく噛んでゆっくり食べることが大切ですが、このような習慣についてどのように思いますか？</span>

                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_3_1') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[3][1]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[3][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[3]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>     
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="question-item">
                                        4. 間食
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">① あなたは間食することについてどのように思いますか？</span>
                                                @foreach (Config::get('dataquestion.question_4_1') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[4][1]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[4][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[4]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>     
                                                    @endforeach
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-box">
                                <h5 class="question-title">運動</h5>
                                <ul class="question-list">
                                    <li class="question-item">
                                        1. 食習慣
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">① 定期的に運動を行うことについてお答えください</span>

                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_5_1') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[5][1]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[5][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[5]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>     
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="month" value="0ヶ月">
                
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td rowspan="2" class="question-w-40"></td>
                            <td class="table-w" colspan="2">家族の中にいますか？</td>
                            <td class="table-w" colspan="2">家族以外の中にいますか？</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">いる</td>
                            <td>いない</td>
                            <td>いる</td>
                            <td>いない</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Config::get('dataquestion.title_question_page_2') as $key=>$item)
                            <tr>
                                <td>{{ $item }}</td>
                                <td>
                                    <input type="radio" name="answer2[{{ $key }}][1]" value="いる" id=""
                                    @if (isset($dataQuestion2[ $key ]))
                                    {{
                                   
                                        array_search('いる', $dataQuestion2[$key]) === false ? '' : 'checked'
                                    }}
                                    @endif    
                                 disabled></td>
                                <td>
                                    <input type="radio" name="answer2[{{ $key }}][1]" value="いない" id=""
                                    @if (isset($dataQuestion2[ $key ]))
                                    {{
                                        array_search('いない', $dataQuestion2[ $key ]) === false ? '' : 'checked'
                                    }}
                                    @endif    
                                disabled></td>
                                <td>
                                    <input type="radio" name="answer2[{{ $key }}][2]" value="いる" id=""
                                    @if (isset($dataQuestion2[ $key ]))
                                    {{
                                        array_search('いる', $dataQuestion2[$key]) === false ? '' : 'checked'
                                    }}
                                    @endif    
                                 disabled></td>
                                <td>
                                    <input type="radio" name="answer2[{{ $key }}][2]" value="いない" id=""
                                    @if (isset($dataQuestion2[ $key ]))
                                    {{
                                        array_search('いない', $dataQuestion2[ $key ]) === false ? '' : 'checked'
                                    }}
                                    @endif    
                                disabled></td>
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
        </div>
        <div class="content-body">
            <form class="question">
                <table class="table table-bordered hide-on-mb">
                    <thead>
                        <tr>
                            <td rowspan="2" class="question-w-40"></td>
                            @foreach (Config::get('dataquestion.page_question_3.optionAnswer') as $item)
                            <td class="table-w">{{ $item }}</td>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>自分ながら自分が偉いなあと思うことがある</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[1][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[1]))
                                {{
                                    array_search($item, $dataQuestion3[1]) === false ? '' : 'checked'
                                }}
                                @endif   
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>自分がかわいそうだから、良くないことでも「いいよ」と許してしまうことがある</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[2][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[2]))
                                {{
                                    array_search($item, $dataQuestion3[2]) === false ? '' : 'checked'
                                }}
                                @endif   
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>「どんなことをしても自分だけは守ってあげるからね」と思うことがある</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[3][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[3]))
                                {{
                                    array_search($item, $dataQuestion3[3]) === false ? '' : 'checked'
                                }}
                                @endif   
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>自分で自分を「よくやっているよ」と慰めてあげたいと思うことがある</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[4][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[4]))
                                {{
                                    array_search($item, $dataQuestion3[4]) === false ? '' : 'checked'
                                }}
                                @endif   
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>自分が少々のことをしても「大目に見てあげた」という気持ちがある</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[5][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[5]))
                                {{
                                    array_search($item, $dataQuestion3[5]) === false ? '' : 'checked'
                                }}
                                @endif   
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>自分が生き残るためには「そんなことぐらい気にするな」という思いがある</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[6][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[6]))
                                {{
                                    array_search($item, $dataQuestion3[6]) === false ? '' : 'checked'
                                }}
                                @endif   
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>自分は辛いことが多いから「別にそんなことぐらいしてもいい」という思いがある</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[7][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[7]))
                                {{
                                    array_search($item, $dataQuestion3[7]) === false ? '' : 'checked'
                                }}
                                @endif   
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>自分が生きるためには「色々な思いを切って進むしかない」という思いがある</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[8][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[8]))
                                {{
                                    array_search($item, $dataQuestion3[8]) === false ? '' : 'checked'
                                }}
                                @endif   
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>甘いことを言っていたら生きていけないから「やるしかない」と思うことがある</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[9][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[9]))
                                {{
                                    array_search($item, $dataQuestion3[9]) === false ? '' : 'checked'
                                }}
                                @endif   
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>自分を「よくやっている」と慰めている</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[10][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[10]))
                                {{
                                    array_search($item, $dataQuestion3[10]) === false ? '' : 'checked'
                                }}
                                @endif   
                                disabled></td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                <div class="form-link">
                    <button class="backButton" onclick="goBack()" type="button">戻って</button>
                    <button class="form-link-primary" type="submit">継続する</button>
                </div>
            </form>
        </div>
    </div>
</form>
    
@endsection
@section('script')
@endsection