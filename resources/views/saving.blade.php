<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="css/css3/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/css3/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/css3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/css3/vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/css3/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/css3/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/css3/css/util.css">
        <link rel="stylesheet" type="text/css" href="css/css3/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

	    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
				<div class="container">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				  </button>
				  <div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">	
					</li>
					  <li class="nav-item cta"><a href="/users" class="nav-link icon d-flex align-items-center"><i class="ion-ios-cloud-download mr-2"></i> Home</a></li>
					</ul>
				  </div>
				  </div>
			  </nav>
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Date</th>
								<th class="column2">Total Price</th>
								<th class="column3">Price Paid</th>
								<th class="column3">Savings</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($savings as $saving)
							<tr>
								<td class="column1">{{ $saving->created_at }}</td>
								<td class="column2">{{ $saving->totalPrice }}</td>
								<td class="column3">{{ $saving->outPocketPrice }}</td>
								<td class="column1">{{ $saving->totalSavings }}</td>
								  
							</tr>
						
					
						@endforeach
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

@extends('layout')

@section('title', 'Savings')
    

@section('content')
<h1>savings</h1>

@foreach ($savings as $savings)

<li>{{ $savings->totalPrice }}</li>

@endforeach
@endsection