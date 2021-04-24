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
    <link rel='stylesheet'href="{{asset('css/Teacher-classroom.css')}}"/>
</head>
<body>

    <!-- header -->
    @section('content')
    <!--Body-->
    <div class="row">
        <div class="col-lg-12 col3">
            <img class="img1 img img-responsive" src="../public/images/photos/studentclassroom.jpg">

        </div>

    </div>


    <div class="row">
        <div class="col-lg-3  col4">
            <div class="square">
                <label class="textstream" for="Stream">Stream</label>
            <br>
                <label class="textclasswork" for="classwork">Class Work</label>
            <br>
                <label class="textclasswork" for="newassissement">New Assissement</label>
            <br>
                <label class="textclasswork" for="members">Members</label>


            </div>

            <div class="col11">
                <label class="textviewotherclassrooms" for="viewotherclassrooms"> View other classrooms</label>
                  </div>
        </div>

        <div class="col-lg-7   ">
            <div class="col5">
            <input class="inputtext" type="text" id="Teacherannounce" name="Teacherannounce" placeholder=" Teacher announce....">
        <div >
            <button class="btn btn-light" type="button">Browse..</button>

            <button class="btn btn-primary" type="button">Post</button>
        </div>
           </div>


        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-4 col7">
            <img class="userimg" src="../public/images/photos/user.png">
            <label class="textuser" for="user" >User</label>
        <br>
             <label class="texttypesomthing" for="typesomething" >Type Something here...</label>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-4 col8">
            <img class="userimg" src="../public/images/photos/user.png">
            <label class="textuser" for="user" >User</label>
        <br>
             <label class="texttypesomthing" for="typesomething" >Type Something here...</label>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-4 col9">
            <img class="userimg" src="../public/images/photos/user.png">
            <label class="textuser" for="user" >User</label>
        <br>
             <label class="texttypesomthing" for="typesomething" >Type Something here...</label>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-2 col-md-6 col-sm-4 col10">
            <img class="imgchatbot" src="../public/images/photos/chatbot.png">
        <br>
            <label class="textchatbot" for="user" >Chat Bot</label>

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
