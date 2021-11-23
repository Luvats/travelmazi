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
            <h2>Create Gallery</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/gallery/save')}}" enctype="multipart/form-data">
               @csrf
              <label for="gallery_title">Title</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="gallery_title" name="gallery_title" class="form-control" placeholder="Enter gallery Title">
                </div>
              </div>
              <label for="gallery_img">Gallery Image</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="file" id="gallery_img" name="gallery_img" class="form-control">
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

@stop
