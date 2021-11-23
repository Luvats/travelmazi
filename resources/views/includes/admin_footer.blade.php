<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Jquery Core Js -->
<!--     <script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script> -->

    <!-- Bootstrap Core Js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--     <script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.js') }}"></script> -->

    <!-- Select Plugin Js -->
    <script src="{{ asset('public/admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>


     <!-- Autosize Plugin Js -->
    <script src="{{asset('public/admin/plugins/autosize/autosize.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{asset('public/admin/plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{asset('public/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{asset('public/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('public/admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

   

    <!-- Input Mask Plugin Js -->
    <script src="{{asset('public/admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{asset('public/admin/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>

     <!-- noUISlider Plugin Js -->
    <script src="{{asset('public/admin/plugins/nouislider/nouislider.js')}}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('public/admin/plugins/jquery-validation/jquery.validate.js')}}"></script>

     <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('public/admin/plugins/jquery-steps/jquery.steps.js')}}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ asset('public/admin/plugins/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('public/admin/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('public/admin/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('public/admin/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('public/admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/morrisjs/morris.jsplugins/node-waves/waves.css') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('public/admin/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('public/admin/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('public/admin/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

     <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{ asset('public/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>


    <!-- Custom Js -->
    <script src="{{ asset('public/admin/js/admin.js') }}"></script>
    <script src="{{asset('public/admin/js/pages/examples/profile.js')}}"></script>
     <script src="{{asset('public/admin/js/pages/forms/form-validation.js')}}"></script>
     <script src="{{ asset('public/admin/js/pages/tables/jquery-datatable.js') }}"></script>
     <!-- <script src="{{ asset('admin/js/pages/forms/form-validation.js')}}"></script> -->
    <script src="{{ asset('public/admin/js/pages/index.js') }}"></script>
    <!-- Ckeditor -->
    <script src="{{ asset('public/admin/plugins/ckeditor/ckeditor.js') }}"></script>

    <!-- TinyMCE -->
    <script src="{{ asset('public/admin/plugins/tinymce/tinymce.js') }}"></script>
    <script src="{{ asset('public/admin/js/pages/forms/editors.js') }}"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="{{ asset('public/admin/plugins/light-gallery/js/lightgallery-all.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('public/admin/js/pages/medias/image-gallery.js') }}"></script>

    <script src="{{ asset('public/admin/js/pages/forms/basic-form-elements.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('public/admin/js/demo.js') }}"></script>

<script type="text/javascript">
$(document).ready(function(){
    $(".user-helper-dropdown").on("click", function(){
        $(".sidedropdown").toggle();
    });
});
</script> 

<!-------------------------------------
    PROFILE TAB 
------------------------------------->
<script type="text/javascript">
    $(document).ready(function(){
    $("#profile_tab").on("click", function(){
        $(this).addClass('active');
        $("#profile_settings").addClass('active');

        $("#home_tab").removeClass("active");
        $("#home").removeClass("active");
        $("#pswd_tab").removeClass("active");
        $("#change_password_settings").removeClass("active");

    });

    $("#home_tab").on("click", function(){
        $(this).addClass('active');
        $("#home").addClass('active');

        $("#profile_tab").removeClass("active");
        $("#profile_settings").removeClass("active");
        $("#pswd_tab").removeClass("active");
        $("#change_password_settings").removeClass("active");

    });

    $("#pswd_tab").on("click", function(){
        $(this).addClass('active');
        $("#change_password_settings").addClass('active');

        $("#profile_tab").removeClass("active");
        $("#profile_settings").removeClass("active");
        $("#home_tab").removeClass("active");
        $("#home").removeClass("active");

    });


});
</script>

