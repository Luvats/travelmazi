@extends('layouts.web')
@section('content')

<div class="col-lg-6 offset-lg-3">
    
    <?php if(!empty($flight_rating->id)){ ?>
        <h4 style="text-align:center"><i class="icon-paragraph-justify2"></i>Show flight_rating</h4>
    <div><b>Id: </b>{{$flight_rating->id}}</div>
    <div><b>User Id: </b>{{$flight_rating->user_id}}</div>
    <div><b>Flight Number: </b>{{$flight_rating->flight_number}}</div>
    <div><b>Title: </b>{{$flight_rating->title}}</div>
    <div><b>Description: </b>{{$flight_rating->description}}</div>
    <div><b>Rate: </b>{{$flight_rating->rate}}</div>
        <?php } else { ?>
            <div class="col-lg-6 offset-lg-3">
    <br><br> <h4 style="text-align:center"><i class="icon-paragraph-justify2"></i>Add new flight-ratings</h4>
    
@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif<br>
<style>
    .fa-star {
        font-size : 50px;
        align-content : center;
    }
    </style>
   
<form method="post" action="{{route('flight_ratings_store')}}" enctype="multipart/form-data">
    @csrf
    <!-- <div class="form-group">
        <label>User Id:</label>
        <input type="text" name="user_id" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('user_id')}}">

        @if($errors->has('user_id'))
        <div class='invalid-feedback'>
            <strong>{{$errors->first('user_id')}}</strong>
        </div>
        @endif
    </div> -->
    <!-- <div class="form-group">
        <label>Flight Number:</label>
        <input type="text" name="flight_number" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('flight_number')}}">

        @if($errors->has('flight_number'))
        <div class='invalid-feedback'>
            <strong>{{$errors->first('flight_number')}}</strong>
        </div>
        @endif
    </div> -->
        
    <div class="form-group">
        <!-- <h3 style = "margin-top : 80px; color: green;">Rate Flight :-</h3> -->
         
        <i class = "fa fa-star" aria-hidden = "true" id = "st1"></i>
       <i class = "fa fa-star" aria-hidden = "true" id = "st2"></i>
       <i class = "fa fa-star" aria-hidden = "true" id = "st3"></i>
       <i class = "fa fa-star" aria-hidden = "true" id = "st4"></i>
       <i class = "fa fa-star" aria-hidden = "true" id = "st5"></i>
       <input type="hidden" name="rate" id="rate">
       <input type="hidden" name="booking_id" value="{{$booking_id}}">
       <input type="hidden" name="flight_name" value="{{$flight_name}}">
       </div>
    <div class="form-group">
        <label>Title:</label>
        <input type="text" name="title" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('title')}}">

        @if($errors->has('title'))
        <div class='invalid-feedback'>
            <strong>{{$errors->first('title')}}</strong>
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Description:</label>
        <textarea name="description" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('description')}}" rows="5"></textarea>

        @if($errors->has('description'))
        <div class='invalid-feedback'>
            <strong>{{$errors->first('description')}}</strong>
        </div>
        @endif
    </div>
    <!-- <div class="form-group">
        <label>Rate:</label>
        <input type="text" name="rate" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('rate')}}">

        @if($errors->has('rate'))
        <div class='invalid-feedback'>
            <strong>{{$errors->first('rate')}}</strong>
        </div>
        @endif
    </div> -->
    
    
    <div class="form-group">
        <!-- <input type="reset" class="btn btn-danger" value="Cancel"> -->
        <input type="submit" class="btn btn-primary" value="Process" />
    </div>
</form>
</div>
    <?php } ?>
</div>
@endsection
@section('scripts')
<script>
	/*$("#list li").on('click', function() {
  //  ret = DetailsView.GetProject($(this).attr("#data-id"), OnComplete, OnTimeOut, OnError);
  //alert($(this).attr("data-id"));
  //alert($(this).data("id"));
});*/
        $(document).ready(function() {
          $("#st1").click(function() {
              $(".fa-star").css("color", "black");
              $("#st1").css("color", "yellow");
                $('#rate').val(1);
          });
          $("#st2").click(function() {
              $(".fa-star").css("color", "black");
              $("#st1, #st2").css("color", "yellow");
              $('#rate').val(2);
          });
          $("#st3").click(function() {
              $(".fa-star").css("color", "black")
              $("#st1, #st2, #st3").css("color", "yellow");
              $('#rate').val(3);
          });
          $("#st4").click(function() {
              $(".fa-star").css("color", "black");
              $("#st1, #st2, #st3, #st4").css("color", "yellow");
              $('#rate').val(4);
          });
          $("#st5").click(function() {
              $(".fa-star").css("color", "black");
              $("#st1, #st2, #st3, #st4, #st5").css("color", "yellow");
              $('#rate').val(5);
          });
        });
    </script>
@endsection