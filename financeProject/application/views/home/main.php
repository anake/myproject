<html>
<head><title>home</title></head>
<script language="javascript" src="<?php echo $this->config->base_url();?>javascript/jquery-1.8.2.min.js"></script>
<script language="javascript" src="<?php echo $this->config->base_url();?>javascript/jquery-ui-1.10.3.custom.min.js"></script>
<link rel="stylesheet" href="<?php echo $this->config->base_url();?>css/jquery-ui-1.10.3.custom.min.css" />
<script language="javascript">
$(function() {
    $( "#dialog-form" ).dialog({
      autoOpen: true,
	  height:400,
	  width:500,
	  buttons:{
		"Create account":function(){
			var nama = $('#accountname').val();
			var amount = $('#amount').val();
			var bank = $('#bank').val();
			var post_url = "<?php echo $this->config->base_url();?>index.php/home/create_account";
			$.ajax({
				type:"POST",
				url: post_url,
				data: {namaakun:nama, jumlah:amount, idbank:bank},
				datatype: "json",
				success: function(result)
				{
					alert('sukses');
				}
			});
		}
	  }
    });
 
    $( "#opener" ).click(function() {
      $( "#dialog-form" ).dialog( "open" );
    });
  });
</script>
<style type="text/css">
fieldset
{
	height:140px;
}
label
{
	float:left;
	width:130px;
	margin-top:15px;
}
input
{
	float:left;
	margin-top:15px;
}
select
{
	margin-top:15px;
}
.clear
{
	clear:both;
}
</style>
<body>
	<?php
		echo "welcome, ".$user;
		echo "<br>";
		//echo $tablereksa;
	?>
	<div id="dialog-form" title="Create new account">
	  <p class="validateTips">All form fields are required.</p>
	  <form>
	  <fieldset>
		<label for="accountname">Account Name</label>
		<input type="text" name="accountname" id="accountname" style="background-color:white;" class="text ui-widget-content ui-corner-all" />
		<div class="clear"></div>
		<label for="amount">Amount</label>
		<input type="text" name="amount" id="amount" value="" style="background-color:white;" class="text ui-widget-content ui-corner-all" />
		<div class="clear"></div>
		<label for="bank">Bank</label>
		<select id="bank">
			<option value="1">BCA</option>
			<option value="2">Bank Mandiri</option>
		</select>
	  </fieldset>
	  </form>
	</div>
 
	<button id="opener">Open Dialog</button>
</body>
</html>