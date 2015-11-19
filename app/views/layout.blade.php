<!doctype html>
<html land="en" ng-app="productApp">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SAC 710</title>
    <meta name="description" content="">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">

    {{ HTML::script('/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'); }}

            <!--load stylesheets-->
    {{ HTML::style('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css'); }}
            <!--
    {{ HTML::style('/css/bootstrap-theme.min.css'); }}
            -->
    {{ HTML::style('/css/bootstrap.min.css'); }}
    {{ HTML::style('/css/main.css'); }}
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>

</head>
<body ng-controller="ProductController">
<<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><h3>DCCX</h3></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            {{--<div class="navbar-left navbar-form">--}}
            {{--<div class="form-group">--}}
            {{--<h4><spanFirst Time? Get a FREE G &nbsp;</span> <SMALL class="call-us"> Call Us: <span>(916) 420-3311</span></SMALL></h4>--}}
            {{--</div>--}}
            {{--</div>--}}
            <ul class="navbar-right navbar-nav nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Products</a></li>
                <li><a href="#">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add Product</a></li>
                        <li><a href="#">Membership</a></li>
                        <li><a href="#">Edit Information</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
            {{--<form class="navbar-form navbar-right" role="form">--}}
            {{--<div class="form-group">--}}
            {{--<h4>Get deals delivered: </h4>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<input type="text" placeholder="Email" class="form-control">--}}
            {{--</div>--}}
            {{--<button type="submit" class="btn btn-primary">Join</button>--}}
            {{--</form>--}}
        </div><!--/.navbar-collapse -->
    </div>
    <div class="greenHRow"></div>
</nav>

@yield('content')

{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js'); }}
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.js"><\/script>')</script>

{{ HTML::script('//ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js'); }}

{{ HTML::script('/js/main.js'); }}

{{ HTML::script('/js/controllers/productController.js'); }}

        <!--load scripts-->
{{ HTML::script('/js/vendor/bootstrap.min.js'); }}
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.1/angular-animate.min.js') }}
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.1/angular-sanitize.min.js') }}
{{ HTML::script('/js/services/refreshData.js') }}
{{ HTML::script('') }}


</body>
</html>