@extends('layouts.admin')
@section('content')
<style type="text/css">
    .delete_btn{
        top:5 !important;
       /* margin-left: 25px !important;*/
    }
    .modal-body.center_txt {
        text-align: center !important;
        font-size: large !important;
    }
    .modal .modal-header {
        box-shadow: inherit !important;
        padding: 25px 25px 5px 25px !important;
        background-color: #F44336 !important;
    }
    h4#defaultModalLabel {
        color: white !important;
    }
    .delete_model_btn {
        text-decoration: none !important;
        color: #fff !important;
        background-color: #f44336 !important;
    }
    .delete_model_btn:hover {
        text-decoration: none !important;
        color: #fff !important;
        background-color: #f44336 !important;
    }
    .color_div {
        
        display: block !important;
        height: 30px !important;
        border-radius: 50px !important;
    }
    .table-responsive{
        display: none;
    }
    .gal-area {
        margin: 0 19px 0 0 !important;
    }
</style>
<section class="content">
	<div class="container-fluid"><!-- Image Gallery -->
        <div class="block-header"></div>
        <div class="row">
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
                    @if(session()->get('danger'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                                {{ session()->get('danger') }}
                        </div>
                    @endif
                    <div class="header">
                    	<div class="row">
                    		<div class="col-lg-6">
                    			<h2 class="float-left">Gallery</h2>
                    		</div>

                            <div class="col-lg-6">
                                <button type="button" class="btn bg-red waves-effect ad-blog grid_view"><i class="material-icons" title="Grid View">grid_on</i></button>
                                <button type="button" class="btn bg-red waves-effect ad-blog gal-area list_view"><i class="material-icons" title="List View">format_list_bulleted</i></button>
                                <button type="button" class="btn bg-red waves-effect ad-blog gal-area"><a href="{{url('admin/gallery/create')}}">Add gallery</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                        	@if(isset($gallery_details))
                        		@foreach($gallery_details as $details)
		                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      
                                        <a href="{{asset('public/gallery_img/')}}/{{$details->gallery_img}}" data-sub-html="{{$details->gallery_title}}">
                                            <img class="img-responsive thumbnail" src="{{asset('public/gallery_img/')}}/{{$details->gallery_img}}">
		                                </a>
		                            </div>
                                    
		                        @endforeach
	                        @else
	                        	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	                                Data Not Found
	                            </div>
	                       	@endif
                            
                            
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tableId">
                                <thead>
                                    <tr>
                                       
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                   @foreach($gallery_details as $details)
                                    <tr>
                                        
                                        <td><img src="{{asset('/public/gallery_img')}}/{{$details->gallery_img}}" width="50" height="50"></td>
                                        <td>{{($details->gallery_title)}}</td>
                                        
                                        <td>
                                            @if($details->gallery_status == 0)
                                                <a href="{{url('/admin/gallery/active/'.$details->id)}}">
                                                    <button type="button" class="btn bg-red waves-effect" title="Deactive" id="{{$details->id}}">Deactive</button>
                                                </a>
                                            @else
                                             <a href="{{url('/admin/gallery/deactive/'.$details->id)}}">
                                                <button type="button" class="btn bg-green waves-effect" title="Active" id="{{$details->id}}">Active</button>
                                            </a>
                                            @endif
                                        </td>
                                        <td>
                                            
                                            <a href="{{url('/admin/gallery/edit/'.$details->id)}}">
                                                <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" title="Edit">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                            </a>
                                            <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float delete_btn" title="Delete" id="{{$details->id}}">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                   
                                   @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">CONFIRMATION</h4>
            </div>
            <div class="modal-body center_txt">Are u suru you want to delete it ?</div>
            <form method="post" action="{{url('/admin/gallery/delete')}}">
                 @csrf
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect delete_model_btn">YES, DELETE IT</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    <input type="hidden" name="gallery_id" class="gallery_id">
                </div>
            </form>
        </div>
    </div>
</div> 

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".list_view").on("click", function(){
            $(".table-responsive").css("display","block");
            $("#aniimated-thumbnials").css("display","none");
        });

        $(".grid_view").on("click", function(){
            $(".table-responsive").css("display","none");
            $("#aniimated-thumbnials").css("display","block");
        });

        $("#tableId").on("click", ".delete_btn", function(){
            var id = $(this).attr("id");
           $('#defaultModal').modal('show');
           $(".gallery_id").val(id);
        });

    });
</script>  
@endsection