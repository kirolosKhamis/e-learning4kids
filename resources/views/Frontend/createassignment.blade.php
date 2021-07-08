
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
            <!-- MDB -->
            <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" />
    </head>
    <body>


        @section('content')

       <form action="{{route('add.assignment')}}" method="post" enctype="multipart/form-data">
        @csrf
            <!--Body-->
            <div class="row">
              
             

                <div  class=" col-lg-9  col-md-9 col-sm-12 col-xm-9  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
                    
                

                    
                     <!-- Title input -->
                    <div  class="form-outline mb-4">
                        <textarea  type="teatarea" id="form1Example1" name="title" class="form-control" style="background-color:rgb(232, 237, 241); width: 80%; margin-left: 10%;padding-top: 20px;border-radius: 10px ; font-size: 13px" ></textarea>
                        <label style="margin-left: 10%; padding-bottom: 50px; font-size: 15px"  class="form-label" for="form1Example1">Title</label>
                    </div>

             
                     <!-- Description input -->
                    <div  class="form-outline mb-4">
                        <textarea  type="teatarea" id="form1Example1" name="description"  class="form-control" style="background-color:rgb(232, 237, 241); width: 80%;height:80%; margin-left: 10%;padding-top: 20px;border-radius: 10px ; font-size: 13px" ></textarea>
                        <label style="margin-left: 10%; padding-bottom: 50px; font-size: 15px" class="form-label" for="form1Example1">Description</label>
                    </div>

 

                </div>

         
                   

            
                
                <div  class="col-lg-3  col-md-3 col-sm-12 col-xm-3  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300">
                        <!-- Topic input -->
                        <div  class="form-outline mb-4">
                            <input  type="teatarea" id="form1Example1" name="topic"  class="form-control" style="background-color:rgb(232, 237, 241);width: 80%; margin-left: 10%;padding-top: 20px;border-radius: 10px ; font-size: 13px" />
                            <label style="margin-left: 10%; padding-bottom: 50px; font-size: 15px" class="form-label" for="form1Example1">Topic</label>
                        </div>
                        
                         <!-- Points input -->
                        <div  class="form-outline mb-4">
                            <input  type="teatarea" id="form1Example1" name="points"  class="form-control" style="background-color:rgb(232, 237, 241);width: 80%; margin-left: 10%;padding-top: 20px;border-radius: 10px; font-size: 13px" />
                            <label style="margin-left: 10%; padding-bottom: 50px; font-size: 15px" class="form-label" for="form1Example1">Points</label>
                        </div>
                        
                         <!-- Due to input -->
                        <div  class="form-outline mb-4">
                            <input type="datetime-local" id="form1Example1" name="due" class="form-control" style="background-color:rgb(232, 237, 241);width: 80%; margin-left: 10%;padding-top: 20px;border-radius: 10px ; font-size: 13px" >
                            <label style="margin-left: 10%; padding-bottom: 50px; font-size: 15px"  class="form-label" for="form1Example1">Due</label>
                           
                        </div>
                        

                        <div  class="form-outline mb-4">
                            <input type="file" class="form-control-file" name="file" id="exampleInputFile">
                            <input type="hidden" name="teacher_id" value="{{Auth::guard('teacher')->user()->user_id}}"> <input type="hidden" name="classroom_id" value="{{$classroom_id}}">
                            <label style="margin-left: 10%; padding-bottom: 50px; font-size: 15px" class="form-label" for="form1Example1">File</label>
                        </div>
                   
               
               
                </div>
               
          

           
            </div>


            <div class="row">
              
            
                <div  class=" col-lg-12  col-md-12 col-sm-12 col-xm-12  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" style="margin-top: -60px" >
                    


                      <!-- Cancel button -->
                    <button type="button" class="btn btn-danger" style="margin-left: 10%; font-size: 12px; border-radius: 7px">Cancel</button>
                     <!-- Submit button -->
                     <button  type="submit" class="btn btn-primary" style="margin-left: 10px; font-size: 12px; border-radius: 7px">Submit</button> 
                
                
                </div>
            </div>


           
        </form>

        @endsection
        
            

      
        <script src="../public/js/jquery-3.3.1.min.js"></script>
                <script src="../public/js/bootstrap.min.js"></script>
                <script src="../public/js/plugins.js"></script>
                <script src="../public/js/wow.min.js"></script>
                <script>new WOW().init();</script>
                  <!-- MDB -->
                <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

    </body>
</html>
