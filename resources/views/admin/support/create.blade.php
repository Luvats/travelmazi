@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
       <ol class="breadcrumb breadcrumb-col-red">
          <li><a href="{{url('/admin')}}"><i class="material-icons">home</i> Home</a></li>
          <li><a href="{{url('/admin/support')}}"><i class="material-icons">note</i> Support</a></li>
          <li><a href="{{url('/admin/support/create')}}"><i class="material-icons">note</i> Create</a></li>
          
      </ol> 
  </div>
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
            <h2>Create Support</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/support/save')}}" enctype="multipart/form-data">
               @csrf
              <label for="email">Email</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                </div>
              </div>
              <label for="phone">Mobile No</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Mobile no" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" maxlength="11">
                </div>
              </div>
              <label for="about">Address</label>
              <div class="form-group">
                <div class="form-line">
                 <textarea rows="5" name="address" class="form-control" placeholder="Enter Address"></textarea>
                </div>
              </div>
              <label for="fb_link">Facebook Link</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="url" id="fb_link" name="fb_link" class="form-control" placeholder="https://www.facebook.com/">
                </div>
              </div>
              <label for="twitter_link">Twitter Link</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="url" id="twitter_link" name="twitter_link" class="form-control" placeholder="https://twitter.com/">
                </div>
              </div>
              <label for="instagram_link">Instagram Link</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="url" id="instagram_link" name="instagram_link" class="form-control" placeholder="https://www.instagram.com/">
                </div>
              </div>
              <label for="linkedin_link">Linkedin Link</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="url" id="linkedin_link" name="linkedin_link" class="form-control" placeholder="https://www.linkedin.com/">
                </div>
              </div>
              <label for="utube_link">YouTube Link</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="url" id="utube_link" name="utube_link" class="form-control" placeholder="https://www.youtube.com/">
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
