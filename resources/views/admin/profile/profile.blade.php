@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="container-fluid">
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
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-3">
				<div class="card profile-card">
					<div class="profile-header">&nbsp;</div>
					<div class="profile-body">
                        <div class="image-area">
                            @if(empty(Auth::user()->image))
                                <img src="{{asset('public/admin/images/user-lg.jpg')}}" width="200" height="200" />
                            @else
                                <img src="{{asset('public/admin_image/')}}/{{Auth::user()->image}}" width="200" height="200"/>
                            @endif
                        </div>
                        <div class="content-area">
                            <h3><?php echo ucfirst(Auth::user()->name); ?></h3>
                            <!-- <p>Web Software Developer</p> -->
                            <p><?php echo ucfirst(Auth::user()->role); ?></p>
                        </div>
                    </div>
                
                </div>

              
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active" id="home_tab"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                <li role="presentation" id="profile_tab"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                                <li role="presentation" id="pswd_tab"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div class="panel panel-default panel-post">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        @if(empty(Auth::user()->image))
                                                            <img src="{{asset('public/admin/images/user-lg.jpg')}}" />
                                                        @else
                                                            <img src="{{asset('public/admin_image/')}}/{{Auth::user()->image}}" />
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#"><?php echo ucfirst(Auth::user()->name); ?></a>
                                                    </h4>
                                                    Shared publicly - 26 Oct 2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="post">
                                                <div class="post-heading">
                                                    <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>. I require little more information to use effectively.</p>
                                                </div>
                                                <div class="post-content">
                                                    <img src="{{asset('public/admin/images/profile-post-image.jpg')}}" class="img-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">thumb_up</i>
                                                        <span>12 Likes</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">comment</i>
                                                        <span>5 Comments</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">share</i>
                                                        <span>Share</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Type a comment" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default panel-post">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        @if(empty(Auth::user()->image))
                                                            <img src="{{asset('public/admin/images/user-lg.jpg')}}" />
                                                        @else
                                                            <img src="{{asset('public/admin_image/')}}/{{Auth::user()->image}}" />
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#"><?php echo ucfirst(Auth::user()->name); ?></a>
                                                    </h4>
                                                    Shared publicly - 01 Oct 2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="post">
                                                <div class="post-heading">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="post-content">
                                                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/10r9ozshGVE" frameborder="0" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">thumb_up</i>
                                                        <span>125 Likes</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">comment</i>
                                                        <span>8 Comments</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">share</i>
                                                        <span>Share</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Type a comment" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                    <form class="form-horizontal" action="{{url('admin/profileUpdate')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="NameSurname" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="NameSurname" name="name" placeholder="Marc K. Hammond" value="<?php echo ucfirst(Auth::user()->name);?>"required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" id="Email" name="email"  placeholder="example@example.com" value="<?php echo (Auth::user()->email);?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Mobile" class="col-sm-2 control-label">Mobile Number</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="Mobile" name="mobile" placeholder="Mobile" value="xxxxxxxxx" pattern="[0-9]{10}" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" maxlength="10" value="<?php echo (Auth::user()->mobile);?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Mobile" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="file" class="form-control" id="image" name="image" >
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                    <form class="form-horizontal" action="{{url('admin/change_pswd')}}">
                                        <div class="form-group">
                                            <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="NewPasswordConfirm" name="password" placeholder="New Password (Confirm)" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection