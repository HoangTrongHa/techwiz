@extends('admin.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/detail.css') }}">
@endsection
@section("content")
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
            margin-top: 10px;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;

        }
    </style>
{{--    <div id="detail">--}}
{{--        <div class="container">--}}
{{--            <div class="detail">--}}
{{--                <h1 class="detail-title">Fitness Daily</h1>--}}
{{--                <h2 class="detail-title">{{ $user->code }}</h2>--}}

{{--                <div class="detail-content">--}}
{{--                    <div class="detail-row">--}}
{{--                        <div class="detail-left">Full name</div>--}}
{{--                        <div class="detail-right">{{ $user->name }}</div>--}}
{{--                    </div>--}}
{{--                    <div class="detail-row">--}}
{{--                        <div class="detail-left">E-mail</div>--}}
{{--                        <div class="detail-right">{{ $user->email }}</div>--}}
{{--                    </div>--}}
{{--                    <div class="detail-row">--}}
{{--                        <div class="detail-left">Phone Number</div>--}}
{{--                        <div class="detail-right">{{ $user->phone_number }}</div>--}}
{{--                    </div>--}}
{{--                    <div class="detail-row">--}}
{{--                        <div class="detail-left">Postal code</div>--}}
{{--                        <div class="detail-right">{{ $user->zip_code }}</div>--}}
{{--                    </div>--}}
{{--                    <div class="detail-row">--}}
{{--                        <div class="detail-left">Street address</div>--}}
{{--                        <div class="detail-right">{{ $user->address }}</div>--}}
{{--                    </div>--}}
{{--                    <div class="detail-row">--}}
{{--                        <div class="detail-left">Shipping status</div>--}}
{{--                        <div class="detail-right">--}}
{{--                            <form action="">--}}
{{--                                <input type="checkbox"--}}
{{--                                    value="0"--}}
{{--                                    class="detail-input"--}}
{{--                                    onclick="this.checked=!checked"--}}
{{--                                    @if($user->join_event != null)--}}
{{--                                        checked--}}
{{--                                    @else--}}
{{--                                        data-bs-toggle="modal"--}}
{{--                                        data-bs-target="#exampleModal"--}}
{{--                                    @endif--}}
{{--                                >--}}
{{--                            </form>--}}
{{--                            sent--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="detail-row">--}}
{{--                        <div class="detail-left">0 month questionnaire</div>--}}
{{--                        <div class="detail-right">--}}
{{--                            {{ $user->join_event != null ? 'Unanswered' : 'Not implemented' }}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="detail-row">--}}
{{--                        <div class="detail-left">3-month questionnaire</div>--}}
{{--                        <div class="detail-right">--}}
{{--                            @if ($user->join_event == null)--}}
{{--                                {{ "Not implemented" }}--}}
{{--                            @else--}}
{{--                                {{ $currentTime >= $threeMonth ? 'Unanswered' : 'Not implemented' }}--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="detail-row">--}}
{{--                        <div class="detail-left">6-month questionnaire</div>--}}
{{--                        <div class="detail-right">--}}
{{--                            @if ($user->join_event == null)--}}
{{--                                {{ "Not implemented" }}--}}
{{--                            @else--}}
{{--                            {{ $currentTime >= $sixMonth ? 'Unanswered' : 'Not implemented' }}--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="detail-link">--}}
{{--                    <a href="{{ route('admin.dashboard') }}">Return</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--            <!-- Modal -->--}}
{{--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--      <form method="POST" action="{{ route('admin.checked', $user->code) }}" class="modal-content form-check-event">--}}
{{--        @csrf--}}
{{--        <div class="modal-header">--}}
{{--          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--        </div>--}}
{{--        <div class="modal-body" style="font-size: 22px">--}}
{{--          <input type="checkbox" value="0" name="event" hidden checked> Do you want to ship the materials?--}}
{{--        </div>--}}
{{--        <div class="modal-footer">--}}
{{--          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>--}}
{{--          <button type="submit" class="btn btn-primary">No</button>--}}
{{--        </div>--}}
{{--      </form>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}

        <h1>Detail {{$user->code}}</h1>

    <table class="card-body" id="customers">
       <tr>
           <th>Name</th>
           <th>{{ $user->name }}</th>
       </tr>
        <tr>
            <th>Email</th>
            <th>{{ $user->email }}</th>
        </tr>
        <tr>
            <th>Phone Number</th>
            <th>{{ $user->phone_number }}</th>
        </tr>
        <tr>
            <th>Postal Code</th>
            <th>{{ $user->zip_code }}</th>
        </tr>
        <tr>
            <th>Street Address</th>
            <th>{{ $user->address }}</th>
        </tr>
        <tr>
            <th>Status</th>
            <th>
                <form action="">
                    <input type="checkbox" value="0" class="detail-input" onclick="this.checked=!checked"
                           @if($user->join_event != null)checked
                           @else data-bs-toggle="modal" data-bs-target="#exampleModal"
                           @endif>
                </form>
                sent
            </th>
        </tr>
        <tr>
            <th>0 month questionnaire</th>
            <th> {{ $user->join_event != null ? 'Unanswered' : 'Not implemented' }}</th>
        </tr>
        <tr>
            <th>3 month questionnaire</th>
            <th>{{ $user->join_event != null ? 'Unanswered' : 'Not implemented' }}</th>
        </tr>
        <tr>
            <th>6 month questionnaire</th>
            <th>{{ $user->join_event != null ? 'Unanswered' : 'Not implemented' }}</th>
        </tr>
    </table>

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
                required: "Please enter"
            }
        },
        onfocusout: function(element) {
            this.element(element);
        },
    });
</script>
@endsection
