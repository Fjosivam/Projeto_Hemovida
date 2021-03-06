<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo', 'hemovida')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<style type="text/css">
	.font{
		font-family: 'Raleway', sans-serif;
	}
	.obrigatorio{
		color: red;
	}
	.div1{
		width:100%;
		height:100%;
		position:absolute;left:15%;
		overflow:scroll; 
	}
	.div2{
		width:15%; left:0; 
		overflow:hidden; 
		position:absolute;
	}
	/*div{
		scroll-behavior:
		}*/

		.col-form-label {
			font-weight: bold;
			text-align: right;
		}

		.mr-10 {
			margin-right: 10px;
		}
	</style> <!-- #CF6F6E -->
</head>
<body style="background-color: #182E47">
    @yield('cabecalho')
    @yield('corpo')
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>