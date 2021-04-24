@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/introduce.css') }}">
@endsection
@section("content")
<div class="app">
    <!-- Banner -->
    <section class="banner">
        <img src="{{ asset('assets/images/time.jpg') }}" alt="">
        <div class="banner-info">
            <div>
                <h1 class="title">
                    <img src="{{ asset('assets/images/icon-banner.jpg') }}" alt="">Fitness Daily
                </h1>
            </div>
            <div>
                <h2 class="desc">That is a new step</h2>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="content">
        <div class="container">
            <div class="content-header">
                <div class="content-header-top">
                    <img src="{{ asset('assets/images/icon-banner.jpg') }}" alt="">
                    <h1 class="content-title" >
                        Fitness Daily
                    </h1>
                </div>
                <p class="content-header-desc" style="text-align: center ;color: #00afec "  >
                    Healthcare today gives me a brighter hope of tomorrow.
                </p>
                <div class="content-header-icon">
                    <div class="item">
                        <img src="{{ asset('assets/images/smile.png') }}" alt="">
                    </div>
                    <div class="item item-small">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/smile.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="content-body-desc">
                    <p>
                        Please accompany us to get good health. Exercising daily health will bring us a comfortable spirit and a sustainable future.
                    </p>
                    <h1>Protect the health of yourself and your family by working out together every day.</h1>
                </div>
                <div class="content-link">
                    <a href="" class="button">I am always fine.</a>
                </div>
                <div class="content-info">
                    <div class="content-table">
                        <div class="content-title">
                            <img src="./icon-banner.jpg" alt="">
                            <h1 style="text-align: center">Plan for you</h1>
                        </div>
                        <div class="content-row">
                            <div class="content-col">Diet</div>
                            <div class="content-col">Please create a reasonable diet for you</div>
                        </div>
                        <div class="content-row">
                            <div class="content-col">Movement mode</div>
                            <div class="content-col">
                                <p>Build for you a suitable exercise regimen</p>
                            </div>
                        </div>
                        <div class="content-row">
                            <div class="content-col">Resting mode</div>
                            <div class="content-col">
                                <p>Relaxation rest is one of the factors of good health</p>
                            </div>
                        </div>

                    </div>
                    <div class="content-link">
                        <a href="" class="button">You sure are always fine!</a>
                    </div>
                    <div class="content-table">
                        <div class="content-title">
                            <img src="./icon-banner.jpg" alt="">
                            <h1>Change the status for each stage</h1>
                        </div>

                        <div class="timeline">
                            <div class="timeline-header">
                                <span>0 months</span>
                                <span>3 months</span>
                                <span>6 months</span>
                            </div>
                            <div class="timeline-body">
                                <div class="timeline-row">
                                    <div class="timeline-item">Improved health in the first level</div>
                                    <div class="timeline-item">The important stage for perfect health</div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-item timeline-child">Physical exercise in the first stage</div>
                                    <div class="timeline-item timeline-child">The most important stage to build perfect health</div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-item timeline-full-w">Perfect mentality, health and fitness best</div>
                                </div>
                            </div>
                        </div>

                        <div class="schedule">
                            <div style="background-color: #FFC000;" class="schedule-row">
                                <div class="schedule-item schedule-big"></div>
                                <div class="schedule-item">0 month</div>
                                <div class="schedule-item">0 month</div>
                                <div class="schedule-item">3 months</div>
                                <div class="schedule-item">6 months</div>
                                <div class="schedule-item">9 months</div>
                            </div>
                            <div class="schedule-row">
                                <div class="schedule-item schedule-big">
                                    <p>How is your health today</p>
                                </div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                            </div>
                            <div class="schedule-row">
                                <div class="schedule-item schedule-big">
                                    <p>Do you have muscle pain or pain after exercise</p>
                                </div>
                                <div class="schedule-item item-full-w">
                                    <div class="line"></div>
                                    <div class="line-content">
                                        Improving
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-row">
                                <div class="schedule-item schedule-big">
                                    <p>Is your first exercise complete</p>
                                </div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"></div>
                            </div>
                            <div class="schedule-row">
                                <div class="schedule-item schedule-big">
                                    <p>how is your diet!</p>
                                </div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                            </div>

                        </div>
                    </div>
                    <div class="content-link">
                        <a href="" class="button">Good </a>
                    </div>
                    <div class="contact">
                        <div class="contact-top">
                            <div class="contact-left">
                               Email
                            </div>
                            <div class="contact-right">
                                <h1>Phond2@op.madhere.co.jp</h1>
                            </div>
                        </div>
                        <div class="contact-mid">
                            <p>Any questions please contact us. For a good health</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<script>
</script>
@endsection
