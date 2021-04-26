@extends('admin.base')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">User List</div>
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Consent date</th>
                                    <th scope="col">Material shipping date</th>
                                    <th scope="col">0-month survey questionnaire</th>
                                    <th scope="col">3-month survey questionnaire</th>
                                    <th scope="col">6-month survey questionnaire</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td data-label="ID" class="text-left"><a class="dashboard-link"
                                            href="{{ route('admin.detail.user', $user->code) }}">{{ $user->code }}</a>
                                    </td>
                                    <td data-label="Consent date">
                                        {{ ($user->term_of_service != null) ? date('Y-m-d', strtotime($user->term_of_service)) : 'Disagree' }}
                                    </td>
                                    <td data-label="Material shipping date">
                                        {{ $user->join_event != null ? date('Y-m-d', strtotime($user->join_event)) : "Unsent" }}
                                    </td>
                                    <td data-label="0-month survey questionnaire">
                                        {{ $user->join_event != null ? 'Unanswered' : 'Not implemented' }}
                                    </td>
                                    <td data-label="3 participants 3 months">
                                        @if ($user->join_event == null)
                                        {{ 'Not implemented' }}
                                        @else
                                        {{
                                            $currentTime >= date('Y-m-d', strtotime($user->join_event . '+ 3 months')) ? 'Unanswered' : 'Not implemented'
                                        }}
                                        @endif
                                    </td>
                                    <td data-label="6 participants 6 months">
                                        @if ($user->join_event == null)
                                        {{ 'Not implemented' }}
                                        @else
                                        {{
                                            $currentTime >= date('Y-m-d', strtotime($user->join_event . '+ 6 months')) ? 'duoc tra loi' : 'Not implemented'
                                        }}
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
    </div>
</div>
@endsection

@section('javascript')

<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
<script src="{{ asset('js/main.js') }}" defer></script>
@endsection