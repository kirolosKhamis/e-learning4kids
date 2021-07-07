@extends('Frontend.master')


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>E-Learning for Kids</title>

    {{-- <link rel="icon" href="{{asset('images/icon2.jpg')}}" /> --}}
    <link rel='stylesheet'href ="{{asset('css/bootstrap.css')}}"/>
    <link rel='stylesheet'href ="{{asset('css/font-awesome.min.css')}}"/>
    <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/teacher.css')}}"/>
</head>
<body>

<!-- header -->
@section('content')
    <div class="row">
      <div class="col-lg-8 col3">
      <img src="{{asset('images/3.jpeg')}}" class="img img-responsive" alt="">
      </div>

      <div class="col-lg-4 col4">
        
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Dashboard') }}</div>
      
                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
      
                          {{ __('You are logged in!') }}
                      </div>
                  </div>
              </div>
          </div>
        </div>
        
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </div>


        <h1>Teacher</h1>
        <p>Hello ,{{session()->get('email')}}</p>
        <p hidden>{{Auth::guard('teacher')->user()->user_id}}</p>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        {{ __('You are logged inll!') }}
        <p>Learning System for kids is an education via the Internet, network, or standalone computer.
          It is an online platform where students can learn,
           teachers can create contents and Parents can monitor their children</p>

           <a href="{{asset('#classroom')}}"><button type="button" class="btn btn-outline-primary">View Classrooms</button></a>

        <a href="{{route('createClassroom')}}"><button type="button" class="btn btn-outline-primary">Create Classroom</button></a>


      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col7" id='classroom'>
        <h1>Enrolled Classrooms</h1>
      </div>
  </div>


  <section class="price_table text-center">
    <div class="container-fluid">

    

      <div class="row">

@foreach ($classrooms as $classroom)
    
@if ($classroom->teacher_id==Auth::guard('teacher')->user()->user_id)


          <div class="col-md-4 col-sm-6 col-xm-12">
            <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
              <div class="img">
                <img  class="center-block" src="materials/{{$classroom->content}}" alt="img">
              </div>
              <ul class="info list-unstyled">
                {{-- <li >{{$classroom->classroom_id}}</li> --}}
                <li >{{$classroom->title}}</li>
                <li class="right-text"></li>
                <a href="{{route('show.classroom', ['classroom_id' => $classroom->classroom_id])}}">Details</a>
              </ul>
            </div>
          </div>
     
          
          @endif

          @endforeach


      </div>

    </div>

  </section>





@endsection



         <!--End Loading Screen-->

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>

</body>
</html>
