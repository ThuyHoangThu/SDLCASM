<html>
  <head>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" type="text/css" href="{{ url('css/btec.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
 
  	<title>Music Store</title>
  </head>
  <body>
  	@include('admin/header')
    <br>
  		@yield('content')
    
  	@include('admin/footer')
 
  	
  </body>
</html>