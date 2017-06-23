<?php
/**
 * Created by PhpStorm.
 * User: ryder
 * Date: 6/23/17
 * Time: 15:04
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

    <!--Mechanic Styles-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }}">
    <link href="{{ asset('plugins/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="assets/vendors/rs-plugin/css/settings-ie8.css" media="screen">
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!--jQuery, Bootstrap and other vendor JS-->
    <!--jQuery-->
    <script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>

</head>

<body class="default home2" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    @yield('content')

    @yield('scripts')

</body>
</html>