<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" class="rel">
	<title>Document</title>


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}">InfoLangue</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link disabled" href="{{url('/test1')}}">Test 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="{{url('/test2')}}">Test 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="{{url('/test3')}}">Test 3</a>
      </li>
    </ul>
    
  </div>
</nav>
	@yield('content')
</body>
<script = src="{{asset('assets/js/bootstrap.min.js')}}">
	
</script>
</html>