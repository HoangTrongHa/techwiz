@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/question-list.css') }}">
@endsection
@section("content")
<form action=" {{ route('postQuestionPageTwo') }} " method="POST">
    @csrf
    @method('POST')
    <div class="container container-full-w">
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
                                                <label style="width: 100%; text-align: center; cursor: pointer;" for="anwser2{{ $key }}"><input type="radio" name="answer2[{{ $key }}][1]" value="いる" id="anwser2{{ $key }}"></label>
                                            </td>
                                            <td>
                                                <label style="width: 100%; text-align: center; cursor: pointer;" for="anwser3{{ $key }}"><input type="radio" name="answer2[{{ $key }}][1]" value="いない" id="anwser3{{ $key }}"></label>
                                            </td>
                                            <td>
                                                <label style="width: 100%; text-align: center; cursor: pointer;" for="anwser4{{ $key }}"><input type="radio" name="answer2[{{ $key }}][2]" value="いる" id="anwser4{{ $key }}"></label>
                                            </td>
                                            <td>
                                                <label style="width: 100%; text-align: center; cursor: pointer;" for="anwser5{{ $key }}"><input type="radio" name="answer2[{{ $key }}][2]" value="いない" id="anwser5{{ $key }}"></label>
                                            </td>
                                        </tr>  
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="question-mobile-list hide">
                                <!-- Question mobile -->
                               <ul class="question-mobile">
                                <li class="question-title">
                                    会うと心が落ち着き安心できる人
                                </li>
                               <li>
                                  <span class="question-child">家族の中にいますか？</span>
                                  <ul>
                                      <li><input type="radio" name="answer2[1][1]" value="いる"> <label for="">いる</label></li>
                                      <li><input type="radio" name="answer2[1][1]" value="いない"> <label for="">いない</label></li>
                                  </ul>
                               </li>
                               <li>
                                  <span class="question-child">家族以外の中にいますか？</span>
                                  <ul>
                                      <li><input type="radio" name="answer2[1][2]" value="いる"> <label for="">いる</label></li>
                                      <li><input type="radio" name="answer2[1][2]" value="いない"> <label for="">いない</label></li>
                                  </ul>
                               </li>
                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                               <li class="question-title">
                                   常日頃、あなたの気持ちを敏感に察してくれる人
                               </li>
                               <li>
                                   <span class="question-child">家族の中にいますか？</span>
                                   <ul>
                                       <li><input type="radio" name="answer2[2][1]" value="いる"> <label for="">いる</label></li>
                                       <li><input type="radio" name="answer2[2][1]" value="いない"> <label for="">いない</label></li>
                                   </ul>
                               </li>
                               <li>
                                   <span class="question-child">家族以外の中にいますか？</span>
                                   <ul>
                                       <li><input type="radio" name="answer2[2][2]" value="いる"> <label for="">いる</label></li>
                                       <li><input type="radio" name="answer2[2][2]" value="いない"> <label for="">いない</label></li>
                                   </ul>
                               </li>
                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       あなたを日頃評価し、認めてくれる人
                                   </li>
                                   <li>
                                       <span class="question-child">家族の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[3][1]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[3][1]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                                   <li>
                                       <span class="question-child">家族以外の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[3][2]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[3][2]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       あなたを信じてあなたの思うようにさせくれる人
                                   </li>
                                   <li>
                                       <span class="question-child">家族の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[4][1]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[4][1]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                                   <li>
                                       <span class="question-child">家族以外の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[4][2]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[4][2]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       あなたが成長し、成功する事を我が事のように喜んでくれる人
                                   </li>
                                   <li>
                                       <span class="question-child">家族の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[5][1]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[5][1]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                                   <li>
                                       <span class="question-child">家族以外の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[5][2]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[5][2]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       個人的な気持ちや秘密を打ち明けることができる人
                                   </li>
                                   <li>
                                       <span class="question-child">家族の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[6][1]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[6][1]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                                   <li>
                                       <span class="question-child">家族以外の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[6][2]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[6][2]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       お互いの考えや将来の事を話し合うことのできる人
                                   </li>
                                   <li>
                                       <span class="question-child">家族の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[7][1]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[7][1]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                                   <li>
                                       <span class="question-child">家族以外の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[7][2]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[7][2]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       甘えられる人
                                   </li>
                                   <li>
                                       <span class="question-child">家族の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[8][1]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[8][1]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                                   <li>
                                       <span class="question-child">家族以外の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[8][2]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[8][2]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       あなたの行動や考えに賛成し、支持してくれる人
                                   </li>
                                   <li>
                                       <span class="question-child">家族の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[9][1]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[9][1]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                                   <li>
                                       <span class="question-child">家族以外の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[9][2]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[9][2]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       気持ちの通じ合う人
                                   </li>
                                   <li>
                                       <span class="question-child">家族の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[10][1]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[10][1]" value="いない"> <label for="">いない</label></li>
                                       </ul>
                                   </li>
                                   <li>
                                       <span class="question-child">家族以外の中にいますか？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[10][2]" value="いる"> <label for="">いる</label></li>
                                           <li><input type="radio" name="answer2[10][2]" value="いない"> <label for="">いない</label></li>
                                       </ul>
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
</form>
@endsection

@section("script")

@endsection