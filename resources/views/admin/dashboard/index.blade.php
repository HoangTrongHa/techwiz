@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/dashboard.css') }}">
@endsection
@section("content")
    <div id="dashboard">
        <div class="container">
            <div class="dashboard">
                <h1 class="dashboard-title">
                    HARA PETA Project 管理画面
                </h1>
                <div class="dashboard-content tableFixHead">
                    <table>
                        <thead>
                            <tr class="bg-primary text-white">
                                <th scope="col">ID</th>
                                <th scope="col">同意日</th>
                                <th scope="col">資材発送日</th>
                                <th scope="col">０ヶ月調査アンケート</th>
                                <th scope="col">3ヶ月調査アンケート</th>
                                <th scope="col">6ヶ月調査アンケート</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td data-label="ID" class="text-left"><a class="dashboard-link" href="{{ route('admin.detail.user', $user->code) }}">{{ $user->code }}</a></td>
                                <td data-label="同意日">
                                    {{ ($user->term_of_service != null) ? date('Y-m-d', strtotime($user->term_of_service)) : '未同意' }}
                                </td>
                                <td data-label="資材発送日">
                                    {{ $user->join_event != null ? date('Y-m-d', strtotime($user->join_event)) : "未送信" }}
                                </td>
                                <td data-label="０ヶ月調査アンケート">
                                    {{ $user->join_event != null ? '未回答' : '未実施' }}
                                </td>
                                <td data-label="3参加者3ヶ月">
                                    @if ($user->join_event == null)
                                        {{ '未実施' }}
                                    @else
                                        {{
                                            $currentTime >= date('Y-m-d', strtotime($user->join_event . '+ 3 months')) ? '未回答' : '未実施'
                                        }}
                                    @endif
                                </td>
                                <td data-label="6参加者6ヶ月">
                                    @if ($user->join_event == null)
                                        {{ '未実施' }}
                                    @else
                                        {{
                                            $currentTime >= date('Y-m-d', strtotime($user->join_event . '+ 6 months')) ? 'duoc tra loi' : '未実施'
                                        }}
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="dashboard-footer">
                    <a href="{{ route('home') }}">サービストップへ</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection