@extends('layout')

@section('content')


<!-- This is a *view* - HTML markup that defines the appearance of your UI -->

<div class='row'>
    <div class="small-12 medium-6 large-6 columns">
        @if(Auth::check())
        {{ Form::open(array('route' => 'upload.create', 'id' => 'upload-form', 'files' => true)) }}
        <h3>Upload a photo</h3>
        <label>load the image you want to use:</label>
        {{ Form::file('image') }}
        <div class='row'>
                <div class='small-6 small-centered'><button type="submit" class="button">Submit</button></div>
            </div>
        {{ Form::close() }}
        @else
        <div data-alert class="alert-box alert radius">
          You must be signed in to load a image!
          <a href="#" class="close">&times;</a>
        </div>
        @endif
    </div>
    <div class="small-12 medium-6 large-6 columns">
        <!-- images holder -->
        
        
    </div>

</div>


@stop
