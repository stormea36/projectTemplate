@extends('layout')

@section('content')
<div>
    <div class='row'>
        <div class='small-12 small-text-center'>
            <h2>Welcome to Pong!</h2>
            <button id='button1' class='button'>button 1</button>
            <button id='button2' class='button'>button 2</button>
        </div>
    </div>
    <div class='row'>
        <div class='small-12'>
            <ul data-bind="foreach: states" class="inline-list single-app-header">
                <li data-bind="text: $data, 
                   css: { current: $data == $root.currentState() },
                   click: $root.changeState"></li>
            </ul>
        </div>
    </div>
    {{ Form::open(array('route' => 'pong.save')) }}
    <div class='row'>
        <div class='small-6 large-6'>
            
            
            <div class="row">
                <div class="large-3 medium-4 small-12 columns">
                  <label for="email" class="inline">Player 1</label>
                </div>
                <div class="large-9  medium-8 small-12 columns">
                  {{ Form::select('player1', array('1' => 'Jon Iskow', '2' => 'Storm Anderson', '3' => 'Ethan Jamrose', '4' => 'Bill Mitchell')) }}
                </div>
            </div>
            
            <div class="row">
                <div class="large-3 medium-4 small-12 columns">
                  <label for="email" class="inline">Player 2</label>
                </div>
                <div class="large-9  medium-8 small-12 columns">
                  {{ Form::select('player1', array('1' => 'Jon Iskow', '2' => 'Storm Anderson', '3' => 'Ethan Jamrose', '4' => 'Bill Mitchell')) }}
                </div>
            </div>
            
            
            
        </div>
        <div class='small-6 large-6'>
            <div class="row">
                <div class="large-3 medium-4 small-12 columns">
                  <label for="email" class="inline">Score 1</label>
                </div>
                <div class="large-9  medium-8 small-12 columns">
                  {{ Form::select('player1', array('1' => 'Jon Iskow', '2' => 'Storm Anderson', '3' => 'Ethan Jamrose', '4' => 'Bill Mitchell')) }}
                </div>
            </div>
            
            <div class="row">
                <div class="large-3 medium-4 small-12 columns">
                  <label for="email" class="inline">Score 2</label>
                </div>
                <div class="large-9  medium-8 small-12 columns">
                  {{ Form::select('player1', array('1' => 'Jon Iskow', '2' => 'Storm Anderson', '3' => 'Ethan Jamrose', '4' => 'Bill Mitchell')) }}
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}
    
</div>



@stop


Johnny Rockets is temporarily Unavailable