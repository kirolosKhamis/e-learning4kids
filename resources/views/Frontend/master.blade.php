{{-- @extends('Frontend.home') --}}
{{-- @extends('Frontend.student') --}}


<!-- start nav bar  -->


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navtest" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!--  logo  -->
        <a class="navbar-brand" href="#"> E-Learning <span>4 kids</span></a>
      </div>


      <div class="collapse navbar-collapse" id="navtest">
                <ul class="nav navbar-nav navbar-right">
                  <li ><a href="{{asset('b')}}">Home </a></li>

                  <li ><a href="{{asset('student')}}">Student </a></li>

                 <li><a href="{{asset('teacher')}}">Teacher</a></li>
                    <li class="active"><a href="{{asset('login')}}">Login <span class="sr-only">(current)</span></a></a></li>


                </ul>

      </div>
    </div>
  </nav>

  <!-- end navbar -->

  <script>
    window.watsonAssistantChatOptions = {
        integrationID: "9e2261ba-8b55-4efe-81a0-2f2a2f3c5779", // The ID of this integration.
        region: "eu-gb", // The region your integration is hosted in.
        serviceInstanceID: "5ccbba13-fd7f-4342-a5f3-429ee1bfff0c", // The ID of your service instance.
        onLoad: function(instance) { instance.render(); }
      };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
      document.head.appendChild(t);
    });
  </script>

@yield('content')



  <!-- start Footer -->
  <section class="footer">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6">
				<h2>Site Map</h2>
				<ul class="list-unstyled threecol ">
					<li>Home</li>
					<li>Shoping cart</li>
					<li>categories</li>
					<li>Mobiles & Devices</li>
					<li>Tariff Plans</li>
					<li>Internet</li>
					<li>Offers and promotions</li>
					<li>Handsets and Devices</li>
					<li>Entertainment</li>
					<li>Find Us</li>
					<li>Contact Us</li>

				</ul>
			</div>
			<div class="col-lg-6">
				<h2>Follow us </h2>
				<ul class="list-unstyled icons">
					<li> <i class="fa fa-facebook fa-5x " aria-hidden="true"></i></li>
					 <li><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></li>
					<li> <i class="fa fa-pinterest fa-5x" aria-hidden="true"></i></li>
					<li><i class="fa fa-youtube-play fa-5x" aria-hidden="true"></i></li>
				</ul>
			</div>

		</div>

	</div>

	<div class="copyright text-center">
                   Copyright&copy;2021 <span>E-Learning for Kids</span>.Egypt
            </div>
        </section>
        <!-- End Footer -->



