@extends('focused-layout')

@section('content')
    <div class='row'>
        <div class="small-12 medium-4 large-4 medium-offset-4 columns">
            <div class="focus-box panel radius">
                {{ Form::open(array('route' => 'user.create', 'id' => 'signupform')) }}
                    <h2 class="text-center">Register</h2>
                    @if($error)
                        <p class='alert label wordWrap'>{{$error}}</p>
                    @endif
                    @if($message)
                    <p class='secondary label wordWrap'>{{$message}}</p>
                    @endif
                    {{ Form::open(array('route' => 'user.create', 'id' => 'signupform')) }}
                    {{ Form::hidden('userType',3) }}
                    <div class="row">
                        <div class="small-12 columns">
                            <label for="middle-label" class="text-center middle">Your Name</label>
                            {{ Form::text('name') }}
                        </div>
                    </div>
                    <div class="row">

                        <div class="small-12 columns">
                            <label for="middle-label" class="text-center middle">Contact Info</label>
                            <div class="row">
                                <div class="small-6 columns">{{ Form::text('email', Input::old('email'),  array('placeholder'=>'email @')) }}</div>
                                <div class="small-6 columns">{{ Form::text('phone', Input::old('phone'),  array('placeholder'=>'phone #')) }}</div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="small-12 columns">
                            <label for="middle-label" class="text-center middle">Password</label>
                            <div class="row">
                                <div class="small-6 columns">{{ Form::password('password',array('placeholder' => 'password', 'class' => 'class-name')) }}</div>
                                <div class="small-6 columns">{{ Form::password('passcheck',array('placeholder' => 'confirm', 'class' => 'class-name')) }}</div>
                            </div>

                        </div>
                    </div>
                    <input type="submit" class="button secondary" value="Register"/>
                {{ Form::close() }}
            </div>
        </div>

    </div>

@stop
