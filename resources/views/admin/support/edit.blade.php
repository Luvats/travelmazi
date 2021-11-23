@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
       <ol class="breadcrumb breadcrumb-col-red">
          <li><a href="{{url('/admin')}}"><i class="material-icons">home</i> Home</a></li>
          <li><a href="{{url('/admin/support')}}"><i class="material-icons">note</i> Support</a></li>
          <li><a href="#"><i class="material-icons">note</i> Update</a></li>
          
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
            <h2>Update Support</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/support/update')}}" enctype="multipart/form-data">
               @csrf
               <input type="hidden" name="support_id" value="{{$support_details->id}}">
              <label for="email">Email</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{$support_details->email}}">
                </div>
              </div>
              <label for="phone">Mobile No</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Mobile no" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" maxlength="11" value="{{$support_details->phone}}">
                </div>
              </div>
              <label for="about">Address</label>
              <div class="form-group">
                <div class="form-line">
                  <textarea rows="5" name="address" class="form-control">{{$support_details->address}}</textarea>
                
                </div>
              </div>
              <label for="fb_link">Facebook Link</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="url" id="fb_link" name="fb_link" class="form-control" placeholder="https://www.facebook.com/"value="{{$support_details->fb_link}}">
                </div>
              </div>
              <label for="twitter_link">Twitter Link</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="url" id="twitter_link" name="twitter_link" class="form-control" placeholder="https://twitter.com/" value="{{$support_details->twitter_link}}">
                </div>
              </div>
              <label for="instagram_link">Instagram Link</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="url" id="instagram_link" name="instagram_link" class="form-control" placeholder="https://www.instagram.com/" value="{{$support_details->instagram_link}}">
                </div>
              </div>
              <label for="linkedin_link">Linkedin Link</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="url" id="linkedin_link" name="linkedin_link" class="form-control" placeholder="https://www.linkedin.com/" value="{{$support_details->linkedin_link}}">
                </div>
              </div>
              <label for="utube_link">YouTube Link</label>
              <div class="form-group">
                <div class="form-line">
                 <input type="url" id="utube_link" name="utube_link" class="form-control" placeholder="https://www.youtube.com/" value="{{$support_details->utube_link}}">
                </div>
              </div>
              <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
@stop
