<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="js/jquery-1.8.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/dd.css" />
	<script src="js/jquery.dd.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/flags.css" />

</head>
<body>
	<div class="container">
		<div class="row">

			<div class="col-md-12 text-center">
				<div class="row">
					<div>
						<form action="calculate-result.php" method="post">

								<br><br>

								<h2><b>Exchange rate calculate</b></h2>
								<br>
								<div class="well">
									<label>จำนวนเงินไทย</label>
									<br>
									<div class="col-md-4 col-md-offset-4">
										<input class="form-control" type="text" name="thb" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}">

									</div>

									<br><br><br>
									<span class="flag-icon flag-icon- flag-icon-ad"></span>
									<label>

									สกุลเงินที่ต้องการคำนวน 
									</label>
									<br>
									<div class="col-md-4 col-md-offset-4">
											<select class="form-control" name="type" id="countries">

											<option value="USD"  data-image="https://www.bot.or.th/english/_layouts/application/Images/flagUSD.png">
												<span>USD</span>
											</option>

											<option value="JPY" data-image="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagJPY.png">
												<span>JPY</span>
											</option>

											<option value="KRW" data-image="https://www.bot.or.th/english/_layouts/application/Images/flagKRW.png">
												<span>KRW</span>
											</option>

											<option value="GBP" data-image="https://www.bot.or.th/english/_layouts/application/Images/flagGBP.png">
												<span>GBP</span>
											</option>

											<option value="EUR" data-image="https://www.bot.or.th/english/_layouts/application/Images/flagEUR.png">
												<span>EUR</span>
											</option>

										</select>
									</div>

									<br><br><br>

									<button type="submit" class="btn btn-info">Calculate</button>

								</div>

								<p class="text-center">by Nuttakan Samerchuer #13580200</p>

								

							</form>
						</div>
					</div> <!-- row -->
					
				</div>
			</div>
		</div>


		<script>
			$(document).ready(function() {
			$("#countries").msDropdown();
			})
		</script>
</body>
</html>