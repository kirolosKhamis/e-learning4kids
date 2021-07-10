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
        <style type="text/css">
          body{
              margin-top:20px;
              color: #1a202c;
              text-align: left;
              background-color: #e2e8f0;    
          }
          .main-body {
              padding: 15px;
          }
          .card {
              box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
          }
          
          .card {
              position: relative;
              display: flex;
              flex-direction: column;
              min-width: 0;
              word-wrap: break-word;
              background-color: #fff;
              background-clip: border-box;
              border: 0 solid rgba(0,0,0,.125);
              border-radius: .25rem;
          }
          
          .card-body {
              flex: 1 1 auto;
              min-height: 1px;
              padding: 1rem;
          }
          
          .gutters-sm {
              margin-right: -8px;
              margin-left: -8px;
          }
          
          .gutters-sm>.col, .gutters-sm>[class*=col-] {
              padding-right: 8px;
              padding-left: 8px;
          }
          .mb-3, .my-3 {
              margin-bottom: 1rem!important;
          }
          
          .bg-gray-300 {
              background-color: #e2e8f0;
          }
          .h-100 {
              height: 100%!important;
          }
          .shadow-none {
              box-shadow: none!important;
          }
          
          </style>
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
                <img src="materials/{{Auth::user()->photo}}" alt="Admin" class="rounded-circle" width="150">
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
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                <span class="text-secondary">https://bootdey.com</span>
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
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                <span class="text-secondary">bootdey</span>
              </li>
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
          <div class="row gutters-sm">
            @if (Auth::guard('student')->user())
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

          @if (Auth::guard('student')->user())
          <div class="col-sm-6 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="d-flex align-items-center mb-3">Badges</h6>
                {{-- ibrahim --}}
                @foreach ($studentassignment as $studentassignment)
                    @if ($studentassignment->student_id==Auth::user()->user_id)
                  
                    <p hidden> {{$assignment_id=$studentassignment->assignment_id}}</p>
                    <p hidden> {{$assignmentgrade=$studentassignment->grade}}</p>
                    <p hidden> {{$assignmentclassroom_id=$studentassignment->classroom_id}}</p>
                    <p hidden> {{$assignmentlastupdate=$studentassignment->updated_at}}</p>

                    @foreach ($classrooms as $classroom)
                        @if ($classroom->classroom_id==$assignmentclassroom_id)
                            <p> <strong> {{$nameclassroom= $classroom->title }} </strong> </p>

                            @foreach ($teacherassignment as $teacherassignments)
                                @if ($assignment_id==$teacherassignments->id)
                                <p > {{$name= $teacherassignments->title }} </p>
                                <p hidden> {{$points= $teacherassignments->points }} </p>
                                <p hidden> {{$due= $teacherassignments->due }} </p>

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
            <div class="col-sm-6 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                  <small>Web Design</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Website Markup</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>One Page</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Mobile Template</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Backend API</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
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