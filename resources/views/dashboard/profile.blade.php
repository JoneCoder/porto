@extends('layouts.dashboard')
@section('admin-content')
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10"><h1>{{ Auth::User()->username }}</h1></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><!--left col-->
                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <button type="button" class="btn btn-gradient-danger btn-icon-text">
                        <i class="mdi mdi-upload btn-icon-prepend"></i>Upload</button>
                </div></hr><br>


                <div class="panel panel-default">
                    <div class="panel-heading">Website <i class="mdi mdi-link "></i></div>
                    <div class="panel-body"><a href="{{ url('/') }}" target="_blank">Porto.com</a></div>
                </div>

                @section('style')
                    .activity li{
                        padding: 10px;
                        margin: 0;
                    }
                    .activity li a{
                        width: 100%;
                        height: 100%;
                        text-decoration: none;
                        padding: 0;
                        margin: 0;
                        color: black;
                        front-style: bold;
                    }
                    .activity li:hover{
                        cursor: pointer;
                        background-color: gray;
                    }
                @endsection
                <ul class="list-group mt-2 activity">
                    <li class="list-group-item text-muted"><i class="mdi mdi-home menu-icon"></i>Activity</li>
                    <li class="list-group-item"><a class="nav-link" data-toggle="tab" href="#home">&gt; Account Information</a></li>
                    <li class="list-group-item"><a class="nav-link" data-toggle="tab" href="#messages">&gt; Edit Account Information</a></li>
                    <li class="list-group-item"><a class="nav-link" data-toggle="tab" href="#settings">&gt; Menu 2</a></li>
                </ul>

                <div class="panel panel-default mt-2">
                    <div class="panel-heading"><strong>Social Media</strong></div>
                    <div class="panel-body">
                        <button type="button" class="btn btn-social-icon btn-facebook mt-1"><i class="mdi mdi-facebook"></i></button>
                        <button type="button" class="btn btn-social-icon btn-youtube mt-1"><i class="mdi mdi-youtube-play"></i></button>
                        <button type="button" class="btn btn-social-icon btn-twitter mt-1"><i class="mdi mdi-twitter"></i></button>
                        <button type="button" class="btn btn-social-icon btn-linkedin mt-1"><i class="mdi mdi-linkedin"></i></button>
                    </div>
                </div>

            </div><!--/col-3-->
            <div class="col-sm-9">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="mdi mdi-share-variant"></i>Shares 125
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="mdi mdi-heart"></i>Likes 13
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="mdi mdi-format-line-style"></i>Posts 37
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="mdi mdi-account-multiple"></i>Followers 78
                    </button>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home">
                        <hr>
                        <form class="form" action="" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h4>Mobile</h4></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Location</h4></label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 nav nav-tabs">
                                    <br>
                                    <li class="nav-item"><a href="#messages" class="nav-link btn btn-lg btn-success" type="reset" data-toggle="tab"><i class=" mdi mdi-repeat"></i> Reset</a></li>
                                </div>
                            </div>
                        </form>

                        <hr>

                    </div><!--/tab-pane-->
                    <div class="tab-pane fade" id="messages">

                        <h2></h2>

                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h4>Mobile</h4></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Location</h4></label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>

                    </div><!--/tab-pane-->
                    <div class="tab-pane fade" id="settings">


                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h4>Mobile</h4></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Location</h4></label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                                </div>
                            </div>
                        </form>
                    </div>

                </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
@endsection
