<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One|Cantarell:400,400italic,700' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/youplay-anime.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/custom.css">
    <title>TITLE</title>
</head>
<body>

{{--<nav class="navbar-youplay navbar navbar-default navbar-fixed-top navbar-small">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar"--}}
                    {{--aria-expanded="false" aria-controls="navbar">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="index.html">--}}
                {{--<img src="/images/logo.png" alt="">--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div id="navbar" class="navbar-collapse collapse">--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li>--}}
                    {{--<a href="index.html#lobbies">Find team</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="index.html#about">About</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="index.html#share">Share</a>--}}
                {{--</li>--}}
                {{--@if (\Auth::guest())--}}
                    {{--<li><a href="{{ SteamLogin::url(url('/login')) }}">Login</a></li>--}}
                {{--@else--}}
                    {{--<li><a href="/logout">Logout</a></li>--}}
                {{--@endif--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

{{--@yield('content')--}}
<section class="content-wrap">
    <section class="youplay-banner banner-top" data-parallax="scroll" data-z-index="1" data-natural-height="654"
             data-natural-width="1400" data-image-src="/images/banner-bg.jpg">
        <div class="info">
            <div>
                <div class="container">
                    <h1>CS:GO Team finder</h1>
                    <a class="btn btn-md btn-white ml-6" href="#!"><i class="fa fa-steam"></i>&nbsp; Login</a>
                    <a class="btn btn-md active ajax-popup-align-top" href="/config-lobby"><i class="fa fa-google"></i>&nbsp;Config lobby</a>
                </div>
            </div>
        </div>
    </section>


    <div class="youplay-content">
        <h2 class="container h1" id="about">Lobbies</h2>
        <section class="youplay-features container mnb-30" id="lobbies">
            <div class="youplay-matches-list">
                <div class="youplay-single-match">

                    <div class="pull-left">

                        <div class="angled-img center-block">
                            <div class="img">
                                <img src="/images/clan-navi.jpg" alt="NAVI">
                            </div>
                        </div>
                        <h5 class="text-center">NAVI</h5>
                    </div>

                    <div class="pull-left ml-30">
                        <div class="angled-img">
                            <a href="#about">
                                <div class="img" data-toggle="tooltip" data-placement="top" title='
<i class="fa fa-clock-o" aria-hidden="true"></i> 336<br />
<i class="fa fa-trophy" aria-hidden="true"></i> 41.22%
' data-html="true">
                                    <img src="/images/clan-fnatic.jpg" alt="fnatic">
                                </div>
                            </a>
                        </div>
                        <h5 class="text-center">fnatic</h5>
                    </div>
                    <div class="pull-left ml-30">
                        <div class="angled-img">
                            <div class="img">
                                <img src="/images/clan-fnatic.jpg" alt="fnatic">
                            </div>
                        </div>
                        <h5 class="text-center">fnatic</h5>
                    </div>
                    <div class="pull-left ml-30">
                        <div class="angled-img">
                            <div class="img">
                                <img src="/images/clan-fnatic.jpg" alt="fnatic">
                            </div>
                        </div>
                        <h5 class="text-center">fnatic</h5>
                    </div>


                    <div class="pull-left ml-30">
                        <h3 class="youplay-match-title">
                            Competitive
                            <img src="/images/ranks/0.png" alt="*" height="20px"> -
                            <img src="/images/ranks/3.png" alt="*" height="20px">
                        </h3>
                        <div class="date">10th February 2016, 10:30 am</div>
                    </div>

                    <div class="pull-right">
                        <a class="btn btn-md btn-white" href="#!" style="margin-top: 3rem;"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;
                            Enter lobby</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    </div>

    <div class="youplay-content">
        <h2 class="container h1" id="about">About</h2>
        <section class="container">
            <p class="lead">Eleifend sem ipsum conubia euismod potenti ante ad sem sed, dictumst hymenaeos torquent
                quis. Class leo. Odio orci velit nulla habitasse conubia tempor eleifend dui suscipit mauris eget
                mollis, molestie est justo. Ligula facilisi sociis dignissim
                egestas lectus.</p>
            <p class="lead">Habitant consequat consectetuer ipsum primis rutrum torquent curabitur tempus gravida nulla
                integer nascetur tempus ultrices, hac taciti vitae. Vehicula velit praesent risus rutrum lectus.</p>
        </section>
    </div>

    <footer class="youplay-footer-parallax" data-parallax="scroll" data-z-index="1"
            data-natural-height="500" data-natural-width="1400" data-image-src="/images/footer-bg.jpg">

        <div class="wrapper">

            <div class="social">
                <div class="container">
                    <h3>Share it with friends</h3>
                    {{--<strong>friends</strong>--}}
                    <div class="social-icons">
                        <div class="social-icon">
                            <a href="#!">
                                <i class="fa fa-facebook-square"></i>
                                <span>Share on Facebook</span>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="#!">
                                <i class="fa fa-twitter-square"></i>
                                <span>Follow on Twitter</span>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="#!">
                                <i class="fa fa-twitch"></i>
                                <span>Watch on Twitch</span>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="#!">
                                <i class="fa fa-youtube-square"></i>
                                <span>Watch on Youtube</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <strong><a href="https://molchan.me" target="_blank">Jadson</a></strong> &copy; {{ date('Y') }}. All
                    rights reserved
                </div>
            </div>

        </div>
    </footer>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/magnific-popup.min.js"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            $('.ajax-popup-align-top').magnificPopup({
                type: 'ajax',
                alignTop: true,
                closeOnBgClick: false,
                overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
            });
            $(document).on('focus', 'input, textarea', function(e){
                $(this).parent().addClass('input-filled');
            });
            $(document).on('blur', 'input, textarea', function(e){
                $(this).parent().removeClass('input-filled');
            });
        })
    </script>
</section>
</body>
</html>