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
</style>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
             <ol class="breadcrumb breadcrumb-col-red">
                <li><a href="{{url('/admin')}}"><i class="material-icons">home</i> Home</a></li>
                <li><a href="{{url('/admin/support')}}"><i class="material-icons">note</i>Support</a></li>
                
            </ol> 
        </div>
        <!-- Basic Examples -->
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
                    @if(session()->get('danger'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                                {{ session()->get('danger') }}
                        </div>
                    @endif

                    <div class="header">
                        <!-- <div class="container"> -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <h2 class="float-left">
                                       Support
                                    </h2>
                                </div>

                                <div class="col-lg-6">
                                      <button type="button" class="btn bg-red waves-effect ad-blog"><a href="{{url('admin/support/create')}}">Add Support</a></button>
                                </div>

                            </div>
                                
                       <!--  </div> -->
                        
                           
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tableId">
                                <thead>
                                    <tr>
                                       
                                        <th>Sno</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                   @foreach($support as $details)
                                    <tr>
                                        <td>{{($details->id)}}</td>
                                        <td>{{($details->email)}}</td>
                                        <td>{{($details->phone)}}</td>
                                        <td>{{($details->address)}}</td>
                                        <td>
                                            <a href="{{url('/admin/support/edit/'.$details->id)}}">
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
        <!-- #END# Basic Examples -->
    </div>
</section>  

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">CONFIRMATION</h4>
            </div>
            <div class="modal-body center_txt">Are u suru you want to delete it ?</div>
            <form method="post" action="{{url('/admin/support/delete')}}">
                 @csrf
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect delete_model_btn">YES, DELETE IT</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    <input type="hidden" name="support_id" class="support_id">
                </div>
            </form>
        </div>
    </div>
</div>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#tableId").on("click", ".delete_btn", function(){
            var id = $(this).attr("id");
           $('#defaultModal').modal('show');
           $(".support_id").val(id);
        });
    });
</script> 
@endsection