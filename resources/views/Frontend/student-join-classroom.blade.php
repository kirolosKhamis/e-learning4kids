@extends('Frontend.master')<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>E-Learning for Kids</title>
 
        <link rel="icon" href="{{asset('images/icon2.jpg')}}" />
        <link rel='stylesheet'href ="{{asset('css/bootstrap.css')}}"/>
        <link rel='stylesheet'href ="{{asset('css/font-awesome.min.css')}}"/>
        <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/student-join-classroom.css')}}"/>
</head>
<body>

    <!-- header -->
@section('content')
    <!--Body-->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col3">
            <label class="textstudent">Student </label>
        <br>
            <label class="textjoin">
                    <label>Join Classroom</label>
         </label>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col4">
            <div class="row">
              <div class="col-lg-12 col-sm-12 col5">
                  <input class="form-control inputtext" type="text" id="classcode" name="classcode" placeholder="Enter Class Code..">
              </div>

              <div class="col-lg-12 col-sm-12 col10">

                <button class="buttons2" type="button">Join</button>
                <button class="buttons2" type="button">Cancel</button>
              </div>

            </div>

            <!-- <div class="row">

          </div> -->

        </div>
    </div>




@endsection
  <!-- Footer -->
         <!--End Loading Screen-->

 <script src="../public/js/jquery-3.3.1.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/plugins.js"></script>
        <script src="../public/js/wow.min.js"></script>
        <script>new WOW().init();</script>


</body>
</html>
