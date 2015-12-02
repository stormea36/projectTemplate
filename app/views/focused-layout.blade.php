<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>project</title>


    <!--load scripts-->
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); }}
    {{ HTML::script('///ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js'); }}
    {{--{{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js'); }}--}}

            <!--load stylesheets-->
    {{ HTML::style('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css'); }}
    {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'); }}


    {{--<!--foundation files-->--}}
    {{--{{ HTML::style('//cdnjs.cloudflare.com/ajax/libs/foundation/5.3.0/css/foundation.min.css'); }}--}}
    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js'); }}


            <!--Bootstrap files-->
    {{--{{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'); }}--}}
    {{--{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'); }}--}}
    {{--{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'); }}--}}

    {{ HTML::style('/styles/normalize.css'); }}
    {{ HTML::style('/styles/main.css'); }}


</head>
<body class="focused-bg">
<div class="fixed">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="{{ url('/') }}">project</a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                @if($info)
                    <li>{{$info}}</li>
                @endif
                <li></li>
                <li class="has-dropdown">
                    <a href="#">User Portal</a>
                    <ul class="dropdown">
                        @if(Auth::check())
                            <li><a href="{{ url('/user') }}">Dashboard</a></li>
                            <li><a href="{{ URL::action('UserController@logOut') }}"><i class="icon-off"></i> Logout</a></li>
                        @else
                            <li><a href="{{ url('/user/login') }}">Log in</a></li>
                            <li><a href="{{url('/user/register')}}">Register</a></li>

                        @endif
                    </ul>
                </li>
            </ul>
            <!-- Left Nav Section -->

            {{--<ul class="left">--}}
            {{--<li class="has-dropdown">--}}
            {{--<a href="#">Explore</a>--}}
            {{--<ul class="dropdown">--}}
            {{--<li><a href="#">Area one</a></li>--}}
            {{--<li><a href="#">Area two</a></li>--}}
            {{--<li><a href="#">Area three</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="#">Area top two</a></li>--}}
            {{--<li><a href="#">Area top three</a></li>--}}
            {{--</ul>--}}

        </section>
    </nav>
</div>

<!-- This is a *view* - HTML markup that defines the appearance of your UI -->


@yield('content')

    <script>
        $(document).foundation();
    </script>
    </body>
    {{ HTML::script(''); }}

</html>


