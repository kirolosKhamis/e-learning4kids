@extends('Frontend.master')
<!DOCTYPE html>
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
        <link rel='stylesheet'href="{{asset('css/registerAsStyle.css')}}"/>

</head>

<body>

<!-- header -->

@section('content')

     <div class="row">
        <div class="col-lg-12 col3">
            <div class="row">
                <div class="col-lg-6 col4 ">
                    <h2><b>Register As</b></h2>
                </div>
            </div>

            <div class="row">
                <!-- student -->
                <div class="col-lg-4 col5 ">
                    <a href="{{asset('studentRegister')}}">
                        <img src="../public/images/student.jpg"  alt="">
                        <h4>Studet</h4>
                    </a>
                </div>
                <!-- teacher -->
                <div class="col-lg-4 col6 ">
                    <a href="{{asset('teacherRegister')}}">
                        <img src="../public/images/teacher.jpg" alt="">
                        <h4>teacher</h4>
                    </a>
                </div>
                <!-- parent -->
                <div class="col-lg-4 col7 ">
                    <a href="{{asset('parentRegister')}}">
                        <img src="../public/images/parent.jpg" alt="">
                        <h4>Parent</h4>
                    </a>
                </div>
            </div>
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


</div>



</body>
</html>
