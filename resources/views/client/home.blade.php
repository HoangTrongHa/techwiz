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
                    <img src="{{ asset('assets/images/icon-banner.jpg') }}" alt=""> KOWA HARA PETA Project
                </h1>
            </div>
            <div>
                <h2 class="desc">これは日本語のテキストです</h2>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="content">
        <div class="container">
            <div class="content-header">
                <div class="content-header-top">
                    <img src="{{ asset('assets/images/icon-banner.jpg') }}" alt="">
                    <h1 class="content-title">
                        HARA PETA Project
                    </h1>
                </div>
                <p class="content-header-desc">
                    HARA PETA Project 母は一番強い女の人だと思います。母はいつも家族を愛していて、毎日わたしたちのために頑張っています。私にいいマナー老人を尊敬することや子供たちに譲ることなどを教えてくれています。母はいつも新設に他の人を扱うので、尊敬される。
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
                        母は花を植えることが好きなので、家の周りはたくさんの花の種類を植えています。またはコーヒーを飲むことや本を読むことや旅行が好きです。
                    </p>
                    <h1>母とたくさんの素晴らしい景色に旅行したいです。</h1>
                </div>
                <div class="content-link">
                    <a href="" class="button">私はいつも元気で、</a>
                </div>
                <div class="content-info">
                    <div class="content-table">
                        <div class="content-title">
                            <img src="./icon-banner.jpg" alt="">
                            <h1>たいです</h1>
                        </div>
                        <div class="content-row">
                            <div class="content-col">たいです</div>
                            <div class="content-col">たいですたいですたいですたいですたいですたいです</div>
                        </div>
                        <div class="content-row">
                            <div class="content-col">たいです</div>
                            <div class="content-col">
                                <p>たいです</p>
                                <p>たいですたいです</p>
                                <p>たいですたいですたいですたいです</p>
                            </div>
                        </div>
                        <div class="content-row">
                            <div class="content-col">たいです</div>
                            <div class="content-col">
                                <p>たいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいですたいです</p>
                            </div>
                        </div>
                        <div class="content-row">
                            <div class="content-col">たいですたいです</div>
                            <div class="content-col">
                                <p>たいですたいです: たいですたいです</p>
                                <p>たいですたいです: たいですたいですたいですたいです</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-link">
                        <a href="" class="button">私はいつも元気で、</a>
                    </div>
                    <div class="content-table">
                        <div class="content-title">
                            <img src="./icon-banner.jpg" alt="">
                            <h1>たいですたいです</h1>
                        </div>

                        <div class="timeline">
                            <div class="timeline-header">
                                <span>0ヶ月</span>
                                <span>3ヶ月</span>
                                <span>6ヶ月</span>
                            </div>
                            <div class="timeline-body">
                                <div class="timeline-row">
                                    <div class="timeline-item">私はい</div>
                                    <div class="timeline-item">私はい私はい(私はい私はい)</div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-item timeline-child">私はい</div>
                                    <div class="timeline-item timeline-child">私はい私はい(私はい私はい)</div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-item timeline-full-w">私はい私はい(私はい私はい)</div>
                                </div>

                                <p class="timeline-desc">私はい</p>
                            </div>
                        </div>

                        <div class="schedule">
                            <div style="background-color: #FFC000;" class="schedule-row">
                                <div class="schedule-item schedule-big"></div>
                                <div class="schedule-item">0 私は</div>
                                <div class="schedule-item">0 私は</div>
                                <div class="schedule-item">3 私は</div>
                                <div class="schedule-item">6 私は</div>
                                <div class="schedule-item">9 私は</div>
                            </div>
                            <div class="schedule-row">
                                <div class="schedule-item schedule-big">
                                    <p>私はいつも元気で、私はいつも元気で、</p>
                                </div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                            </div>
                            <div class="schedule-row">
                                <div class="schedule-item schedule-big">
                                    <p>私はいつも元気で、私はいつも元気で、</p>
                                </div>
                                <div class="schedule-item item-full-w">
                                    <div class="line"></div>
                                    <div class="line-content">
                                        も元気で、
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-row">
                                <div class="schedule-item schedule-big">
                                    <p>私はいつも元気で、私はいつも元気で、</p>
                                </div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"></div>
                            </div>
                            <div class="schedule-row">
                                <div class="schedule-item schedule-big">
                                    <p>私はいつも元気で、私はいつも元気で、</p>
                                </div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                            </div>
                            <div class="schedule-row">
                                <div class="schedule-item schedule-big schedule-fl">
                                    <p>私はいつも元気で、私はいつも元気で、</p>
                                    <ul>
                                        <li>私はいつも元気で、</li>
                                        <li>私はいつも元気で、</li>
                                        <li>私はいつも元気で、</li>
                                    </ul>
                                </div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                            </div>
                            <div class="schedule-row">
                                <div class="schedule-item schedule-big">
                                    <p>私はいつも元気で、私はいつも元気で、</p>
                                </div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"></div>
                                <div class="schedule-item"><div class="circle"></div></div>
                            </div>
                            <div class="schedule-note">
                                <p>O : 私はいつも元気で</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-link">
                        <a href="" class="button">私はいつも元気で、</a>
                    </div>
                    <div class="contact">
                        <div class="contact-top">
                            <div class="contact-left">
                                私はいつも
                            </div>
                            <div class="contact-right">
                                <h1>Phond2@op.madhere.co.jp</h1>
                            </div>
                        </div>
                        <div class="contact-mid">
                            <p>私はいつも元気で、私はいつも元気で、私はいつも元気で、私はいつも元気で、</p>
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