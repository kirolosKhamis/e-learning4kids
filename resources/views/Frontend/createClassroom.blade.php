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
<link rel='stylesheet' href="{{asset('css/font-awesome.min.css')}}"   />
        <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
        <link rel="stylesheet" href="{{asset('CSS/createClassroomStyle.css')}}"/>

</head>

<body>

<!-- header -->


@section('content')

<!-- body -->
<div class="row">
  <div class="col-lg-12 col3">
    <div class="col5">
      <!-- login -->

      <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Example select</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Example multiple select</label>
          <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1 ">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </form>
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
