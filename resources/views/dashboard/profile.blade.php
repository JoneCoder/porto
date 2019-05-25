@extends('layouts.dashboard')
@section('admin-content')
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-3"><!--left col-->
                <div class="text-center">
                    <img src="@if(Auth::User()->avatar == 'default.jpg')http://ssl.gstatic.com/accounts/ui/avatar_2x.png @else {{ asset('uploads/profilePic') }}/{{ Auth::User()->avatar }} @endif" class="avatar img-circle img-thumbnail" alt="avatar">
                    <div id="avatar" style="display: none;">
                    <h6>Upload a different photo...</h6>
                    <form class="form" action="{{ url('/user/profile/update') }}/{{ Auth::User()->id }}" method="post" id="registrationForm" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <input type="file" name="avatar" accept="image/*" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-gradient-danger btn-icon-text" type="button"><i class="mdi mdi-upload btn-icon-prepend"></i>Upload</button>
                        </span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="text-center" id="username">
                    <h1>{{ Auth::User()->username }}</h1>
                </div>
                </hr><br>


                <div class="panel panel-default">
                    <div class="panel-heading">Website <i class="mdi mdi-link "></i></div>
                    <div class="panel-body"><a href="{{ url('/') }}" target="_blank">Porto.com</a></div>
                </div>

                <ul class="list-group mt-2 activity">
                    <li class="list-group-item text-muted"><i class="mdi mdi-home menu-icon"></i>Activity</li>
                    <li class="list-group-item"><a class="nav-link" data-toggle="tab" href="#home" id="acInfo">&gt; Account Information</a></li>
                    <li class="list-group-item"><a class="nav-link" data-toggle="tab" href="#messages" id="edInfo">&gt; Edit Account Information</a></li>
                    <li class="list-group-item"><a class="nav-link" data-toggle="tab" href="#settings">&gt; Password & Account</a></li>
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
                        <div class="row">
                            <div class="col-12">
                                <h3>{{ Auth::User()->name }}<sub>({{ Auth::User()->username }})</sub><sub>.</sub></h3>
                            </div>
                            <div class="col-12">
                                <p>{{ Auth::User()->aboutUs }}</p>
                            </div>
                            <div class="col-12">
                                <h5>Project Manager | Porto eCommerce</h5>
                            </div>
                        </div>

                        <div class="row">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row">Name:</th>
                                    <td>{{ Auth::User()->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">E-mail:</th>
                                    <td>{{ Auth::User()->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tel:</th>
                                    <td colspan="2">{{ Auth::User()->countryCode.'-'.Auth::User()->phoneNumber }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Date of Birth:</th>
                                    <td colspan="2">{{ Auth::User()->dateOfBirth }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender:</th>
                                    <td colspan="2">{{ Auth::User()->gender }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Address:</th>
                                    <td colspan="2">{{ Auth::User()->address }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">City:</th>
                                    <td colspan="2">{{ Auth::User()->city }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Available:</th>
                                    <td colspan="2">{{ Auth::User()->open }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                    </div><!--/tab-pane-->
                    <div class="tab-pane fade" id="messages">
                        <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username"><h4>Username</h4></label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="{{ Auth::User()->username }}" title="enter your Username if any.">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"><h4>Name</h4></label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ Auth::User()->name }}" title="enter your full name if any.">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label for="code"><h4>Country</h4></label>
                                                <select name="countryCode" id="selected{{ Auth::User()->id }}" class="form-control">
                                                    <option @if (Auth::User()->countryCode == '+93')selected="selected{{ Auth::User()->id }}" @endif value="+93">Afghanistan</option>
                                                    <option @if (Auth::User()->countryCode == '+213')selected="selected{{ Auth::User()->id }}" @endif value="+213">Algeria</option>
                                                    <option @if (Auth::User()->countryCode == '+1-684')selected="selected{{ Auth::User()->id }}" @endif value="+1-684">American Samoa</option>
                                                    <option @if (Auth::User()->countryCode == '+54')selected="selected{{ Auth::User()->id }}" @endif value="+54">Argentina</option>
                                                    <option @if (Auth::User()->countryCode == '+61')selected="selected{{ Auth::User()->id }}" @endif value="+61">Australia</option>
                                                    <option @if (Auth::User()->countryCode == '+1-242')selected="selected{{ Auth::User()->id }}" @endif value="+1-242">Bahamas</option>
                                                    <option @if (Auth::User()->countryCode == '+973')selected="selected{{ Auth::User()->id }}" @endif value="+973">Bahrain</option>
                                                    <option @if (Auth::User()->countryCode == '+880')selected="selected{{ Auth::User()->id }}" @endif  value="+880">Bangladesh</option>
                                                    <option @if (Auth::User()->countryCode == '+32')selected="selected{{ Auth::User()->id }}" @endif value="+32">Belgium</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="form-group">
                                                <label for="phone"><h4>Phone</h4></label>
                                                <input type="number" class="form-control" name="phoneNumber" id="phone" placeholder="enter phone" value="{{ Auth::User()->phoneNumber }}" title="enter your phone number if any.">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthday"><h4>Date of Birth</h4></label>
                                        <input type="date" class="form-control" name="dateOfBirth" id="birthday" value="{{ Auth::User()->dateOfBirth }}" title="enter your date of birth if any.">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label for="city"><h4>City</h4></label>
                                                <input type="text" name="city" id="city" class="form-control" placeholder="city" value="{{ Auth::User()->city }}" title="enter your city if any."/>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="form-group">
                                                <label for="gender"><h4>Gender</h4></label>
                                                <select class="form-control" name="gender" id="selected{{ Auth::User()->id }}" >
                                                    <option @if (Auth::User()->gender == 'Male')selected="selected{{ Auth::User()->id }}" @endif value="Male">Male</option>
                                                    <option @if (Auth::User()->gender == 'Female')selected="selected{{ Auth::User()->id }}" @endif value="Female">Female</option>
                                                    <option @if (Auth::User()->gender == 'others')selected="selected{{ Auth::User()->id }}" @endif value="others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"><h4>Email</h4></label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ Auth::User()->email }}" placeholder="you@email.com" title="enter your email.">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address"><h4>Location</h4></label>
                                        <input type="text" class="form-control" name="address" id="address" value="{{ Auth::User()->address }}" placeholder="somewhere" title="enter a location">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="open"><h4>Available Time</h4></label>
                                        <input type="text" class="form-control" name="open" id="open" placeholder="Sat-Thu 10am-6pm" value="{{ Auth::User()->open }}" title="enter your Available Time.">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Social Links</h4>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 text-center"><label for="facebook"><h5><i class="text-info mdi mdi-facebook"></i>Facebook</h5></label></div>
                                                <div class="col-md-8">
                                                    <input type="url" class="form-control" name="facebook" id="facebook" placeholder="https://facebook.com/" title="enter your facebook url.">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 text-center"><label for="youtube"><h5><i class="text-danger mdi mdi-youtube-play"></i>YouTube</h5></label></div>
                                                <div class="col-md-8">
                                                    <input type="url" class="form-control" name="youtube" id="youtube" placeholder="https://youtube.com/" title="enter your youtube url.">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 text-center"><label for="twitter"><h5><i class="mdi mdi-twitter" style="color: #2caae1;"></i>Twitter</h5></label></div>
                                                <div class="col-md-8">
                                                    <input type="url" class="form-control" name="twitter" id="twitter" placeholder="https://twitter.com/" title="enter your twitter url.">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 text-center"><label for="linkedin"><h5><i class="mdi mdi-linkedin" style="color: #0198e8;"></i>Linkedin</h5></label></div>
                                                <div class="col-md-8">
                                                    <input type="url" class="form-control" name="linkedin" id="linkedin" placeholder="https://linkedin.com/" title="enter your linkedin url.">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="aboutUs"><h4>About Us</h4></label>
                                        <textarea name="aboutUs" id="aboutUs" class="form-control" rows="7">{{ Auth::User()->aboutUs }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <br>
                                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div><!--/tab-pane-->
                    <div class="tab-pane fade" id="settings">
                        <hr>

                    </div>
                </div><!--/tab-content-->
            </div><!--/col-9-->

        </div><!--/row-->
    </div>
@endsection
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
@section('script')
    <script src="{{ asset('backendAsset/dashboard/js/file-upload.js')}}"></script> {{--file upload--}}
    <script>
        $(document).ready(function(){
            $("#acInfo").click(function(){
                $("#avatar").hide();
                $("#username").show();
            });
            $("#edInfo").click(function(){
                $("#username").hide();
                $("#avatar").show();
            });
        });
    </script>
@endsection
