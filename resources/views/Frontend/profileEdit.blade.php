@extends('Frontend.master')
<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Learning4Kids</title>

    {{-- <link rel="icon" href="{{asset('images/icon2.jpg')}}" /> --}}
    <link rel='stylesheet'href ="{{asset('css/bootstrap.css')}}"/>
    <link rel='stylesheet'href ="{{asset('css/font-awesome.min.css')}}"/>
    <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
    
    <style type="text/css">
      body {
            margin: 0;
            padding-top: 100px;
            color: #2e323c;
            background: #f5f6fa;
            position: relative;
            height: 100%; 
          }
        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
              }
        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }
        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }
        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }
        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 1.4rem;
            font-weight: 400;
            color: #9fa8b9;
        }
        .account-settings .about {
            margin: -4rem 0 0 0;
            text-align: center;
        }
        .account-settings .about h5 {
            margin: 0 0 0 0;
            color: #007ae1;
        }
        .account-settings .about p {
            font-size: 1.2rem;
        }
        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 1.5px;
            -moz-border-radius: 1.5px;
            border-radius: 1.5px;
            font-size: 1.5rem;
            background: #ffffff;
            color: #2e323c;
            /* padding-left: 5px */
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 5rem;
        }

</style>
      
</head>
<body>

    <!--Body-->
@section('content')
<!--Body-->
<div class="container">
  <div class="row gutters">
  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
  <div class="card h-100">
    <div class="card-body">
      <div class="account-settings">
        <div class="user-profile">
          <div class="user-avatar">
            <img src="materials/{{Auth::user()->photo}}" alt="Maxwell Admin">
          </div>
          <h5 class="user-name">{{Auth::user()->fname}} {{Auth::user()->lname}}</h5>
          <h6 class="user-email">{{Auth::user()->email}} </h6>
        </div>
        <div class="about">
          <h5>About</h5>
          <h5 class="user-name" style="color: #2e323c"> I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</h5>
        </div>
      </div>
    </div>
  </div>
    </div>
      <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <form method="POST" action="{{ route('profileUpdate') }}"  enctype="multipart/form-data" >
              @csrf
              @method('PUT')

              <div class="card h-100">
                <div class="card-body">
                  <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <h6 class="mb-2 text-primary" style="text-align: center; font-weight: bold; font-size: 1.5rem">Personal Details</h6>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-10" style="margin-left: 50px">
                      <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control"  id="fname" name="fname" placeholder=""  value="{{Auth::user()->fname}}">
                      </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-10" style="margin-left: 50px">
                      <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="lname" class="form-control" id="lname" name="lname" placeholder=""  value="{{Auth::user()->lname}}">
                      </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-10" style="margin-left: 50px">
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="" value="{{Auth::user()->phone}}">
                      </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-10" style="margin-left: 50px">
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address"  name="address" placeholder="" value="{{Auth::user()->address}}">
                      </div>
                    </div>
                  <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <h6 class="mt-3 mb-2 text-primary" style="margin-left: 60px; font-weight: bold; font-size: 1.5rem">Password</h6>
                    </div>
                    {{-- <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-10" style="margin-left: 60px">
                      <div class="form-group">
                        <label for="currentpassword"> New Password</label>
                        <input type="newpassword" class="form-control" id="newpassword" placeholder="New Password">
                      </div>
                    </div> --}}
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-10" style="margin-left: 40px">
                      <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter New Password">
                      </div>
                    </div>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="file" class="form-control-file" name="file" id="exampleInputFile">
                          {{-- @error('relation')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror --}}
                  </div>
                    
                  </div>
                  <div class="row gutters">
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
                      <div class="text-right">
                        <button type="cancel" id="cancel" name="cancel" class="btn btn-secondary">Cancel</button>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </form> 
      </div>
    </div>
  </div>
</div>

@endsection
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/plugins.js')}}"></script>
  <script src="{{asset('js/wow.min.js')}}"></script>
  <script>new WOW().init();</script>
    
</body>
</html>