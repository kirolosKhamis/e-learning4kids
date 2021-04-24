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
    <link rel='stylesheet'href="{{asset('css/questionairResultStyle.css')}}"/>

</head>

<body>

<!-- header -->

@section('content')



    <!-- body -->
     <div class="row">
        <div class="col-lg-12 col3">
            <div class="row">
                <!-- body -->
                <div class="col-lg-6 col4">
                    <p><strong>Result of Your Personality Type</strong></p>
                    <!-- tabele -->
                    <table id="bigFive">
                        <tr>
                          <th>Personality Type</th>
                          <th>Percentage</th>
                        </tr>
                        <tr>
                          <td>Extraversion</td>
                          <td>3.87</td>
                        </tr>
                        <tr>
                          <td>Agreeableness</td>
                          <td>3.66</td>
                        </tr>
                        <tr>
                          <td>Agreeableness</td>
                          <td>3.00</td>
                        </tr>
                        <tr>
                          <td>Neuroticism</td>
                          <td>2.50</td>
                        </tr>
                        <tr>
                          <td>Openness</td>
                          <td><strong>3.90</strong></td>
                        </tr>
                      </table>
                      <button class="common-btn">Next</button>



                    <!--end of table-->
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
