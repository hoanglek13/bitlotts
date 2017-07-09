@extends('layouts.app')
@section('title', 'Dashboard'. ' | ')

@section('style')
    <!-- Stylesheet -->
    <link src="{{ asset('assets/css/dashboard.css') }}">
    <!-- End Stylesheet -->
@endsection

@section('content')
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li class="active">
                <i class="fa fa-home"></i> Dashboard
            </li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->
    <!-- Page Header -->
    <div class="page-header position-relative">
        <div class="header-title">
            <h1>Overview</h1>
        </div>
        <!--Header Buttons-->
        <div class="header-buttons">
            <a class="sidebar-toggler" href="#">
                <i class="fa fa-arrows-h"></i>
            </a>
            <a class="refresh" id="refresh-toggler" href="">
                <i class="glyphicon glyphicon-refresh"></i>
            </a>
            <a class="fullscreen" id="fullscreen-toggler" href="#">
                <i class="glyphicon glyphicon-fullscreen"></i>
            </a>
        </div>
        <!--Header Buttons End-->
    </div>
    <!-- /Page Header -->
    <!-- Page Body -->
    <div class="page-body">
        <!-- Your Content Goes Here -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="databox bg-white radius-bordered">
                    <div class="databox-left bg-themesecondary">
                        <div class="databox-piechart">
                            <div data-toggle="easypiechart"
                                    class="easyPieChart"
                                    data-barcolor="#fff"
                                    data-linecap="butt"
                                    data-percent="50"
                                    data-animate="500"
                                    data-linewidth="3"
                                    data-size="47"
                                    data-trackcolor="rgba(255,255,255,0.1)">
                                <span class="white font-190"><i class="fa fa-ticket"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="databox-right">
                        <span class="databox-number themesecondary">28</span>
                        <div class="databox-text darkgray">TICKETS</div>
                        <div class="databox-stat themesecondary radius-bordered">
                            <i class="stat-icon icon-lg fa fa-ticket"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="databox bg-white radius-bordered">
                    <div class="databox-left bg-themethirdcolor">
                        <div class="databox-piechart">
                            <div data-toggle="easypiechart"
                                 class="easyPieChart"
                                 data-barcolor="#fff"
                                 data-linecap="butt"
                                 data-percent="15"
                                 data-animate="500"
                                 data-linewidth="3"
                                 data-size="47"
                                 data-trackcolor="rgba(255,255,255,0.2)">
                                <span class="white font-190"><i class="fa fa-bitcoin"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="databox-right">
                        <span class="databox-number themethirdcolor">5.219222</span>
                        <div class="databox-text darkgray">BALANCE</div>
                        <div class="databox-stat themethirdcolor radius-bordered">
                            <i class="stat-icon  icon-lg fa fa-bitcoin"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="databox bg-white radius-bordered">
                    <div class="databox-left bg-themeprimary">
                        <div class="databox-piechart">
                            <div id="users-pie"
                                 data-toggle="easypiechart"
                                 class="easyPieChart"
                                 data-barcolor="#fff"
                                 data-linecap="butt"
                                 data-percent="76"
                                 data-animate="500"
                                 data-linewidth="3"
                                 data-size="47"
                                 data-trackcolor="rgba(255,255,255,0.1)">
                                <span class="white font-90"><i class="fa fa-share"></i></span>
                            </div>

                        </div>
                    </div>
                    <div class="databox-right">
                        <span class="databox-number themeprimary">8</span>
                        <div class="databox-text darkgray">AFFILIATES</div>
                        <div class="databox-state bg-themeprimary">
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="databox bg-white radius-bordered">
                    <div class="databox-left no-padding">
                        <img src="assets/img/avatars/John-Smith.jpg" style="width:65px; height:65px;">
                    </div>
                    <div class="databox-right padding-top-20">
                        <div class="databox-stat palegreen">
                            <i class="stat-icon icon-xlg fa fa-phone"></i>
                        </div>
                        <div class="databox-text darkgray">JOHN SMITH</div>
                        <div class="databox-text darkgray">TOP RESELLER</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="abstract euromillionsBox homeResults">

                <div class="boxTitle">EuroMillions Results<span class="boxResultsDate"> - Friday 7<sup>th</sup> July 2017</span></div><br>

                <div class="calendar medium floatLeft">
                    <span class="calMonth">Jul</span>
                    <span class="calDate">7<sup>th</sup></span>
                </div>

                <div class="resultsCont">
                    <div class="result medium euromillions-lucky-star">3</div>
                    <div class="result medium euromillions-lucky-star">6</div>
                    <div class="result medium euromillions-ball">11</div>
                    <div class="result medium euromillions-ball">20</div>
                    <div class="result medium euromillions-ball">35</div>
                    <div class="result medium euromillions-ball">37</div>
                    <div class="result medium euromillions-ball">45</div>
                </div>

                <div class="jackpotCont euromillionsBox">Jackpot: <strong style="color: #FE0;">£25,663,715</strong></div>
                <br class="clear">

                <span class="winnersRounded">Over <strong style="font-size: 18px;">1,800,000</strong> <br>winners in this draw!</span>

                <a href="/euromillions/results" title="View past euromillions results from recent weeks" class="button-blue">More EuroMillions Results</a>
                <a href="/euromillions/results-07-07-2017" title="View the Millionaire Maker results and prize breakdown" class="button-blue">View the Millionaire Maker Results</a>

                <div class="resultsBottom">
                    <div id="resultsBottomInner" class="floatLeft" style="position: relative; top: 0px;">
                        <span class="bottomText">Time to next draw:</span>

                        <span id="countdown"><span class="counterPart"><span class="counterType">days</span><span class="counterVal">3</span></span><span class="counterPart"><span class="counterType">hours</span><span class="counterVal">12</span></span><span class="counterPart"><span class="counterType">mins</span><span class="counterVal">10</span></span><span class="counterPart"><span class="counterType">secs</span><span class="counterVal">45</span></span></span>
                        <br class="clear">

                        <span class="bottomText">Next Estimated Jackpot:</span>
                        <span class="bottomText"><strong style="font-size: 28px;">£14,000,000</strong></span>
                    </div>

                    <a href="/play/euromillions" title="Click to play euromillions online" rel="nofollow" target="_blank" class="button-yellow block floatRight fixie" id="leftBuyButton">Play EuroMillions Now</a>
                </div>







            </div>
        </div>
    </div>
    <!-- /Page Body -->
@endsection

@section('scripts')
    <script type="text/javascript">
//        var sliderInterval, slideTimer, topAmt = 0;
//        var el = document.getElementById('resultsBottomInner');
//
//        addLoadEvent(function() {sliderInterval = setInterval("slider()",5000)});
//
//        function slider() {
//            clearTimeout(slideTimer);
//            if (el.style.top == '0px') {slide('up')}
//            else if (el.style.top == '-70px') {slide('down')}
//            else {el.style.top = '0px'}
//        };
//
//        function slide(direction) {
//            if (direction == 'up') {
//                topAmt -= 1;
//                el.style.top = topAmt + 'px';
//                if (topAmt <= -70) {clearTimeout(slideTimer);}
//                else {slideTimer = setTimeout("slide('up')",5);}
//            } else if (direction == 'down') {
//                topAmt += 1;
//                el.style.top = topAmt + 'px';
//                if (topAmt >= 0) {clearTimeout(slideTimer);}
//                else {slideTimer = setTimeout("slide('down')",2);}
//            }
//        }
    </script>
@endsection

