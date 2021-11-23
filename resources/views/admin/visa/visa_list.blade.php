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
                <li><a href="{{url('/admin/visa')}}"><i class="material-icons">book</i> Visa</a></li>
                
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
                                       Visa
                                    </h2>
                                </div>

                                <div class="col-lg-6">
                                      <button type="button" class="btn bg-red waves-effect ad-blog"><a href="{{url('admin/visa/create')}}">Add create</a></button>
                                </div>
                            </div>
                                
                       <!--  </div> -->
                        
                           
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tableId">
                                <thead>
                                    <tr>
                                        <th>SNo.</th>
                                        <th>Destination</th>
                                        <th>Departure</th>
                                        <th>Return</th>
                                        <th>Traveller</th>
                                        <th>Embassy Fee</th>
                                        <th>Service Fee</th>
                                        <th>GST</th>
                                        <th>Visa Validity</th>
                                        <th>Visa Approval Days</th>
                                        <th>Passport Valid</th>
                                        <th>Working Days</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    @php $i=1;@endphp
                                   @foreach($visa as $vt)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{($vt->destination)}}</td>
                                        <td>{{($vt->departure_date)}}</td>
                                        <td>{{($vt->return_date)}}</td>
                                        <td>{{($vt->traveller)}}</td>
                                        <td>{{($vt->embassy_fee)}}</td>
                                        <td>{{($vt->service_fee)}}</td>
                                        <td>{{($vt->gst_amount)}}</td>
                                        <td>{{($vt->visa_validity)}} @if($vt->visa_validity == 1)Day @else Days @endif</td>
                                        <td>{{($vt->visa_approval_day)}} @if($vt->visa_approval_day == 1)Day @else Days @endif</td>
                                        <td>{{($vt->passport_valid_day)}} Month</td>
                                        <td>{{($vt->working_days)}}</td>
                                        <td>
                                            
                                            <a href="{{url('/admin/visa/edit/'.$vt->id)}}">
                                                <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" title="Edit">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                            </a>
                                            <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float delete_btn" title="Delete" id="{{$vt->id}}">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                   @php $i++;@endphp
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
            <form method="post" action="{{url('/admin/visa/delete')}}">
                 @csrf
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect delete_model_btn">YES, DELETE IT</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    <input type="hidden" name="visa_id" class="visa_id">
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
           $(".visa_id").val(id);
        });
    });
</script> 
@endsection