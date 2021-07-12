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
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">

</head>
<body>

    <!--Body-->
@section('content')
  <div class="container">
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="materials/{{Auth::user()->photo}}"  alt="Admin" class="img rounded-circle" width="150">
                <div class="mt-3">
                  <h4> {{Auth::user()->fname}} {{Auth::user()->lname}} </h4>
                  <p class="text-muted font-size-sm">{{Auth::user()->email}}</p>
                  {{-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}
                  {{-- <button class="btn btn-primary">Follow</button>
                  <button class="btn btn-outline-primary">Message</button> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="card mt-3">
            <ul class="list-group list-group-flush">
              {{-- {{dd(Auth::user()->personality_type)}} --}}
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  @if (Auth::user()->personality_type=="openness")
                    <div class="row" style="margin: 19px 0 0 12px;">
                      <p> Personality Type: Openness</p> 
                      <p class="description" style="font-size: 14px;">Known as curious and open to new ideas.</p>
                    </div>
                  @elseif(Auth::user()->personality_type=="consientiousness")
                    <div class="row" style="margin: 19px 0 0 12px;">
                      <p> Personality Type: Conscientiousness</p> 
                      <p class="description" style="font-size: 14px;">Known as organized and systematic. </p>
                    </div>
                  @elseif(Auth::user()->personality_type=="extraversion")
                    <div class="row" style="margin: 19px 0 0 12px;">
                      <p> Personality Type: Extraversion</p> 
                      <p class="description" style="font-size: 14px;">Known as being outgoing and enjoy social situations.</p>
                    </div>
                  @elseif(Auth::user()->personality_type=="agreeableness")
                    <div class="row" style="margin: 19px 0 0 12px;">
                      <p> Personality Type: Agreeableness</p> 
                      <p class="description" style="font-size: 14px;">Known as being tolerant and trusting.</p>
                    </div>



                  @elseif(Auth::user()->personality_type=="neuroticism")
                    <div class="row" style="margin: 19px 0 0 12px;">
                      <p> Personality Type: Neuroticism</p> 
                      <p class="description" style="font-size: 14px;">Known as being anxious and moody.</p>
                    </div>
                  @endif




              </li>
              
              
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                <span class="text-secondary">bootdey</span>
              </li>
              
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                <span class="text-secondary">@bootdey</span>
              </li>
              
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                <span class="text-secondary">bootdey</span>
              </li>
              {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                <span class="text-secondary">bootdey</span>
              </li> --}}
            </ul>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">First Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{Auth::user()->fname}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Last Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{Auth::user()->lname}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{Auth::user()->email}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{Auth::user()->phone}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{Auth::user()->address}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info "  href="{{route('show.accountsetting')}}">Edit</a>
                </div>
              </div>
            </div>
          </div>

          {{-- gamifications --}}
          <div class="row gutters-sm">
            {{-- certificate--}}
            @if (Auth::guard('student')->user() && Auth::guard('student')->user()->personality_type=="consientiousness" || Auth::guard('student')->user()->personality_type=="agreeableness" || Auth::guard('student')->user()->personality_type=="neuroticism")
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="d-flex align-items-center mb-3">Certificatees</h6>
                    {{-- ibrahim --}}
                    @foreach ($studentregs as $studentreg)
                      @if ($studentreg->student_id==Auth::user()->user_id)
                        <p hidden> {{$classroom_id=$studentreg->classroom_id}}</p>
                    
                        @foreach ($classrooms as $classroom)
                          @if ($classroom_id==$classroom->classroom_id)
                            <p hidden> {{$name= $classroom->title }}</p> 
                          @endif
                        @endforeach
                        <a href="{{route('show.certificate',['student_id'=>Auth::user()->user_id,'classroom_id'=>$studentreg->classroom_id])}}" class="stretched-link">{{$name}}</a>
                        <br>
                      @endif 
                    @endforeach
                  </div>
                </div>
              </div>
           @endif

            {{-- badges --}}
            @if (Auth::guard('student')->user() && Auth::guard('student')->user()->personality_type=="openness" || Auth::guard('student')->user()->personality_type=="agreeableness" || Auth::guard('student')->user()->personality_type=="extraversion")
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="d-flex align-items-center mb-3">Badges</h6>
                    {{-- ibrahim --}}
                    @foreach ($studentassignments as $studentassignment)
                        @if ($studentassignment->student_id==Auth::user()->user_id)
                      
                        <p hidden> {{$assignment_id=$studentassignment->assignment_id}}</p>
                        <p hidden> {{$assignmentgrade=$studentassignment->grade}}</p>
                        <p hidden> {{$assignmentclassroom_id=$studentassignment->classroom_id}}</p>
                        <p hidden> {{$assignmentlastupdate=$studentassignment->updated_at}}</p>

                        @foreach ($classrooms as $classroom)
                            @if ($classroom->classroom_id==$assignmentclassroom_id)
                                <p> <strong> {{$nameclassroom= $classroom->title }} </strong> </p>

                                @foreach ($teacherassignments as $teacherassignment)
                                    @if ($assignment_id==$teacherassignment->id)
                                    <p > {{$name= $teacherassignment->title }} </p>
                                    <p hidden> {{$points= $teacherassignment->points }} </p>
                                    <p hidden> {{$due= $teacherassignment->due }} </p>

                                    <p hidden > {{$badgelevel= ($assignmentgrade / $points) *100  }} </p>

                                    @if ($badgelevel < 25)
                                            @if ( $assignmentlastupdate <= $due  )
                                            <img {{--class="img img-responsive"--}} style="width: 30px; height: 30px; float: right; margin-top: -30px" src="{{asset('images/level1.jpeg')}}" alt="">
                                              
                                              @endif
                                            
                                        @elseif ( $badgelevel >= 25 && $badgelevel <50)
                                              
                                                  @if ( $assignmentlastupdate <= $due  )
                                                  <img {{--class="img img-responsive"--}} style="width: 30px; height: 30px; float: right; margin-top: -30px" src="{{asset('images/level2.jpeg')}}" alt="">  
                                                  @endif       
                                                                    
                                        @elseif ($badgelevel >=50  && $badgelevel < 75)

                                                  @if ($assignmentlastupdate <= $due )
                                                  <img {{--class="img img-responsive"--}} style="width: 30px; height: 30px; float: right; margin-top: -30px" src="{{asset('images/level3.jpeg')}}" alt="">  
                                                  @endif    
                                        @elseif ($badgelevel >= 75 && $badgelevel <= 100)
                                                  @if ( $assignmentlastupdate <= $due  )
                                                  <img {{--class="img img-responsive"--}} style="width: 30px; float: right; margin-top: -30px" src="{{asset('images/level4.jpeg')}}" alt="">
                                                      
                                                  @endif
                                          
                                    @endif                                    
                                    
                                    
                                    
                                        
                                    @endif
                                @endforeach
                                
                            @endif
                            
                        @endforeach    
                      
                      
                        
                      
                        
                        @endif 
                    @endforeach

                  
                  </div>
                </div>
              </div>
            @endif
       

           
            @if (Auth::guard('student')->user() && Auth::guard('student')->user()->personality_type=="openness" || Auth::guard('student')->user()->personality_type=="consientiousness" || Auth::guard('student')->user()->personality_type=="extraversion")
                {{-- progress bar --}}
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body" style="float:right">
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                    @foreach ($studentregs as $studentreg)
                    @if ($studentreg->student_id==Auth::guard('student')->user()->user_id)
                    <small>{{$studentreg->classroom->title}}</small>
                    <div class="progress mb-3" style="height: 5px">
                      
                      @foreach ($studentassignments as $studentassignment)
                        @if ($studentassignment->assignment->classroom_id== $studentreg->classroom_id && $studentassignment->student_id==Auth::user()->user_id )
                            
                        {{$counter=$counter+1}}
                          
                        @endif
                        @endforeach
                            
              
                      @if ($studentreg->mid_term!==null && $studentreg->final!==null )
                      <div class="progress-bar bg-primary" role="progressbar" style="width: {{80+(($counter/10)*20)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{80+(($counter/10)*20)}}%</div> 
                      @elseif($studentreg->mid_term!==null )
                      <div class="progress-bar bg-primary" role="progressbar" style="width: {{30+(($counter/10)*20)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      @elseif($studentreg->final!==null)
                      <div class="progress-bar bg-primary" role="progressbar" style="width: {{50+(($counter/10)*20)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      @else
                      <div class="progress-bar bg-primary" role="progressbar" style="width: {{0+(($counter/10)*20)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      @endif
                    </div>
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
            @endif

            @if (Auth::guard('student')->user() && Auth::guard('student')->user()->personality_type=="neuroticism" )
              {{-- student rank --}}
              <div class="col-sm-6 mb-3">
                <div class="card h-100">

                  <div class="card-body" style="float:right">

                    <h6 class="d-flex align-items-center mb-3">Student rank</h6>
                    @foreach ($studentregs as $studentreg)
                    @if ($studentreg->student_id==Auth::guard('student')->user()->user_id )
                    <div>
                    <small>{{$studentreg->classroom->title}}</small>
                    @if ($studentreg->mid_term !== null && $studentreg->class_work !== null && $studentreg->final !== null )
                    @if (($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=95)
                    <small>Rank 1</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=90)
                    <small>Rank 2</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=85)
                    <small>Rank 3</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=80)
                    <small>Rank 4</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=75)
                    <small>Rank 5</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=70)
                    <small>Rank 6</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=65)
                    <small>Rank 7</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=60)
                    <small>Rank 8</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=55)
                    <small>Rank 9</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=50)
                    <small>Rank 10</small>  
                    @else
                    <small>Failed</small>  
                    @endif
                    @endif
                  </div>
                    @endif
                    @endforeach
                  </div>

                </div>
              </div>
            @endif

          </div>

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