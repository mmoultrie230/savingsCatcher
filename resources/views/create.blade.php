<!DOCTYPE html>
<html >
<head>

    <title></title>

	<link rel="stylesheet" type="text/css" href={{ asset("css/util.css")}}>
	<link rel="stylesheet" type="text/css" href={{ asset("css/main.css")}}>
<!--===============================================================================================-->
</head>
<body>

 
</body>
</html>

@section('content')


<form method="post" action="/savings/purchases">

    {{ csrf_field() }}

    <div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Enter Purchase
				</span>

				<label class="label-input100" for="first-name">Total Price</label>
				<div class="wrap-input100 rs1 validate-input">
					<input id="first-name" class="input100" type="text" name="totalPrice" placeholder="Total price" required>
					<span class="focus-input100"></span>
                </div>
                <label class="label-input100" for="first-name">Out of pocket price</label>
				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="outPocketPrice" placeholder="OPP" required>
					<span class="focus-input100"></span>
                </div>
                <label class="label-input100" for="first-name">Total Savings</label>
                <div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="totalSavings" placeholder="Savings" required>
					<span class="focus-input100"></span>
                </div>
                <label class="label-input100" for="first-name">User ID</label>
                <div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="user_id" placeholder="ID Number" required>
					<span class="focus-input100"></span>
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
						Store
						<i class="zmdi zmdi-arrow-right m-l-8"></i>

					</button>
				</div>
			</form>
		</div>
	</div>



