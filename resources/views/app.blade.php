<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Customer Success</title>

	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Customer Success</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>

				</ul>

		
	  <div id="cs-comp">
		<a href="/client/create" class="btn btn-sm btn-primary">+ Create Client</a> 


         <div class="search-area pull-right">

         {!! Form::open(['method' => 'GET', 'url' => '/search']) !!}

              {!! Form::input('search', 'q', null, ['placeholder' => 'Search Company', 'class' => 'form-control']) !!}		
	          <!--<input type="text" name="q" placeholder="Search Company"/>-->
	          <!--<input type="submit" name="search" value="Search">-->
	          <!--<input type="checkbox" name="show_all"/>
	          <label for="show_all">Show All Companies</label>-->
	     {!! Form::close() !!}
        </div>
       </div>

				<ul class="nav navbar-nav navbar-right">
					<!--@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif-->
				</ul>
			</div>
		</div>
	</nav>


  <div class="container-fluid"> 
	
	@if (Session::has('success'))
		<div class="alert alert-success">{{ Session::get('success') }}</div>
	@endif


	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('info') }}</div>
	@endif

	@if (Session::has('error'))
		<div class="alert alert-danger">{{ Session::get('error') }}</div>
	@endif
	

    @yield('content')
  </div>

 <!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="/js/app.js"></script>

@yield('scripts')

</body>
</html>
