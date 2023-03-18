
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="folder2/assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
</head>
<body>

<!--main area-->
 @foreach($fetch as $f)
   @endforeach
   <br><br>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	input[type="text"],input[type="password"]{
		margin-top: 30px;
		height: 45px;
		width: 300px;
		font-size: 18px;
		margin-bottom: 20px;
		background-color: #fff;
		padding-left: 40px;
	}

	.form-input::before{
		content: "\f007";
		font-family: "FontAwesome";
		padding-left: 07px;
		padding-top: 40px;
		position: absolute;
		font-size: 35px;
		color: #2980b9; 
	}

	.form-input:nth-child(2)::before{
		content: "\f023";
	}

	#image
	{
		padding: 0px !important;
		height: 700px;
	} 
</style>
<body style="background-color:#d3d3d3;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 image p-0" id="image"><br><br><br>
				<img src="https://coffee-code.tech/wp-content/uploads/2022/06/fabricasoftware.png" height="80%" width="96%" alt="">
			</div>
			<div class="col-md-6 text-center" style="border:2px solid black; height:700px; background-color:#d3d3d3;">
			<form action="{{URL:: to('/code_match_')}}" method="POST" >  
			@csrf
			<br>
				<div><br><br><br><br><br>
				<img src="https://www.mendix.com/wp-content/uploads/low-code-guide-pro-dev.png" alt="" style="height:17rem; width:32rem;">            
				<br><br>
				<label class="mt-3" for="frm-login-uname" style="font-weight:bold; color:black; font-size:2.5rem; margin-right:15px; color:#51E1C3;">Email</label><br>
					<input class="" type="text" id="frm-login-uname" name="emailinput"  value="{{$f->email}}" style="border:2px solid black;font-weight:bold; width:38rem; border-radius:2rem; height:5rem;" readonly>										
				</div>
				<div >

				<label for="frm-login-uname" style="font-weight:bold; color:black; font-size:1.6rem; color:#51E1C3;">Please Enter Verification code sent to email address</label><br>
					<br>
					<div class="row">
						<div class="col-md-1">

						</div>
						<div class="col-md-2">

						</div>

						<div class="col-md-1">
							<input type="" name="code0" maxLength="1" style="border:2px solid black; color:black; font-weight:bold; width:4rem; height:3rem; font-size:1.5rem; text-align:center;" required>
						</div>

						<div class="col-md-1">
							<input type="" name="code1" maxLength="1" style="border:2px solid black; color:black; font-weight:bold; width:4rem; height:3rem; font-size:1.5rem; text-align:center;" required>
						</div>

						<div class="col-md-1">
							<input type="" name="code2" maxLength="1" style="border:2px solid black; color:black; font-weight:bold; width:4rem; height:3rem; font-size:1.5rem; text-align:center;" required>
						</div>

						<div class="col-md-1">
							<input type="" name="code3" maxLength="1" style="border:2px solid black; color:black; font-weight:bold; width:4rem; height:3rem; font-size:1.5rem; text-align:center;" required>
						</div>

						<div class="col-md-1">
							<input type="" name="code4" maxLength="1" style="border:2px solid black; color:black; font-weight:bold; width:4rem; height:3rem; font-size:1.5rem; text-align:center;" required>
						</div>
						<div class="col-md-1">
							<input type="" name="code5" maxLength="1" style="border:2px solid black; color:black; font-weight:bold; width:4rem; height:3rem; font-size:1.5rem; text-align:center;" required>
						</div>
					</div>
				<!-- <input placeholder="Verification code sent to email address" type="text" id="frm-login-uname" name="code" style="border:2px solid black; color:black; font-weight:bold; width:41rem;"> -->
					</div>
				<br>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<button class="btn btn-primary" type="submit" style="width:18rem;  background-color:#51E1C3; font-weight:bold; height:4.5rem; width:15rem; border-radius:2rem; color:white; font-size:2rem;">Verify</button>
						<!-- <input type="submit" value="Verify" style="color:black; font-weight:bold; height:5rem; width:18rem; background-color:white; border-radius:2rem;"/> -->
					</div>
				</div>
				@if(session('succdess'))
				<div class="alert alert-primary" role="alert">
					<strong style="color:white;">{{(session('succdess'))}}</strong>
				</div>
				@endif
			</form>
			<br><br>
			</div>
		</div>
		@if(session()->has('register'))
    <div class="alert alert-success">
        {{ session()->get('register') }}
    </div>
@endif

</div>
</body>
</html>
