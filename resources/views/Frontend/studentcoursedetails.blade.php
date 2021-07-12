
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
            <link rel='stylesheet'href="{{asset('css/questionairResultStyle.css')}}"/>
    </head>
    <body>


        @section('content')

       
            <!--Body-->
            {{-- <div class="row">

                     {{-- <p>  {{$student_id}} </p> --}}
                     {{-- <p>  {{$classroom_id}} </p> --}}
                     {{-- <p>  {{$teacherName}} </p> --}}
              

            </div>

                @foreach ($students as $student)
                    @if ($student->user_id==$student_id)    
                    <p hidden > {{$studentfname= $student->fname }} </p>
                    <p hidden > {{$studentlname= $student->lname }} </p>
                
                    @endif
               @endforeach


                @foreach ($studentregs as $studentregs)
                    @if ($studentregs->classroom_id==$classroom_id ) 
                    @if ($studentregs->student_id==$student_id)
                    {{-- <p > {{$classroom_id }} </p>    
                    <p > {{$student_id}} </p>  --}}
                    <p hidden> {{ $studentrank    = $studentregs->rank }} </p>
                    <p hidden> {{ $studentmidterm = $studentregs->mid_term }} </p>
                    <p hidden> {{ $studentfinal   = $studentregs->final }} </p>
                    @endif
                    @endif
                @endforeach


            <section class="price_table text-center">
            <div class="container-fluid">
                {{-- <h1 >Enrollment courses  </h1> --}}
                <div class="row">
                       <!-- tabele -->
                       <table id="bigFive" style="width: 81%;margin: 10px 10%;">
                        <tr>
                          <th style="background:white;color: black;font-weight: normal; text-align: center">Student Name</th>
                          <th style="background:white;color: black;font-weight: normal; text-align: center"> {{$studentfname}}  {{$studentlname}}</th>
                        </tr>
                        <tr>
                          <td >Course Name</td>
                          <td> {{ $courseTitle}}</td>
                        </tr>
                        <tr>
                          <td>Teacher Name</td>
                          <td>Dr. {{$teacherName}} </td>
                        </tr>
                        <tr>
                          <td>Rank</td>
                            @if ($studentrank!=null)
                              <td>{{ $studentrank }}</td> 
                            @else
                              <td>N/A</td>
                            @endif
                        </tr>
                        <td>Mid-Term</td>
                          @if ($studentmidterm!=null)
                            <td>{{$studentmidterm}}</td> 
                          @else
                            <td>N/A</td>
                          @endif
                      </tr>
                        <tr>
                          <td>Final</td>
                            @if ($studentfinal!=null)
                              <td>{{$studentfinal}}</td> 
                            @else
                              <td>N/A</td>
                            @endif
                        </tr>
                        <tr>
                      
                      </table>
                     
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
