@extends('layouts.web')
@section('content')
<div class="col-lg-6 offset-lg-3">
    <h4 style="text-align:center"><i class="icon-paragraph-justify2"></i>Edit flight_ratings</h4>
    {{-- @if(count($errors)>0)
    <div class='alert alert-danger'>
       <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
    @endforeach
    </ul>
</div>
@endif --}}
@if(\Session::has('success'))
<div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
</div>
@endif
<form method="post" action="{{route('flight_ratings-update')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="Patch" />

    <input type="hidden" name="id" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('id',$flightrating->id)}}">
    <div class="form-group">
        <label>User Id:</label>
        <input type="text" name="user_id" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('user_id',$flightrating->user_id)}}">
    </div>
    @if($errors->has('user_id'))
    <div class='invalid-feedback'>
        <strong>{{$errors->first('user_id')}}</strong>
    </div>
    @endif
    <div class="form-group">
        <label>Flight Number:</label>
        <input type="text" name="flight_number" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('flight_number',$flightrating->flight_number)}}">
    </div>
    @if($errors->has('flight_number'))
    <div class='invalid-feedback'>
        <strong>{{$errors->first('flight_number')}}</strong>
    </div>
    @endif
    <div class="form-group">
        <label>Title:</label>
        <input type="text" name="title" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('title',$flightrating->title)}}">
    </div>
    @if($errors->has('title'))
    <div class='invalid-feedback'>
        <strong>{{$errors->first('title')}}</strong>
    </div>
    @endif
    <div class="form-group">
        <label>Description:</label>
        <input type="text" name="description" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('description',$flightrating->description)}}">
    </div>
    @if($errors->has('description'))
    <div class='invalid-feedback'>
        <strong>{{$errors->first('description')}}</strong>
    </div>
    @endif
    <div class="form-group">
        <label>Rate:</label>
        <input type="text" name="rate" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('rate',$flightrating->rate)}}">
    </div>
    @if($errors->has('rate'))
    <div class='invalid-feedback'>
        <strong>{{$errors->first('rate')}}</strong>
    </div>
    @endif
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Update" />
    </div>
</form>
</div>
@endsection