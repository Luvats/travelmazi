@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
       <ol class="breadcrumb breadcrumb-col-red">
          <li><a href="{{url('/admin')}}"><i class="material-icons">home</i> Home</a></li>
          <li><a href="{{url('/admin/footer')}}"><i class="material-icons">note</i> Footer</a></li>
          <li><a href="{{url('/admin/footer/create')}}"><i class="material-icons">note</i> Create</a></li>
          
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
            <h2>Create Footer</h2>
          </div>
          <div class="body">
            <form method="post" action="{{url('admin/footer/update')}}" enctype="multipart/form-data">
               @csrf
               <input type="hidden"  name="footer_id" class="form-control" value="{{$footer_details->id}}">
              <label for="title">Title</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="title" name="title" class="form-control" placeholder="Enter footer title" value="{{$footer_details->title}}">
                </div>
              </div>
              
              <label for="about">Description</label>
              <div class="form-group">
                <div class="form-line">
                  <textarea name="footer_desc" class="form-control" id="ckeditor"><?php echo $footer_details->footer_desc;?></textarea>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
  
@stop
