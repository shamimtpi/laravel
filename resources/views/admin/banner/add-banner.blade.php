@extends('layouts.admin')
@section('content')
<div class="text-right">
<a  href="{{route('all-banner')}}" class="btn btn-success">All Banner</a>
</div>
<div class="banner_add" style="background:#FFF;padding:20px">
  <h5 style="text-align:center;color:green">@if(Session('smg'))
      {{Session('smg')}}
  @endif </h5>
<form action="{{route('add-banner')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group {{$errors->has('ban-title') ? 'has-error' : ''}}">
    <label for="title">Banner title</label>
    <input type="text" class="form-control" name="ban-title" id="title" >
    @if($errors->has('ban-title'))
           <span class='help-block'>
                 {{$errors->first('ban-title')}}
           </span>
    @endif
  </div>
  <div class="form-group">
    <label for="subtitle">Banner Subtitle</label>
    <input type="text" class="form-control" name="ban-subtitle" id="subtitle">
  </div>
  <div class="form-group">
    <label for="ban_button">Banner Button</label>
    <input type="text" class="form-control" name="ban-btn" id="ban_button">
  </div>
  <div class="form-group">
    <label for="btn_url">Banner Button Url</label>
    <input type="text" class="form-control" name="ban-url" id="btn_url">
  </div>
  <div class="form-group">
    <label for="ban_photo">Banner Photo</label>
    <input type="file" class="form-control" name="ban-photo" id="ban_photo">
  </div>
  <div class="submit" style="text-align:center">
     <input type="submit" class="btn btn-primary" name="submit" value="Submit">
  </div>
</form>
</div>
@endsection
