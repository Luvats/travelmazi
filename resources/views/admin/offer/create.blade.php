@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header"></div>
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          @if(session()->get('success'))
            <div class="alert bg-green alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{ session()->get('success') }}
            </div>
            
        @endif
          <div class="header">
            <h2>Create Offer</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/offer/save')}}" enctype="multipart/form-data">
               @csrf
              <label for="title">Title</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="title" name="title" class="form-control" placeholder="Enter Offer Title">
                </div>
              </div>
              <label for="title">Offer Image</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="file" id="title" name="offer_image" class="form-control">
                </div>
              </div>
              <label for="about">Offer</label>
              <div class="form-group">
                <div class="form-line">
                  <textarea name="about" class="form-control" id="ckeditor"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
  
@stop
