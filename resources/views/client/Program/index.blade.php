@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/mypage.css') }}">
@endsection
@section("content")
<div class="show-header">
    <div class="container -flush">
        <div class="media">
            <div class="responsive-video" id="player">
            </div>
        </div>
    </div>
</div>
<input id="input1" type="hidden" value="" />
@endsection

@section("script")
<script src="http://www.youtube.com/player_api"></script>

<script>
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: '8kqA4vjFTuQ',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
    }

    // autoplay video
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // when video ends
    function onPlayerStateChange(event) {        
        if(event.data === 0) {            
            $('div').attr('data-info', '222');
            alert('done');
        }


    }
    console.log(check);
</script>

@endsection