@extends('layout')

@section('content')


<!-- This is a *view* - HTML markup that defines the appearance of your UI -->

<div class='row'>
    <div class="small-12 medium-6 large-6 columns">
            {{ Form::open(array('route' => 'user.create', 'id' => 'signupform')) }}
            <h2>Register</h2>
            @if($message)
            <span class='secondary label'>{{$message}}</span>
            @endif
            <div class="row">
                <div class="large-3 medium-4 small-12 columns">
                  <label for="email" class="inline">Email</label>
                </div>
                <div class="large-9  medium-8 small-12 columns">
                  {{ Form::text('email', 'example@gmail.com') }}
                </div>
            </div>
            <div class="row">
                <div class="large-3  medium-4 small-12 columns">
                  <label for="name" class="inline">Name</label>
                </div>
                <div class="large-9  medium-8 small-12 columns">
                  {{ Form::text('name') }}
                </div>
            </div>
            <div class="row">
                <div class="large-3  medium-4 small-12 columns">
                  <label for="password" class="inline">Password</label>
                </div>
                <div class="large-9 medium-8 small-12 columns">
                  {{ Form::password('password') }}
                </div>
            </div>
            <div class="row">
                <div class="large-3 medium-4 small-12 columns">
                  <label for="passcheck" class="inline">Confirm Password</label>
                </div>
                <div class="large-9 medium-8 small-12 columns">
                  {{ Form::password('passcheck') }}
                </div>
            </div>
            <div class='row'>
                <div class='small-12 small-centered'><button type="submit" class="button">Submit</button></div>
            </div>
            {{ Form::close() }}
    </div>
    
</div>
<div class='row'>
    <h2>User List</h2>
    <div class="small-12 large-12 columns">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
               @foreach($users as $user)
               <tr>
                   <td>{{$user->id}}</td>
                   <td>{{$user->name}}</td>
                   <td>{{$user->email}}</td>
                   <td><a href="{{ URL::route('user.detail', array($user->id)) }}"><i class="fa fa-pencil"></i></a></td>
                   <td><a href="{{ URL::route('user.delete', array($user->id)) }}"><i class="fa fa-times"></i></a></td>
               </tr>
               @endforeach
            </tbody>
       
        </table>
    </div>
</div>



@stop