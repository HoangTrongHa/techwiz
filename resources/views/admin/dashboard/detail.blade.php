@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/detail.css') }}">

@endsection
@section("content")
    <div id="detail">
        <div class="container">
            <div class="detail">
                <h1 class="detail-title">HARA PETA Project 管理画面</h1>
                <h2 class="detail-title">{{ $user->code }}</h2>

                <div class="detail-content">
                    <div class="detail-row">
                        <div class="detail-left">氏名</div>
                        <div class="detail-right">{{ $user->name }}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-left">E-mail</div>
                        <div class="detail-right">{{ $user->email }}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-left">電話番号</div>
                        <div class="detail-right">{{ $user->phone_number }}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-left">郵便番号</div>
                        <div class="detail-right">{{ $user->zip_code }}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-left">住所</div>
                        <div class="detail-right">{{ $user->address }}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-left">発送状況</div>
                        <div class="detail-right">
                            <form action="">
                                <input type="checkbox"
                                    value="0"
                                    class="detail-input"
                                    onclick="this.checked=!checked"
                                    @if($user->join_event != null)
                                        checked
                                    @else
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                    @endif
                                >
                            </form>
                            発送済み
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-left">０ヶ月アンケート</div>
                        <div class="detail-right">
                            {{ $user->join_event != null ? '未回答' : '未実施' }}
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-left">3ヶ月アンケート</div>
                        <div class="detail-right">
                            @if ($user->join_event == null)
                                {{ "未実施" }}
                            @else
                                {{ $currentTime >= $threeMonth ? '未回答' : '未実施' }}
                            @endif
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-left">6ヶ月アンケート</div>
                        <div class="detail-right">
                            @if ($user->join_event == null)
                                {{ "未実施" }}
                            @else
                            {{ $currentTime >= $sixMonth ? '未回答' : '未実施' }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="detail-link">
                    <a href="{{ route('admin.dashboard') }}">戻る</a>
                </div>
            </div>
        </div>
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="POST" action="{{ route('admin.checked', $user->code) }}" class="modal-content form-check-event">
        @csrf
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="font-size: 22px">
          <input type="checkbox" value="0" name="event" hidden checked> 資材を発送しますか？
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">いいえ</button>
          <button type="submit" class="btn btn-primary">はい</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<script>
       $('.form-check-event').validate({
        rules: {
            event: {
                required: true
            },
        },
        messages: {
            event: {
                required: "入力してください"
            }
        },
        onfocusout: function(element) {
            this.element(element);
        },
    });
</script>
@endsection