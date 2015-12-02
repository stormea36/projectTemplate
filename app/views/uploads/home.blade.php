@extends('layout')

@section('content')


<div class='row'>
    <div class="small-12 medium-6 large-6 columns">
        <h1>Image Uploader</h1>
        <p>This is the basic functionality for uploading images.</p>
        <p>Currently allows for images to be loaded and will be able to show them on the right</p>
        @if(Auth::check())
        {{ Form::open(array('route' => 'upload.create', 'id' => 'enso-form', 'files' => true)) }}
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
        <hr>

        
        
    </div>
    <div class="small-12 medium-6 large-6 columns">
        <!-- images holder -->
        @if($images)
            @foreach($images as $index => $img)
                <h3>{{$img->user}}</h3>
                <a class='th'><img src="{{$img->file}}" id="{{$img->id}}" class="imgSelect" width="125px" alt='enso img' /></a>
            @endforeach
        @else
            <h2>Doesn't seem to be any images here.</h2>
        @endif
    </div>

</div>

{{ HTML::script('/scripts/enso.js'); }}
@stop