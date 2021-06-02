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
            <link rel='stylesheet'href ="{{asset('css/childview.css')}}"/>
    </head>
    <body>


        @section('content')

       
            <!--Body-->
            <div class="row">
            <div class=" col-lg-4  col-md-4 col-sm-4 col-xm-4  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
                <i class="fa fa-user fa-5x"></i>
                <h1>Student 1</h1>
                <p class="lead">Welcome to School</p>

            </div>

                <div class="col-lg-4  col-md-4 col-sm-4 col-xm-4  col14  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
                <i class="fa fa-user fa-5x"></i>
                <h1>Student 2</h1>
                <p class="lead">Welcome to School</p>

                </div>

            <div class="col-lg-4  col-md-4 col-sm-4 col-xm-4  col18  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
                <i class="fa fa-user fa-5x"></i>
                <h1>Student 3</h1>
                <p class="lead">Welcome to School</p>

            </div>
            </div>


            <div class="row">
                <div class="col-lg-12 col7">
                <h1>Enrolled Courses</h1>
                </div>
            </div>

            <section class="price_table text-center">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xm-12">
                    <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
                        <div class="img">
                        <img  class="center-block" src="../public/images/cart/1.jpg" alt="img">
                        </div>
                        <ul class="info list-unstyled">
                        <li >EGP 3,999</li>
                        <li class="right-text">EGP 4,488</li>
                        <a href="../HTML/cart.html" >Details</a>

                        </ul>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xm-12">
                    <div class="price_box wow fadeInUp" data-wow-duration="3s" data-wow-offset="200">
                        <div class="img">
                        <img src="../public/images/cart/2.jpg" alt="img">
                        </div>
                        <ul class="info list-unstyled">
                        <li >EGP 5,899</li>
                        <li class="right-text">EGP 6,499</li>
                        <a href="../HTML/cart.html" >Details</a>

                        </ul>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xm-12">
                    <div class="price_box wow fadeInUp" data-wow-duration="4s" data-wow-offset="200">
                        <div class="img">
                        <img src="../public/images/cart/3.jpg" alt="img">
                        </div>
                        <ul class="info list-unstyled">
                        <li >EGP 2,499</li>
                        <li class="right-text">EGP 3,499</li>
                        <a href="../HTML/cart.html" >Details</a>

                        </ul>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xm-12">
                    <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
                        <div class="img">
                        <img src="../public/images/cart/4.jpg" alt="img">
                        </div>
                        <ul class="info list-unstyled">
                        <li >EGP 3,499</li>
                        <li class="right-text">EGP 5,499</li>
                        <a href="../HTML/cart.html" >Details</a>

                        </ul>
                    </div>
                    </div>

                <div class="col-md-4 col-sm-6 col-xm-12">
                    <div class="price_box wow fadeInUp" data-wow-duration="3s" data-wow-offset="200">
                        <div class="img">
                        <img src="../public/images/cart/5.jpg" alt="img">
                        </div>
                        <ul class="info list-unstyled">
                        <li >EGP 6,499</li>
                        <li class="right-text">EGP 7,499</li>
                        <a href="../HTML/cart.html" >Details</a>

                        </ul>
                    </div>
                    </div>



                    <div class="col-md-4 col-sm-6 col-xm-12">
                    <div class="price_box wow fadeInUp" data-wow-duration="4s" data-wow-offset="200">
                        <div class="img">
                        <img src="../public/images/cart/6.jpg" alt="img">
                        </div>
                        <ul class="info list-unstyled">
                        <li >EGP 1,499</li>
                        <li class="right-text">EGP 2,499</li>
                        <a href="../HTML/cart.html" >Details</a>

                        </ul>
                    </div>
                    </div>
                </div>

            </div>

            </section>

        @endsection

        <script src="../public/js/jquery-3.3.1.min.js"></script>
                <script src="../public/js/bootstrap.min.js"></script>
                <script src="../public/js/plugins.js"></script>
                <script src="../public/js/wow.min.js"></script>
                <script>new WOW().init();</script>

    </body>
</html>
