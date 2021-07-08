
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
        
@foreach ($teacherassignments as $teacherassignment)
@if ($teacherassignment->id==$assignment_id)

@foreach ($studentassignments as $studentassignment)
@if (($studentassignment->assignment_id==$assignment_id && $studentassignment->student_id== Auth::guard('student')->user()->user_id) )
{{$flag=0}}



{{-- {{$assignment_id=$studentassignment->id}} --}}
    


@if ($flag ==0)
    
        @section('content')

       
            <!--Body-->
            <div class="row">
              
            
                <div  class=" col-lg-9  col-md-9 col-sm-12 col-xm-9  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300"  >
                    <h1 ></h1>
                    <span class="badge badge-primary" style="color: black; background-color: white; font-size: 15px;margin-left: 9%" >{{$teacherassignment->teacher->fname}} {{$teacherassignment->teacher->lname}}</span>
                    <span class="badge badge-primary" style="color: black; background-color: white; font-size: 15px;margin-left: 4%" >{{$teacherassignment->created_at}}</span>
                    <br> 
                    <span class="badge badge-primary" style="color: black; background-color: white; font-size: 20px;margin-left: 9%; margin-top: 30px" >Description</span><br>
                    <span class="badge badge-primary" style="color: black; background-color: white; font-size: 20px;margin-left: 9%; margin-top: 30px" >{{$teacherassignment->description}}</span>

 

                </div>

         


                   
                       
                <div  class="col-lg-3  col-md-3 col-sm-12 col-xm-3  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >

                    <span class="badge badge-primary" style="color: black; background-color: white; font-size: 15px; margin-left:7%" >Your grade is {{$studentassignment->grade}} out of {{$studentassignment->assignment->points}}</span>
                    <span class="badge badge-primary" style="color: black; background-color: white; font-size: 15px; margin-left:7%" >Turned in at    {{$studentassignment->created_at}}</span>
                    {{-- <span class="badge badge-primary" style="color: black; background-color: white; font-size: 12px; margin-left: 30%">Turned in at {{$studentassignment->created_at}}</span> --}}
                    {{-- <label for="floatingInputInvalid">Invalid input</label> --}}
                    {{-- <h1 style="margin-left: 10%">Your Work </h1> 
                    <h1 style="font-size: 15px; margin-left: 68%; margin-top: -8% "  >Turned in</h1> --}}

                    <!-- upload buttom  -->
                    {{-- <input type="file" class="form-control-file" name="file" id="exampleInputFile"> --}}
                    {{-- <input type="file" class="form-control-file form-control form-control-user @error('content') is-invalid @enderror" name="content" id="exampleInputFile"  value="{{ old('content') }}" placeholder="upload file" autofocus> --}}
                    <<a href="{{route('download.studentAssignment', ['assignment_id' =>$studentassignment->id])}}" class="form-control-file form-control form-control-user">{{$studentassignment->content}}</a>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">
                    <input type="hidden" name="assignment_id" value="{{$assignment_id}}">
                   
                     <!-- Cancel button -->
                     <a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}"><button type="button"   class="btn btn-danger" style="margin-left: 20%;margin-top: 20px; font-size: 12px; border-radius: 7px">Cancel</button></a>
                    
                     <!-- Submit button -->
                     <button  type="button" class="btn btn-primary" style="margin-left: 20%; margin-top: 20px; font-size: 12px; border-radius: 7px">Edit</button> 

                     <a href="{{route('delete.content', ['studentassignment_id' =>$studentassignment->id, 'classroom_id' =>$classroom_id])}}">Delete</a>
              
                    
               
                </div>

            
                    

               
          

               
            </div>

            <div class="row">
                <div  class="col-lg-3  col-md-3 col-sm-12 col-xm-3  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
                   
                </div>
            </div>


          


           


        @endsection
   @else

   @section('content')

       
   <!--Body-->
   <div class="row">
     
   
       <div  class=" col-lg-9  col-md-9 col-sm-12 col-xm-9  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300"  >
           <h1 ></h1>
           <span class="badge badge-primary" style="color: black; background-color: white; font-size: 15px;margin-left: 9%" >{{$teacherassignment->teacher->fname}} {{$teacherassignment->teacher->lname}}</span>
           <span class="badge badge-primary" style="color: black; background-color: white; font-size: 15px;margin-left: 4%" >{{$teacherassignment->created_at}}</span>
           <br> 
           <span class="badge badge-primary" style="color: black; background-color: white; font-size: 20px;margin-left: 9%; margin-top: 30px" >Description</span><br>
           <span class="badge badge-primary" style="color: black; background-color: white; font-size: 20px;margin-left: 9%; margin-top: 30px" >{{$teacherassignment->description}}</span>



       </div>




          
              
       <div  class="col-lg-3  col-md-3 col-sm-12 col-xm-3  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >

        <form action="{{route('submit.assignment', ['classroom_id' =>$classroom_id ])}}" method="post" enctype="multipart/form-data">
          @csrf
           <span class="badge badge-primary" style="color: black; background-color: white; font-size: 15px; margin-left:7%" >Your Work</span>
           <span class="badge badge-primary" style="color: black; background-color: white; font-size: 12px; margin-left: 30%" > 1لم يتم التسليم</span>
           {{-- <label for="floatingInputInvalid">Invalid input</label> --}}
           {{-- <h1 style="margin-left: 10%">Your Work </h1> 
           <h1 style="font-size: 15px; margin-left: 68%; margin-top: -8% "  >Turned in</h1> --}}

           <!-- upload buttom  -->
           {{-- <input type="file" class="form-control-file" name="file" id="exampleInputFile"> --}}
           <input type="file" class="form-control-file form-control form-control-user @error('content') is-invalid @enderror" name="content" id="exampleInputFile"  value="{{ old('content') }}" placeholder="upload file" autofocus>
           @error('content')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror

           <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">
           <input type="hidden" name="assignment_id" value="{{$assignment_id}}">
          
            <!-- Cancel button -->
            <a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}"><button type="button"   class="btn btn-danger" style="margin-left: 20%;margin-top: 20px; font-size: 12px; border-radius: 7px">Cancel</button></a>
           
            <!-- Submit button -->
            <button  type="submit" class="btn btn-primary" style="margin-left: 20%; margin-top: 20px; font-size: 12px; border-radius: 7px">Submit</button> 
     
        </form>     
      
       </div>

   
           

      
 

      
   </div>


   <div class="row">
       <div  class="col-lg-3  col-md-3 col-sm-12 col-xm-3  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
          
       </div>
   </div>


 


  


