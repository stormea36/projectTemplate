@extends('layout')

@section('content')


        <!-- This is a *view* - HTML markup that defines the appearance of your UI -->
<div class='row'>
    <div class="small-6 large-6 columns">
        @if($user)
            {{ Form::model($user, array('route' => array('user.update', $user->id),)) }}
        @endif
        <h2>User Detail for {{$user->name}}</h2>
        @if($message)
            <p class='secondary label'>{{$message}}</p>
        @endif
        <div class="row">
            <div class="small-3 columns">
                <label for="email" class="right inline">Email</label>
            </div>
            <div class="small-9 columns">
                {{ Form::text('email') }}
            </div>
        </div>
        <div class="row">
            <div class="small-3 columns">
                <label for="name" class="right inline">Name</label>
            </div>
            <div class="small-9 columns">
                {{ Form::text('name') }}
            </div>
        </div>
        <div class='row'>
            <div class='small-6 small-centered'>
                <button type="submit" class="button blackText">Update</button>
                <button type="button" class="button info">Cancel</button>
            </div>
        </div>
        {{ Form::close() }}
    </div>

</div>


@stop