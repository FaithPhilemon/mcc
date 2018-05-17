<?php 
include('header.php');
?>
<title>Currency conversion in PHP Using Google API</title>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/ajax.js"></script>
<?php include('nav.php');?>
<div class="container">	
<div class="page-header">
	  <h1>
	  <span class="glyphicon glyphicon-money" aria-hidden="true"></span>
	   BASIC MULTI-CURRENCY CONVERTER <small>using google finance API</small></h1>
	</div>
	<div class="col-md-6 col-md-offset-3">
	<br />
	<br />
	<form method="post" id="currency-form"> 		
		<div class="form-group">
		<label>From</label>
			<select name="from_currency" class="form-control">
				<option value="INR">Indian Rupee</option>
				<option value="USD" selected="1">US Dollar</option>
				<option value="AUD">Australian Dollar</option>
				<option value="EUR">Euro</option>
				<option value="EGP">Egyptian Pound</option>
				<option value="CNY">Chinese Yuan</option>
			</select>	
			&nbsp;<label>Amount</label>	
			<input type="text" placeholder="Currency" class="form-control" name="amount" id="amount" />			
			&nbsp;<label>To</label>
			<select class="form-control" name="to_currency">
				<option value="INR" selected="1">Indian Rupee</option>
				<option value="USD">US Dollar</option>
				<option value="AUD">Australian Dollar</option>
				<option value="EUR">Euro</option>
				<option value="EGP">Egyptian Pound</option>
				<option value="CNY">Chinese Yuan</option>
			</select>			
			&nbsp;&nbsp;<button type="submit" name="convert" id="convert" class="btn btn-primary">Convert</button>	
				
		</div>			
	</form>	
	
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong><div class="form-group" id="converted_rate"></div>	</strong><div id="converted_amount"></div>
	</div>
	</div>	
</div>
<?php include('footer.php');?>


