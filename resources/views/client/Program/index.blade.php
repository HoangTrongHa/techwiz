@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/mypage.css')}}">
@endsection
@section("content")
<div class="show-header">
    <div class="container -flush">
        <div class="info has-action col-xl-5 col-md-5 col-sm-12 col-xs-12 " >
            <div class="video-details-wrapper video-detail-wrapper">
                <div class="video-details">
                    <h2>WORKOUT DETAILS</h2>
                </div>
                <div class="stats">
                    <ul class="detail-list">
                        <li>Duration: 20 Minutes</li>
                        <li>Calorie Burn: 97-153</li>
                        <li>Difficulty: 3/5</li>
                        <li>Equipment: No Equipment</li>
                        <li>Training Type: Low Impact, Pilates, Toning</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="media">
            <div class="responsive-video col-xl-7 col-md-7 col-sm-12 col-xs-12 " id="player"></div>
        </div>
    </div>
</div>
<div class="col-xl-9 content" >
    <h3 class="title"><b>20 Minute Butt and Thigh Workout - Glute Activation Workout</b></h3>
    <span style="font-size: 1.0rem; line-height: 2.5rem;padding: 0 0 3.2rem">
        <p>This workout uses a blend of bodyweight exercises, Pilates influenced moves and glute activation exercises
            to thoroughly target the butt and thighs - especially the smaller muscles, specifically gluteus medius.
            For that reason, this workout is highly complementary to our many lower body strength training or HIIT workouts.</p>

        <p>There are so many different ways that you can use this workout. You can do an independent cardio warm up,
            complete this workout, and then add a cool down and stretch to the end. You can also use this as part of
            an extended warm up for lower body lifting routines, or HIIT, in order to thoroughly activate the glute
            muscles for more intense training.</p>

        <p>Related - a Doctor of Physical Therapy shares: 5 Ways to Take Care of Your Fascia for Pain-Free Movement

        While you don’t need any equipment at all in order to see the benefits of this workout, you can definitely
            step up the challenge by adding dumbbells or a resistance band to some of the exercises. Make sure that
            your form is completely on point before adding any kind of extra resistance or challenge. Once you add
            that extra resistance, you might be surprised that these little sleeper exercises pack a punch!</p>

       <p>This is a signature FB “bored easily” style workout; you won’t be doing any repeat intervals or exercises,
           so do the best that you can to push yourself through the single set of each move. It’s also worth noting
           that these are relatively lengthy intervals at 45 seconds a piece, so don’t feel bad if you need to stop
           and take a quick rest at any point during this workout.</p>

      <p> Walk that fine line of staying tuned in so that you can smartly push or challenge yourself to get stronger,
          while still listening to and respecting the messages that your body sends you. Remember, it’s ideal to come
          from a place where you are working out because you love your body, not so that you will love your body someday.</p>
        <p>
        Workout Structure
        Glute activation exercises in a no repeat format
        No equipment but optional dumbbells and resistance bands increase the challenge
        Warm up and cool down not included but both are highly recommended
            Interval Format: 45 Seconds Active, 15 Seconds Rest</p>
        <p>
        Turn on some music that makes you want to move, and get ready to earn your workout complete!
        </p>
        <p>
        Printable Butt and Thigh Workout<br/>
        Monster Walk<br/>
        Staggered Stance Deadlift<br>
        Other Side<br>
        Good Morning to Squat<br>
        Clock Taps<br>
        </p>
<p>
        Side Lying Leg Lift<br>
        Elevated Clamshell with Extension<br>
        Side Lying Sweeps<br>
        Side Plank Dip<br>
        Repeat this sequence on both sides of the body<br>
</p>
        <p>
        Water Break<br>

        Bridge with Step Outs<br>
        Supine Lift + Hold<br>
        Other Side<br>
        Up and Over Lifts + Knee to Elbow<br>
        Other Side<br>
        Bridge + Butterfly<br>
        Froggers<br>

        Don’t forget to cool down and stretch!<br>
        </p>
<p>
        What did you think of this workout? What interval did you find the most challenging?
            I was surprised by the fact that I was sweating halfway through, and also at how
            much my muscles were talking to me by the time I got to the Side Lying Sweeps -
            my glute meds were on fire! Like I said in the video, I plan on making some new
            banded lower body workouts for you, so watch for those in the future.
</p>
        Otherwise, any other requests for training styles? Let me know!<br>

        Thank you for working out with me,<br>

        Kelli</span>
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
