@extends('focused-layout')

@section('content')

    <div class="row">
        <div class="small-12 medium-5 large-5 medium-offset-4 columns">
            <div class="focus-box panel radius">
                {{ Form::open(array('route' => 'user.login', 'id' => 'loginForm')) }}
                <h2 class="text-center">Log In</h2>
                @if($error)
                    <p class='alert label wordWrap'>{{$error}}</p>
                @endif
                @if($message)
                    <div data-alert class="alert-box alert radius">
                        {{$message}}
                        <a href="#" class="close">&times;</a>
                    </div>

                @endif
                <div class="row">
                    <div class="small-3 columns">
                        <label for="email" class="right inline">Email</label>
                    </div>
                    <div class="small-9 columns">
                        {{ Form::text('logEmail') }}
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="passcheck" class="right inline">Confirm Password</label>
                    </div>
                    <div class="small-9 columns">
                        {{ Form::password('logPass') }}
                    </div>
                </div>
                <div class='row'>
                    <div class='small-12 columns'>
                        <button type="submit" class="button blackText">Log In</button>
                        <button type="button" class="button info">Cancel</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@stop
