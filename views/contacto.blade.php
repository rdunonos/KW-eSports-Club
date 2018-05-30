
@extends('layout.mainlayout')
@include('layout.partials.contact')
<!DOCTYPE html>
<html>
<head>
	<title>
		Contacto
	</title>
	<!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">
</head>
<body>

  <!--incluimos formulario-->
	 @include('layout.partials.form')
	 @include('layout.partials.footer-scripts-contact')

</body>
</html>