@endsection
   @endif

  
   

   

   @endif

@endforeach
    
@else


@section('content')

    
<!--Body-->
<div class="row">
  

    <div  class=" col-lg-9  col-md-9 col-sm-12 col-xm-9  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300"  >
        <h1 ></h1>
        <span class="badge badge-primary" style="color: black; background-color: white; font-size: 15px;margin-left: 9%" >{{$teacherassignment->teacher->fname}} {{$teacherassignment->teacher->lname}}</span>
        <span class="badge badge-primary" style="color: black; background-color: white; font-size: 15px;margin-left: 4%" >{{$teacherassignment->created_at}}</span>
        <br> 
        <span class="badge badge-primary" style="color: black; background-color: white; font-size: 20px;margin-left: 9%; margin-top: 30px" >Description</span><br>
        <span class="badge badge-primary" style="color: black; background-color: white; font-size: 20px;margin-left: 9%; margin-top: 30px" >{{$teacherassignment->description}}</span>



    </div>




       
           
    <div  class="col-lg-3  col-md-3 col-sm-12 col-xm-3  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >

     <form action="{{route('submit.assignment', ['classroom_id' =>$classroom_id ])}}" method="post" enctype="multipart/form-data">
       @csrf
        <span class="badge badge-primary" style="color: black; background-color: white; font-size: 15px; margin-left:7%" >Your Work</span>
        <span class="badge badge-primary" style="color: black; background-color: white; font-size: 12px; margin-left: 30%" >لم يتم التسليم 2</span>
        {{-- <label for="floatingInputInvalid">Invalid input</label> --}}
        {{-- <h1 style="margin-left: 10%">Your Work </h1> 
        <h1 style="font-size: 15px; margin-left: 68%; margin-top: -8% "  >Turned in</h1> --}}

        <!-- upload buttom  -->
        {{-- <input type="file" class="form-control-file" name="file" id="exampleInputFile"> --}}
        <input type="file" class="form-control-file form-control form-control-user @error('content') is-invalid @enderror" name="content" id="exampleInputFile"  value="{{ old('content') }}" placeholder="upload file" autofocus>
        @error('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">
        <input type="hidden" name="assignment_id" value="{{$assignment_id}}">
       
         <!-- Cancel button -->
         <a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}"><button type="button"   class="btn btn-danger" style="margin-left: 20%;margin-top: 20px; font-size: 12px; border-radius: 7px">Cancel</button></a>
        
         <!-- Submit button -->
         <button  type="submit" class="btn btn-primary" style="margin-left: 20%; margin-top: 20px; font-size: 12px; border-radius: 7px">Submit</button> 
  
     </form>     
   
    </div>


        

   


   
</div>


<div class="row">
    <div  class="col-lg-3  col-md-3 col-sm-12 col-xm-3  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
       
    </div>
</div>








@endsection



        
         
        @endif
    
        @endforeach

      
        <script src="../public/js/jquery-3.3.1.min.js"></script>
                <script src="../public/js/bootstrap.min.js"></script>
                <script src="../public/js/plugins.js"></script>
                <script src="../public/js/wow.min.js"></script>
                <script>new WOW().init();</script>
                  <!-- MDB -->
                <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

    </body>
</html>
