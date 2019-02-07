<?php include 'helper.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
	<script type="text/javascript">
		function buyPriceAjax(){
			var xhttp;
			xhttp = new XMLHttpRequest();
			var from = document.getElementById('from').value;
			var to = document.getElementById('to').value;
			var from_amount = document.getElementById('from_amount').value;
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200){
					document.getElementById("to_amount").value = this.responseText;
				}
			};
			xhttp.open("GET", "helper.php?function=0&from="+from+"&to="+to+"&from_amount="+from_amount, true);
			xhttp.send();  
		}
	</script>


	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Exchanger</title>
</head>
<body>
	<h1 align="center"> Coin Pricer</h1>

	<div class="container">
		<div class="row">
			<br>
			<br>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3 offset-md-3">
				Moeda desejada
			</div>
			<div class="col-md-3">
				Moeda para conversão
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3 offset-md-3">
				<input type="text" id="from_amount" value="1">
				<select name="from" id="from">
					<?php showCoins(); ?>
				</select>
			</div>
			<div class="col-md-3">
				<input type="text" id="to_amount" value = "1" readonly="true">
				<select name="to" id="to">
					<?php showCoins(); ?>
				</select>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<br>
			<br>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center">
			<button onclick="buyPriceAjax()">Convert</button>
		</div>
	</div>

	<hr>





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>



	<!-- <?=buyPrice('BRL', 'USD');?> --