<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title>Lottery | Results, Information</title>
    <meta name="description" content="" />
    <meta name="keywords" content="lottery, national lottery, lottery results, lottery news" />
    <meta name="author" content="The Lottery Company Ltd" />
    <meta name="format-detection" content="telephone=no">

    <meta property="og:title" content="Lottery | Results, Information" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:image" content="{{ asset('images/open-graph/lotterycouk-og.jpg') }}" />
    <meta property="fb:admins" content="100002871442561"/>

    <link href="{{ asset('css/desktopb31d.css?v=201706081312') }}" rel="stylesheet" type="text/css" />
    <noscript>
        <style type="text/css">
            .minimised{height:auto !important;overflow:visible !important;}
            .socialContainer{display:none;}
        </style>
    </noscript>

    <link rel="stylesheet" href="{{ asset('css/gamesf2fa.css?v=201510161129') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="canonical" href="{{ url('/') }}" />
    {{--<script type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","url":"https://www.lottery.co.uk/","potentialAction":{"@type":"SearchAction","target":"https://www.lottery.co.uk/search-results?q={search_term_string}","query-input":"required name=search_term_string"}}</script>--}}
    <script type="text/javascript">
        // Multiple window onload function
        function addLoadEvent(e){var t=window.onload;if(typeof window.onload!="function"){window.onload=e}else{window.onload=function(){if(t){t()}e()}}}
    </script>
    <style>
        .feature-box {float:left;width:940px;height:400px; background:url({{ asset('images/feature-bg.jpg')  }}) no-repeat top right #1f4462; border-radius:8px; margin:20px 0; position:relative}
        .feature-box .text-container {width:450px; display:inline-block; text-align:center; color:#fff; font-weight:700; padding:40px 20px; letter-spacing:-1px;}
        .feature-box h2 {color:#fff; text-transform:uppercase; margin-top:40px; font-size:50px!important;}
        .feature-box hr {width:80px; margin-bottom:40px;}
        .feature-box .box {display:inline-block; margin-bottom:40px;}
        .feature-box .title {font-size:40px; color:#ffcc00; text-transform:uppercase; line-height:40px;}
        .feature-box p, .feature-box .date {font-size:24px; margin-bottom:0;}
        .feature-box .date {font-weight:normal}
        .feature-box .button-yellow {position:absolute; bottom:30px; right:30px; top:auto;}
    </style>

</head>
<body>
    <a id="top"></a>
    <header>
        <div id="login-panel" style="position: relative; margin-top:-132px">
            <div class="container">
                <form id="form_login" name="form" action="{{ route('login') }}" method="post" onSubmit="return checkloginForm();" class="horizontal-login">
                    {{ csrf_field() }}
                    <div class="username{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" name="email" type="text" placeholder="Your Email Address" tabindex="1" class="form-control" value="{{ old('email') }}" >
                        <span><a href="{{ route('password.request') }}" title="Forgotten Your Password?">Forgot Password?</a></span>
                    </div>
                    <div class="password{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" name="password" type="password" placeholder="Password" tabindex="2" class="form-control">
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                        @if ($errors->has('password'))
                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif

                        <button type="button"><a href="{{ url('login/facebook') }}"><i class="fa fa-facebook"></i> Facebook</a></button>
                        <button type="button"><a href="{{ url('login/google') }}"><i class="fa fa-google"></i> Google</a></button>
                    </div>
                    <div class="submit">
                        <button id="submit_login_details" type="submit" class="button-blue cont-button"><i class="fa fa-sign-in"></i> Login</button>
                    </div>
                    <input id="Login0" name="Login" type="hidden" value="1" />
                </form>
                <div class="join">
                    Haven't registered? <a href="{{ route('register') }}" title="Join Free Lottery"><div class="button-yellow">Register</div></a>
                    {{--<p><a href="why-register.html" title="Registration Benefits">What are the benefits of registering?</a></p>--}}
                    @if(!Auth::check())
                        <button id="panelButton" class="panel-button"><i class="fa fa-sign-in"></i> Login</button>
                    @else
                        <a class="panel-button" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                    {{--<noscript>--}}
                        {{--<form method="post" action="{{ route('login') }}" id="login_button" name="form">--}}
                            {{--<button class="panel-button">Login</button>--}}
                        {{--</form>--}}
                    {{--</noscript>--}}
                    <a id="panel-close" onclick="return false;" style="cursor:pointer;">Close <span>X</span></a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            (function() {
                var minheight = -132;
                var maxheight = 0;
                var time = 300;
                var timer = null;
                var toggled = false;

                window.onload = function() {
                    if (document.getElementById('quickPick')) {
                        SelectedBalls();
                    }

                    if (document.getElementById('panelButton')) {
                        var panelBtn = document.getElementById('panelButton');
                        var panelBtnCls = document.getElementById('panel-close');

                        if (panelBtn.addEventListener) {
                            panelBtn.addEventListener("click", loginSlider);
                            panelBtnCls.addEventListener("click", loginSlider);
                        } else {
                            panelBtn.attachEvent("onclick", loginSlider);
                            panelBtnCls.attachEvent("onclick", loginSlider);
                        }
                    }

                    var slider = document.getElementById('login-panel');
                    slider.style.marginTop = minheight + 'px';

                    function loginSlider() {

                        clearInterval(timer);
                        var instanceheight = parseInt(slider.style.marginTop);
                        var init = (new Date()).getTime();
                        var height = (toggled = !toggled) ? maxheight : minheight;
                        var disp = height - parseInt(slider.style.marginTop);

                        timer = setInterval(function() {
                            var instance = (new Date()).getTime() - init;
                            if (instance < time) {
                                var con = instance / time;
                                var pos = Math.floor(disp * con);
                                result = instanceheight + pos;
                                slider.style.marginTop = result + 'px';
                            } else {
                                slider.style.marginTop = height + 'px';
                                /*safety side ^^*/
                                clearInterval(timer);
                            }
                        }, 1);
                    };
                };

            })();
        </script>

        <script type="text/javascript">
            function checkloginForm() {
                if (document.getElementById("email").value == "") {
                    alert("Please enter your email address.");
                    document.getElementById("email").focus();
                    return false;
                } else {
                    apos = document.getElementById("email").value.indexOf("@");
                    dotpos = document.getElementById("email").value.lastIndexOf(".");

                    if (apos < 1 || dotpos - apos < 2) {
                        alert("Please enter a valid email address.");
                        document.getElementById("email").focus();
                        return false;
                    }
                }
                if (document.getElementById("password").value == "") {
                    alert("Please enter a password.");
                    document.getElementById("password").focus();
                    return false;
                }
                return true;
            }
        </script>

        <div class="hf header">
            <div class="hf-inner">
                <a class="siteLogo" href="{{ asset('/') }}" title="Lottery"><img src="images/template/logo_fixed.png" alt="Lottery" width="311" height="51" /></a>
                <div class="topRight">
                    <div class="dateTime">Saturday 8th July 2017 @if(Auth::check()) ||  Hello {{ Auth::user()->name }}! @endif</div>
                </div>

                <ul id="tabMenu">
                    <li><a href="lottery-tickets.html" title="Buy Lottery Tickets Online" class="tickets">Lottery Tickets</a></li>
                    <li><a href="https://www.bingo-lottery.co.uk/" title="Play bingo online at Bingo-Lottery" rel="nofollow">Bingo</a></li>
                    <li><a href="https://games.lottery.co.uk/" title="Lottery Games">Lottery Games</a></li>
                    <li><a href="results.html" title="View the latest lottery results">Lottery Results</a></li>
                </ul>

                <div id="siteSearch">
                    <script type="text/javascript">
                        function validateSearch() {
                            var q = document.getElementById('q');
                            if (q.value == '' || q.value == 'Search...') return false;
                        };
                    </script>
                    <form action="https://www.lottery.co.uk/search-results" id="search" name="mainSearch" onSubmit="return validateSearch()">
                        <input type="text" name="q" id="q" class="box" value="Search..." onFocus="if(this.value=='Search...'){this.value='';this.style.width='150px'}" onBlur="if(this.value==''){this.value='Search...';this.style.width='50px'}"  />
                        <input type="submit" name="submit" value="Search" class="btn"/>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div id="siteContainer">



        <div id="sidebarLeft">

            <nav>



                <ul class="sideMenu" id="sideMenu">

                    <li class="menuTitle">Main Menu</li>

                    <li><a href="index.html" title="Lottery" class="nav-home left">Lottery.co.uk</a></li>

                    <li>
                        <a href="results.html" title="Lottery Results" class="nav-results subAvailable">Lottery Results</a>

                        <ul class="subMenu" onMouseOver="hover(this,'on')" onMouseOut="hover(this,'off')">
                            <li><a href="lotto/results.html" title="Lotto Results">Lotto</a></li>
                            <li><a href="lotto/raffle/results.html" title="Lotto Raffle Results">Lotto Raffle</a></li>
                            <li><a href="euromillions/results.html" title="EuroMillions Results">EuroMillions</a></li>
                            <li><a href="euromillions/millionaire-maker/results.html" title="EuroMillions Millionaire Maker Results">Millionaire Maker</a></li>
                            <li><a href="thunderball/results.html" title="Thunderball Results">Thunderball</a></li>
                            <li><a href="lotto/hotpicks/results.html" title="Lotto HotPicks Results">Lotto HotPicks</a></li>
                            <li><a href="irish-lotto/results.html" title="Irish Lotto Results">Irish Lotto</a></li>
                            <li><a href="health-lottery/results.html" title="Health Lottery Results">Health Lottery</a></li>
                            <li><a href="postcode-lottery/results.html" title="Postcode Lottery Results">Postcode Lottery</a></li>
                            <li><a href="free-lottery/results.html" title="Free Lottery Results">Free Lottery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="syndicates.html" title="Lottery Syndicates" class="nav-syndicate subAvailable">Syndicates</a>

                        <ul class="subMenu" onMouseOver="hover(this,'on')" onMouseOut="hover(this,'off')">
                            <li><a href="syndicates/guide.html" title="Syndicate Guide">What is a Syndicate?</a></li>
                            <li><a href="syndicates/types.html" title="Types of Syndicates">Types of Syndicates</a></li>
                            <li><a href="syndicates/join.html" title="Join a Syndicate">Join a Syndicate</a></li>
                            <li><a href="syndicates/create.html" title="Create a Syndicate">Create a Syndicate</a></li>
                            <li><a href="syndicates/faqs.html" title="Syndicate FAQs">FAQs</a></li>
                            <li><a href="syndicates/winners.html" title="Syndicate Winners">Winners</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="checker.html" title="Lottery Results Checker" class="nav-checker subAvailable">Checker</a>

                        <ul class="subMenu" onMouseOver="hover(this,'on')" onMouseOut="hover(this,'off')">
                            <li><a href="lotto/checker.html" title="Lotto Results Checker">Lotto</a></li>
                            <li><a href="lotto/checker.html#lotto-raffle" title="Lotto Raffle Results Checker">Lotto Raffle</a></li>
                            <li><a href="euromillions/checker.html" title="EuroMillions Results Checker">EuroMillions</a></li>
                            <li><a href="euromillions/checker.html#millionaire-maker" title="Millionaire Maker Results Checker">Millionaire Maker</a></li>
                            <li><a href="thunderball/checker.html" title="Thunderball Results Checker">Thunderball</a></li>
                            <li><a href="irish-lotto/checker.html" title="Irish Lotto Results Checker">Irish Lotto</a></li>
                            <li><a href="health-lottery/checker.html" title="Health Lottery Results Checker">Health Lottery</a></li>
                            <li><a href="postcode-lottery/checker.html" title="Postcode Lottery Results Checker">Postcode Lottery</a></li>
                            <li><a href="free-lottery/checker.html" title="Free Lottery Results Checker">Free Lottery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="number-generator.html" title="Lottery Number Generator" class="nav-random subAvailable">Number Generator</a>

                        <ul class="subMenu" onMouseOver="hover(this,'on')" onMouseOut="hover(this,'off')">
                            <li><a href="lotto/number-generator.html" title="Lotto Number Generator">Lotto</a></li>
                            <li><a href="euromillions/number-generator.html" title="EuroMillions Number Generator">EuroMillions</a></li>
                            <li><a href="thunderball/number-generator.html" title="Thunderball Number Generator">Thunderball</a></li>
                            <li><a href="irish-lotto/number-generator.html" title="Irish Lotto Number Generator">Irish Lotto</a></li>
                            <li><a href="health-lottery/number-generator.html" title="Health Lottery Number Generator">Health Lottery</a></li>
                            <li><a href="free-lottery/number-generator.html" title="Free Lottery Number Generator">Free Lottery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="statistics.html" title="Lottery Statistics" class="nav-stats subAvailable">Statistics</a>

                        <ul class="subMenu" onMouseOver="hover(this,'on')" onMouseOut="hover(this,'off')">
                            <li><a href="lotto/statistics.html" title="Lottery Statistics">Lotto</a></li>
                            <li><a href="euromillions/statistics.html" title="EuroMillions Statistics">EuroMillions</a></li>
                            <li><a href="thunderball/statistics.html" title="Thunderball Statistics">Thunderball</a></li>
                            <li><a href="irish-lotto/statistics.html" title="Irish Lotto Statistics">Irish Lotto</a></li>
                            <li><a href="health-lottery/statistics.html" title="Health Lottery Statistics">Health Lottery</a></li>
                            <li><a href="postcode-lottery/statistics.html" title="Postcode Lottery Statistics">Postcode Lottery</a></li>
                            <li><a href="free-lottery/statistics.html" title="Free Lottery Statistics">Free Lottery</a></li>
                        </ul>
                    </li>

                    <li><a href="news.html" title="Lottery News" class="nav-news">News</a></li>
                    <li>
                        <a href="lotteries.html" title="Lotteries" class="nav-lotteries subAvailable">The Lotteries</a>

                        <ul class="subMenu" onMouseOver="hover(this,'on')" onMouseOut="hover(this,'off')">
                            <li><a href="lotto.html" title="Lotto Draw Information">Lotto</a></li>
                            <li><a href="lotto/raffle.html" title="Lotto Raffle Information">Lotto Raffle</a></li>
                            <li><a href="euromillions.html" title="EuroMillions Lottery Information">EuroMillions</a></li>
                            <li><a href="euromillions/millionaire-maker.html" title="EuroMillions Millionaire Maker Information">Millionaire Maker</a></li>
                            <li><a href="thunderball.html" title="Thunderball Information">Thunderball</a></li>
                            <li><a href="lotto/hotpicks.html" title="Lotto HotPicks Information">Lotto HotPicks</a></li>
                            <li><a href="irish-lotto.html" title="Irish Lotto Information">Irish Lotto</a></li>
                            <li><a href="health-lottery.html" title="Health Lottery Information">Health Lottery</a></li>
                            <li><a href="postcode-lottery.html" title="Postcode Lottery Information">Postcode Lottery</a></li>
                            <li><a href="free-lottery.html" title="Free Lottery Information">Free Lottery</a></li>
                            <li><a href="other-lottery-games.html" title="Information on other world lotteries">Other Lotteries</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="information.html" title="Lottery Information" class="nav-info subAvailable">Information</a>

                        <ul class="subMenu" onMouseOver="hover(this,'on')" onMouseOut="hover(this,'off')">
                            <li><a href="winners-guide.html" title="Winners Guide">Winners Guide</a></li>
                            <li><a href="lost-ticket.html" title="Lost Lottery Tickets">Lost Tickets</a></li>
                            <li><a href="damaged-ticket.html" title="Damaged Lottery Tickets">Damaged Tickets</a></li>
                            <li><a href="history-of-lotteries.html" title="History of UK Lotteries">History of Lotteries</a></li>
                            <li><a href="good-causes.html" title="Lottery Funding">Good Causes</a></li>
                            <li><a href="unclaimed-lottery-prizes.html" title="Lottery Unclaimed Prizes">Unclaimed Prizes</a></li>
                        </ul>
                    </li>
                    <li class="last"><a href="login.html" title="Sign In to Lottery.co.uk" class="nav-logout">Sign In</a></li>

                </ul>



            </nav>

            <script type="text/javascript">
                <!--
                function hover(obj,state) {
                    if (state == 'on') {prevNode(obj).className+=' hovered'}
                    else {prevNode(obj).className = prevNode(obj).className.replace(' hovered','')}
                }

                function prevNode(n) {
                    x = n.previousSibling
                    while (x.nodeType != 1) {
                        x = x.previousSibling;
                    } return x;
                };

                function nextNode(n) {
                    x = n.nextSibling
                    while (x.nodeType != 1) {
                        x = x.nextSibling;
                    } return x;
                };


                -->
            </script>


            <a href="https://www.jackpot.com/euromillions?s=40446" title="Play EuroMillions Online" rel="nofollow" target="_blank">
                <img src="images/banners/euromillions-square-lotter.png" alt="Play EuroMillions Online" class="sideSquare" width="248" height="248" />
            </a>


            <div class="centred">
                <a href="https://www.facebook.com/Lottery.UK" id="footerFacebook" title="Click here for our Facebook page" target="_blank"><img src="images/template/icon-facebook.png" alt="Facebook" style="width: 40px;" /></a>
                <a href="https://twitter.com/lottery_uk" title="Click here for our Twitter page" target="_blank"><img src="images/template/icon-twitter.png" alt="Twitter" style="width: 40px;" /></a>
                <a href="https://www.instagram.com/lottery_uk/" title="Click here for our Instagram page" target="_blank"><img src="images/template/icon-instagram.png" alt="Instagram" style="width: 40px;" /></a>
            </div>

            <script type="text/javascript">window.fbAsyncInit=function(){FB.init({appId:"592933847410638",status:!0,cookie:!0,xfbml:!0,version:"v2.5"}),FB.getLoginStatus(function(e){if(e||!e.status)if("connected"===e.status||"not_authorized"===e.status)document.getElementById("footerFacebook")&&document.getElementById("footerFacebook").href("https://www.facebook.com/Lottery.UK");else if(document.getElementById("footerFacebook")){var t=document.getElementById("footerFacebook"),o=document.getElementById("closeFB"),n=function(e){e.preventDefault(),e.stopPropagation();var t=document.getElementById("LotteryUK");t.className="FBPopup showModal"},c=function(e){e.preventDefault(),e.stopPropagation();var t=document.getElementById("LotteryUK");t.className="FBPopup hideModal"};t.addEventListener("click",n),o.addEventListener("click",c)}})},function(e,t,o){var n,c=e.getElementsByTagName(t)[0];e.getElementById(o)||(n=e.createElement(t),n.id=o,n.src="http://connect.facebook.net/en_US/sdk.js",c.parentNode.insertBefore(n,c))}(document,"script","facebook-jssdk");</script>

            <div id="LotteryUK" class="FBPopup">
                <div class="box">
                    <div class="head"><a id="closeFB">Close</a></div>
                    <p>You first need to log in to Facebook to view this page because it contains age-restricted content.</p>
                    <a href="https://www.facebook.com/Lottery.UK" title="Go to Facebook and Login" class="button-alt">Go to Facebook and Login</a>
                </div>
            </div>



        </div>



        <a id="content"></a>

        <div class="mainHome">

            <h1 class="home">Lottery</h1>

            <br class="clear">



            <div class="abstract euromillionsBox homeResults">

                <div class="boxTitle">EuroMillions Results<span class="boxResultsDate"> - Friday 7<sup>th</sup> July 2017</span></div><br>

                <div class="calendar medium floatLeft">
                    <span class="calMonth">Jul</span>
                    <span class="calDate">7<sup>th</sup></span>
                </div>

                <div class="resultsCont">
                    <div class="result medium euromillions-ball">11</div>
                    <div class="result medium euromillions-ball">20</div>
                    <div class="result medium euromillions-ball">35</div>
                    <div class="result medium euromillions-ball">37</div>
                    <div class="result medium euromillions-ball">45</div>
                    <div class="result medium euromillions-lucky-star">3</div>
                    <div class="result medium euromillions-lucky-star">6</div>
                </div>

                <div class="jackpotCont euromillionsBox">Jackpot: <strong style="color: #FE0;">&pound;25,663,715</strong></div>
                <br class="clear" />

                <span class="winnersRounded">Over <strong style="font-size: 18px;">1,800,000</strong> <br>winners in this draw!</span>

                <a href="euromillions/results.html" title="View past euromillions results from recent weeks" class="button-blue">More EuroMillions Results</a>
                <a href="euromillions/results-07-07-2017.html" title="View the Millionaire Maker results and prize breakdown" class="button-blue">View the Millionaire Maker Results</a>

                <div class="resultsBottom">
                    <div id="resultsBottomInner" class="floatLeft" style="position: relative; top: 0;">
                        <span class="bottomText">Time to next draw:</span>

                        <span id="countdown">

			<script type="text/javascript">
			<!--
            var days1 = 3;
            var hours1 = 10;
            var minutes1 = 25;
            var seconds1 = 48;
            var countdown1 = document.getElementById('countdown');

            function display1() {

                if (days1 > 0 || hours1 > 0 || minutes1 > 0 || seconds1 > 0) {

                    if (hours1 <= 0 && minutes1 <= 0 && seconds1 <= 0) {hours1 = 23; minutes1 = 59; seconds1 = 59; days1 -= 1}
                    else if (minutes1 <= 0 && seconds1 <= 0) {minutes1 = 59; seconds1 = 59; hours1 -= 1}
                    else if (seconds1 <= 0) {seconds1 = 59; minutes1 -= 1}
                    else {seconds1 -= 1}

                    //if (String(hours1).length == 1) {hours1 = "0" + hours1;}
                    //if (String(minutes1).length == 1) {minutes1 = "0" + minutes1;}
                    //if (String(seconds1).length == 1) {seconds1 = "0" + seconds1;}

                    countdown1.innerHTML = "<span class='counterPart'><span class='counterType'>days</span><span class='counterVal'>" + days1 + "</span></span>"
                    countdown1.innerHTML += "<span class='counterPart'><span class='counterType'>hours</span><span class='counterVal'>" + hours1 + "</span></span>"
                    countdown1.innerHTML += "<span class='counterPart'><span class='counterType'>mins</span><span class='counterVal'>" + minutes1 + "</span></span>"
                    countdown1.innerHTML += "<span class='counterPart'><span class='counterType'>secs</span><span class='counterVal'>" + seconds1 + "</span></span>"
                    setTimeout("display1()",1000);

                } else {
                    countdown1.innerHTML = "<span class='counterPart'><span class='counterType'>days</span><span class='counterVal'>0</span></span>"
                    countdown1.innerHTML += "<span class='counterPart'><span class='counterType'>hours</span><span class='counterVal'>0</span></span>"
                    countdown1.innerHTML += "<span class='counterPart'><span class='counterType'>mins</span><span class='counterVal'>0</span></span>"
                    countdown1.innerHTML += "<span class='counterPart'><span class='counterType'>secs</span><span class='counterVal'>0</span></span>"
                }

            };

            display1();
            -->
			</script>
			<noscript>
				<span class="counterPart"><span class="counterType">days</span><span class="counterVal">3</span></span>
				<span class="counterPart"><span class="counterType">hours</span><span class="counterVal">10</span></span>
				<span class="counterPart"><span class="counterType">mins</span><span class="counterVal">25</span></span>
				<span class="counterPart"><span class="counterType">secs</span><span class="counterVal">48</span></span>
			</noscript></span>
                        <br class="clear" />

                        <span class="bottomText">Next Estimated Jackpot:</span>
                        <span class="bottomText"><strong style="font-size: 28px;">&pound;14,000,000</strong></span>
                    </div>

                    <a href="https://www.jackpot.com/euromillions?s=40446" title="Click to play euromillions online" rel="nofollow" target="_blank" class="button-yellow block floatRight fixie" id="leftBuyButton">Play EuroMillions Now</a>
                </div>



                <script type="text/javascript">
                    <!--
                    var sliderInterval, slideTimer, topAmt = 0;
                    var el = document.getElementById('resultsBottomInner');

                    addLoadEvent(function() {sliderInterval = setInterval("slider()",5000)});

                    function slider() {
                        clearTimeout(slideTimer);
                        if (el.style.top == '0px') {slide('up')}
                        else if (el.style.top == '-70px') {slide('down')}
                        else {el.style.top = '0px'}
                    };

                    function slide(direction) {
                        if (direction == 'up') {
                            topAmt -= 1;
                            el.style.top = topAmt + 'px';
                            if (topAmt <= -70) {clearTimeout(slideTimer);}
                            else {slideTimer = setTimeout("slide('up')",5);}
                        } else if (direction == 'down') {
                            topAmt += 1;
                            el.style.top = topAmt + 'px';
                            if (topAmt >= 0) {clearTimeout(slideTimer);}
                            else {slideTimer = setTimeout("slide('down')",2);}
                        }
                    }
                    -->
                </script>



            </div>


            <div class="abstract lottoBox homeResultsShort floatRight">



                <div class="boxTitle" style="padding: 20px 0 14px;">Lotto</div>

                <p>Tonight's Est. Lotto Jackpot:</p>
                <p><strong class="bigJackpot">&pound;3,300,000</strong></p>



                <br><p>Time left to buy tickets:</p>
                <span id="countdown2" class="countdown" style="margin-bottom: 15px;">

			<script type="text/javascript">
			<!--
            var days2 = 0;
            var hours2 = 9;
            var minutes2 = 55;
            var seconds2 = 48;
            var countdown2 = document.getElementById('countdown2');

            function display2() {

                if (days2 > 0 || hours2 > 0 || minutes2 > 0 || seconds2 > 0) {

                    if (hours2 <= 0 && minutes2 <= 0 && seconds2 <= 0) {hours2 = 23; minutes2 = 59; seconds2 = 59; days2 -= 1}
                    else if (minutes2 <= 0 && seconds2 <= 0) {minutes2 = 59; seconds2 = 59; hours2 -= 1}
                    else if (seconds2 <= 0) {seconds2 = 59; minutes2 -= 1}
                    else {seconds2 -= 1}

                    //if (String(hours2).length == 1) {hours2 = "0" + hours2;}
                    //if (String(minutes2).length == 1) {minutes2 = "0" + minutes2;}
                    //if (String(seconds2).length == 1) {seconds2 = "0" + seconds2;}

                    countdown2.innerHTML = "<span class='counterPart'><span class='counterType'>days</span><span class='counterVal'>" + days2 + "</span></span>"
                    countdown2.innerHTML += "<span class='counterPart'><span class='counterType'>hours</span><span class='counterVal'>" + hours2 + "</span></span>"
                    countdown2.innerHTML += "<span class='counterPart'><span class='counterType'>mins</span><span class='counterVal'>" + minutes2 + "</span></span>"
                    countdown2.innerHTML += "<span class='counterPart'><span class='counterType'>secs</span><span class='counterVal'>" + seconds2 + "</span></span>"
                    setTimeout("display2()",1000);

                } else {
                    countdown2.innerHTML = "<span class='counterPart'><span class='counterType'>days</span><span class='counterVal'>0</span></span>"
                    countdown2.innerHTML += "<span class='counterPart'><span class='counterType'>hours</span><span class='counterVal'>0</span></span>"
                    countdown2.innerHTML += "<span class='counterPart'><span class='counterType'>mins</span><span class='counterVal'>0</span></span>"
                    countdown2.innerHTML += "<span class='counterPart'><span class='counterType'>secs</span><span class='counterVal'>0</span></span>"
                }

            };

            display2();
            -->
			</script>
			<noscript>
				<span class="counterPart"><span class="counterType">days</span><span class="counterVal">0</span></span>
				<span class="counterPart"><span class="counterType">hours</span><span class="counterVal">9</span></span>
				<span class="counterPart"><span class="counterType">mins</span><span class="counterVal">55</span></span>
				<span class="counterPart"><span class="counterType">secs</span><span class="counterVal">48</span></span>
			</noscript></span>
                <a href="https://www.jackpot.com/lotto?s=40446" title="Click to buy lotto tickets online" id="homeBuyButton" rel="nofollow" target="_blank" class="button-yellow fixie block centred">Play Lotto Now</a>



            </div>
    </header>
</body>
</html>