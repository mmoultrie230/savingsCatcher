<!DOCTYPE html>
<html lang="en">
<head>

    <title></title>
    <link rel="stylesheet" type="text/css" href={{ asset("css/util.css")}}>
	<link rel="stylesheet" type="text/css" href={{ asset("css/main.css")}}>
<!--===============================================================================================-->
</head>
<body>
    

@section('content')



<form method="post" action="/users/page">

    {{ csrf_field() }}
    <div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Enter Your Info
				</span>

				<label class="label-input100" for="first-name">Your Name </label>
				<div class="wrap-input100 rs1 validate-input">
					<input id="first-name" class="input100" type="text" name="firstName" placeholder="First name" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="lastName" placeholder="Last name" required>
					<span class="focus-input100"></span>
				</div>


                <label class="label-input100" for="phone">User name</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="userName" placeholder="User name" required>
					<span class="focus-input100"></span>
                </div>
                

				<label class="label-input100" for="email">Email Address </label>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com" required>
					<span class="focus-input100"></span>
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Store
							<i class="zmdi zmdi-arrow-right m-l-8"></i>


						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>